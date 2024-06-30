<?php

use App\Http\Controllers\pesananController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::controller(AuthController::class)->group(function () {
	Route::get('register', 'register')->name('register');
	Route::post('register', 'registerSimpan')->name('register.simpan');

	Route::get('login', 'login')->name('login');
	Route::post('login', 'loginAksi')->name('login.aksi');

	Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard',function () {  
    return view('dashboard');  

})->name('dashboard'); 
Route::controller(pesananController::class)->prefix('pesanan')->group(function  (){
Route::get('','index')->name('pesanan');
Route::get('tambah', 'tambah')->name('pesanan.tambah'); 
Route::post('tambah', 'simpan')->name('pesanan.tambah.simpan');   
Route::get('edit/{id}', 'edit')->name('pesanan.edit');
Route::post('edit/{id}', 'update')->name('pesanan.tambah.update');   
Route::get('hapus/{id}', 'hapus')->name('pesanan.hapus');  

});

 