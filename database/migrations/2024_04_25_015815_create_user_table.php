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
        Schema::create('user', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('user_username', 50)->nullable(false);
            $table->string('user_password', 50)->nullable(false);
            $table->string('user_fullname', 100)->nullable(false);
            $table->string('user_email', 50)->nullable(false);
            $table->char('user_nohp', 13)->nullable(false);
            $table->string('user_alamat', 200)->nullable(false);
            $table->text('user_profil_url')->nullable(false)->default('https://cdn.vectorstock.com/i/500p/08/19/gray-photo-placeholder-icon-design-ui-vector-35850819.jpg');
            $table->enum('user_level', ['admin', 'pengguna'])->nullable(false);
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};