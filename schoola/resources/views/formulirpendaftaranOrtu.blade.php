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
							<button class="btn" onclick="window.location.href='/schoola/profil'"><img style="width: 50px; height: 50px" src="\data_file\arrow.png" class="img-fluid"></button>
						</div>
						<div>
							<h3 class="text-primary">Profil</h3>
						</div>
					</div>
				</div>
            <div class="card" style="width: 100%;">
				<div class="card-body">
    <div class="container mx-auto max-w-2xl" style="margin-left: 30px; margin-right: 20px;">
        <h1 style="margin-bottom: 15px;"><b>Peserta Didik</b></h1>
        <form class="text-left" method="post" action="/schoola/formOrtu/simpan1">
            @csrf
            <div class="mb-4">
                <label for="nama_lengkap" class="block text-gray-700 text-sm font-bold mb-2"><b>Nama Lengkap</b></label>
                <input type="text" id="nama_lengkap" name="namalengkap_pd" class="form-input rounded w-full">
            </div>
            <div class="mb-4">
                <label for="nama_panggilan" class="block text-gray-700 text-sm font-bold mb-2"><b>Nama Panggilan</b></label>
                <input type="text" id="nama_panggilan" name="namapanggilan_pd" class="form-input rounded w-full">
            </div>
            <div class="mb-4">
                <label for="nik" class="block text-gray-700 text-sm font-bold mb-2"><b>NIK</b></label>
                <input type="text" id="nik" name="nik_pesertadidik" class="form-input rounded w-full">
            </div>
            <div class="mb-4 flex">
                <div class="w-2 pr-4">
                    <label for="kewarganegaraan" class="block text-gray-700 text-sm font-bold mb-2"><b>Kewarganegaraan</b></label>
                    <input type="text" id="kewarganegaraan" name="kewarganegaraan_pd" class="form-input rounded-md shadow-sm w-full">
                </div>
                <div class="w-2 pl-2">
                    <label for="agama" class="block text-gray-700 text-sm font-bold mb-2"><b>Agama</b></label>
                    <input type="text" id="agama" name="agama_pd" class="form-input rounded-md shadow-sm w-full;">
                </div>
            </div>
            <div class="mb-4 flex">
                <div class="w-3 pr-2">
                        <label for="tempatlahir" class="block text-gray-700 text-sm font-bold mb-2"><b>Tempat Lahir</b></label>
                        <input type="text" id="tempatlahir" name="tempat_pd" class="form-input rounded-md shadow-sm w-full">
                </div>
                <div class="w-3 px-2">
                    <label for="tanggallahir" class="block text-gray-700 text-sm font-bold mb-2"><b>Tanggal Lahir</b></label>
                    <input type="date" id="tanggallahir" name="tanggallahir_pd" class="form-input rounded-md shadow-sm w-full">
                </div>
                <div class="w-3 pl-2">
                    <label for="jenis_kelamin" class="block text-gray-700 text-sm font-bold mb-2"><b>Jenis Kelamin</b></label>
                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-input rounded-md shadow-sm w-full" >
                        <option value="" selected disabled></option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="mb-4 flex">
                <div class="w-3 pr-2">
                    <label for="anakke" class="block text-gray-700 text-sm font-bold mb-2"><b>Anak Ke</b></label>
                    <input type="number" id="anakke" name="anakke_pd" class="form-input rounded-md shadow-sm w-full">
                </div>
                <div class="w-3 px-2">
                    <label for="jumlahsaudara" class="block text-gray-700 text-sm font-bold mb-2"><b>Jumlah Saudara</b></label>
                    <input type="number" id="jumlahsaudara" name="jumlahsaudara_pd" class="form-input rounded-md shadow-sm w-full">
                </div>
                <div class="w-3 pl-2">
                    <label for="golongan_darah" class="block text-gray-700 text-sm font-bold mb-2"><b>Golongan Darah</b></label>
                    <div class="flex">
                        <label class="inline-flex items-center ml-3">
                            <input type="radio" name="golongan_darah" value="A" class="form-radio">
                            <span class="ml-1">A</span>
                        </label>
                        <label class="inline-flex items-center ml-3">
                            <input type="radio" name="golongan_darah" value="B" class="form-radio">
                            <span class="ml-1">B</span>
                        </label>
                        <label class="inline-flex items-center ml-3">
                            <input type="radio" name="golongan_darah" value="O" class="form-radio">
                            <span class="ml-1">O</span>
                        </label>
                        <label class="inline-flex items-center ml-3">
                            <input type="radio" name="golongan_darah" value="AB" class="form-radio">
                            <span class="ml-1">AB</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 flex">
                <div class="w-2">
                    <label for="alamat" class="block text-gray-700 text-sm font-bold mb-2"><b>Alamat</b></label>
                    <textarea id="alamat" name="alamat_pd" class="form-input rounded-md shadow-sm w-full h-24"></textarea>
                </div>

                <div class="w-2 px-2">
                    <label for="kodepos" class="block text-gray-700 text-sm font-bold mb-2"><b>Kodepos</b></label>
                    <input type="text" id="kodepos" name="kodepos" class="form-input rounded-md shadow-sm w-full">
                </div>
            </div>
            <div class="mb-4 flex">
                <div class="w-3 pr-2">
                        <label for="provinsi" class="block text-gray-700 text-sm font-bold mb-2"><b>Provinsi</b></label>
                        <input type="text" id="provinsi" name="provinsi" class="form-input rounded-md shadow-sm w-full">
                </div>
                <div class="w-3 px-2">
                    <label for="kota" class="block text-gray-700 text-sm font-bold mb-2"><b>Kabupaten/Kota</b></label>
                    <input type="text" id="kota" name="kota" class="form-input rounded-md shadow-sm w-full">
                </div>
                <div class="w-3 pl-2">
                    <label for="kecamatan" class="block text-gray-700 text-sm font-bold mb-2"><b>Kecamatan</b></label>
                    <input type="text" id="kecamatan" name="kecamatan" class="form-input rounded-md shadow-sm w-full">
                </div>
            </div>
            <div class="text-center" style="margin-top: 30px">
            <button type="submit" class="bg-purple-500 hover:bg-purple-700 text-black font-bold py-2 px-4 rounded-md">Selanjutnya</button>
            </div>
        </form>
    </div>
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