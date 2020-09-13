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

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('heroes', 'HeroeController@index')->name('heroes');
    Route::get('items', 'ItemController@index')->name('items');
    Route::get('enemies', 'EnemyController@index')->name('enemies');
});



