<?php

namespace App\Application\Query\PemesananTiket;

interface PemesananTiketQueryInterface
{
    public function execute($id_user): ?array;
}