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
        Schema::create('datapelanggan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pesanan')->nullable();
            $table->string('jenis_cucian')->nullable();
            $table->string('kategori_cucian')->nullable();
            $table->string('jumlah_cucian')->nullable();
            $table->integer('harga_cucian')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datapelanggan');
    }
};
