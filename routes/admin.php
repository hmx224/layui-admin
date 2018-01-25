<?php
/**
 * Created by PhpStorm.
 * UserController: ifanatic
 * Date: 2018/1/25
 * Time: 12:41
 */


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'IndexController@index')->name('index');

    //用户管理
    Route::get('user/table', 'UserController@table');
    Route::get('user/dashboard', 'UserController@dashboard');
    Route::get('user/index', 'UserController@show');
    Route::post('user/edit', 'UserController@edit');
    Route::post('user/store', 'UserController@store');
    Route::resource('user', 'UserController');
});