<?php

namespace App\Application\Query\Pelanggan;

interface PelangganQueryInterface
{
    public function execute($username): PelangganDto;
}