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

Route::group(['prefix' => 'v1'], function (){
    Route::post('login', 'Auth\LoginController@loginViaJwt');

    Route::group(['middleware' => 'jwt.auth'], function (){
        Route::get('current-user', function(){
            return Tymon\JWTAuth\Facades\JWTAuth::user();
        });

        
        Route::resource('posts', 'PostsController');

        Route::post('posts-store', 'PostsController@store');
    });

});
