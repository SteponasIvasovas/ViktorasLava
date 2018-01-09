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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//            url pabaiga                        metodas
Route::get('/product/create', 'ProductController@create')->name('product.create'); //create yra forma

Route::post('/product/store', 'ProductController@store')->name('product.store'); //store yra issaugojimo metodas


Route::post('/product/update', 'ProductController@update')->name('product.update');

Route::post('/product/destroy', 'ProductController@destroy')->name('product.destroy');

Route::get('/product/{id}/edit', 'ProductController@edit')->name('product.edit');

Route::get('/product/{id}', 'ProductController@read')->name('product.read'); //id - kintamojo URL {} ant id nurodo, kad tai kintamasis ir ji reikia nusiusti i request ProductController faile, funkcija read()


Route::resource('category', 'CategoryController');
//Route su id nnukeliam i apacia
