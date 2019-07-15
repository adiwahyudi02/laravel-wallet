<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="/css/app.css">
    <title>Masuk | Student Pocket</title>
    <style>
        
        #gambar1 {
            position: absolute;
            right: 0%;
        }
        #gambar2 {
            margin-top: 5px; 
            position: absolute;
            bottom: 0%;
            left: 0%;
            width: 155px;
            height: 158.12px;  
        }
        #header{
            margin-top: 45px;
        }
        #header img{
            width: 86px;
            height: auto;
        }
        
        .wadah-konten{
            -webkit-animation-name: flash;
            -webkit-animation-duration: 3s;
            -webkit-animation-fill-mode: forwards;
            animation-name: konten-all;
            animation-duration: 4s;
            animation-fill-mode: forwards;
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
       
    </style>
</head>
<body style="background-color : #fff;">
@include('user.splashScreen')

     <div class="wadah-konten">
        <div id="gambar1" class="img-right">
            <img src="img/02.jpg" class="img-responsive" alt="Responsive image">
        </div>
        <div id="gambar2" class="img-left">
            <img src="img/03.jpg" class="img-responsive" alt="Responsive image">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center" id="header">
                    <img src="img/POCKET2.png" class="img-circle" >
                    <h2>Student Pocket</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 " id="header">
                    <form method="POST" action="/postlogin">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nis</label>
                        <input type="text" class="form-control" name="nis" id="exampleInputPassword1" placeholder="Masukkan Nis">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Masukkan Kata Sandi">
                    </div>
                    <center><button type="submit" class="btn btn-primary btn-lg" style="background-color : #fcc368; 
                    border : none;">Masuk</button></center>
                    </form>
                </div>
            </div>
        </div>

     </div>

      
</body>
</html>