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

	<nav class="navbar navbar-light bg-light border-bottom py-3 mb-4" style="z-index: 2">
		<a class="col-2 ms-5 mt-2" href="#" style="width: 100px; height:50px"><img src="\data_file\logo.png" class="img-fluid"></a>
		<a class="end-0 col-1 me-5" href="/schoola/akunortu" style="width: 50px; height:50px"><img src="\data_file\user.png" class="img-fluid"></a>
	  </nav>
<!--ellipses bs hapus aj-->
	  <img class="end-0 col-9 img-fluid" style="z-index: 1; top: 0px; position: absolute; margin: auto" src="\data_file\ellipse.png">
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
<!--img hi dan judul-->
				</div>
			</div>
			<div class="col-9">
			<div class="vstack gap-5">
				<div class="container">
					<div class="row">
					<div class="col-4">
				<img class="position-relative img-fluid" style="left: 10%" src="\data_file\hihomepage.png">
			</div>
			<div class="col-8">
				<p class="position-relative text-light text-center fs-3" style="top: 30%"><strong>Daftar TK Sekarang Lebih Mudah!</strong></p>
				<p class="position-relative text-dark text-center fs-6" style="top: 30%"><strong>Dapatkan Informasi Sekolah untuk Putra Putri<br>Anda dengan Mudah bersama Schoola</strong></p>
			</div>
		</div>
				</div>
<!--searchbar-->
				<div class="container-fluid">
					<div class="row mt-4 mb-4">
						<nav class="navbar navbar-light">
							<div class="container-fluid">
							  <form class="d-flex flex-fill">
								<input class="form-control" type="search" placeholder="Cari Sekolah" aria-label="Search">
								<button class="btn" type="submit"><img style="width: 30px; height: 30px" src="\data_file\search.png"></button>
								<div class="btn-group">
								<button type="button" class="btn btndropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
									<img style="width: 30px; height: 30px" src="\data_file\filter.png">
								</button>
								<ul class="dropdown-menu">
	  							<li>
									<div class="dropdown-item form-check ms-3">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
										<label class="form-check-label" for="flexCheckDefault">
										  Akreditas
										</label>
									  </div>
								</li>
	  							<li>
									<div class="dropdown-item form-check ms-3">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
										<label class="form-check-label" for="flexCheckDefault">
										  Kuota
										</label>
									  </div>
								</li>
	  							<li>
									<div class="dropdown-item form-check ms-3">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
										<label class="form-check-label" for="flexCheckDefault">
										  Nama Sekolah
										</label>
									  </div>
								</li>
	  							<li><hr class="dropdown-divider"></li>
	  							<li>
									<button type="button" class="btn btn-secondary btn-sm ms-2">Hapus Sortir</button>
								</li>
								</ul>
  								</div>
							  </form>
							</div>
						  </nav>
					</div>
<!--card2 sekolah-->
					<div class="row mb-4 g-3">
						<div class="col-6">
							<div class="card mb-3" style="max-width: 540px;">
								<div class="row g-0">
								  <div class="col-md-4 d-flex align-items-center">
									<img src="\data_file/tkcendekia.png" class="img-fluid rounded-start">
								  </div>
								  <div class="col-md-7">
									<div class="card-body">
									  <h5 class="card-title">TK Cendikia Permata</h5>
									  <p class="card-title">Sukolilo, Surabaya</p>
									  <p class="card-text">Akreditasi: A
										<br>Kuota Peserta Didik: 90 siswa
										<br>Jalan Teknik Komputer I No 12, Sukolilo
									  </p>
									</div>
								  </div>
								  <div class="col-md-1 d-flex align-items-stretch">
									<button type="button" class="btn btn-sm p-2" onclick="window.location.href='/schoola/profil'">></button>
								</div>
								</div>
							  </div>
						</div>
						<div class="col-6">
							<div class="card mb-3" style="max-width: 540px;">
								<div class="row g-0">
								  <div class="col-md-4 d-flex align-items-center">
									<img src="\data_file/tkpelita.png" class="img-fluid rounded-start">
								  </div>
								  <div class="col-md-7">
									<div class="card-body">
									  <h5 class="card-title">TK Pelita Harapan Nusa</h5>
									  <p class="card-title">Sukolilo, Surabaya</p>
									  <p class="card-text">Akreditasi: A
										<br>Kuota Peserta Didik: 90 siswa
										<br>Jalan Teknik Komputer I No 12, Sukolilo
									  </p>
									</div>
								  </div>
								  <div class="col-md-1 d-flex align-items-stretch">
									<button type="button" class="btn btn-sm p-2" onclick="window.location.href='/schoola/profil'">></button>
								</div>
								</div>
							  </div>
						</div>
					</div>
					<div class="row mb-4 g-3">
						<div class="col-6">
						<div class="card mb-3" style="max-width: 540px;">
							<div class="row g-0">
							  <div class="col-md-4 d-flex align-items-center">
								<img src="\data_file/tksepuluh.png" class="img-fluid rounded-start">
							  </div>
							  <div class="col-md-7">
								<div class="card-body">
								  <h5 class="card-title">TK Sepuluh Nopember</h5>
								  <p class="card-title">Sukolilo, Surabaya</p>
								  <p class="card-text">Akreditasi: A
									<br>Kuota Peserta Didik: 90 siswa
									<br>Jalan Teknik Komputer I No 12, Sukolilo
								  </p>
								</div>
							  </div>
							  <div class="col-md-1 d-flex align-items-stretch">
								<button type="button" class="btn btn-sm p-2" onclick="window.location.href='/schoola/profil'">></button>
							</div>
							</div>
						  </div>
						</div>
						<div class="col-6">
							<div class="card mb-3" style="max-width: 540px;">
								<div class="row g-0">
								  <div class="col-md-4 d-flex align-items-center">
									<img src="\data_file/tkpembina.png" class="img-fluid rounded-start">
								  </div>
								  <div class="col-md-7">
									<div class="card-body">
									  <h5 class="card-title">TK Pembina IV Surabaya</h5>
									  <p class="card-title">Sukolilo, Surabaya</p>
									  <p class="card-text">Akreditasi: A
										<br>Kuota Peserta Didik: 90 siswa
										<br>Jalan Teknik Komputer I No 12, Sukolilo
									  </p>
									</div>
								  </div>
								  <div class="col-md-1 d-flex align-items-stretch">
									<button type="button" class="btn btn-sm p-2" onclick="window.location.href='/schoola/profil'">></button>
								</div>
								</div>
							  </div>
						</div>
					</div>
				</div>
			</div>
			</div>

		</div>
<!--spasi bawah-->
		<div class="row"><br><br><br><br><br><br></div>
	</div>

	

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>