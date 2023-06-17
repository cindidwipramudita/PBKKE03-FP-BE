<?php

namespace App\Application\Query\JadwalKereta;

interface JadwalKeretaQueryInterface
{
    public function execute(): JadwalKeretaDto;
}