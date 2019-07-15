<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/instascan.min.js')}}"></script>
    <link rel="stylesheet" href="/css/app.css">
    <title>Hello, world!</title>

    
    <style type="text/css">
              #kirim{
          background-image: url("asset/kirim.png");
          height: 120px;
          background-repeat: no-repeat;
          width: auto;
      }
      #terima{
          background-image: url("asset/terima.png");
          height: 120px;
          background-repeat: no-repeat;
          width: auto;
      }
      .container-fluid{
          background-image: url("asset/group 9.png");

      }

      .card-header{
          background-color: #FFC463;
          color: #fff;
          border: none;
      }
      #card-header{
          border-top-left-radius: 10px;
          border-top-right-radius: 10px; 
      }
      .card{
          border: none;
          box-shadow: 0px 0px 10px 6px #ccc;
          z-index: +99;
          height: 420px;
          border-radius: 10px;
          width: 95%;
          position: absolute;
          left: 50%;
          top: 50%;
          transform: translate(-50%, -58%);

      }
      h2{
          font-weight: bold;
      }
      #bayar{
          width: 60px;
          height: 30px;
          background-color: orange;
          color: white;
          text-align: center;
          border:none;
          font-size: 14px;
          margin-top: 30px;
      }
      #total,.nominal{
          font-size: 20px;
          border: none;
          width: 75px;
      
      }
      #increment, #decrement{
          background-color:  #FFC463;
          color: #fff;
          
          
      }
      .bulan, #nilai{
          font-size: 20px;
      }
      /* .nominal,#harga{
          float: right;
      } */
      img{
          z-index: -1;
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
      #strTotal{
        float: left;
      }
    </style>

    <title>Hello, world!</title>

  </head>
  <body>
    <!-- kirim terima header -->
    <!-- <div class="container-fluid">
      <div class="row">
        <div class="col-2"></div>
        <a href="diisi tujuan dalam laravel" id="kirim" class="col-4 mt-4"></a> 
        <a href="diisi tujuan dalam laravel" id="terima" class="col-4 mt-4"></a>
      </div>   
    </div> -->
    <!-- akhir kirim terima -->

    <!-- tabel bulan -->
    
    

    <div class="card mt-0">

      <div class="card-header text-center">
        Bayar SPP
      </div>
      
    <div class="card-body">
      <div class="row mt-5">

      <div class="col-12 text-center mb-5"> 
      
        <h6 style="color: orange;"> Saldo Anda : Rp. {{$wallet->saldo}}</h6> 
      
      </div>

        <div class="col-2"></div>
        <div class="col-8">
  
          <center>
            <button class ="btn btn-outline-info btn-sm px-2 py-1" id="decrement">-</button>
            <span style="font-size: 11pt;" class="mx-3">
              <span id="nilai" class="mx-2" style="font-size: 11pt;">1</span>bulan
            </span>   
            <button  class ="btn btn-outline-info btn-sm px-2 py-1" id="increment">+</button>
          </center>
          <!-- <p id="harga">0</p> -->
          
          <br><br>

          <form action="{{Route('saldo.update')}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="d-flex justify-content-center" style="border-bottom: 1px solid orange;">
              <div class="d-inline-flex p-2 bd-highlight" style="font-size: 11pt;">Total :</div>
              <div class="d-inline-flex p-2 bd-highlight">
                <input type="number" class="" id="total" name="total" value="175000" style="font-size: 11pt;">
              </div>
            </div>

            <div class="text-center">
            <input type="submit" value="Bayar" id="bayar" class="btn btn-primary">
            </div>
          </form>

        </div>
      </div>
    </div>

  </div>
</div>

<script>
        var x = 1;
        const perBulan= 175000;
        var span = $('#nilai'); 
        var increment = $('#increment'); 
        var decrement = $('#decrement'); 
        var harga = $('#harga');

        decrement.click(function () {
          span.text(--x);
          harga.text((x*-perBulan)*-1);

          $('#total').val((x*-perBulan)*-1)
        });

        if (x=1){
          decrement.attr("disabled", true);
        }

        increment.click(function () {
          span.text(++x);
          harga.text(x * perBulan);

          $('#total').val(x * perBulan)
          if(x>=2){
              decrement.attr('disabled', false);
          }
          else if(x<=1){
              decrement.attr('disabled', true);
          }
          if(x==12){
              increment.attr('disabled', true);
          }

        });


        decrement.click(function() {
          increment.attr('disabled', false);
          if(x == 1){
            decrement.attr('disabled', true);
          }
        })
      
    </script>
  </body>
</html>