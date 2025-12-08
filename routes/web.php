<?php

use App\Http\Controllers\Index;

use App\Http\Controllers\Mahasiswa;
use App\Http\Controllers\Dosen;
use App\Http\Controllers\Produk;

use Illuminate\Support\Facades\Route;

// didn't get paid for ts bruh 😭💔🥀

Route::get('/', [Index::class, 'index'])->name('index');

Route::get('/mahasiswa', [Mahasiswa::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/create', [Mahasiswa::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa/create', [Mahasiswa::class, 'store'])->name('mahasiswa.store');
Route::get('/mahasiswa/edit/{id}', [Mahasiswa::class, 'edit'])->name('mahasiswa.edit');
Route::post('/mahasiswa/edit/{id}', [Mahasiswa::class, 'update'])->name('mahasiswa.update');
Route::get('/mahasiswa/delete/{id}', [Mahasiswa::class, 'destroy'])->name('mahasiswa.delete');

Route::get('/dosen', [Dosen::class, 'index'])->name('dosen.index');
Route::get('/dosen/create', [Dosen::class, 'create'])->name('dosen.create');
Route::post('/dosen/create', [Dosen::class, 'store'])->name('dosen.store');
Route::get('/dosen/edit/{id}', [Dosen::class, 'edit'])->name('dosen.edit');
Route::post('/dosen/edit/{id}', [Dosen::class, 'update'])->name('dosen.update');
Route::get('/dosen/delete/{id}', [Dosen::class, 'destroy'])->name('dosen.delete');

Route::get('/produk', [Produk::class, 'index'])->name('produk.index');
Route::get('/produk/create', [Produk::class, 'create'])->name('produk.create');
Route::post('/produk/create', [Produk::class, 'store'])->name('produk.store');
Route::get('/produk/edit/{id}', [Produk::class, 'edit'])->name('produk.edit');
Route::post('/produk/edit/{id}', [Produk::class, 'update'])->name('produk.update');
Route::get('/produk/delete/{id}', [Produk::class, 'destroy'])->name('produk.delete');
