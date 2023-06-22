<?php

namespace App\Infrastructure\Query\PostgreSQL;

use App\Application\Query\PemesananTiket\PemesananTiketDto;
use App\Application\Query\PemesananTiket\PemesananTiketQueryInterface;
use Illuminate\Support\Facades\DB;

class PemesananTiketQuery implements PemesananTiketQueryInterface
{
    public function execute($id_user): ?array
    {   

        $sql = "SELECT * FROM pemesanan_tikets WHERE pelanggan_id = {$id_user}";
        $result = DB::select($sql);

        if (!$result) {
            return null;
        }
        
        $list_pemesanan_tiket = array();
        
        foreach ($result as $pemesanan_tiket) {
            array_push($list_pemesanan_tiket, new PemesananTiketDto(
                $pemesanan_tiket->id,
                $pemesanan_tiket->nama_pelanggan,
                $pemesanan_tiket->nomor_kereta,
                $pemesanan_tiket->nama_kereta,
                $pemesanan_tiket->rute,
                $pemesanan_tiket->asal,
                $pemesanan_tiket->tujuan,
                $pemesanan_tiket->waktu_keberangkatan,
                $pemesanan_tiket->tarif
            ));
        }

        return $list_pemesanan_tiket;
    }
}