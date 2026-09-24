<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class galery extends Model
{
    protected $table = 'galery';

    protected $fillable = [
        'judul',
        'gambar',
        'deskripsi',
    ];
}