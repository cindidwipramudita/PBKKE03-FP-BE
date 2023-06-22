<?php

namespace App\Application\Query\Pegawai;

interface PegawaiQueryInterface
{
    public function execute($username): PegawaiDto;
}