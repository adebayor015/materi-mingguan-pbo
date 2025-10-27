<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'name' => "Jhon wike",
            'nim' => 12345678,
            'prodi' => "Teknologi Informasi",
            'email' => "Reza@gmail.com",
            'nohp' => 62857326329,
        ]);
    }
}
