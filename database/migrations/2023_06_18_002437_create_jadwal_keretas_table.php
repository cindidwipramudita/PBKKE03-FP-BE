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
            $table->foreignId('kereta_id');
            $table->foreignId('pegawai_id');
            $table->foreignId('admin_id');
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
