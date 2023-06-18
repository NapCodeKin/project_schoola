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
		<a class="end-0 col-1 me-5" href="/schoola/berandaSekolah" style="width: 50px; height:50px"><img src="\data_file\arrow.png" class="img-fluid"></a>
	  </nav>

</header>

<body style="background-color: #F2F4FF">
<!--sidebar-->
	<div class="container" style="position: relative">
		<div class="row">
			<div class="col-3">
					<a class="btn btn-primary mt-2 border" style="width: 100%; height: 18%" href="#" role="button">
						<div class="hstack">
							<img class="col-6 w-25 h-25" src="\data_file\userw.png">
							<p class="col-6 mt-3 ms-3 text-light"><strong>Informasi Akun</strong></p>
						</div></a>
					<button type="button" class="btn btn-light mt-2 border" style="width: 100%; height: 20%" data-bs-toggle="modal" data-bs-target="#exampleModal">
							<div class="hstack">
								<img class="col-6 w-25 h-25" src="\data_file\logout.png">
								<p class="col-6 mt-3 ms-3 text-danger"><strong>Logout</strong></p>
							</div></button>
						</div>
						  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							  <div class="modal-content">
								<div class="modal-body">
									Apakah Anda Yakin Logout Dari Akun Schoola ini?
								</div>
								<div class="modal-footer">
								  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
								  <a type="button" href="/schoola/mulai" class="btn btn-danger">Logout</a>
								</div>
							  </div>
							</div>
						  </div>

<!--searchbar-->
				<div class="col-7">
					@foreach($user_sekolah as $u)
					<form>
						<fieldset disabled>
						  <div class="mb-3">
							<label for="disabledTextInput" class="form-label">Nama Sekolah</label>
							<input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $u->name }}">
						  </div>
						  <div class="mb-3">
							<label for="disabledTextInput" class="form-label">Email</label>
							<input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $u->email }}">
						  </div>
						  <div class="mb-3">
							<label for="disabledTextInput" class="form-label">Alamat Sekolah</label>
							<input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $u->alamat }}">
						  </div>
						  <div class="mb-3">
							<label for="disabledTextInput" class="form-label">Nomor Telepon Kantor</label>
							<input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $u->notelp }}">
						  </div>
						  <div class="mb-3">
							<label for="disabledTextInput" class="form-label">NPWP</label>
							<input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $u->npwp }}">
						  </div>
						</fieldset>
					</form>
					@endforeach
				</div>
				<div class="col-2">
					<img src="\data_file\user.png" class="img-fluid">
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