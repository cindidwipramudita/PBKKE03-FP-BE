<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trains extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'name', 'route', 'origin', 'destination', 'price', 'time'];
}