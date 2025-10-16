<?php

use App\Http\Controllers\BeritaController;
use App\Models\Berita;  
use App\Http\Controllers\MahasiswaController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "home",
    ]);
});

Route::get('/profile', function () {
    return view('profile',[
        "title" => "profile",
        "nama" => "markonah",
        "nohp" => "00857326329",
        "foto" => "images/reza.jpg",
    ]);
});

Route::get('/berita', [BeritaController::class,'index']);


Route::get('/berita/{slug}', [BeritaController::class, 'phptampildata']); 

Route::get('/mahasiswa', [MahasiswaController::class,'index']);


Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
        
    ]);
});