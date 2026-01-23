<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
{
    return view('berita', [
        "title" => "Berita", // Huruf 'B' besar agar rapi di Navbar
        "beritas" => Berita::ambildata(),
    ]);
}

    public function tampildata($slug) 
    {
        // Mencari data berdasarkan slug melalui model
        $berita = Berita::caridata($slug);

        // Jika data tidak ditemukan (null), tampilkan halaman 404
        if (!$berita) {
            abort(404, 'Berita tidak ditemukan');
        }

        return view('singleberita', [
            "title" => "berita",
            "new_berita" => $berita,
        ]);
    }
}