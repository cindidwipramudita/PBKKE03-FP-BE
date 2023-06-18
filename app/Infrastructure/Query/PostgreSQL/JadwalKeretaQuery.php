<?php

namespace App\Infrastructure\Query\PostgreSQL;

use App\Application\Query\JadwalKereta\JadwalKeretaDto;
use App\Application\Query\JadwalKereta\JadwalKeretaQueryInterface;
use Illuminate\Support\Facades\DB;

class JadwalKeretaQuery implements JadwalKeretaQueryInterface
{
    public function execute(): ?array
    {
        $sql = "SELECT j.id AS id, k.nomor AS nomor_kereta, k.nama AS nama_kereta, j.rute AS rute, j.asal AS asal, j.tujuan AS tujuan, 
            j.waktu_keberangkatan AS waktu_keberangkatan, j.kapasitas AS kapasitas, j.tarif AS tarif 
            FROM jadwal_keretas j INNER JOIN keretas k ON j.kereta_id = k.id
            WHERE j.kapasitas >= 0";

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
                $jadwal_kereta->kapasitas,
                $jadwal_kereta->tarif
            ));
        }

        return $list_jadwal_kereta;
    }
}