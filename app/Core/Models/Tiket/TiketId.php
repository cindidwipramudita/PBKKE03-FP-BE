<?php

namespace App\Core\Models\Tiket;

class TiketId
{
    public function __construct(
        private int $id
    ){   
    }

    public function id(): int 
    {
        return $this->id;
    }
}