<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ekstrakurikuler extends Model
{
    protected $table = 'ekstrakurikuler';

    protected $fillable = [
        'nama_ekskul',
        'pembina',
        'deskripsi',
        'gambar',
    ];

    public function guru()
    {
        return $this->belongsTo(guru::class, 'guru_id');
    }
}