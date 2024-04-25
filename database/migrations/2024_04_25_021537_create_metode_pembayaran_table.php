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
        Schema::create('metode_pembayaran', function (Blueprint $table) {
            $table->id('metode_pembayaran_id');
            $table->unsignedBigInteger('metode_pembayaran_user_id')->nullable(false);
            $table->enum('metode_pembayaran_jenis', ['DANA', 'OVO', 'BCA', 'COD'])->nullable(false);
            $table->string('metode_pembayaran_nomor', 50);
            
            // Foreign key
            $table->foreign('metode_pembayaran_user_id')->references('user_id')->on('user')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metode_pembayaran');
    }
};
