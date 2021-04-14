<?php

Route::view('/', 'inicio')->name('inicio');
Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/blog', 'blog')->name('blog');
Route::view('/1', '1')->name('1');
Route::view('/2', '2')->name('2');
Route::view('/3', '3')->name('3');
Route::view('/4', '4')->name('4');
Route::view('/5', '5')->name('5');
Route::view('/6', '6')->name('6');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
