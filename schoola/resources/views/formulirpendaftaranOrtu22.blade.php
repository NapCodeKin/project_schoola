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
							<button class="btn" onclick="window.location.href='/schoola/formOrtu'"><img style="width: 50px; height: 50px" src="\data_file\arrow.png" class="img-fluid"></button>
						</div>
						<div>
							<h3 class="text-primary">Formulir Pendaftaran</h3>
						</div>
					</div>
				</div>
            <div class="card" style="width: 100%;">
				<div class="card-body">
 <!--form inbetween-->
 <div class="container mx-auto max-w-2xl">
        <h1 style="margin-bottom: 15px;"><b>Orang Tua</b></h1>
        <div class="container mx-auto max-w-2xl">
            <div class="left-half-column">
                <!-- Konten Ayah -->
                <p class="mb-3"><b>AYAH</b></p>
                <form class="text-left" method="post" action="/schoola/formOrtu/simpan2">
                    @csrf
                    <div class="mb-4">
                        <label for="nama_ayah" class="block text-gray-700 text-sm font-bold mb-2"><b>Nama Ayah/Wali</b></label>
                        <input type="text" id="nama_ayah" name="nama_ay" class="form-input rounded-md shadow-sm w-8">
                    </div>
                    <div class="mb-4">
                        <label for="nik_ayah" class="block text-gray-700 text-sm font-bold mb-2"><b>NIK</b></label>
                        <input type="text" id="nik_ayah" name="nik_ay" class="form-input rounded-md shadow-sm w-8">
                    </div>
                    <div class="mb-4">
                        <label for="pekerjaan_ayah" class="block text-gray-700 text-sm font-bold mb-2"><b>Pekerjaan</b></label>
                        <input type="text" id="pekerjaan_ayah" name="pekerjaan_ay" class="form-input rounded-md shadow-sm w-8">
                    </div>
                    <div class="mb-4">
                        <label for="pendidikan_ayah" class="block text-gray-700 text-sm font-bold mb-2"><b>Pendidikan Terakhir</b></label>
                        <input type="text" id="pendidikan_ayah" name="pendidikan_ay" class="form-input rounded-md shadow-sm w-8">
                    </div>
                    <div class="mb-4 flex">
                        <div class="w-2">
                            <label for="tempatlahir_ayah" class="block text-gray-700 text-sm font-bold mb-2"><b>Tempat Lahir</b></label>
                            <input type="text" id="tempatlahir_ayah" name="tempatlahir_ay" class="form-input rounded-md shadow-sm w-7">
                        </div>
                        <div class="w-2">
                            <label for="tanggallahir_ayah" class="block text-gray-700 text-sm font-bold mb-2"><b>Tanggal Lahir</b></label>
                            <input type="date" id="tanggallahir_ayah" name="ttl_ay" class="form-input rounded-md shadow-sm w-7">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="notlp_ayah" class="block text-gray-700 text-sm font-bold mb-2"><b>Nomor Telepon</b></label>
                        <input type="text" id="notlp_ayah" name="telpon_ay" class="form-input rounded-md shadow-sm w-8">
                    </div>
                    <div class="mb-4">
                        <label for="alamat_ayah" class="block text-gray-700 text-sm font-bold mb-2"><b>Alamat</b></label>
                        <input type="text" id="alamat_ayah" name="alamat_ay" class="form-input rounded-md shadow-sm w-8">
                    </div>
</div>
            </div>
            <div class="left-half-column">
                <!-- Konten Ibu -->
                <p class="mb-3"><b>IBU</b></p>
                <div class="text-left">
                    <div class="mb-4">
                        <label for="nama_ibu" class="block text-gray-700 text-sm font-bold mb-2"><b>Nama Ibu/Wali</b></label>
                        <input type="text" id="nama_ibu" name="nama_ib" class="form-input rounded-md shadow-sm w-8">
                    </div>
                    <div class="mb-4">
                        <label for="nik_ibu" class="block text-gray-700 text-sm font-bold mb-2"><b>NIK</b></label>
                        <input type="text" id="nik_ibu" name="nik_ib" class="form-input rounded-md shadow-sm w-8">
                    </div>
                    <div class="mb-4">
                        <label for="pekerjaan_ibu" class="block text-gray-700 text-sm font-bold mb-2"><b>Pekerjaan</b></label>
                        <input type="text" id="pekerjaan_ibu" name="pekerjaan_ib" class="form-input rounded-md shadow-sm w-8">
                    </div>
                    <div class="mb-4">
                        <label for="pendidikan_ibu" class="block text-gray-700 text-sm font-bold mb-2"><b>Pendidikan Terakhir</b></label>
                        <input type="text" id="pendidikan_ibu" name="pendidikan_ib" class="form-input rounded-md shadow-sm w-8">
                    </div>
                    <div class="mb-4 flex">
                        <div class="w-2 pl-2">
                            <label for="tempatlahir_ibu" class="block text-gray-700 text-sm font-bold mb-2"><b>Tempat Lahir</b></label>
                            <input type="text" id="tempatlahir_ibu" name="tempatlahir_ibu" class="form-input rounded-md shadow-sm w-7">
                        </div>
                        <div class="w-2 px-2">
                            <label for="tanggallahir_ibu" class="block text-gray-700 text-sm font-bold mb-2"><b>Tanggal Lahir</b></label>
                            <input type="date" id="tanggallahir_ibu" name="ttl_ib" class="form-input rounded-md shadow-sm w-7">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="notlp_ibu" class="block text-gray-700 text-sm font-bold mb-2"><b>Nomor Telepon</b></label>
                        <input type="text" id="notlp_ibu" name="telpon_ib" class="form-input rounded-md shadow-sm w-8">
                    </div>
                    <div class="mb-4">
                        <label for="alamat_ibu" class="block text-gray-700 text-sm font-bold mb-2"><b>Alamat</b></label>
                        <input type="text" id="alamat_ibu" name="alamat_ib" class="form-input rounded-md shadow-sm w-8">
                    </div>
</div>
            </div>
        </div>
        <div class="text-center">
        <button type="submit" class="bg-purple-500 hover:bg-purple-700 text-black mt-6 font-bold py-2 px-4 rounded-md">Selanjutnya</button>
        </div>
</form>
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