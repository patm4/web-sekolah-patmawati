@extends('layouts.app')

@section('title', 'Jurusan - SMK Negeri 1 Cijati')

@section('content')

<style>

    .jurusan-container {
        width: 90%;
        max-width: 1100px;
        margin: 50px auto;
    }

    .jurusan-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .jurusan-header h1 {
        font-size: 36px;
        margin-bottom: 10px;
        color: #222;
    }

    .jurusan-header p {
        color: #666;
        font-size: 17px;
    }

    .jurusan-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
    }

    .jurusan-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: 0.3s;
    }

    .jurusan-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .jurusan-card img {
        width: 100%;
        height: 200px;
        object-fit: contain;
        padding: 20px;
        background: #f8f9fa;
    }

    .jurusan-content {
        padding: 25px;
    }

    .jurusan-content h2 {
        color: #0d6efd;
        font-size: 22px;
        margin-top: 0;
        margin-bottom: 15px;
    }

    .jurusan-content p {
        color: #555;
        line-height: 1.7;
    }

    .kompetensi {
        margin-top: 20px;
        padding-top: 15px;
        border-top: 1px solid #ddd;
    }

    .kompetensi strong {
        display: block;
        margin-bottom: 8px;
        color: #333;
    }

    .kode {
        display: inline-block;
        margin-top: 10px;
        padding: 6px 12px;
        background: #0d6efd;
        color: white;
        border-radius: 20px;
        font-size: 13px;
    }

</style>


<div class="jurusan-container">

    <!-- HEADER -->

    <div class="jurusan-header">

        <h1>Jurusan</h1>

        <p>
            Program keahlian yang tersedia di SMK Negeri 1 Cijati
        </p>

    </div>


    <!-- DAFTAR JURUSAN -->

    <div class="jurusan-grid">

        @foreach ($jurusan as $item)

            <div class="jurusan-card">

                <!-- LOGO -->

                <img
                    src="{{ asset('images/' . $item['logo']) }}"
                    alt="{{ $item['nama'] }}"
                >


                <!-- CONTENT -->

                <div class="jurusan-content">

                    <!-- NAMA JURUSAN -->

                    <h2>
                        {{ $item['nama'] }}
                    </h2>


                    <!-- DESKRIPSI -->

                    <p>
                        {{ $item['deskripsi'] }}
                    </p>


                    <!-- KOMPETENSI -->

                    <div class="kompetensi">

                        <strong>
                            Kompetensi yang dipelajari:
                        </strong>

                        <p>
                            {{ $item['kompetensi'] }}
                        </p>

                    </div>

                </div>

            </div>

        @endforeach

    </div>

</div>

@endsection


