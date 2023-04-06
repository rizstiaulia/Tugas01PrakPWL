<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/daftar_mahasiswa','App\Http\Controllers\MahasiswaController@index');

Route::get('/daftar_mahasiswa', [MahasiswaController::class,'index']);

// Route::post('detail_mahasiswa',[MahasiswaController::class, 'detail_mhs']);

Route::match(['get', 'post'], '/detail_mahasiswa', [MahasiswaController::class, 'detail_mhs']);
 
Route::get('/admin/dashboard',[AdminController::class,'index']);
Route::get('/admin/postingan',[AdminController::class,'show_postingan']);
Route::get('/admin/arsip',[AdminController::class,'show_arsip']);
Route::get('/admin/kelolaakun',[AdminController::class,'show_kelolaakun']);
Route::get('/admin/penjualan',[AdminController::class,'show_penjualan']);
Route::get('/admin/kalender',[AdminController::class,'show_kalender']);
Route::get('/admin/produk',[AdminController::class,'show_produk']);
Route::get('/admin/inbox',[AdminController::class,'show_inbox']);
