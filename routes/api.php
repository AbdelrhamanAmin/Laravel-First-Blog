<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/posts', 'PostController@index'); // we can  handel api req in same web request function bu better to make more controllers

Route::get('/posts', 'Api\PostController@index');
Route::get('/posts/{post}', 'Api\PostController@show');
Route::post('/posts', 'Api\PostController@store');


