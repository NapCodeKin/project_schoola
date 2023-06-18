<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class DaftarSekolahController extends Controller
{
    public function daftarsekolah(){
        return view('daftarsekolah');
    }
    public function simpansekolah(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required | unique:mysql.schoola.user_orangtua,email',
            'password' => 'required | min:4',
            'password2' => 'required | min:4',
            'alamat' => 'required',

        ], [
            'nama' => 'Nama Sekolah Wajib Diisi',
            'email.required' => 'Email Wajib Diisi',
            'email.unique' => 'Email Sudah Ada',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimal Password 4',
            'password2.required' => 'Password wajib diisi',
            'password2.min' => 'Minimal Password 4',
            'alamat.required' =>'Alamat Wajib Diisi',

        ]);
        $pw2 = $request->password2;
        $pw = $request->password;
        if ($pw == $pw2){
              DB::connection('mysql')->table('user_sekolah')->insert([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password2),
            'alamat' => $request->alamat,
            'created_at' => Carbon::now(),
        ]);
        return redirect('/schoola/masuksekolah')->with('status', 'Akun berhasil terdaftar silahkan login');
        }else{
            return redirect('/schoola/daftarsekolah')->with('status4', 'Password masih belum sesuai di 2 field');
        }

    }
}
