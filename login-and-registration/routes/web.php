<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/version', function () {
    $lv = app()->version();
    $php = PHP_VERSION;
    $p= 3; // price
    $date= Date::now()->format('Y-m-d');
    return "<h1 style='text-align:center'>Laravel $lv, PHP $php, Date $date</h1>";
});

Route::get('/test-connection', function () {
    $query= DB::table('jobs')->get();
    return $query;
});

Route::get('/password', function () {
    $password= env('DB_PASSWORD');
    return $password;
});
