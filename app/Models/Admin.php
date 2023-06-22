<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function jadwal_kereta() {
        return $this->hasMany(JadwalKereta::class);
    }

    public function pemesanan_tiket() {
        return $this->hasMany(PemesananTiket::class);
    }
}
