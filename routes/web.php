<?php

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

    $data_berita = [
        [
            "judul" => "newss 1",
            "penulis" => "anjo",
            "konten" => "pembunuhan tanpa busana daerah ciliwangi",
        ],
        [
            "judul" => "newss 2",
            "penulis" => "jamno",
            "konten" => "menangis meratapi nasib, seorang pemuda ditemukan sedang melahirkan disekitar lampu merah ciliwung",
        ],
        [
            "judul" => "newss 3",
            "penulis" => "pukime",
            "konten" => "munaroh menikami",
        ],
    ];
    return view('berita', [
        "title" => "berita",
        "berita" => $data_berita,
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
    ]);
});