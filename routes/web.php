<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'user',
    'middleware' => ['web'],
    'as' => 'user::'], function() {

    // Login Routes...
    Route::get('login.html', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('login.html', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
    Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
});

Route::group(['namespace' => 'Business',
    'prefix' => 'business',
    'middleware' => ['auth', 'can:admin'],
    'as' => 'admin::'], function() {

    //Dashboard
    Route::get('dashboard.html', ['uses' => 'ShowDashboard@show', 'as' => 'dashboard']);

    //Games
    Route::group(['prefix' => 'games',
        'as' => 'games::'], function(){

        Route::get('{game}/edit', ['uses' => 'PointsController@edit', 'as' => 'edit']);
        Route::match(['put', 'patch'], '{game}', ['uses' => 'PointsController@update', 'as' => 'update']);

    });
});
