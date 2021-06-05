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

// Route::get('/url','kelascontroller@namafungsi')->name('inisialisasirute');

Route::get('/','BarangController@index')->name('transaksi');
Route::get('/tambah', 'BarangController@tambah')->name('transaksi.tambah');
Route::get('/edit/{id}', 'BarangController@edit')->name('transaksi.edit');
Route::get('/search', 'BarangController@search')->name('transaksi.search');
Route::post('/proses', 'BarangController@store')->name('transaksi.store');
Route::post('/hapus/{id}', 'BarangController@destroy')->name('transaksi.hapus');
Route::post('/update/{id}', 'BarangController@update')->name('transaksi.update');
