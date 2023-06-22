<?php

namespace App\Infrastructure\Query\PostgreSQL;

use App\Application\Query\Pelanggan\PelangganDto;
use App\Application\Query\Pelanggan\PelangganQueryInterface;
use Illuminate\Support\Facades\DB;

class PelangganQuery implements PelangganQueryInterface
{
    public function execute($username): PelangganDto
    {
        $sql = "SELECT * FROM pelanggans WHERE username = '{$username}'";

        $result = DB::select($sql);

        return new PelangganDto(
            $result[0]->id,
            $result[0]->username,
            $result[0]->nama,
            $result[0]->no_telepon
        );
    }
}