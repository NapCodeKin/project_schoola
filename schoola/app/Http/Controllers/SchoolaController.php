<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolaController extends Controller
{
    public function mulai(){
        return view('landingpage');
    }
    public function pilihan(){
        return view('pilihanmasuk');
    }
    public function masuksekolah(){
        return view('masuksekolah');
    }
}
