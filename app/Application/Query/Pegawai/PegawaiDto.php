<?php

namespace App\Application\Query\Pegawai;

class PegawaiDto
{
    public function __construct(
        public int $id,
        public string $username,
        public string $nama,
    ){
        
    }
}