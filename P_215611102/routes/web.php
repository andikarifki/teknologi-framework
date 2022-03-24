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
//     return view('welcome');
// });

// Route::get('/buku/{judul}', function($judul)
// {
// return "Buku <b>{$judul}</b> adalah termasuk buku komputer.";
// });

Route::get('kata-bijak/kata','KataBijakController@kata');

Route::get('propinsi',[App\Http\Controllers\PropinsiController::class, 'index'])->name('propinsi.index');
Route::get('propinsi/create',[App\Http\Controllers\PropinsiController::class, 'create'])->name('propinsi.create');
Route::post('propinsi/store',[App\Http\Controllers\PropinsiController::class, 'store'])->name('propinsi.store');
Route::get('propinsi/edit/{id}',[App\Http\Controllers\PropinsiController::class, 'edit'])->name('propinsi.edit');
Route::post('propinsi/update/{id}',[App\Http\Controllers\PropinsiController::class, 'update'])->name('propinsi.update');
Route::get('propinsi/destroy/{id}',[App\Http\Controllers\PropinsiController::class, 'destroy'])->name('propinsi.destroy');

Route::get('bacaall', [App\Http\Controllers\EloController::class, 'bacaAll'])->name('bacaall');
Route::get('bacaallrelasi', [App\Http\Controllers\EloController::class, 'bacaAllRelasi'])->name('bacaallrelasi');

//buku route
Route::get('/buku', [App\Http\Controllers\BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/create', [App\Http\Controllers\BukuController::class, 'create'])->name('buku.create');
Route::post('/buku/store', [App\Http\Controllers\BukuController::class, 'store'])->name('buku.store');
Route::get('/buku/cari', [App\Http\Controllers\BukuController::class, 'cari'])->name('buku.cari');
//end route

//penerbit route
Route::get('/penerbit', [App\Http\Controllers\PenerbitController::class, 'index'])->name('penerbit.index');
Route::get('/penerbit/create', [App\Http\Controllers\PenerbitController::class, 'create'])->name('penerbit.create');
Route::post('/penerbit/store', [App\Http\Controllers\PenerbitController::class, 'store'])->name('penerbit.store');
//enroute