<?php

namespace App\Application\Query\PemesananTiketById;

interface PemesananTiketByIdQueryInterface
{
    public function execute(): PemesananTiketByIdDto;
}