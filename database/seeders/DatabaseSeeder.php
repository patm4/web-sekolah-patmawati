<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ekstrakurikuler;

class EkstrakurikulerSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama_eskul' => 'Pramuka',
                'pembina' => 'Pembina Pramuka',
                'deskripsi' => 'Kegiatan untuk melatih kedisiplinan, kemandirian, kepemimpinan, kerja sama, dan keterampilan siswa.',
                'logo' => null,
                'guru_id' => 1,
            ],

            [
                'nama_eskul' => 'Paskibra',
                'pembina' => 'Pembina Paskibra',
                'deskripsi' => 'Kegiatan yang melatih kedisiplinan, kekompakan, kepemimpinan, dan keterampilan baris-berbaris.',
                'logo' => null,
                'guru_id' => 2,
            ],

            [
                'nama_eskul' => 'Rohis',
                'pembina' => 'Pembina Rohis',
                'deskripsi' => 'Kegiatan keagamaan untuk meningkatkan pemahaman agama, akhlak, ibadah, dan kebersamaan siswa.',
                'logo' => null,
                'guru_id' => 3,
            ],

            [
                'nama_eskul' => 'PMR',
                'pembina' => 'Pembina PMR',
                'deskripsi' => 'Kegiatan Palang Merah Remaja yang melatih kepedulian, kesehatan, pertolongan pertama, dan jiwa sosial.',
                'logo' => null,
                'guru_id' => 4,
            ],

            [
                'nama_eskul' => 'Futsal',
                'pembina' => 'Pembina Futsal',
                'deskripsi' => 'Kegiatan olahraga untuk mengembangkan bakat, kebugaran, kerja sama tim, dan sportivitas siswa.',
                'logo' => null,
                'guru_id' => 5,
            ],

            [
                'nama_eskul' => 'Seni',
                'pembina' => 'Pembina Seni',
                'deskripsi' => 'Kegiatan untuk mengembangkan kreativitas dan bakat siswa dalam bidang seni.',
                'logo' => null,
                'guru_id' => 6,
            ],
        ];

        foreach ($data as $item) {
            Ekstrakurikuler::create($item);
        }
    }
}