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
        Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->timestamp('email_verified_at')->nullable();
        $table->string('password'); // PASTIKAN BARIS INI ADA
        $table->rememberToken();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
// App\Models\User {#5291
    //name: "Admin",
    //email: "admin@gmail.com",
    #password: "$2y$12$Ak3j6cdTq4axoV/XE8IQme/TAHBE7ftRXqnTs6TS2sSEp.pNrQ/Zq",
    //updated_at: "2026-01-21 04:58:47",
    //created_at: "2026-01-21 04:58:47",
    //id: 1,
  
