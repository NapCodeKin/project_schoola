<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width", initial-scale="1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<title>Schoola</title>
</head>

<!--navbar logo dan user-->
<header>

	<nav class="navbar navbar-light bg-light border-bottom py-3 mb-4">
		<a class="col-2 ms-5 mt-2" href="#" style="width: 100px; height:50px"><img src="\data_file\logo.png" class="img-fluid"></a>
		<a class="end-0 col-1 me-5" href="/schoola/akunsekolah" style="width: 50px; height:50px"><img src="\data_file\user.png" class="img-fluid"></a>
	  </nav>
<!--ellipses bs hapus aj-->
	  <img class="end-0 col-9 img-fluid" style="z-index: 1; top: 90px; position: absolute; margin: auto" src="\data_file\ellipse.png">
</header>


<body style="background-color: #F2F4FF">
<!--sidebar-->
	<div class="container" style="position: relative; z-index: 2">
		<div class="row">
			<div class="col-3">
				<div>
					<a class="btn btn-primary w-100 h-50 mt-2 btn-block border" href="#" role="button">
						<div class="hstack">
							<img class="col-6 w-25 h-25" src="\data_file\berandaw.png" class="img-fluid">
							<p class="col-6 mt-3 ms-3 text-light"><strong>Beranda</strong></p>
						</div></a>
					<a class="btn btn-light w-100 h-50 mt-2 btn-block border" href="/schoola/lhtresp" role="button">
							<div class="hstack">
								<img class="col-6 w-25 h-25" src="\data_file\pendaftaran.png" class="img-fluid">
								<p class="col-6 mt-3 ms-3 text-primary"><strong>Pendaftaran</strong></p>
							</div></a>
					<a class="btn btn-light w-100 h-50 mt-2 btn-block border" href="/schoola/bantuansekolah" role="button">
							<div class="hstack">
								<img class="col-6 w-25 h-25" src="\data_file\bantuan.png" class="img-fluid">
								<p class="col-6 mt-3 ms-3 text-primary"><strong>Bantuan</strong></p>
							</div></a>
				</div>
			</div>
<!--img hi dan judul-->
			<div class="col-9">
			<div class="vstack gap-5">
				<div class="hstack gap-5">
				<img class="position-relative w-50 h-50" style="width: 200px; height: 200px; left: 10%" src="\data_file\hihomepage.png">
				<p class="position-relative text-dark fs-2" style="left: 10%"><strong>Halo,<br>TK Cendekia Permata</strong></p>
				</div>
<!--card2-->
				<div class="container-fluid">
					<div class="row mb-4">
						<div class="col-6">
							<div class="card text-center" style="width: 100%;">
								<div class="card-body">
								  <h5 class="card-title">Identitas Sekolah</h5>
								  <table class="table table-sm">
									<thead>
									  <tr>
										<th scope="col"></th>
										<th scope="col"></th>
									  </tr>
									</thead>
									<tbody>
										@foreach($user_sekolah as $u)
									  <tr>
										<th scope="row">Nama</th>
										<td>{{ $u->name }}</td>
									  </tr>
									  <tr>
										<th scope="row">Alamat</th>
										<td>{{ $u->alamat }}</td>
									  </tr>
									  <tr>
										<th scope="row">Telepon</th>
										<td>{{ $u->notelp }}</td>
									  </tr>
									  <tr>
										<th scope="row">NPWP</th>
										<td>{{ $u->npwp }}</td>
										@endforeach
									  </tr>
									</tbody>
								  </table>
								</div>
							  </div>
						</div>
						<div class="col-6">
							<div class="card text-center" style="width: 100%;">
								<div class="card-body">
								  <h5 class="card-title">Profil Sekolah</h5>
								  <div class="progress mt-2 mb-2">
									<div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								  </div>
								  <p class="card-text">Profil sekolah yang sudah terisi baru 95%</p>
								  <h5 class="card-title">Lengkapi Profil</h5>
								  <p class="card-text">Unggah Foto Sampul Profil Sekolah</p>
								  <p><a class="link-opacity-50-hover" href="#">Lanjut</a></p>
								</div>
							  </div>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<div class="card text-center" style="width: 100%;">
								<a href="#" class="btn btn-primary btn-sm">
									<div class="hstack">
									<img class="col-6" style="width: 50px; height: 50px" src="\data_file\tambah.png" class="img-fluid">
									<p class="col-6 mt-3 ms-3 text-light text-center"><strong>Profil Sekolah</strong></p>
								</div></a>
							</div>
						</div>
						<div class="col-6">
							<div class="card text-center" style="width: 100%;">
								<div class="card-body">
								  <h5 class="card-title">On Progress Pendaftaran</h5>
								  <p class="card-text text-primary fs-2"><strong>36</strong> Pendaftar
									<p><a class="link-secondary link-opacity-50-hover" href="/schoola/lhtresp">Lihat</a></p>
								</p>
								  <div class="hstack justify-content-center">
									<img class="position-relative img-fluid me-3" style="bottom: 7px; width: 20px; height: 20px" src="\data_file\ppendaftar.png">
									<p class="me-3"> 20 perempuan</p>
									<img class="position-relative img-fluid me-3" style="bottom: 7px; width: 20px; height: 20px" src="\data_file\lpendaftar.png">
									<p class="me-3"> 16 laki laki</p>
								  </div>
								</div>
							  </div>
						</div>
					</div>
				</div>
			</div>
			</div>
<!--spasi bawah-->
		</div>
		<div class="row"><br><br><br><br><br><br></div>
	</div>

	

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>