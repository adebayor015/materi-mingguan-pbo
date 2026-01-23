<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static $data_berita = [
        [
            "judul" => "Inovasi IoT Mahasiswa TI UNIMUS untuk Smart Farming",
            "slug" => "inovasi-iot-mahasiswa-ti-unimus",
            "penulis" => "Humas TI",
            "konten" => "Mahasiswa Teknologi Informasi UNIMUS berhasil mengembangkan sistem monitoring pertanian berbasis IoT. Alat ini mampu mendeteksi kelembapan tanah secara otomatis dan mengirimkan data langsung ke smartphone petani melalui koneksi cloud.",
        ],
        [
            "judul" => "Workshop Cyber Security UNIMUS: Lindungi Data Pribadi",
            "slug" => "workshop-cyber-security-unimus",
            "penulis" => "Admin Prodi",
            "konten" => "Program Studi Teknologi Informasi UNIMUS mengadakan workshop keamanan siber bagi seluruh mahasiswa. Kegiatan ini berfokus pada teknik enkripsi data dan pencegahan serangan phising yang marak terjadi belakangan ini.",
        ],
        [
            "judul" => "Penerapan AI dalam Kurikulum Teknologi Informasi",
            "slug" => "penerapan-ai-kurikulum-ti-unimus",
            "penulis" => "Kaprodi TI",
            "konten" => "Guna menghadapi revolusi industri 4.0, Prodi TI UNIMUS mulai mengintegrasikan kecerdasan buatan (AI) ke dalam mata kuliah inti. Mahasiswa diajarkan cara membangun model machine learning sederhana untuk solusi masalah sehari-hari.",
        ],
    ];

    public static function ambildata()
    {
        return collect(self::$data_berita);
    }

    public static function caridata($slug)
    {
        $data_beritas = collect(self::$data_berita);
        
        // Mencari data yang slug-nya sama persis menggunakan helper Collection Laravel
        $new_berita = $data_beritas->firstWhere('slug', $slug);

        return $new_berita;
    }
}