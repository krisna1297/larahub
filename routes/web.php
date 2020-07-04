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

Route::get('/pertanyaan', 'PertanyaanController@index')->name('pertanyaan.index');
Route::get('/pertanyaan/create', 'PertanyaanController@create')->name('pertanyaan.create');
Route::post('/pertanyaan', 'PertanyaanController@store');

Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index')->name('jawaban.index');
Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store')->name('jawaban.store');
