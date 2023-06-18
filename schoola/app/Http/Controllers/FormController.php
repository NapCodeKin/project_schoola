<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller

{
    public function viewformortu(){
        return view('formulirpendaftaranOrtu');
    }
    
    public function viewformortu2(){
        return view('formulirpendaftaranOrtu22');
    }

    public function viewformortu3(){
        return view('formulirpendaftaranOrtu33');
    }

    public function lhtform(){
        $responsformulir = DB::table('responsformulir')->get();
        return view('2LihatFormulir',['responsformulir'=>$responsformulir]);
    }

    public function simpan1(Request $request){
        DB::table('responsformulir')->insert([
        'idFormulir' => $request->idFormulir,
            'id_sekolah2' => $request->id_sekolah2,
            'namalengkap_pd' => $request->namalengkap_pd,
            'namapanggilan_pd' => $request->namapanggilan_pd,
            'nik_pesertadidik' => $request->nik_pesertadidik,
            'kewarganegaraan_pd' => $request->kewarganegaraan_pd,
            'tempat_pd' => $request->tempat_pd,
            'tanggallahir_pd' => $request->tanggallahir_pd,
            'alamat_pd' => $request->alamat_pd,
            'agama_pd' => $request->agama_pd,
            'anakke_pd' => $request->anakke_pd,
            'jumlahsaudara_pd' => $request->jumlahsaudara_pd,
            'jenjang' => $request->jenjang,
            'jeniskelamin' => $request->jeniskelamin,
        ]);
            return redirect('/schoola/formOrtu2');
    }

    public function simpan2(Request $request){
        DB::table('responsformulir')->update([
            'nama_ay' => $request->nama_ay,
            'nik_ay' => $request->nik_ay,
            'pekerjaan_ay' => $request->pekerjaan_ay,
            'pendidikan_ay' => $request->pendidikan_ay,
            'ttl_ay' => $request->ttl_ay,
            'telpon_ay' => $request->telpon_ay,
            'alamat_ay' => $request->alamat_ay,
            'nama_ib' => $request->nama_ib,
            'nik_ib' => $request->nik_ib,
            'pekerjaan_ib' => $request->pekerjaan_ib,
            'pendidikan_ib' => $request->pendidikan_ib,
            'ttl_ib' => $request->ttl_ib,
            'telpon_ib' => $request->telpon_ib,
            'alamat_ib' => $request->alamat_ib,
        ]);
            return redirect('/schoola/formOrtu3');
    }

    public function simpan3(Request $request){
        DB::table('responsformulir')->update([
            'tinggi_ank' => $request->tinggi_ank,
            'berat_ank' => $request->berat_ank,
            'rk_cacar' => $request->rk_cacar,
            'rk_tbc' => $request->rk_tbc,
            'rk_asma' => $request->rk_asma,
            'rk_lainnya' => $request->rk_lainnya,
            'ri_polio' => $request->ri_polio,
            'ri_rubella' => $request->ri_rubella,
            'ri_vaksin8' => $request->ri_vaksin8,
            'ri_lainnya' => $request->ri_lainnya,
            'akta' => $request->akta,
            'kk' => $request->kk,
            'ft' => $request->ft,
            'bayar' => $request->bayar
        ]);
            return redirect('/schoola/profil');
    }

    public function lhtresp(){
        $responsformulir = DB::table('responsformulir')->get();
        return view('2LihatRespons',['responsformulir'=>$responsformulir]);
    }

}
