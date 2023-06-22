<?php

namespace App\Application\Command\BuatPesananTiket;

use App\Core\Repository\TiketRepositoryInterface\TiketRepositoryInterface;

class BuatPesananTiketCommand
{
    public function __construct(
        private TiketRepositoryInterface $tiketRepository,
    ){   
    }

    public function execute(BuatPesananTiketRequest $request): void
    {

    }
}
