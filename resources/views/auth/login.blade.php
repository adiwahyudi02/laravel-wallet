<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <style type="text/css">/*Seluruh*/
      {
        margin: 0;
        padding: 0;
      }
      body{
        font-family: Arial;
      }
      /*SeluruhAkhir*/

      /*Ornamen*/
      #gambar1 img{
      
      position: absolute;
      right: 0%;
      }

      #gambar2 img{
      margin-top: 5px; 
      position: absolute;
      bottom: 0%;
      left: 0%;
      width: 155px;
      height: 158.12px;  
      }
      /*OrnamenAkhir*/
      .wadah-all-konten{
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
      /*Header*/
      #judul{
        margin-top: 45px;

      }
      #judul img{
        width: 86px;
        height: 86px;
        box-shadow: 0px 0px 9px 1px;
      }
      #judul h2{
        font-size: 35px;
        font-weight: bolder;
        margin: 24px;
      }
      /*HeaderAkhir*/

      /*TabelAkhir*/
      #form{
        margin: 0;
      }

      .tabel{
          width: 320px;
          height: 320px;
          border-radius: 15px;
          padding: 25px;
          box-shadow: 0px 0px 15px 1px; 
            display: inline-block;

      }
      .tabel h1{
        font-size: 45px;
        font-weight: normal;
      }
      .tabel input[type="text"], .tabel input[type="password"]{
        border: none;
        border-bottom: 3px solid #ddd;
        width: 240px;
        font-size: 20px;  
      }
      .tabel input[type="text"]:focus, .tabel input[type="Password"]:focus {
        outline: none;
        border-bottom: 3px solid #333;
      }

      .btn{
        box-shadow: 0px 0px 9px 1px;

      }
/*Tabel Akhir*/</style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  @include('user.splashScreen')

  <div class="wadah-all-konten">
    <div id="gambar1" class="text-rght">
      <img src="img/02.jpg" class="img-responsive" alt="Responsive image">
    </div>
    
      <div id="gambar2" class="text-left">
        <img src="img/03.jpg" class="img-responsive" alt="Responsive image">
      </div>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center" id="judul">
            <img src="img/POCKET2.png" class="img-circle" >
            <h2>Student Pocket</h2>
          </div>
        </div>
          <div class="row">
          <div class="col-sm-12 text-center" id="form">
                  <div class="tabel">
                        <h1>Login</h1>
                        <input type="text" name="NIS" placeholder="Masukan NIS">
                        <br>
                        <br>
                        <input type="Password" name="Password" placeholder="Masukan Password">
                        <br>
                        <br>
                        <button type="submit" class="btn btn-default btn-lg">Masuk</button>
                 </div>
          </div>
        </div>
      </div>


    </section>

    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>