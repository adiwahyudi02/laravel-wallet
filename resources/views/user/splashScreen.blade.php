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
    <title>Document</title>
    <style>
        #flashScreen{
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
        }
        @keyframes flash{
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
        }
    </style>
</head>
<body>
    <img src="img/flashScreen.png" alt="flashScreen" class="img-responsive" id="flashScreen">
</body>
</html>