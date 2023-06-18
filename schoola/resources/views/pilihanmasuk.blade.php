@extends ('master')

<body class="mulai">
    @section('atas')
        <img src="/data_file/logo schoola.png" class="img1 img2 img3 img4 img5">
    @endsection
    @section('tengah')
        <div class="row">
            <h4 style="text-align:center;color:white;font-family:Poppins,Sans-Serif;">Masuk Sebagai</h4>

        </div><br>
        <div class="flex-container">

            <div><a href ="/schoola/masuksekolah" class="btn buttonmasuksebagai" style="margin-top:30px;"><img src="/data_file/school 1.png" class="logosekul" >Sekolah</a></div>
            <div class="batas"></div><div><a href="/schoola/masukorangtua" class="btn buttonmasuksebagai" style="margin-top:30px;"><img src="/data_file/students 1(1).png" class="logoorangtua" >Orang Tua</a></div>

          </div><br><br>

    @endsection
