<?php

namespace App\Infrastructure\Query\PostgreSQL;

use App\Application\Query\JadwalKeretaById\JadwalKeretaByIdDto;
use App\Application\Query\JadwalKeretaById\JadwalKeretaByIdQueryInterface;
use Illuminate\Support\Facades\DB;

class JadwalKeretaByIdQuery implements JadwalKeretaByIdQueryInterface
{
    public function execute($jadwal_kereta_id): ?JadwalKeretaByIdDto
    {
        $sql = "SELECT j.id AS id, k.nomor AS nomor_kereta, k.nama AS nama_kereta, j.rute AS rute, j.asal AS asal, j.tujuan AS tujuan, 
            j.waktu_keberangkatan AS waktu_keberangkatan, j.kapasitas AS kapasitas, j.tarif AS tarif 
            FROM jadwal_keretas j INNER JOIN keretas k ON j.kereta_id = k.id
            WHERE j.kapasitas >= 0 AND j.id = '{$jadwal_kereta_id}'";

        $result = DB::select($sql);

        if (!$result) {
            return null;
        }
        
        $jadwal_kereta = $result[0];

        return new JadwalKeretaByIdDto(
            $jadwal_kereta->id,
            $jadwal_kereta->nomor_kereta,
            $jadwal_kereta->nama_kereta,
            $jadwal_kereta->rute,
            $jadwal_kereta->asal,
            $jadwal_kereta->tujuan,
            $jadwal_kereta->waktu_keberangkatan,
            $jadwal_kereta->kapasitas,
            $jadwal_kereta->tarif
        );
    }
}