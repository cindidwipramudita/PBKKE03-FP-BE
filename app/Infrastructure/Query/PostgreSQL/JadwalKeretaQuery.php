<?php

namespace App\Infrastructure\Query\PostgreSQL;

use App\Application\Query\JadwalKereta\JadwalKeretaDto;
use App\Application\Query\JadwalKereta\JadwalKeretaQueryInterface;
use Illuminate\Support\Facades\DB;

class JadwalKeretaQuery implements JadwalKeretaQueryInterface
{
    public function execute(): ?array
    {
        $sql = "SELECT * FROM jadwal_kereta";

        $result = DB::select($sql);

        if (!$result) {
            return null;
        }

        $list_jadwal_kereta = array();
        
        foreach ($result as $jadwal_kereta) {
            array_push($list_jadwal_kereta, new JadwalKeretaDto(
                $jadwal_kereta->id,
                $jadwal_kereta->nomor_kereta,
                $jadwal_kereta->nama_kereta,
                $jadwal_kereta->rute,
                $jadwal_kereta->asal,
                $jadwal_kereta->tujuan,
                $jadwal_kereta->waktu_keberangkatan,
                $jadwal_kereta->jumlah_penumpang,
                $jadwal_kereta->tarif
            ));
        }

        return $list_jadwal_kereta;
    }
}