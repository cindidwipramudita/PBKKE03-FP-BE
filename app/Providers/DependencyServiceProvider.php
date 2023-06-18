<?php

namespace App\Providers;

use App\Application\Query\JadwalKereta\JadwalKeretaQueryInterface;
use App\Infrastructure\Query\PostgreSQL\JadwalKeretaQuery;
use Illuminate\Support\ServiceProvider;

class DependencyServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Query
        $this->app->bind(JadwalKeretaQueryInterface::class, JadwalKeretaQuery::class);
        // Repository

        //Service
    }
}