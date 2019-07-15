<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masuk | Student Pocket</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('asset_login/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('asset_login/css/style.css')}}">
</head>
<body>

    <div class="main">

        

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{asset('asset_login/images/signin-image.jpg')}}" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link"></a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Masuk</h2>
                        <form method="POST" class="register-form" id="login-form" action="{{ route('admin-login') }}">
                        {{csrf_field()}}
                            <div class="form-group">
                                <label for="nama"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="nama" placeholder="Nama"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Kata Sandi"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Masuk"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{asset('asset_login/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('asset_login/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>