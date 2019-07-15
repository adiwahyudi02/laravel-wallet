<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/instascan.min.js')}}"></script>
    <link rel="stylesheet" href="/css/app.css">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <title>dashboardUser</title>
    <script>
        $(document).ready(function () {

            function navigasi(icon){
                $('.nav').removeClass('add-class-nav');

                $('#nav-' + icon).addClass('add-class-nav');

                $('.wadah-konten').hide();

                $('#wadah-konten-' + icon).fadeIn();
            }

            $('#nav-scan').click(function(){
                navigasi('scan');
            });

            $('#nav-home').click(function(){
                navigasi('home');
            });

            $('#nav-riwayat').click(function(){
                navigasi('riwayat');
            });

            $('#nav-akun').click(function(){
                navigasi('akun');
            });

        });
    </script>


    <style>
    
        /* dashboard & nav */

        body{
            font-family: arial;
        }

        #box{
            width: 100px;
            height: 100px;
            background: red;
            /* display: none; */
        }
        .nav{
            color: #bdbbbb;
        }
        .kirim-terima{
            color: orange;
            background: white;
            width: 55px;
        }
        .add-class-nav{
            color: orange;
        }
        .wadah-konten{
            display:none;
        }
        #preview{
            width: 80%;
            height: 50vh;
        }
        .nav-font{
            font-family: arial;
            font-size: 8pt;
            margin-bottom: 0;
        }
        .nav-icon{
            font-size: 12pt;
        }
        .bg-orange{
            background: #f7bc57;
        }
        /* #flashScreen{
            width: 100%;
            height: 100vh;
            min-height: 500px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: absolute;
            -webkit-animation-name: flash;
            -webkit-animation-duration: 3s;
            -webkit-animation-fill-mode: forwards;
            animation-name: flash;
            animation-duration: 4s;
            animation-fill-mode: forwards;
        } */
        /* @keyframes flash{
            0%{
                display: block;
                opacity: 1;
            }
            70%{
                display: block;
                opacity: 1;
            }
            100%{
                display: none;
                opacity: 0;
            }
        } */
        /* .wadah-all-konten{
            -webkit-animation-name: flash;
            -webkit-animation-duration: 3s;
            -webkit-animation-fill-mode: forwards;
            animation-name: konten-all;
            animation-duration: 4s;
            animation-fill-mode: forwards; */
        }
        @keyframes konten-all{
            0%{
                display: none;
                opacity: 0;
            }
            70%{
                display: none;
                opacity: 0;
            }
            100%{
                display: block;
                opacity: 1;
            }
        }
        .garis-scan{
            width: 80%;
            height: 3px;
            align : center;
            position: absolute;
            background: red;
            animation-name: garisScan;
            animation-iteration-count: infinite;
            animation-duration: 3s;
        }
        @keyframes garisScan{
            0%{
                margin-top: 0;
            }
            50%{
                margin-top: 300px;
            }
            100%{
                margin-top: 0;
            }
        }

                  /* profil */

        .w-header{
            position: relative;
            bottom: 5;
            width: 100%;
            height: 40px;
            background-color: #FCC368;
            padding-top:3px; 
        }

        .w-profil img{
            width: 100px;
            border: 5px solid black;
            margin-bottom: 10px;
        }
        .w-profil{
            background-color: #FCC368;
            height: 70px;
        }

        .input{
            width: 100%;
            border:none; 
            outline: none;
            background: none;
        }
        .title-input{
            color: grey;
            font-size: 11pt; 
        }
        .w-input{
            width: 90%; 
            border-bottom: 1px solid black;
        }


        /* animasi alert */


        .animasi-alert{
            background: orange;
            color: white;
            width: 70%;
            animation-name: popUP;
            animation-duration: 4s;
            visibility: hidden;
            opacity: 0;
        }

        @keyframes popUP{
            0%{
                margin-top: 0;
                visibility: visible;
                opacity: 1;
            }
            50%{
                margin-top: 30px;
                visibility: visible;
                opacity: 1;
            }
            100%{
                visibility: hidden;
                opacity: 0;
            }
        }


        /* riwayat */

        .kotak {
            margin-top: 15px;
            border-radius: 20px;
        }

        .riwayat {
            border-radius: 10px;
            width: 75%;
            padding: 10px 5px;
            font-size: 11pt;
            background-color: orange;
        }

        .baris {
            margin-top: -3.5%;
            margin-bottom: 0px;
        }

        .konten {
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;
            box-shadow: 0px 0px 10px 1px #E8E5E5;
        }
        .card{
            border: 0;
        }
        .card-header{
            background: orange;
            color: white;
            padding: 2px 5px;;
        }
        #card-header{
            border-top-left-radius: 10px;
            border-top-right-radius: 10px; 
        }
        .teks{
            font-size: 13px;
            margin: 0;
            padding: 0;
        }
        .tipe{
            text-align: left;
        }
        .nav{
            color: #bdbbbb;
        }
        .kirim-terima{
            color: orange;
            background: white;
            width: 55px;
        }
        .add-class-nav{
            color: orange;
        }
        .wadah-konten{
            display:none;
        }
        #preview{
            width: 80%;
            height: 50vh;
        }
        .nav-font{
            font-family: arial;
            font-size: 8pt;
            margin-bottom: 0;
        }
        .nav-icon{
            font-size: 12pt;
        }
        .bg-orange{
            background: #f7bc57;
        }

    </style>
</head>
<body>

    <!-- <img src="img/flashScreen.png" alt="flashScreen" class="img-responsive" id="flashScreen"> -->

    
    
    
    <div class="wadah-all-konten">


        <section id="konten-scan">
        
            <div class="wadah-konten" id="wadah-konten-scan">
                <!-- <div style="width:100%;height:100vh;background: black;"></div> -->
                    <center>

                      
                    <div class="garis-scan">
                    </div> 
                    <video id="preview" style="position: relative;">
                    
                    </video>
                    
                    </center>
            </div>
                    <script>

                        let scanner = new Instascan.Scanner(
                            {
                                video: document.getElementById('preview')
                            }
                        );
                        scanner.addListener('scan', function(content) {
                            window.open(content, "_self");
                            // window.open(content);
                        });
                        Instascan.Camera.getCameras().then(cameras => 
                        {
                            if(cameras.length > 0){
                                scanner.start(cameras[0]);
                            } else {
                                console.error("Please enable Camera!");
                            }
                        });

                    </script>

        </section>

        <section id="konten-home">

            <div class="wadah-konten" id="wadah-konten-home" style="display:block;">

                <!-- <div style="width:100%;height:100vh;background:lightgreen;"></div> -->
                <div class="container text-center bg-white shadow-sm rounded-bottom">
                    <div class="row py-1">
                        <div class="col-sm-12">
                            <p class="text-md-center font-weight-bold mb-0">{{auth()->user()->nama}}</p>
                        </div>        
                        <div class="col-sm-12">
                            <small>Rp.  {{ $wallet->saldo }}</small>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="d-flex justify-content-center mt-3">
                        <div class="col-xs-5 shadow py-3 m-2 bg-white rounded kirim-terima" id="nav-kirim">
                            <center>
                                <div>
                                    <i class="fas fa-upload"></i>
                                </div>
                                <p class="nav-font">Kirim</p>
                            </center>
                        </div>
                        <div class="col-xs-5 shadow py-3 m-2 bg-white rounded kirim-terima" id="nav-terima">
                            <center>
                                <div>
                                    <i class="fas fa-download"></i>
                                </div>
                                <p class="nav-font">Terima</p>
                            </center>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="d-flex justify-content-center shadow rounded bg-orange mt-4">
                        <div class="d-flex p-2 bd-highlight text-white"> Dana partisipasi 2019 / 2020 </div>
                    </div>
                    <div class="d-flex justify-content-around bg-white shadow rounded">
                        
                    </div>
                    
                </div>
            </div>

            @if (session ('sukses'))

                <center>
                
                    <div class="alert alert-succes text-center shadow animasi-alert" role="alert">
                            {{session ('sukses')}}
                    </div>

                </center>

            @endIf

            @if (session ('error'))
                <center>
                    
                    <div class="alert alert-succes text-center shadow animasi-alert" style="background: red;" role="alert">
                            {{session ('error')}}
                    </div>

                </center>
            @endif
            
            

        </section>

            <div class="wadah-konten" id="wadah-konten-riwayat">

                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="kotak shadow p-3 mb-5 bg-white">
                                <center>
                                    <h5 class="riwayat text-white">Riwayat Transaksi</h5>
                                    
                                    <br>

                                    @foreach($riwayats as $riwayat)

                                    <div class="card ">
                                        <div class="text-center">
                                            <div id="card-header" class="card-header d-flex align-items-center justify-content-center">{{$riwayat->created_at}}</div>
                                        </div>
                                        <div class="card-body d-flex justify-content-between konten">
                                        <div class="text-left teks"> Tipe : {{ $riwayat->type_transaksi }} </div>
                                        <div class="text-left tipe teks"> Jumlah : Rp. {{$riwayat->jumlah}} </div> 
                                    
                                    
                                        </div>
                                        
                                        </div>
                                        <br>
                                        @endforeach
                                        </div>
                                    </div>
                                    </div>
                                    
                                </div>
                                
                                    <!-- akhir keterangan -->
                                    <!-- akhir riwayat transaksi 2 -->
                                </center>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>


            <div class="wadah-konten" id="wadah-konten-akun">
                <!-- <div style="width:100%;height:100vh;background:lightblue;"></div> -->
                        

                <header class="w-header"></header>

                <section class="w-profil text-center">
                    <div class="container">
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <img src="img/qr-code.png">
                                <h5>{{auth()->user()->nama}}</h5>
                                <h6>Rp. </h6>
                            </div>
                        </div>
                    
                        <center>
                        <form action="" method="post">
                            {{csrf_field()}}
                            <div class="w-input">
                                <h5 class="text-left title-input"> Nama </h5>
                                <input type="text" name="nama" value="{{auth()->user()->nama}}" class="input">

                            </div>

                            <br> 

                            <div class="w-input">
                                <h5 class="text-left title-input">Password</h5>
                                <input type="password" name="password1" value="{{auth()->user()->password}}" class="input">
                                <!-- <br>  -->
                            </div>

                            <br> 

                            <div class="w-input">
                                <h5 class="text-left title-input">Konfirmasi Password</h5>
                                <input type="password" name="password2" value="" class="input">
                            </div>

                            <center>
                                <div class="btn btn-primary text-center mt-2 mb-2 px-4 text-center">Simpan</div>
                            </center>
                            
                        </form>

                            </center>
                            <br>
                        
                        

                    </div>
                
                </section>
                
            </div>

        
        <section class="navbar fixed-bottom bg-white" id="navbar" style="box-shadow: 1px 1px 2px 1px #dbdbdb;">
        
            <div class="container rounded-top  d-flex justify-content-between">
                    <div class="col-xs-3 nav" id="nav-scan">
                        <center>
                            <div>
                                <i class="fas fa-qrcode nav-icon"></i>
                            </div>
                            <p class="nav-font">Bayar</p>
                        </center>
                    </div>
                    <div class="col-xs-3 nav add-class-nav" id="nav-home">
                        <center>
                            <div>
                                <i class="fas fa-home nav-icon"></i>
                            </div>
                            <p class="nav-font">Beranda</p>
                        </center>
                    </div>
                    <div class="col-xs-3 nav" id="nav-riwayat">
                        <center>
                            <div>
                                <i class="fas fa-history nav-icon"></i>
                            </div>
                            <p class="nav-font">Riwayat</p>
                        </center>
                    </div>
                    <div class="col-xs-3 nav" id="nav-akun">
                        <center>
                            <div>
                                <i class="far fa-user nav-icon"></i>
                            </div>
                            <p class="nav-font">Akun</p>
                        </center>
                    </div>
            </div>
        
        </section>
        
    </div>
</body>
</html>