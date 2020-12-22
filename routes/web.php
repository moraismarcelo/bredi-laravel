<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/produtos', 'ProductController@index')->name('produtos.index');
Route::get('/produtos/create', 'ProductController@create')->name('produtos.create');
Route::post('/produtos', 'ProductController@store')->name('produtos.store');
Route::get('/produtos/{id}', 'ProductController@show')->name('produtos.show');
Route::get('/produtos/{id}/edit', 'ProductController@edit')->name('produtos.edit');

Route::get('/', function () {
    return view('welcome');
});
