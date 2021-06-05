<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PagesController;

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

// login
Route::get('login', 'PagesController@login');
Route::post('home', 'PagesController@home');

// tambah barang
Route::get('barang', 'PagesController@barang');
Route::post('barang', 'PagesController@tambahdatabarang');
Route::get('barang/{id}','PagesController@hapus');
Route::get('barang/ubahbarang/{id}','PagesController@ubahbarang');
Route::post('barang/updatebarang','PagesController@updatebarang');
Route::get('tambahbarang', 'PagesController@tambahbarang');

// pelanggan
Route::get('pelanggan', 'PagesPelanggan@index');
Route::get('tambahpelanggan', 'PagesPelanggan@create');
Route::post('pelanggan', 'PagesPelanggan@store');
Route::get('pelanggan/{id}', 'PagesPelanggan@destroy');

// mencari pelanggan
Route::get('pelanggan/detail', 'PagesPelanggan@cari');
