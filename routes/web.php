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

Route::group(['namespace' => 'Business',
    'prefix' => 'business',
    'middleware' => ['auth', 'can:admin'],
    'as' => 'admin::'], function() {

    /*
    //Dashboard
    Route::get('dashboard.html', ['uses' => 'ShowDashboard', 'as' => 'dashboard']);

    //Users
    Route::group(['prefix' => 'games',
        'as' => 'users::'], function(){

        Route::get('create', ['uses' => 'UsersController@create', 'as' => 'create']);
        Route::post('', ['uses' => 'UsersController@store', 'as' => 'store']);

        Route::get('{users}/edit', ['uses' => 'UsersController@edit', 'as' => 'edit']);
        Route::match(['put', 'patch'], '{users}', ['uses' => 'UsersController@update', 'as' => 'update']);

        Route::get('{users}/destroy', ['uses' => 'UsersController@destroy', 'as' => 'destroy']);

        Route::get('{users}/toogle', ['uses' => 'UsersController@toogle', 'as' => 'toogle']);
        Route::match(['get', 'put', 'patch'], '{users}/activate', ['uses' => 'UsersController@activate', 'as' => 'activate']);
        Route::match(['put', 'patch'], '{users}/deactivate', ['uses' => 'UsersController@deactivate', 'as' => 'deactivate']);

    });
    */
});
