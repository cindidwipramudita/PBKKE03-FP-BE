<?php

namespace App\Providers;

use App\Application\Query\JadwalKereta\JadwalKeretaQueryInterface;
use App\Application\Query\JadwalKeretaById\JadwalKeretaByIdQueryInterface;
use App\Application\Query\Pegawai\PegawaiQueryInterface;
use App\Infrastructure\Query\PostgreSQL\JadwalKeretaByIdQuery;
use App\Infrastructure\Query\PostgreSQL\JadwalKeretaQuery;
use App\Infrastructure\Query\PostgreSQL\PegawaiQuery;
use App\Infrastructure\Query\PostgreSQL\PelangganQuery;
use App\Application\Query\Pelanggan\PelangganQueryInterface;
use App\Core\Repository\TiketRepositoryInterface\TiketRepositoryInterface;
use App\Infrastructure\Repository\MySQL\TiketRepository;
use Illuminate\Support\ServiceProvider;

class DependencyServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Query
        $this->app->bind(JadwalKeretaQueryInterface::class, JadwalKeretaQuery::class);
        $this->app->bind(JadwalKeretaByIdQueryInterface::class, JadwalKeretaByIdQuery::class);
        $this->app->bind(PegawaiQueryInterface::class, PegawaiQuery::class);
        $this->app->bind(PelangganQueryInterface::class, PelangganQuery::class);
        $this->app->bind(PemesananTiketQueryInterface::class, PemesananTiketQuery::class);

        // Repository
        $this->app->bind(TiketRepositoryInterface::class, TiketRepository::class);
        //Service
    }
}