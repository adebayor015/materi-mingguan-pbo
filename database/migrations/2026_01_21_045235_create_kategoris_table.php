<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    
     
{
    Schema::create('kategoris', function (Blueprint $table) {
        $table->id(); // Primary Key
        $table->string('nama_kategori'); // Kolom teks
        $table->text('deskripsi')->nullable(); // Kolom teks panjang, boleh kosong
        $table->timestamps(); // Kolom created_at & updated_at
    });
}
      

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategoris');
    }
};
