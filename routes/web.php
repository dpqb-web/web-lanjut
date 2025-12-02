<?php

use App\Http\Controllers\ExamplesController;

use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProdukController;

use Illuminate\Support\Facades\Route;

// didn't get paid for ts bruh 🥀

Route::get('/', [ExamplesController::class, 'getData'])->name('example.index');
Route::get('/example/create', [ExamplesController::class, 'create'])->name('example.create');
Route::post('/example', [ExamplesController::class, 'store'])->name('example.store');
Route::get('/example/edit/{id}', [ExamplesController::class, 'edit'])->name('example.edit');
Route::post('/example/update/{id}', [ExamplesController::class, 'update'])->name('example.update');
Route::get('/example/delete/{id}', [ExamplesController::class, 'destroy'])->name('example.delete');

Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
Route::get('/dosen/create', [DosenController::class, 'create'])->name('dosen.create');
Route::post('/dosen/store', [DosenController::class, 'store'])->name('dosen.store');
Route::get('/dosen/edit/{id}', [DosenController::class, 'edit'])->name('dosen.edit');
Route::post('/dosen/update/{id}', [DosenController::class, 'update'])->name('dosen.update');
Route::get('/dosen/delete/{id}', [DosenController::class, 'destroy'])->name('dosen.delete');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
Route::post('/produk/store', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
Route::post('/produk/update/{id}', [ProdukController::class, 'update'])->name('produk.update');
Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy'])->name('produk.delete');
