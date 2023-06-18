<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKereta extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kereta() {
        return $this->belongsTo(Kereta::class);
    }

    public function pegawai() {
        return $this->belongsTo(Pegawai::class);
    }

    public function admin() {
        return $this->belongsTo(Admin::class);
    }

    public function pemesanan_tiket() {
        return $this->hasMany(PemesananTiket::class);
    }
}
