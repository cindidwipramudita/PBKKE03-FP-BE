<?php

namespace App\Application\Query\JadwalKeretaById;

class JadwalKeretaByIdDto
{
    public function __construct(
        public int $id,
        public string $nomor_kereta,
        public string $nama_kereta,
        public string $rute,
        public string $asal,
        public string $tujuan,
        public string $waktu_keberangkatan,
        public int $kapasitas,
        public int $tarif
    ){

    }
}