<?php

use App\Models\Berita;  

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

Route::get('/berita', function () {

    
    return view('berita', [
        "title" => "berita",
        "beritas" => Berita ::ambildata(),
    ]);
});

Route::get('/berita/{slug}', function ($slugp) {
    
   
    return view('singleberita', [
        "title" => "berita",
        "new_berita" => Berita ::caridata($slugp),
    ]);
});
Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
        
    ]);
});