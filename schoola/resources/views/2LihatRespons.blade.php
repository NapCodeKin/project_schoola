@extends ('master')

<!--navbar logo dan user-->
<header>

	<nav class="navbar navbar-light bg-light border-bottom py-3 mb-4">
		<a class="col-2 ms-5 mt-2" href="#" style="width: 100px; height:50px"><img src="\data_file\logo.png" class="img-fluid"></a>
		<a class="end-0 col-1 me-5" href="/schoola/akunsekolah" style="width: 50px; height:50px"><img src="\data_file\user.png" class="img-fluid"></a>
	  </nav>

</header>
    
<body style="background-color: #F2F4FF">
<div class="container" style="position: relative; z-index: 2">
		<div class="row">
				<div class="hstack gap-3"> 
					<a class="btn btn-light mt-2 btn-block border" href="schoola/berandaSekolah" role="button">
						<div class="hstack">
							<img class="col-6 w-25 h-25" src="\data_file\beranda.png" class="img-fluid">
							<p class="col-6 mt-3 ms-3 text-primary"><strong>Beranda</strong></p>
						</div></a>
					<a class="btn btn-primary mt-2 btn-block border" href="#" role="button">
							<div class="hstack">
								<img class="col-6 w-25 h-25" src="\data_file\pendaftaran.png" class="img-fluid">
								<p class="col-6 mt-3 ms-3 text-light"><strong>Pendaftaran</strong></p>
							</div></a>
					<a class="btn btn-light mt-2 btn-block border" href="/schoola/bantuansekolah" role="button">
							<div class="hstack">
								<img class="col-6 w-25 h-25" src="\data_file\bantuan.png" class="img-fluid">
								<p class="col-6 mt-3 ms-3 text-primary"><strong>Bantuan</strong></p>
							</div></a>
				</div>
			</div>
      <div class="hstack gap-3 mt-5">
						<div>
							<button class="btn" onclick="window.location.href='/schoola/berandaSekolah'"><img style="width: 50px; height: 50px" src="\data_file\arrow.png" class="img-fluid"></button>
						</div>
						<div>
							<h3 class="text-primary">Beranda</h3>
						</div>
					</div>
    @section('atas')
        <div class="content">
            <h1 class="teksberanda1" style="color:6070FF"><b>Respons Pendaftaran</b></h1>
            
            <div class="alert alert-primary alert-dismissible fade show">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong> Pendaftaran session S1 </strong>


            <div class="row" style="margin-bottom:10px;">

                <div class="col-6">

                    <h5 class="teksberanda2 bg-bandingkan5 float-start" style="color:6070FF"><b> Jumlah Pendaftar:
                             39 </b></h5>

                </div>

            </div>

            </div>
            <br>
            <table class="table table-white css-serial" id="myTable">

                <tr>
                    <th>No</th>
                    <th  onclick="sortTable(0)">Nama</th>
                    <th  onclick="sortTable(1)" style="cursor: pointer;">Nama Orang Tua</th>
                    <th>Data</th>
                    <th>Status Penerimaan</th>
                </tr>
                
                    <tr>
                        <td style="text-align:center;"></td>
                             @foreach($responsformulir as $f2)
                        <td> {{ $f2->namalengkap_pd }} </td>
                        <td style="text-align:center;"> Ibu: {{ $f2->nama_ib }} <br> Ayah: {{ $f2->nama_ay }}</td>
                        <td style="text-align:center;"><b><a href="/schoola/lhtform"
                                    style="text-decoration: underline">Lihat<br>formulir</a></b></td>
                        <td style="text-align:center;">
                          <button class="btn btn-success" data-toggle="popover" title="Diterima!" data-content="And here's some amazing content. It's very engaging. Right?">Terima</button>
                           <button class="btn btn-warning" data-toggle="popover" title="Ditolak!" data-content="And here's some amazing content. It's very engaging. Right?">Tolak</a>
                              @endforeach
                            </td>
                    </tr>
                
                
            </table>



        </div>
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