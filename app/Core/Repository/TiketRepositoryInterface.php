<?php

namespace App\Core\Repository\TiketRepositoryInterface;

use App\Core\Models\Tiket\Tiket;
use App\Core\Models\Tiket\TiketId;

interface TiketRepositoryInterface
{
    public function byId(TiketId $id): Tiket;
}