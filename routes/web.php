<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LihatNilaiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagenotController;
use App\Http\Controllers\kartucontroller;
use App\Http\Controllers\jenisprodukcontroller;
use App\Http\Controllers\produkcontroller;
use App\Http\Controllers\pelanggancontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function(){
    return 'assalamualikum selamat belajar laravel';
});
//tambah routing dengan parameter
Route::get('/staff/{nama}/{devisi}', function($nama,$devisi){
    return 'nama pegawai :'.$nama. '<br> departement :' .$devisi;
});
//routing menggunakan nama file di view
Route::get('/kondisi', function(){
    return view('kondisi');
});

Route::get('/nilai',function(){
    return view('coba.nilai');
});
//routing dengan view dan array data
Route::get('/daftarnilai', function(){
    return view('coba.daftar');

});

Route::get('/datamhs',[LihatNilaiController::class,'dataMahasiswa']);



Route::prefix('admin')->group(function(){
Route::get('/dashboard',[DashboardController::class,'index']);

//contoh pemanggilan secara satu persatu menggunakan get,put,update,delete
Route::get('/pagenot',[PagenotController::class, 'index']);

//memanggil seluruh funcion menggunakan resource
Route::resource('kartu', kartucontroller::class);

//memanggil fungsi satu persatu
Route::get('/jenis_produk',[jenisprodukcontroller::class, 'index']);
Route::get('/jenis_produk/create', [jenisprodukcontroller::class, 'create']);
Route::post('/jenis_produk/store', [jenisprodukcontroller::class, 'store']);
Route::get('/produk',[produkcontroller::class, 'index']);
Route::get('/produk/create',[produkcontroller::class, 'create']);
Route::post('/produk/store',[produkcontroller::class, 'store']);
Route::get('/pelanggan',[pelanggancontroller::class, 'index']);
Route::get('/pelanggan/create',[pelanggancontroller::class, 'create']);
Route::post('/pelanggan/store',[pelanggancontroller::class, 'store']);
});