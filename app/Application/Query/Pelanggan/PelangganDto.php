<?php

namespace App\Application\Query\Pelanggan;

class PelangganDto
{
    public function __construct(
        public int $id,
        public string $username,
        public string $nama,
        public string $no_telepon
    ){
        
    }
}