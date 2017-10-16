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

Route::resource('kategori','kategoriController');
Route::get('/kategori/delete/{id}','kategoriController@destroy');

Route::resource('angsuran','angsuranController');
Route::get('/angsuran/delete/{id}','angsuranController@destroy');

Route::resource('detail_angsuran','detailAngsuranController');
Route::get('/detail_angsuran/delete/{id}','detailAngsuranController@destroy');

Route::resource('petugas', 'petugasController');
Route::get('/petugas/delete/{id}','petugasController@destroy');
