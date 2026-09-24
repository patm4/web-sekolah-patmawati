<?php

namespace App\Http\Controllers;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusan = [
            [
                'nama' => 'Teknik Kendaraan Ringan Otomotif',
                'logo' => 'Tkro.jpeg',
                'deskripsi' => 'Program keahlian yang mempelajari perawatan, perbaikan, dan perakitan kendaraan bermotor roda empat.',
                'kompetensi' => 'Mesin otomotif, sistem kelistrikan kendaraan, sasis dan pemindah tenaga.',
            ],
            [
                'nama' => 'Bisnis Daring dan Pemasaran',
                'logo' => 'Bdp.jpeg',
                'deskripsi' => 'Program keahlian yang mempelajari strategi pemasaran, penjualan, dan bisnis digital.',
                'kompetensi' => 'Pemasaran online, administrasi transaksi, komunikasi bisnis.',
            ],
            [
                'nama' => 'Rekayasa Perangkat Lunak',
                'logo' => 'Rpl.jpeg',
                'deskripsi' => 'Program keahlian yang mempelajari perancangan, pembuatan, dan pengembangan aplikasi serta website.',
                'kompetensi' => 'Pemrograman web dan mobile, basis data, algoritma pemrograman.',
            ],
            [
                'nama' => 'Agribisnis Pengolahan Hasil Pertanian',
                'logo' => 'Aphp.jpeg',
                'deskripsi' => 'Program keahlian yang mempelajari pengolahan hasil pertanian menjadi produk pangan bernilai jual.',
                'kompetensi' => 'Teknologi pengolahan pangan, pengendalian mutu, kewirausahaan agribisnis.',
            ],
        ];

        return view('jurusan', compact('jurusan'));
    }
}