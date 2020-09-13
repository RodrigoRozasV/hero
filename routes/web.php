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

    Route::group(['prefix' => 'heroes'], function(){
        Route::get('/', 'HeroeController@index')->name('heroes');
        Route::get('create', 'HeroeController@create')->name('heroes.create');
        Route::post('store', 'HeroeController@store')->name('heroes.store');
        Route::get('edit/{id}', 'HeroeController@edit')->name('heroes.edit');
        Route::post('update/{id}', 'HeroeController@update')->name('heroes.update');
    });

    Route::get('items', 'ItemController@index')->name('items');
    Route::get('enemies', 'EnemyController@index')->name('enemies');
});



