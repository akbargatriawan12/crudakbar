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
Route::get('admin', 'AdminController@tampilkanData');
Route::get('admin/buat', 'AdminController@buat');
Route::get('admin/{id}/edit', 'AdminController@editData');
Route::post('admin', 'AdminController@simpan');
Route::put('admin/{id}', 'AdminController@perbarui');
Route::delete('admin/{id}', 'AdminController@hapusData');
Route::resource('mata_kuliah', 'MataKuliahController');