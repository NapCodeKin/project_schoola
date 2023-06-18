<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SekolahController extends Controller
{
    public function masuksekolah(){
        return view('masuksekolah');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => ['required']
        ], [
            'email.required' => 'Email Wajib Diisi',
            'email.email' => 'Harus diisi dengan format @gmail.com',
            'password' => 'Password wajib diisi',
        ]);


        if (Auth::guard('sekolah')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/schoola/berandaSekolah');
        }

        return back()->withErrors([
            'password' => 'E-mail atau Password yang dimasukkan salah',
        ])->onlyInput('email' || 'password');
    }

}
