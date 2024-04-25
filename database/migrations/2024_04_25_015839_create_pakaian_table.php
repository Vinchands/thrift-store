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
        Schema::create('pakaian', function (Blueprint $table) {
            $table->id('pakaian_id');
            $table->unsignedBigInteger('pakaian_kategori_pakaian_id')->nullable(false);
            $table->string('pakaian_nama', 50)->nullable(false);
            $table->integer('pakaian_harga')->nullable(false);
            $table->integer('pakaian_stok')->nullable(false);
            $table->text('pakaian_gambar_url')->nullable(false);
            
            // Foreign key
            $table->foreign('pakaian_kategori_pakaian_id')->references('kategori_pakaian_id')->on('kategori_pakaian')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakaian');
    }
};
