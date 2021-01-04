<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();


});

Route::get('barang','apicontroller@get_all_barang');
/* Kode diatas dapat diartikan sebagai route menggunakan method get, ke url barang dan
akses controller dengan nama apicontroller dan jalankan method yang bernama
get_all_barang */

Route::post('barang/tambah_barang','apicontroller@insert_data_barang');
Route::put('/barang/update/{kode_barang}','apicontroller@update_data_barang');
Route::delete('barang/delete/{kode_barang}','apicontroller@delete_data_barang');
Route::get('barang/{kode_barang}','apicontroller@get_barang_Byid');