<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ekstrakurikuler;

class EkstrakurikulerSeeder extends Seeder
{
    public function run(): void
    {
        $eskul = [
            [
                'nama' => 'Pramuka',
                'pembina' => 'Ahmad Suhendra',
                'deskripsi' => 'Kegiatan kepramukaan yang melatih kedisiplinan dan kemandirian.',
                'gambar' => 'pramuka.jpg',
            ],
            [
                'nama' => 'Paskibra',
                'pembina' => 'Ende Iskandar, S.TP',
                'deskripsi' => 'Ekstrakurikuler pengibaran bendera yang melatih kedisiplinan.',
                'gambar' => 'paskibra.jpg',
            ],
            [
                'nama' => 'Futsal',
                'pembina' => 'Jaya Nur Setiawandi, S.Pd',
                'deskripsi' => 'Wadah pengembangan bakat siswa di bidang olahraga futsal.',
                'gambar' => 'futsal.jpg',
            ],
            [
                'nama' => 'Basket',
                'pembina' => 'Sakti Alamsyah, SE',
                'deskripsi' => 'Melatih kemampuan siswa dalam olahraga bola basket.',
                'gambar' => 'basket.jpg',
            ],
        ];

        foreach ($eskul as $item) {
            Ekstrakurikuler::create($item);
        }
    }
}