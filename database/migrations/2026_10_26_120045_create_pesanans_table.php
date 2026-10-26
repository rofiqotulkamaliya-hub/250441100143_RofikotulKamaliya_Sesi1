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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('layanan_id')
            ->constrained('layanans')
            ->cascadeOneDelete();

            $table->string('nama_pelanggan', 100);
            $table->date('tanggal_masuk');
            $table->decimal('jumlah');
            $table->integer('total_biaya');
            $table->enum('status', ['proses', 'selesai'])
            ->default('proses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
