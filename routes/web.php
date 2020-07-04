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

// CRUD 1
Route::get('/pertanyaan', 'PertanyaanController@index')->name('pertanyaan.index'); // menampilkan halaman pertanyaan
Route::get('/pertanyaan/create', 'PertanyaanController@create')->name('pertanyaan.create'); // form create pertanyaan baru
Route::post('/pertanyaan', 'PertanyaanController@store'); // menyimpan pertanyaan baru

Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index')->name('jawaban.index'); // menampilkan halaman jawaban berdasarkan pertanyaan
Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store')->name('jawaban.store'); // menyimpan jawaban berdasarkan pertanyaan

// CRUD 2
Route::get('/pertanyaan/{id}', 'PertanyaanController@show')->name('pertanyaan.show'); // menampilkan halaman detail pertanyaan berdasarkan id
Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit')->name('pertanyaan.edit'); // form update pertanyaan
Route::put('/pertanyaan/{id}', 'PertanyaanController@update')->name('pertanyaan.update'); // update pertanyaan
Route::delete('/pertanyaan/{id}', 'PertanyaanController@destroy'); // hapus pertanyaan
