<?php

namespace App\Http\Controllers;

use App\Application\Query\JadwalKereta\JadwalKeretaQueryInterface;
use App\Application\Query\JadwalKeretaById\JadwalKeretaByIdQueryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TiketController extends Controller
{
    public function __construct(
        private JadwalKeretaQueryInterface $jadwalKeretaQuery,
        private JadwalKeretaByIdQueryInterface $jadwalKeretaByIdQuery
    ){
    }

    public function get() {
        $user = Auth::user();

        if ($user->group != 'pelanggan') {
            return redirect()->intended('/kelola-tiket');
        }

        $jadwal_kereta = $this->jadwalKeretaQuery->execute();
        
        // return response()->json([
        //     'jadwal_kereta' => $jadwal_kereta
        // ]);

        return view('tiket.pesan_tiket', [
            'user' => $user,
            'jadwal_kereta' => $jadwal_kereta
        ]);
        
    }

    public function pesanTiket($jadwalKeretaId) {
        $user = Auth::user();

        if ($user->group != 'pelanggan') {
            return redirect()->intended('/kelola-tiket');
        }

        $jadwal_kereta_by_id = $this->jadwalKeretaByIdQuery->execute($jadwalKeretaId);

        return view('tiket.detail_tiket', [
            'jadwal_kereta_by_id' => $jadwal_kereta_by_id
        ]);

        // return response()->json([
        //     'jadwal_kereta_by_id' => 
        // ]);
    }

    // public function pesanTiketAction(Request $request, $jadwalKeretaId, BuatPesananTiketCommand $command) {
    //     $user = Auth::user();

    //     if ($user->group != 'pelanggan') {
    //         return redirect()->intended('/kelola-tiket');
    //     }

        
    // }
}