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

// Route::get('/', function () {
//     return view('index');
// });;
Route::get('/','IndexController@index')->name('index');
Route::get('/data-buku','BukuController@index')->name('data-buku');
Route::get('/create-buku','BukuController@create')->name('create-buku');
Route::post('/simpan-buku','BukuController@store')->name('simpan-buku');
Route::get('/edit-buku/{id}','BukuController@edit')->name('edit-buku');
Route::post('/update-buku/{id}','BukuController@update')->name('update-buku');
Route::get('/delete-buku/{id}','BukuController@destroy')->name('delete-buku');

// Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
// Route::get('/Data-buku', [App\Http\Controllers\BukuController::class, 'index'])->name('Data-buku');
