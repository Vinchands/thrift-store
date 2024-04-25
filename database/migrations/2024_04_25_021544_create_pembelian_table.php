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
        Schema::create('pembelian', function (Blueprint $table) {
            $table->id('pembelian_id');
            $table->unsignedBigInteger('pembelian_user_id')->nullable(false);
            $table->unsignedBigInteger('pembelian_metode_pembayaran_id')->nullable(false);
            $table->date('pembelian_tanggal')->nullable(false);
            $table->integer('pembelian_total_harga')->nullable(false);
            
            // Foreign keys
            $table->foreign('pembelian_user_id')->references('user_id')->on('user')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('pembelian_metode_pembayaran_id')->references('metode_pembayaran_id')->on('metode_pembayaran')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian');
    }
};
