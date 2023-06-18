<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananTiket extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function jadwal_kereta() {
        return $this->belongsTo(JadwalKereta::class);
    }

    public function pegawai() {
        return $this->belongsTo(Pegawai::class);
    }

    public function admin() {
        return $this->belongsTo(Admin::class);
    }

    public function pelanggan() {
        return $this->belongsTo(Pelanggan::class);
    }

    public function status() {
        return $this->belongsTo(Status::class);
    }
}
