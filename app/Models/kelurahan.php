<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kelurahan extends Model
{
    use HasFactory;

    protected $table = 'kelurahans';

    protected $fillable = [
        'nama',
    ];
}

