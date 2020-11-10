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

Route::view('/', 'home');
Route::view('/menu', 'menu')->name('menu');
Route::view('/calendario', 'calendario')->name('calendario');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');