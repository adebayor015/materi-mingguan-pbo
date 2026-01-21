<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// 1. Route Utama langsung diarahkan ke Login
// Middleware 'guest' mencegah user yang sudah login melihat halaman login lagi
Route::get('/', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::get('/login', [LoginController::class, 'login'])->middleware('guest');

// Route proses Auth
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// 2. Semua Route yang harus login dulu
Route::middleware(['auth'])->group(function () {
    
    Route::get('/home', function () {
        return view('home', ["title" => "home"]);
    })->name('home');

    Route::get('/profile', function () {
        return view('profile',[
            "title" => "profile",
            "nama" => "markonah",
            "nohp" => "00857326329",
            "foto" => "images/reza.jpg",
        ]);
    });

    Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
    Route::get('/berita/{slug}', [BeritaController::class, 'tampildata'])->name('berita.detail');
    Route::get('/contact', function () {
        return view('contact', ["title" => "contact"]);
    });

    // Route Mahasiswa
    Route::get('/mahasiswa', [MahasiswaController::class,'index'])->name('mahasiswa');
    Route::get('/tambahmahasiswa', [MahasiswaController::class,'tambahmahasiswa'])->name('tambahmahasiswa');
    Route::post('/insertdata', [MahasiswaController::class,'insertdata'])->name('insertdata');
    Route::get('/tampildata/{id}', [MahasiswaController::class,'tampildata'])->name('tampildata');
    Route::post('/editdata/{id}', [MahasiswaController::class,'editdata'])->name('editdata');
    Route::get('/deletedata/{id}', [MahasiswaController::class,'deletedata'])->name('deletedata');
});