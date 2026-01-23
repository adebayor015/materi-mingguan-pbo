<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// --- AKSES PUBLIK (Bisa dibuka semua orang) ---
Route::get('/', function () {
    return view('home', ["title" => "home"]);
})->name('home');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita');

Route::get('/profile', function () {
    return view('profile', [
        "title" => "profile",
        "nama" => "markonah",
        "nohp" => "00857326329",
        "foto" => "images/reza.jpg",
    ]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "contact"]);
});

Route::get('/mahasiswa', [MahasiswaController::class,'index'])->name('mahasiswa');

// Route Auth
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/register', [LoginController::class, 'register'])->name('register')->middleware('guest');
Route::post('/registerproses', [LoginController::class, 'registerproses'])->name('registerproses');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// --- AKSES WAJIB LOGIN (User Biasa & Admin) ---
Route::middleware(['auth'])->group(function () {
    
    // Klik "Unimus Ganteng" akan lari ke sini dan butuh Login
    Route::get('/berita/{slug}', [BeritaController::class, 'tampildata'])->name('berita.detail');

    // Fitur Management Mahasiswa (Hanya Admin yang tahu URL-nya)
    Route::get('/tambahmahasiswa', [MahasiswaController::class,'tambahmahasiswa'])->name('tambahmahasiswa');
    Route::post('/insertdata', [MahasiswaController::class,'insertdata'])->name('insertdata');
    Route::get('/tampildata/{id}', [MahasiswaController::class,'tampildata'])->name('tampildata');
    Route::post('/editdata/{id}', [MahasiswaController::class,'editdata'])->name('editdata');
    Route::get('/deletedata/{id}', [MahasiswaController::class,'deletedata'])->name('deletedata');
    Route::middleware(['auth'])->group(function () {
    // Guest yang klik link ini akan dipaksa login/register dulu
    Route::get('/berita/{slug}', [BeritaController::class, 'tampildata'])->name('berita.detail');
    
    // ... route lainnya
});
});