<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BerandaController extends Controller
{
    public function berandaorangtua(){
        return view('1homepageorangtua');
    }

    public function berandasekolah(){
        $user_sekolah = DB::table('user_sekolah')->get();
    	return view('1homepagesekolah',['user_sekolah' => $user_sekolah]);
    }

    public function bantuanorangtua(){
        return view('1bantuanorangtua');
    }

    public function bantuansekolah(){
        return view('1bantuansekolah');
    }

    public function akunsekolah(){
        $user_sekolah = DB::table('user_sekolah')->get();
    	return view('1akunsekolah',['user_sekolah' => $user_sekolah]);
    }

    public function akunortu(){
        $user_orangtua = DB::table('user_orangtua')->get();
    	return view('1akunortu',['user_orangtua' => $user_orangtua]);
    }

    public function viewformortu(){
        return view('formulirpendaftaranOrtu');
    }

    public function profil(){
        $user_sekolah = DB::table('user_sekolah')->get();
    	return view('2ProfilSekolah(Ortu)',['user_sekolah' => $user_sekolah]);
    }

}      

