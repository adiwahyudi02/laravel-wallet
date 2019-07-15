<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Profile</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
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
        }
        .w-profil{
            background-color: #FCC368;
            height: 70px;
        }

        .input{
            width: 100%;
            border:none; 
            outline: none;
        }
        .title-input{
            color: grey;
        }
        .w-input{
            width: 85%; 
            border-bottom: 1px solid black;
        }
        
    </style>
  </head>
  <body>
    
    <header class="w-header"></header>

    <section class="w-profil text-center">
      <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <img src="img/qr-code.png">
          <h4>{{auth()->user()->nama}}</h4>
          
          <h5>Rp.5.000.000</h5>
          <br>
          <br>
         
          </div>
          
          <center>
            <div class="w-input">
              <h5 class="text-left title-input"> NAMA </h5>
              <input type="text" name="" value="Barjo" class="input">

           </div>

           <br> 

           <div class="w-input">
             <h5 class="text-left title-input">Password</h5>
              <input type="password" name="" value="password" class="input">
             <br> 
           </div>

           <br> 

            <div class="w-input">
             <h5 class="text-left title-input">Konfirmasi Password</h5>
              <input type="password" name="" value="Password" class="input">
           </div>
         </center>
         <br>
         <div class="btn btn-primary d-flex flex-row-reverse" style="margin-bottom: 10px;margin-top: 10px;">SIMPAN</div>

          </div>
          
        </div>
      </div>
    </section>

  </body>
</html>