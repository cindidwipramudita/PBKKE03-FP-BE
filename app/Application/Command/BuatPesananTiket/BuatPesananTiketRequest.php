<?php

namespace App\Application\Command\BuatPesananTiket;

class BuatPesananTiketRequest
{
    public function __construct(   
        public int $jadwalKeretaId,
        public int $pelangganId,
        public ?int $adminId,
        public ?int $pegawaiId,
        public int $statusId
    ){
    }
}