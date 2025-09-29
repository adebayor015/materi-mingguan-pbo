<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/contact', function () {
    return view('contact');
});

// halaman detail berita
Route::get('/berita/{id}', function ($id) {
    $semuaBerita = [
        1 => [
            "judul" => "Persija Jakarta Kalahkan PSM Makassar 2-1 di Kandang",
            "tanggal" => "29 September 2025",
            "gambar" => "https://tse3.mm.bing.net/th/id/OIF.MPuhRQdjJePOJFthm7qCpA?pid=Api&P=0&h=220",
            "isi" => "Dalam pertandingan yang berlangsung sengit di Stadion Gelora Bung Karno, Persija Jakarta berhasil mengalahkan PSM Makassar dengan skor 2-1. 
                      Gol pertama dicetak oleh PSM pada menit ke-32 melalui sundulan Yakob Sayuri. Namun, Persija berhasil menyamakan kedudukan lewat tendangan jarak jauh Riko Simanjuntak pada menit ke-60. 
                      Menjelang akhir laga, Marko Simic mencetak gol penentu kemenangan melalui titik penalti pada menit ke-85. 
                      Dengan hasil ini, Persija naik ke peringkat ke-4 klasemen sementara Liga 1 Indonesia musim 2025/2026."
        ],
        2 => [
            "judul" => "Arema FC Tahan Imbang Bali United di Stadion Dipta",
            "tanggal" => "28 September 2025",
            "gambar" => "https://cdn.antaranews.com/cache/800x533/20240522-arema.jpg",
            "isi" => "Arema FC menunjukkan pertahanan yang solid saat menahan imbang Bali United 1-1 di Stadion Kapten I Wayan Dipta. 
                      Bali United unggul lebih dahulu melalui gol Privat Mbarga di menit ke-42, namun Arema FC membalas lewat Dedik Setiawan pada menit ke-78. 
                      Hasil ini membuat Arema tetap berada di papan tengah klasemen sementara, sedangkan Bali United kehilangan kesempatan memperkecil jarak dengan pemuncak klasemen."
        ],
        3 => [
            "judul" => "Persebaya Surabaya Naik ke Peringkat 3 Setelah Menang Telak",
            "tanggal" => "27 September 2025",
            "gambar" => "https://cdn.antaranews.com/cache/800x533/20240523-persebaya.jpg",
            "isi" => "Persebaya Surabaya tampil luar biasa dalam laga melawan Bhayangkara FC dengan kemenangan telak 3-0. 
                      Gol-gol Persebaya dicetak oleh Paulo Victor, Arsenio Valpoort, dan Supriadi. 
                      Kemenangan ini membawa Persebaya naik ke peringkat 3 klasemen sementara dan membuka peluang besar untuk bersaing memperebutkan gelar juara Liga 1 musim ini."
        ]
    ];

    if (!array_key_exists($id, $semuaBerita)) {
        abort(404, 'Berita tidak ditemukan');
    }

    return view('detailberita', $semuaBerita[$id]);
});
