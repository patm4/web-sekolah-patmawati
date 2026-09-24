@extends('layouts.app')

@section('title', 'Galeri - SMK Negeri 1 Cijati')

@section('content')

<div style="width: 90%; max-width: 1100px; margin: 50px auto;">

    <h1>Program Pembiasaan</h1>

    <p>
        Kegiatan pembiasaan harian yang diterapkan di SMK Negeri 1 Cijati untuk membentuk karakter siswa.
    </p>

    <div class="pembiasaan-grid">

        <div class="pembiasaan-card">
</div>

        <img
                src="{{ asset('images/literasi.jpeg') }}"
                alt="Literasi"
            >
            <h2>Literasi</h2>
            <p>
                Kegiatan membaca buku selama 15 menit sebelum pelajaran dimulai untuk menumbuhkan minat baca siswa.
            </p>
    </div>

        <img
                src="{{ asset('images/upacara-bendera.jpeg') }}"
                alt="Upacara Bendera"
            >
            <h3>Upacara Bendera</h3>
            <p>
                Dilaksanakan setiap hari Senin untuk menumbuhkan rasa disiplin dan cinta tanah air.
            </p>
        </div>

        <div class="pembiasaan-card">
            <img
                src="{{ asset('images/istigosah.jpeg') }}"
                alt="Istigosah"
            >
            <h3>Istigosah</h3>
            <p>
                Kegiatan doa bersama yang dilaksanakan menjelang ujian atau acara penting sekolah sebagai bentuk ikhtiar dan permohonan kepada Allah SWT.
            </p>
        </div>

        <img
                src="{{ asset('images/Sehati.jpeg') }}"
                alt="Sehati"
            >
            <h4>Sehati</h4>
            <p>
                Senam Pagi Sehati dilaksanakan secara rutin di SMK Negeri 1 Cijati sebagai bentuk pembiasaan hidup sehat sebelum memulai kegiatan belajar. Melalui kegiatan ini, siswa dilatih untuk menjaga kebugaran jasmani, membangun semangat kebersamaan, serta memulai hari dengan energi yang positif.
            <p>
        </div>

         <img
                src="{{ asset('images/Pengukuhan Pasukan Pengibaran Bendera.jpeg') }}"
                alt="Pengukuhan Pasukan Pengukuhan paskibra"
>
            <h5>Pengukuhan Pasukan Pengibaran Bendera</h5>
            <p>
   Momen kebanggaan pengukuhan anggota Paskibra sekolah, wujud nyata pengabdian, kedisiplinan, dan kecintaan terhadap tanah air dalam menjaga kehormatan sang saka merah putih.
            <p>
         </div>

         <img
                src="{{ asset('images/Panter.jpeg') }}"
                alt="Panter"
>
            <h6>Panter</h6>
            <p>
    Panter hadir sebagai wadah bagi siswa untuk mengembangkan semangat kebersamaan, kedisiplinan, dan rasa bangga terhadap almamater, sekaligus menumbuhkan karakter tangguh dan berjiwa kompetitif.
            <p>
         </div>
   
         <img
                src="{{ asset('images/Jatizi Bank.jpeg') }}"
                alt="Jatizi Bank"
>
            <h7>Jatizi Bank</h7>
            <p>
    Jatizi Bank hadir sebagai wadah bagi siswa untuk belajar mengelola keuangan sejak dini, menumbuhkan kebiasaan menabung, bertanggung jawab, dan disiplin, sekaligus mempererat kebersamaan sebagai bagian dari keluarga besar sekolah.
            </p>
         </div>

           <img
                src="{{ asset('images/Class Meeting.jpeg') }}"
                alt="Class Meeting"
>
            <h8>Class Meeting</h8>
            <p>
    Class Meeting adalah panggung kebersamaan setelah lelahnya rutinitas belajar — diwarnai tawa, semangat kompetisi antarkelas, dan kekompakan yang mempererat persahabatan di sekolah.
            <p>
        </div>

        <img
                src="{{ asset('images/Penerima Tamu Ambalan.jpeg') }}"
                alt="Penerima Tamu Ambalan"
>
            <h9>Penerima Tamu Ambalan</h9>
            <p>
    Penerima Tamu Ambalan menjadi wujud keramahan dan kesigapan anggota Pramuka dalam menyambut tamu, mencerminkan nilai sopan santun, kedisiplinan, dan kebanggaan menjunjung tinggi kehormatan ambalan.
            <p>
        </div>   
    
    @endsection
