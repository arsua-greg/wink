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

Route::get('/blog', 'WinkController@index')->name('blog.index');
Route::get('/blog/{slug}', 'WinkController@show')->name('blog.show');
Route::get('/{slug}', 'WinkController@page')->name('page.show');