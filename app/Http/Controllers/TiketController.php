<?php

namespace App\Http\Controllers;

use App\Application\Command\BuatPesananTiket\BuatPesananTiketCommand;
use App\Application\Command\BuatPesananTiket\BuatPesananTiketRequest;
use App\Application\Query\JadwalKereta\JadwalKeretaQueryInterface;
use App\Application\Query\JadwalKeretaById\JadwalKeretaByIdQueryInterface;
use App\Application\Query\Pelanggan\PelangganQueryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

class TiketController extends Controller
{
    public function __construct(
        private JadwalKeretaQueryInterface $jadwalKeretaQuery,
        private JadwalKeretaByIdQueryInterface $jadwalKeretaByIdQuery,
        private PelangganQueryInterface $pelangganQuery
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

    public function pesanTiketAction(Request $request, $jadwalKeretaId, BuatPesananTiketCommand $command) {
        $user = Auth::user();

        if ($user->group != 'pelanggan') {
            return redirect()->intended('/kelola-tiket');
        }

        $pelanggan = $this->pelangganQuery->execute($user->username);
        $statusId = 2;

        $buatPesananTiketRequest = new BuatPesananTiketRequest(
            $jadwalKeretaId,
            $pelanggan->id,
            null,
            null,
            $statusId
        );

        try {
            $command->execute($buatPesananTiketRequest);
        } catch (Throwable $e) {
            return back()->withErrors($e->getMessage())->withInput();
        }

        return response()->redirectTo('/')
            ->with('success', 'berhasil_membuat_pesanan_tiket');
    }
}