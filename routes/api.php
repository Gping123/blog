<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

$api = app('Dingo\Api\Routing\Router');


# 需要授权接口
$api->version('v1', [
    'middleware' => 'api.auth',
    'namespace' => 'App\\Http\\Controllers',
], function ($api) {

    $api->get('/user', function () {
        return response()->json();
    });

});
