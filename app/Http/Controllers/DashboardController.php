<?php

namespace App\Http\Controllers;

use App\Application\Query\JadwalKereta\JadwalKeretaQueryInterface;
use App\Application\Query\Pegawai\PegawaiQueryInterface;
use App\Application\Query\PemesananTiket\PemesananTiketQueryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function __construct(
        private JadwalKeretaQueryInterface $jadwalKeretaQuery,

        // private PemesananTiketQueryInterface $pemesananTiketQuery,
        // private PegawaiQueryInterface $pegawaiQuery,
    ){
        
    }
    public function index(Request $request)
    {
        $user = Auth::user();

        $jadwal_kereta = $this->jadwalKeretaQuery->execute();

        if ($user->group == 'pelanggan') {
            // return response()->json([
            //     'jadwal_kereta' => $jadwal_kereta
            // ]);

            return view('dashboard.pelanggan', [
                'user' => $user,
                'jadwal_kereta' => $jadwal_kereta
            ]);
        }
    }
}
