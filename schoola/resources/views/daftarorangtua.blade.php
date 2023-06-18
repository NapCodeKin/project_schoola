@extends ('master')

<body class="mulai">
    @section('atas')

    @endsection
    @section('tengah')
    <div style="margin-top:60px;">
    <div class="row">
        <div class="col-md-6" style="background:white;padding:30px;margin-right:auto;margin-left:auto;border-radius:20px;">
            <img src="/data_file/rocking-horse (2) 1(1).png" class="logodaftar spasibawah">
        <h4 class="textdaftar"><b>Daftar</b></h4>

        @if (session('status4'))
        <div class="alert alert-warning alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>{{ session('status4') }}</strong>
        </div>
        @endif
            <form action="/schoola/simpanorangtua" method="POST">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="nama" class="form-label" style="color:black"><b>Nama :</b></label>
                    <input type="nama" class="form-control inputmasuk" id="nama" placeholder="masukkan nama"
                        name="nama" value="{{ old('nama') }}">

                    @foreach ($errors->get('nama') as $error)
                        <i class='fa fa-exclamation-circle'
                            style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                            style="color:#ff0000">{{ $error }}</span>
                    @endforeach
                </div>
                <div class="mb-3" >
                    <label for="password" class="form-label" style="color:black"><b>Kata Sandi:</b></label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control inputmasuk" id="password"
                            placeholder="Enter password" name="password" style="margin-bottom:-10px;">
                        <span class="input-group-text inputmasuk" style="margin-bottom:-10px;">
                            <i class="fa fa-eye-slash" id="togglePassword" onclick="myFunction()"
                                style="cursor: pointer"></i>
                        </span>
                    </div>
                    @foreach ($errors->get('password') as $error)
                        <i class='fa fa-exclamation-circle'
                            style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000;'></i><span
                            style="color:#ff0000;">{{ $error }}</span>
                    @endforeach
                </div><div style="margin-bottom:30px"></div>
                <div class="mb-3">
                    <label for="password2" class="form-label" style="color:black"><b>Konfirmasi Kata Sandi:</b></label>
                    <div class="input-group mb-3">
                        <input type="password2" class="form-control inputmasuk" id="password2"
                            placeholder="Enter password" name="password2" style="margin-bottom:-10px;">
                        <span class="input-group-text inputmasuk" style="margin-bottom:-10px;">
                            <i class="fa fa-eye-slash" id="togglePassword" onclick="myFunction()"
                                style="cursor: pointer"></i>
                        </span>
                    </div>
                    @foreach ($errors->get('password2') as $error)
                        <i class='fa fa-exclamation-circle'
                            style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000;'></i><span
                            style="color:#ff0000;">{{ $error }}</span>
                    @endforeach
                </div><div style="margin-bottom:30px"></div>
               <div class="mb-3 mt-3">
                    <label for="email" class="form-label" style="color:black"><b>Email:</b></label>
                    <input type="email" class="form-control inputmasuk" id="email" placeholder="Enter email"
                        name="email" value="{{ old('email') }}">

                    @foreach ($errors->get('email') as $error)
                        <i class='fa fa-exclamation-circle'
                            style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                            style="color:#ff0000">{{ $error }}</span>
                    @endforeach
                </div>
                <div class="mb-3 mt-3">
                    <label for="alamat" class="form-label" style="color:black"><b>Alamat :</b></label>
                    <input type="alamat" class="form-control inputmasuk" id="alamat" placeholder="Enter email"
                        name="alamat" value="{{ old('alamat') }}">

                    @foreach ($errors->get('alamat') as $error)
                        <i class='fa fa-exclamation-circle'
                            style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                            style="color:#ff0000">{{ $error }}</span>
                    @endforeach
                </div>

                <br>
                <br>
                <button type="submit" class="btn button2">Simpan</button>
                <br>



            </form>
        </div>

    </div>
    @endsection
