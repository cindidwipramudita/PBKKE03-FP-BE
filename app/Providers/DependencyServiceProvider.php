<?php

namespace App\Providers;

use App\Application\Query\JadwalKereta\JadwalKeretaQueryInterface;
use App\Application\Query\JadwalKeretaById\JadwalKeretaByIdQueryInterface;
use App\Infrastructure\Query\PostgreSQL\JadwalKeretaByIdQuery;
use App\Infrastructure\Query\PostgreSQL\JadwalKeretaQuery;
use Illuminate\Support\ServiceProvider;

class DependencyServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Query
        $this->app->bind(JadwalKeretaQueryInterface::class, JadwalKeretaQuery::class);
        $this->app->bind(JadwalKeretaByIdQueryInterface::class, JadwalKeretaByIdQuery::class);
        // Repository

        //Service
    }
}