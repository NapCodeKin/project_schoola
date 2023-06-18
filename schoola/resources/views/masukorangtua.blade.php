@extends ('master')

<body class="mulai">
    @section('atas')

    @endsection
    @section('tengah')
    <div style="margin-top:60px;">
    <div class="row" >

        <div class="col-md-6" style="background:white;padding:30px;margin-right:auto;margin-left:auto;border-radius:20px;">
            <img src="/data_file/rocking-horse (2) 1(1).png" class="logodaftar spasibawah">
        <h4 class="textdaftar"><b>Masuk</b></h4>
        @if (session('status'))
        <div class="alert alert-primary alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>{{ session('status') }}</strong>
        </div>
        @endif
            <form action="/schoola/loginorangtua" method="POST">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label" style="color:black"><b>Email:</b></label>
                    <input type="email" class="form-control inputmasuk" id="email" placeholder="Enter email"
                        name="email">

                    @foreach ($errors->get('email') as $error)
                        <i class='fa fa-exclamation-circle'
                            style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                            style="color:#ff0000">{{ $error }}</span>
                    @endforeach
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label" style="color:black"><b>Password:</b></label>
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
                </div>
                <br>
                <br>
                <button type="submit" class="btn button2">Masuk</button>
                <br>

                    <p style="color:rgb(0, 0, 0);text-align:center"><b>Belum Punya Akun ? <a href="/schoola/Daftarorangtua" class="linkdaftar">Daftar</a></p>

            </form>
        </div>

    </div>
    @endsection
