<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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

//Route::get('.navbar', function () {
   // return view('navbar');
//});




Route::get('content', function () {
    return view('content');
});

Route::get('header', function () {
    return view('header');
});

Route::get('navbar', function() {
    return view('navbar');
});
Route::get('sidebar', function() {
    return view('sidebar');
});
Route::get('footer', function() {
    return view('footer');
});

Route::get('siswa/tampil', function() {
    return view ('siswa.tampil');
});

Route::get('siswa/tambah' , [SiswaController::class,'create']);
Route::post('siswa/store' , [SiswaController::class,'store'])->name('siswa.store'); 

Route::get('siswa/edit/{id}',[SiswaController::class,'edit']);
Route::put('siswa/edit/{id}/update', [SiswaController::class, 'update'])->name('siswa.edit');
    

Route::get('siswa', [SiswaController::class, 'index']);
Route::delete('siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.delete');
