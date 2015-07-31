<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['as' => 'resume::'], function(){
    Route::get('/', [
        'as' => 'index',
        'uses' => 'ResumeController@index'
    ]);
});

Route::group(['prefix'=>'auth'], function(){
    // Authentication routes...
    Route::get('login', [
        'uses'=>'Auth\AuthController@getLogin'
    ]);
    Route::post('login', [
        'uses'=>'Auth\AuthController@postLogin'
    ]);

    Route::get('logout', [
        'uses'=>'Auth\AuthController@getLogout',
    ]);

//    Route::get('auth/register', 'Auth\AuthController@getRegister');
//    Route::post('auth/register', 'Auth\AuthController@postRegister');
});

Route::group(['prefix' => 'admin','as' => 'admin::resume::'], function () {

    Route::get('/', [
        'as' => 'index',
        'uses' => 'Admin\AdminResumeController@index'
    ]);

    Route::get('create', [
        'as' => 'create',
        'uses' => 'Admin\AdminResumeController@create'
    ]);

    Route::put('store', [
        'as' => 'store',
        'uses' => 'Admin\AdminResumeController@store'
    ]);

    Route::get('edit/{id}', [
        'as' => 'edit',
        'uses' => 'Admin\AdminResumeController@edit'
    ]);

    Route::get('show/{id}', [
        'as' => 'show',
        'uses' => 'Admin\AdminResumeController@show'
    ]);

    Route::put('update', [
        'as' => 'update',
        'uses' => 'Admin\AdminResumeController@update'
    ]);

    Route::delete('delete/{id}', [
        'as' => 'delete',
        'uses' => 'Admin\AdminResumeController@destroy'
    ]);
});
