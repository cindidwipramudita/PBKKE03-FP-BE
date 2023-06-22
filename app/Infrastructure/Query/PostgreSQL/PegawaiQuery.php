<?php

namespace App\Infrastructure\Query\PostgreSQL;

use App\Application\Query\Pegawai\PegawaiDto;
use App\Application\Query\Pegawai\PegawaiQueryInterface;
use Illuminate\Support\Facades\DB;

class PegawaiQuery implements PegawaiQueryInterface
{
    public function execute($username): PegawaiDto
    {
        $sql = "SELECT * FROM pegawais WHERE username = '{$username}'";

        $result = DB::select($sql);

        return new PegawaiDto(
            $result[0]->id,
            $result[0]->username,
            $result[0]->nama
        );
    }
}