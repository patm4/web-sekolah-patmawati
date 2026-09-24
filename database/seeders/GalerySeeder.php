<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Galery;

class GalerySeeder extends Seeder
{
    public function run(): void
    {
        Galery::create([
            'judul' => 'Kegiatan Sekolah',
            'gambar' => 'kegiatan-sekolah.jpg',
            'deskripsi' => 'Dokumentasi kegiatan sekolah.',
        ]);

        Galery::create([
            'judul' => 'Upacara Bendera',
            'gambar' => 'upacara.jpg',
            'deskripsi' => 'Kegiatan upacara bendera di sekolah.',
        ]);

        Galery::create([
            'judul' => 'Kegiatan Siswa',
            'gambar' => 'kegiatan-siswa.jpg',
            'deskripsi' => 'Dokumentasi kegiatan siswa.',
        ]);
    }
}