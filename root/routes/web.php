<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| middleware('auth')->
*/


Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

Route::get('laporan/', 'LaporanController@formlaporan');
Route::get('laporan/print', 'LaporanController@cetak');
Route::get('laporan/excel', 'LaporanController@formexcel');
Route::get('laporan/excel/download', 'LaporanController@excel');

Route::get('grafik/perhari', 'GrafikController@perhari');
Route::get('grafik/perbulan', 'GrafikController@perbulan');
Route::get('grafik/pertahun', 'GrafikController@pertahun');

Route::resource('logbook', 'LogbookController');
Route::resource('perbaikan', 'PerbaikanController');
Route::resource('petugas', 'PetugasController');
Route::resource('user', 'UserController');
