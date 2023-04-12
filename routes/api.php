<?php

use Illuminate\Http\Request;
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

Route::get('/users', 'App\Http\Controllers\UserController@index');
Route::POST('/addUser', 'App\Http\Controllers\UserController@store');
Route::POST('/updateUser/{id}', 'App\Http\Controllers\UserController@updateUser');
Route::delete('/deleteUser/{id}', 'App\Http\Controllers\UserController@deleteUser');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});