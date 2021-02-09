<?php

use App\Models\Solicitante;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

/*Route::get('/login', function (Request $request) {
    return $request;
});*/

//Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');
//Route::post('/', [App\Http\Controllers\UserController::class, 'store'])->name('create.store');

Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');

Route::post('/', 'App\Http\Controllers\ApiController@store');

Route::get('/user', 'App\Http\Controllers\ApiController@index');

