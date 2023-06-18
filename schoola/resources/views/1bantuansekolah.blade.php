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

</header>


<body style="background-color: #F2F4FF">
<!--sidebar-->
	<div class="container">
		<div class="row">
			<div class="col-3">
				<div>
					<a class="btn btn-light w-100 h-50 mt-2 btn-block border" href="/schoola/berandaSekolah" role="button">
						<div class="hstack">
							<img class="col-6 w-25 h-25" src="\data_file\beranda.png" class="img-fluid">
							<p class="col-6 mt-3 ms-3 text-primary"><strong>Beranda</strong></p>
						</div></a>
					<a class="btn btn-light w-100 h-50 mt-2 btn-block border" href="#" role="button">
							<div class="hstack">
								<img class="col-6 w-25 h-25" src="\data_file\pendaftaran.png" class="img-fluid">
								<p class="col-6 mt-3 ms-3 text-primary"><strong>Pendaftaran</strong></p>
							</div></a>
					<a class="btn btn-primary w-100 h-50 mt-2 btn-block border" href="#" role="button">
							<div class="hstack">
								<img class="col-6 w-25 h-25" src="\data_file\bantuanw.png" class="img-fluid">
								<p class="col-6 mt-3 ms-3 text-light"><strong>Bantuan</strong></p>
							</div></a>
<!--btn back-->
				</div>
			</div>
			<div class="col-9">
			<div class="vstack gap-3">
				<div>
					<div class="hstack gap-3">
						<div>
							<button class="btn" onclick="window.location.href='/schoola/berandaSekolah'"><img style="width: 50px; height: 50px" src="\data_file\arrow.png" class="img-fluid"></button>
						</div>
						<div>
							<h3 class="text-primary">Bantuan</h3>
						</div>
					</div>
				</div>
<!--konten-->
				<div class="accordion" id="accordionPanelsStayOpenExample">
					<div class="accordion-item mt-3 mb-3">
					  <h2 class="accordion-header" id="panelsStayOpen-headingOne">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
						<strong>Bagaimana jika informasi profil saya belum selesai?</strong>
						</button>
					  </h2>
					  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
						<div class="accordion-body">
						Di dasbor, akan ada bagian yang mengingatkan Anda berapa banyak informasi
akun Anda belum diisi. Akan ada tautan untuk mengarahkan Anda untuk mengisi yang hilang
informasi yang diperlukan untuk melengkapi akun Anda.
						</div>
					  </div>
					</div>
					<div class="accordion-item mt-3 mb-3 border-top">
					  <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
						<strong>Beberapa tombol situs tidak berfungsi.</strong>
						</button>
					  </h2>
					  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
						<div class="accordion-body">
						Entah situs tersebut masih dalam pembangunan atau koneksi internet Anda tidak stabil. Periksa bandwidth dan koneksi internet Anda sebelum melanjutkan.
						</div>
					  </div>
					</div>
					<div class="accordion-item mt-3 mb-3 border-top">
					  <h2 class="accordion-header" id="panelsStayOpen-headingThree">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
						<strong>Formulir dalam pendaftaran mencantumkan setiap hasil pelamar, padahal itu hanya dimaksudkan untuk menunjukkan satu.</strong>
						</button>
					  </h2>
					  <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
						<div class="accordion-body">
						Itu bisa jadi kesalahan pengkodean atau koneksi internet Anda tidak stabil. Periksa bandwidth dan koneksi internet Anda sebelum melanjutkan.
						</div>
					  </div>
					</div>
				  </div>
				</div>
			</div>
		</div>
	</div>

	

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>