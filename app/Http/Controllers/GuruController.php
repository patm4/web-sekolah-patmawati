<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;


class guruController extends Controller
{
    public function index()
    {
        $gurus=Guru::all();

        return view('guru',compact('gurus'));
    }
}