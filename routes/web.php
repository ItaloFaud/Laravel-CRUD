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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
}); 



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/exemplo', 'ExemploController@index')->name('exemplo');
Route::resource('/carro','CarrosController', ['except' => ['destroy']]);
Route::get('/modelo/{modelo}/delete', 'CarrosController@destroy')->name('carro.destroy');