<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TestController;

/** @var Illuminate\Support\Facades\Route $router */;


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

$router->get('/test', [TestController::class, 'index']);

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
    $start=time() - 1683716000;
    // get_data();

    $end = time() - 1683716000;

    return [
        'start' => $start,
        'end' => $end,
        'duration' => $end - $start
    ];
});

// function get_data()
// {

//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('user')->orderBy('name')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
//     $data = DB::table('account')->orderBy('number')->get();
// }
