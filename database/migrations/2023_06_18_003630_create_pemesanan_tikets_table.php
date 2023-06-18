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
        Schema::create('pemesanan_tikets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jadwal_kereta_id');
            $table->foreignId('pelanggan_id');
            $table->foreignId('admin_id');
            $table->foreignId('pegawai_id');
            $table->foreignId('status_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan_tikets');
    }
};

// App\Models\Pelanggan::create([
//     'username' => 'dimas1234',
//     'nama' => 'Dimas'
//     'no_telepon' => 08123123
// ]);