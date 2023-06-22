<?php

namespace App\Application\Query\PemesananTiketById;

class PemesananTiketByIdDto
{
    public function __construct(
        public int $id,
        public string $nama_pelanggan,
        public string $nomor_kereta,
        public string $nama_kereta,
        public string $rute,
        public string $asal,
        public string $tujuan,
        public string $waktu_keberangkatan,
        public int $tarif
    ){
        
    }
}