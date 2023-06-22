<?php

namespace App\Application\Query\JadwalKeretaById;

interface JadwalKeretaByIdQueryInterface
{
    public function execute($jadwal_kereta_id): ?JadwalKeretaByIdDto;
}