@extends ('master')

<!--navbar logo dan user-->
<header>

	<nav class="navbar navbar-light bg-light border-bottom py-3 mb-4">
		<a class="col-2 ms-5 mt-2" href="#" style="width: 100px; height:50px"><img src="\data_file\logo.png" class="img-fluid"></a>
		<a class="end-0 col-1 me-5" href="/schoola/akunortu" style="width: 50px; height:50px"><img src="\data_file\user.png" class="img-fluid"></a>
	  </nav>

</header>
    
<body style="background-color: #F2F4FF">
<div class="container" style="position: relative; z-index: 2">
		<div class="row">
			<div class="col-3">
				<div>
					<a class="btn btn-light w-100 h-50 mt-2 btn-block border" href="#" role="button">
						<div class="hstack">
							<img class="col-6 w-25 h-25" src="\data_file\beranda.png" class="img-fluid">
							<p class="col-6 mt-3 ms-3 text-primary"><strong>Beranda</strong></p>
						</div></a>
					<a class="btn btn-light w-100 h-50 mt-2 btn-block border" href="#" role="button">
							<div class="hstack">
								<img class="col-6 w-25 h-25" src="\data_file\favorit.png" class="img-fluid">
								<p class="col-6 mt-3 ms-3 text-primary"><strong>Favorit</strong></p>
							</div></a>
					<a class="btn btn-light w-100 h-50 mt-2 btn-block border" href="/schoola/bantuanorangtua" role="button">
							<div class="hstack">
								<img class="col-6 w-25 h-25" src="\data_file\bantuan.png" class="img-fluid">
								<p class="col-6 mt-3 ms-3 text-primary"><strong>Bantuan</strong></p>
							</div></a>
				</div>
			</div>
            <div class="col-9">
            <div>
					<div class="hstack gap-3">
						<div>
							<button class="btn" onclick="window.location.href='/schoola/formOrtu2'"><img style="width: 50px; height: 50px" src="\data_file\arrow.png" class="img-fluid"></button>
						</div>
						<div>
							<h3 class="text-primary">Formulir Pendaftaran</h3>
						</div>
					</div>
				</div>
            <div class="card" style="width: 100%;">
				<div class="card-body">
 <!--form inbetween-->
 <div class="container mx-auto max-w-2xl" style="margin-left: 30px; margin-right: 30px;">
        <h1 style="margin-bottom: 15px;"><b>Periodik Anak</b></h1>
        <div class="container mx-auto max-w-2xl" style="width: 100%;">
            <div style="float: left; width: 50%;">
                <form class="text-left" method="post" action="/schoola/formOrtu/simpan3">
                    @csrf
                    <div class="mb-4">
                        <label for="tinggibadan" class="text-gray-700 text-sm font-bold mb-2"><b>Tinggi Badan</b></label>
                        <input type="text" id="tinggibadan" name="tinggi_ank" class="form-input rounded-md shadow-sm" style="width: 10cm; height: 30px;">
                        <span class="ml-2">cm</span>
                    </div>
                    <div class="mb-4">
                        <label for="beratbadan" class="block text-gray-700 text-sm font-bold mb-2"><b>Riwayat Kesehatan (Pilihan bisa lebih dari 1)</b></label>
                        <div class="flex flex-col ml-4">
                            <div class="flex items-center">
                                <input type="checkbox" id="riwayatkesehatan_cacar" name="riwayatkesehatan_cacar" value="imunisasi_pollo">
                                <label for="rk_cacar" class="ml-2">Cacar</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="riwayatkesehatan_tbc" name="riwayatkesehatan_tbc" value="riwayatkesehatan_tbc">
                                <label for="rk_tbc" class="ml-2">TBC</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="riwayatkesehatan_asma" name="riwayatkesehatan_asma" value="riwayatkesehatan_asma">
                                <label for="rk_asma" class="ml-2">Asma/Sesak Napas</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="riwayatkesehatan_lainnya" name="riwayatkesehatan_lainnya" value="riwayatkesehatan_lainnya">
                                <label for="rk_lainnya" class="ml-2">Lainnya</label>
                            </div>
                        </div>
                    </div>
            </div>
            <div style="float: right; width: 50%;">
                <div class="text-left">
                    <div class="mb-4">
                        <label for="beratbadan" class="text-gray-700 text-sm font-bold mb-2"><b>Berat badan</b></label>
                        <input type="text" id="beratbadan" name="berat_ank" class="form-input rounded-md shadow-sm" style="width: 10cm; height: 30px;">
                        <span class="ml-2">kg</span>
                    </div>
                    <div class="mb-4">
                        <label for="beratbadan" class="block text-gray-700 text-sm font-bold mb-2"><b>Riwayat Imunisasi (Pilihan bisa lebih dari 1)</b></label>
                        <div class="flex flex-col ml-4">
                            <div class="flex items-center">
                                <input type="checkbox" id="imunisasi_pollo" name="ri_pollo" value="imunisasi_pollo">
                                <label for="imunisasi_pollo" class="ml-2">Pollo</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="imunisasi_rubella" name="ri_rubella" value="imunisasi_rubella">
                                <label for="imunisasi_rubella" class="ml-2">Rubella</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="imunisasi_vaksinb" name="ri_vaksin8" value="imunisasi_vaksinb">
                                <label for="imunisasi_vaksinb" class="ml-2">Vaksin B</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="imunisasi_lainnya" name="ri_lainnya" value="imunisasi_lainnya">
                                <label for="imunisasi_lainnya" class="ml-2">Lainnya</label>
                            </div>
                        </div>
                    </div>
</div>
            </div>
        </div>
        <h1 style="margin-bottom: 10px;"><b>Unggah Berkas</b></h1>
        <div enctype="multipart/form-data">
            <div class="flex">
                <div class="w-1/3 pr-2">
                  <label for="file1" class="block text-gray-700 text-sm font-bold mb-2">Akta Kelahiran</label>
                  <input type="file" id="file1" name="file1" class="form-input">
                </div>
                <div class="w-1/3 px-2">
                  <label for="file2" class="block text-gray-700 text-sm font-bold mb-2">Kartu Keluarga (KK)</label>
                  <input type="file" id="file2" name="file2" class="form-input">
                </div>
                <div class="w-1/3 pl-2">
                  <label for="file3" class="block text-gray-700 text-sm font-bold mb-2">Foto Berwarna 3x4</label>
                  <input type="file" id="file3" name="file3" class="form-input">
                </div>
            </div>
            <!-- Tambahkan tombol submit atau elemen lain yang diperlukan -->
</div>
        <h1 style="margin-top: 10px; margin-bottom: 10px;"><b>Pembayaran</b></h1>
        <p><b>BNI</b> - 032198367280 a.n Burhan Ali Sutasno</p>
        <p><b>BRI</b> - 12790100134567500 a.n Suryati Nur Pratiwi</p>
        <p><b>Mandiri</b> - 005100567029829 a.n Burhan Ali Sutasno</p>
        <p><b>BCA</b> - 129653900 a.n Suryati Nur Pratiwi</p>
        <div enctype="multipart/form-data">
            @csrf
            <div class="mb-1 mt-2 text-center">
                <label for="file" class="block text-gray-700 text-sm font-bold mb-2"></label>
                <input type="file" id="file" name="file" class="form-input">
            </div>
            <div class="text-center mt-5">
                <button type="submit" class="px-4 py-2 bg-green-500 font-bold rounded">DAFTAR</button>
            </div>
</form>
</div>
    </div>
 <!--form inbetween-->
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