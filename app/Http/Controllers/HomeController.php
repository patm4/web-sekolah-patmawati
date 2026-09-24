<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Halaman Home / Jurusan
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        return view('home');
    }


    /*
    |--------------------------------------------------------------------------
    | Halaman Galeri
    |--------------------------------------------------------------------------
    */

    public function galeri()
    {
        return view('galeri');
    }


    /*
    |--------------------------------------------------------------------------
    | Halaman Ekstrakurikuler
    |--------------------------------------------------------------------------
    */

    public function ekstrakurikuler()
    {
        return view('ekstrakurikuler');
    }


    /*
    |--------------------------------------------------------------------------
    | Halaman Guru
    |--------------------------------------------------------------------------
    */

    public function guru()
    {
        return view('guru');
    }
}
