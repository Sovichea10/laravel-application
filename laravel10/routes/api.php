<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/host', function() {
    $host= env('DB_HOST');
    return $host;
});

Route::get('/driver', function () {
    $data = DB::connection('oracle')->table('T_AUCTION_PG')->take(1)->get();
    var_dump($data);
    return $data;
});

Route::get('/get-data', function () {
    $data = DB::select('select * FROM USERS');
    return $data;
});
