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
        Schema::create('jadwal_keretas', function (Blueprint $table) {
            $table->id();
            $table->string('rute');
            $table->string('asal');
            $table->string('tujuan');
            $table->string('waktu_keberangkatan');
            $table->integer('tarif');
            $table->integer('kapasitas');
            $table->foreignId('kereta_id');
            $table->foreignId('pegawai_id')->nullable();
            $table->foreignId('admin_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_keretas');
    }
};
