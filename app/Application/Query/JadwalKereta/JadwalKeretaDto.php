<?php

namespace App\Application\Query\JadwalKereta;

class JadwalKeretaDto
{
    public function __construct(
        public int $id,
        public string $nomor_kereta,
        public string $nama_kereta,
        public string $rute,
        public string $asal,
        public string $tujuan,
        public string $waktu_keberangkatan,
        public int $jumlah_penumpang,
        public int $tarif
    ){

    }
}