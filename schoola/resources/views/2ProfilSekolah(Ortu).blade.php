@extends ('master')

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
					<a class="btn btn-light w-100 h-50 mt-2 btn-block border" href="/schoola/berandaOrtu" role="button">
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
							<button class="btn" onclick="window.location.href='/schoola/berandaOrtu'"><img style="width: 50px; height: 50px" src="\data_file\arrow.png" class="img-fluid"></button>
						</div>
						<div>
							<h3 class="text-primary">Formulir Pendaftaran</h3>
						</div>
					</div>
				</div>
            <div class="card" style="width: 100%;">
				<div class="card-body">
    
        <img src="/data_file/tkcendekia.png " width=100% height=40%;
            style="margin-bottom:-200px;display: block;
    background: rgba(0, 0, 0,0.6);">
    @foreach($user_sekolah as $u)
        <h1 style="color:white;padding-top:20px;margin-left:40px;font-family:Poppins,Sans-Serif">
        {{ $u->name }} <br>0.4 km
        </h1>
    
    <div class="row" style="--bs-gutter-x: 0rem;">
        <div class="bg-profil">
            <div class="col-12">
                <div id="Profil" class="tabcontent">
                    <div class="row" style="--bs-gutter-x: 0rem;">
                        <div class="col-md-4">
                            <div style="background-color:#F1F1F1;border-radius:20px;padding:20px;">
                                
                            <h6><b>Informasi Sekolah</b></h6>
                            {{ $u->alamat }}
                                    <div style="margin-bottom:20px;"></div>
                                    <h6><b>Hubungi Kami</b></h6>
                                    <h6> {{ $u->notelp }} </h6>
                                    @endforeach
                            </div>
                            <div style="margin-top:20px;background-color:#F1F1F1;border-radius:20px;padding:20px;">
                                <h6><b>Jadwal kegiatan Belajar</b></h6>
                                <h6>Senin s.d Jumat<span style="margin-right:32px"></span> 9.00AM - 1.00PM
                                </h6>
                                <h6>Sabtu<span style="margin-right:100px"></span> 9.00AM - 11.00AM
                                </h6>


                            </div>


                        </div>

                        <div class="col-md-4">
                            <div style="background-color:#F1F1F1;border-radius:20px;padding:20px;">
                                <h6><b>Fasilitas</b></h6>
                                <h6> Kelas kami adalah ruang terbuka yang higienis sehingga anak-anak memiliki banyak kebebasan. <br><br>
Taman bermain kami adalah area bermain di luar ruangan yang penting untuk perkembangan fisik anak-anak. </h6>
                                
                                    <img src=/data_file/tkcendekiaplay.jpeg width=20px height=auto
                                        style="margin-right:10px;">Playground<br style="margin-bottom:15px;">
                                
                                    <img src=/data_file/tkcendekiaclass.jpeg width=20px height=auto
                                        style="margin-right:10px;">Kelas
                               


                            </div>


                        </div>

                        <div class="col-md-3">


                        </div>
                    </div>
                    <div class="row" style="--bs-gutter-x: 0rem;">
                        
                            <div class="col-md-9">
                                <h4 style="text-align:center;margin-top:30px;margin-bottom:20px;"><b>Pendaftaran Siswa
                                        Baru -
                                        Sedang Berlangsung</b></h4>
                                <div class="row">

                                    <div class="col-4">
                                        <div class="module-border-wrap">
                                            <div class="module">Kuota <br> 11 </div>
                                        </div>
                                    </div>

                                    <div class="col-7">
                                        <span
                                            style="display:block;background-color:#AAEEFF;padding:10px;margin-top:15px;margin-botttom:10px;border-radius:20px;color:white;text-align:center;font-weight:bold;font-size:18px;"> 18/06/2023 
                                            -  20/06/2023  </span>
                                        <span style="display:block;padding:10px;">Kuota :
                                             11 <br> Pendaftar :  39  </span>
                                    </div>


                                </div>


                            
                        

                    </div>

                </div>

            </div>

            <div id="Pendaftaran" class="tabcontent">
                <div class="row" style="--bs-gutter-x: 0rem;">
                    <div class="col-md-7" style="background-color:#F1F1F1;padding:20px;border-radius:20px;">
                        <h6 style="text-align:center"><b>Persyaratan</b></h6>
                        <h6 style="text-align:justify">
                            1.  Beragama islam <br>
                            2.  Berusia antara 3-5 tahun <br>
                            3.  Perlu divaksinasi COVID<br>
                    </div>
                    
                    <div class="col-md-4 bg-formulir" style="background-color:#72DDF7;border-radius:20px;">
                        
                            <h4
                                style="text-align:center;margin-top:30px;margin-bottom:20px;color:white;border-radius:20px;">
                                <b>Pendaftaran Siswa Baru -
                                    Sedang Berlangsung</b></h4>
                            <div class="row">
                                <div class="col-5 center">
                                    <img src="/data_file/student.jpeg" width=105px height=auto>
                                </div>

                                <div class="col-7">
                                    
                                        <a href="/schoola/formOrtu">
                                            <span
                                                style="display:block;background-color:rgba(179, 136, 235,0.7);padding:12px;margin:10px;border-radius:20px;">
                                                <h5 style="color:black;text-align:center">Isi <br>Formulir</h5></a>
                                    
                                </div>
               
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    </div>

    </div>

    @section('atas')
    @endsection
    @section('tengah')
    @endsection
    @section('bawah')
        <br>
        <br>

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
