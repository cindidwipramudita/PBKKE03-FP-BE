<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\JadwalKereta;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        \App\Models\User::create([
            'username' => 'admin1',
            'email' => 'admin1@gmail.com',
            'password' => 'admin1',
            'group' => 'admin'
        ]);

        
        \App\Models\User::create([
            'username' => 'admin2',
            'email' => 'admin2@gmail.com',
            'password' => 'admin2',
            'group' => 'admin'
        ]);

        
        \App\Models\User::create([
            'username' => 'dana_sudana',
            'email' => 'danas@gmail.com',
            'password' => 'danas',
            'group' => 'pegawai'
        ]);

        
        \App\Models\User::create([
            'username' => 'damar_sudamar',
            'email' => 'damars@gmail.com',
            'password' => 'damars',
            'group' => 'pegawai'
        ]);

        
        \App\Models\User::create([
            'username' => 'dimas1234',
            'email' => 'dimas@gmail.com',
            'password' => 'dimas',
            'group' => 'pelanggan'
        ]);

        \App\Models\Admin::create([
            'username' => 'admin1',
            'nama' => 'admin1',
        ]);

        
        \App\Models\Admin::create([
            'username' => 'admin2',
            'nama' => 'admin2',
        ]);
        
        \App\Models\Pegawai::create([
            'username' => 'dana_sudana',
            'nama' => 'Dana Sudana',
        ]);

        \App\Models\Pegawai::create([
            'username' => 'damar_sudamar',
            'nama' => 'Damar Sudamar',
        ]);

        \App\Models\Pelanggan::create([
            'username' => 'dimas1234',
            'nama' => 'Dimas',
            'no_telepon' => '0812312323'
        ]);

        \App\Models\Status::create([
            'nama' => 'SELESAI',
        ]);

        \App\Models\Status::create([
            'nama' => 'PENDING',
        ]);

        \App\Models\Status::create([
            'nama' => 'GAGAL',
        ]);
        
        \App\Models\Kereta::create([
            'nomor' => 'KA-100',
            'nama' => 'CL-1',
            'kapasitas' => 100
        ]);
            
        \App\Models\Kereta::create([
            'nomor' => 'KA-200',
            'nama' => 'CL-2',
            'kapasitas' => 200
        ]);

        \App\Models\Kereta::create([
            'nomor' => 'KA-300',
            'nama' => 'CL-3',
            'kapasitas' => 300
        ]);

        \App\Models\JadwalKereta::create([
            'rute' => 'Surabaya-Sidoarjo',
            'asal' => 'Surabaya',
            'tujuan' => 'Sidoarjo',
            'waktu_keberangkatan' => '2023-05-05 12:00:00',
            'tarif' => 5000,
            'kapasitas' => 100,
            'kereta_id' => 1,
            'pegawai_id' => 1,
            'admin_id' => 1,

        ]);
       
        \App\Models\JadwalKereta::create([
            'rute' => 'Surabaya-Malang',
            'asal' => 'Surabaya',
            'tujuan' => 'Malang',
            'waktu_keberangkatan' => '2023-05-05 12:00:00',
            'tarif' => 5000,
            'kapasitas' => 200,
            'kereta_id' => 2,
            'pegawai_id' => 2,
            'admin_id' => 2,

        ]);
        
        \App\Models\JadwalKereta::create([
            'rute' => 'Sidoarjo-Malang',
            'asal' => 'Sidoarjo',
            'tujuan' => 'Malang',
            'waktu_keberangkatan' => '2023-05-05 12:00:00',
            'tarif' => 5000,
            'kapasitas' => 300,
            'kereta_id' => 3,
            'pegawai_id' => 1,
            'admin_id' => 2,
        ]);

        \App\Models\PemesananTiket::create([
            'jadwal_kereta_id' => 1,
            'pelanggan_id' => 1,
            'admin_id' => null,
            'pegawai_id' => null,
            'status_id' => 2,
        ]);

    }
}
