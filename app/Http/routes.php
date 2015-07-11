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

Route::get('/', [
    'as' => 'resume::index',
    'uses' => 'ResumeController@index'
]);

Route::group(['as' => 'admin::resume::'], function () {
    Route::get('create', [
        'as' => 'create',
        'uses' => 'ResumeController@create'
    ]);

    Route::get('edit/{id}', [
        'as' => 'edit',
        'uses' => 'ResumeController@edit'
    ]);

    Route::get('show/{id}', [
        'as' => 'show',
        'uses' => 'ResumeController@show'
    ]);

    Route::put('update/{id}', [
        'as' => 'show',
        'uses' => 'ResumeController@update'
    ]);
});
