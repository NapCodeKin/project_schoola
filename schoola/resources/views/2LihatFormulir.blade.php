@extends ('master')

<header>

	<nav class="navbar navbar-light bg-light border-bottom py-3 mb-4">
		<a class="col-2 ms-5 mt-2" href="#" style="width: 100px; height:50px"><img src="\data_file\logo.png" class="img-fluid"></a>
		<a class="end-0 col-1 me-5" href="/schoola/akunsekolah" style="width: 50px; height:50px"><img src="\data_file\user.png" class="img-fluid"></a>
	  </nav>

</header>
    
<body style="background-color: #F2F4FF">
<div class="container" style="position: relative; z-index: 2">
		<div class="row">
				<div class="hstack gap-5">
					<a class="btn btn-light mt-2 btn-block border" href="/schoola/berandaSekolah" role="button">
						<div class="hstack">
							<img class="col-6 w-25 h-25" src="\data_file\beranda.png" class="img-fluid">
							<p class="col-6 mt-3 ms-3 text-primary"><strong>Beranda</strong></p>
						</div></a>
					<a class="btn btn-light mt-2 btn-block border" href="#" role="button">
							<div class="hstack">
								<img class="col-6 w-25 h-25" src="\data_file\pendaftaran.png" class="img-fluid">
								<p class="col-6 mt-3 ms-3 text-primary"><strong>Pendaftaran</strong></p>
							</div></a>
					<a class="btn btn-light mt-2 btn-block border" href="/schoola/bantuansekolah" role="button">
							<div class="hstack">
								<img class="col-6 w-25 h-25" src="\data_file\bantuan.png" class="img-fluid">
								<p class="col-6 mt-3 ms-3 text-primary"><strong>Bantuan</strong></p>
							</div></a>
				</div>
			</div>
            <div>
					<div class="hstack gap-3 mt-5">
						<div>
							<button class="btn" onclick="window.location.href='/schoola/lhtresp'"><img style="width: 50px; height: 50px" src="\data_file\arrow.png" class="img-fluid"></button>
						</div>
						<div>
							<h3 class="text-primary">Pendaftaran</h3>
						</div>
					</div>
				</div>
    @section('atas')

    <div class="content">
                <div class="bg-bandingkan2">


                    <h1 class="teksberanda1" style="color:6070FF"><b>Formulir</b></h1><div class="ScrollStyle">
                    <h5><b>* Peserta Didik</b></h5>

                    <div class="mb-3 mt-3 p-3">@foreach($responsformulir as $f2)
                        <label for="namaLengkap" class="form-label"
                            style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Nama Lengkap</label>
                        <input type="text" class="form-control inputmasuk2" id="namaLengkap" placeholder="Masukkan nama"
                            name="namaLengkap" value="{{ $f2->namalengkap_pd }}" disabled>
                        <div class="mb-3 mt-3">
                            <label for="namaPanggilan" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Nama panggilan</label>
                            <input type="text" class="form-control inputmasuk2" id="namaPanggilan"
                                placeholder="Masukkan Nama panggilan" name="namaPanggilan" value="{{ $f2->namapanggilan_pd }}"
                                disabled>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="nikAnak" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">NIK</label>
                            <input type="text" class="form-control inputmasuk2" id="nikAnak"
                                placeholder="Masukkan NIK Anak" name="nikAnak" value="{{ $f2->nik_pesertadidik }}" disabled >
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="kewarganegaraan" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Kewarganegaraan</label>
                            <input type="text" class="form-control inputmasuk2" id="kewarganegaraan"
                                placeholder="Masukkan kewarganegaraan" name="kewarganegaraan" value="{{ $f2->kewarganegaraan_pd }}"
                                disabled>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="tempat" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Tempat</label>
                                <input type="textarea" class="form-control inputmasuk2" placeholder="Masukkan Tempat Lahir"  value="{{ $f2->tempat_pd }}"
                                    name="tempat" id="tempat" disabled>

                            </div>
                            <div class="col">
                                <label for="tanggalLahir" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Tanggal Lahir</label>
                                <input type="date" class="form-control inputmasuk2" placeholder="Masukkan Tanggal lahir"  value="{{ $f2->tanggallahir_pd}}"
                                    name="tanggalLahir" id="tanggalLahir" disabled>

                            </div>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="alamat" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Alamat</label>
                            <input type="textarea" class="form-control inputmasuk2" id="alamat"
                                placeholder="Masukkan alamat" name="alamat" value="{{ $f2->alamat_pd }}" disabled>

                        </div>
                        <div class="row mb-3 mt-3">
                            <div class="col">
                                <label for="agama" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Agama</label>
                                <input type="textarea" class="form-control inputmasuk2" placeholder="Masukkan Agama" value="{{ $f2->agama_pd }}"
                                    name="agama" id="agama" disabled>

                            </div>
                            <div class="col">
                                <label for="anakKe" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Anak ke</label>
                                <input type="Number" class="form-control inputmasuk2" placeholder="Masukkan anak ke" value="{{ $f2->anakke_pd }}"
                                    name="anakKe" id="anakKe" disabled>

                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <div class="col">
                                <p> Jenjang </p>
                               {{ $f2->jenjang }}
                            </div>
                            <div class="col">
                                <label for="jumlahSaudara" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Jumlah Saudara</label>
                                <input type="Number" class="form-control inputmasuk2"
                                    placeholder="Masukkan Jumlah Saudara" value="{{ $f2->jumlahsaudara_pd }}" name="jumlahSaudara" id="jumlahSaudara" disabled>

                                </div>

                        </div>
                        <div class="row mb-3 mt-3">
                            <div class="col">
                                <p> Jenis Kelamin </p>
                               {{ $f2->jeniskelamin }}
                            </div>
                        </div>
                    </div>


                    <h5><b>* Orang Tua (Ayah)</b></h5>
                    <div class="mb-3 mt-3 p-3">
                        <label for="namaayah" class="form-label"
                            style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Nama Ayah/Wali</label>
                        <input type="text" class="form-control inputmasuk2" id="namaAyah"
                            placeholder="Masukkan nama Orang Tua" name="namaayah" value="{{ $f2->nama_ay }}" disabled>

                            <div class="mb-3 mt-3">
                            <label for="NIKayah" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">NIK</label>
                            <input type="text" class="form-control inputmasuk2" id="NIKayah"
                                placeholder="Masukkan NIK Orang Tua" name="NIKayah" value="{{ $f2->nik_ay }}" disabled>

                            </div>
                        <div class="mb-3 mt-3">
                                <label for="pekerjaanAyah" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Pekerjaan</label>
                                <input type="text" class="form-control inputmasuk2" id="pekerjaanAyah"
                                    placeholder="Masukkan pekerjaan orang tua" name="pekerjaanAyah"
                                    value="{{ $f2->pekerjaan_ay}}" disabled>

                        </div>
                        <div class="mb-3 mt-3">
                                <label for="pendidikanAyah" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Pendidikan Terakhir</label>
                                <input type="text" class="form-control inputmasuk2" id="pendidikanAyah"
                                    placeholder="Masukkan Pendidikan Terakhir Orang Tua" name="pendidikanAyah"
                                    value="{{ $f2->pendidikan_ay }}" disabled>
                        </div>
                        <div class="mb-3 mt-3">
                                <label for="tanggalAyah" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Tanggal Lahir</label>
                                <input type="date" class="form-control inputmasuk2" id="tanggalAyah"
                                    placeholder="Masukkan Tanggal Lahir Orang Tua" name="tanggalAyah"
                                    value="{{ $f2->ttl_ay }}" disabled>
                        </div>
                        <div class="mb-3 mt-3">
                                <label for="nomorAyah" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Nomor telepon</label>
                                <input type="text" class="form-control inputmasuk2" id="nomorAyah"
                                    placeholder="Masukkan nomor telepon Orang Tua" name="nomorAyah"
                                    value="{{$f2->telpon_ay}}" disabled>

                        </div>
                        <div class="form-group">
                            <label for="alamatAyah" class="form-label" style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Alamat</label>
                            <textarea name="alamatAyah" id="alamatAyah" class="form-control" cols="30"  rows="10" placeholder="Masukkan Alamat Orang Tua" disabled>{{ $f2->alamat_ay }}</textarea>

                        </div>
                    </div>

                    <h5><b>* Orang Tua(Ibu)</b></h5>
                    <div class="mb-3 mt-3 p-3">
                        <label for="namaIbu" class="form-label"
                            style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Nama Ibu/Wali</label>
                        <input type="text" class="form-control inputmasuk2" id="namaIbu"
                            placeholder="Masukkan nama Orang Tua" name="namaIbu"  value="{{ $f2->nama_ib }}" disabled>

                        <div class="mb-3 mt-3">
                            <label for="nikIbu" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">NIK</label>
                            <input type="text" class="form-control inputmasuk2" id="nikIbu"
                                placeholder="Masukkan NIK Orang Tua" name="nikIbu" value="{{ $f2->nik_ib }}" disabled>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="pekerjaanIbu" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Pekerjaan</label>
                            <input type="text" class="form-control inputmasuk2" id="pekerjaanIbu"
                                placeholder="Masukkan pekerjaan Orang Tua" name="pekerjaanIbu" value="{{ $f2->pekerjaan_ib }}" disabled>
                            </div>
                        <div class="mb-3 mt-3">
                            <label for="pendidikanIbu" class="form-label" style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Pendidikan Terakhir</label>
                            <input type="text" class="form-control inputmasuk2" id="pendidikanIbu" placeholder="Masukkan Pendidikan Terakhir Orang Tua" name="pendidikanIbu"
                                value="{{ $f2->pendidikan_ib }}" disabled>

                        </div>
                        <div class="mb-3 mt-3">
                            <label for="tanggalIbu" class="form-label" style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Tanggal Lahir</label>
                            <input type="date" class="form-control inputmasuk2" id="tanggalIbu" placeholder="Masukkan Tanggal Lahir Orang Tua" name="tanggalIbu"
                                 value="{{ $f2->ttl_ib }}" disabled>

                        </div>
                        <div class="mb-3 mt-3">
                            <label for="nomorIbu" class="form-label" style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Nomor Telepon</label>
                            <input type="text" class="form-control inputmasuk2" id="nomorIbu" placeholder="Masukkan nomor telepon Orang Tua" name="nomorIbu"
                                value="{{$f2->telpon_ib }}" disabled>

                        </div>
                        <div class="form-group">
                            <label for="alamatIbu" class="form-label" style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Alamat</label>
                            <textarea name="alamatIbu" id="alamatIbu" class="form-control" cols="30" rows="10" placeholder="Masukkan Alamat Orang Tua" disabled >{{ $f2->alamat_ib }}</textarea>
                        </div>
                    </div>

                    <h5><b>* Periodik Anak</b></h5>
                    <div class="mb-3 mt-3 p-3">
                        <label for="tinggi" class="form-label" style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Tinggi
                            Badan</label>
                        <input type="number" class="form-control inputmasuk2" id="tinggi" placeholder="Masukkan Tinggi badan"
                            name="tinggi" value="{{$f2->tinggi_ank }}" disabled>

                        <div class="mb-3 mt-3">
                            <label for="berat" class="form-label" style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Berat
                                Badan</label>
                            <input type="number" class="form-control inputmasuk2" id="berat" placeholder="Masukkan berat badan"
                                name="berat" value="{{ $f2->berat_ank }}" disabled>

                        </div>
                        <div class="form-group mb-3 mt-3">
                            <label>Riwayat Kesehatan (Pilihan Bisa Lebih dari 1)</label>
                            <br>
                            {{ $f2->rk_cacar }},{{ $f2->rk_tbc }},{{ $f2->rk_asma }},{{ $f2->rk_lainnya }}
                        </div>
                        <div class="form-group mb-3 mt-3">
                            <label>Riwayat Imunisasi (Pilihan Bisa Lebih dari 1)</label>
                            <br>
                            {{ $f2->ri_polio }},{{ $f2->ri_rubella}},{{ $f2->ri_vaksin8 }},{{ $f2->ri_lainnya }}
                        </div>
                    </div>

                    <h5><b>* Unggah Berkas</b></h5>
                    <div class="mb-3 mt-3 p-3">
                        <label for="akta" class="form-label"
                            style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Akta Kelahiran</label>
                        <br><img src="/data_formulir/{{ $f2->akta }}" width=50%>
                        <div class="mb-3 mt-3">
                            <label for="kk" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Kartu Keluarga (KK)</label>

                             <br><img src="/data_formulir/{{ $f2->kk }}" width=50%>
                        </div>
                         <div class="mb-3 mt-3">
                            <label for="foto" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Foto Berwarna 3x4</label>
                               <br> <img src="/data_formulir/{{ $f2->ft }}" width=50%>
                         </div>
                    </div>

                    <h5><b>* Pembayaran</b></h5>
                    <div class="mb-3 mt-3 p-3">
                        <br> <img src="/data_formulir/{{ $f2->bayar }}" width=50%>
                    </div>

@endforeach

                </div>
            </div></div>


    @endsection

</div>
</div>
</div>
</div>
</div>

</div>
		<div class="row"><br><br><br><br><br><br></div>
	</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>
