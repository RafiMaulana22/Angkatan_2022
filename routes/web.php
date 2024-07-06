<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriBeritaController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    // Bagian Login
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'action_login'])->name('login');
});

Route::middleware(['auth'])->group(function () {
    // Bagian Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // Group Berita
    // Bagian Berita
    Route::get('/berita', [BeritaController::class, 'index']);

    Route::get('/berita/tambah', [BeritaController::class, 'tambah']);

    // Bagian Kategori Berita
    Route::get('/kategori_berita', [KategoriBeritaController::class, 'index']);

    Route::get('/kategori_berita/tambah', [KategoriBeritaController::class, 'tambah']);
    Route::post('/kategori_berita/tambah', [KategoriBeritaController::class, 'action_tambah']);

    Route::get('/kategori_berita/{id}/edit', [KategoriBeritaController::class, 'edit']);
    Route::post('/kategori_berita/{id}/edit', [KategoriBeritaController::class, 'action_edit']);

    Route::get('/kategori_berita/{id}/hapus', [KategoriBeritaController::class, 'hapus']);

    // Bagian Logout
    Route::get('/logout', [AuthController::class, 'logout']);
});
