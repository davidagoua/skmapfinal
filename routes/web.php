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

Route::get('/', 'Front\HomeController@index')->name('home.index');
Route::get('/categorie/{id}', 'Front\HomeController@search')->name('home.search');

//front - debouches

Route::get('/debouches/', 'Front\DeboucheController@index')->name('debouche.index');//liste des debouches
Route::get('/debouches/{debouche}/', 'Front\DeboucheController@show')->name('debouche.show');

//front - filiere
Route::get('/filieres/', 'Front\FiliereController@index')->name('filiere.index');
Route::get('/filieres/{id}', 'Front\FiliereController@show')->name('filiere.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
