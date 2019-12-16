<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login ToNight</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/util.css">
    <link rel="stylesheet" type="text/css" href="/css/login.css">
<!--===============================================================================================-->
</head>
<body>
    
<div id="login" class="intro route bg-image" style="background-image: url(/images/bg_lounge.jpg)">
<div class="overlay-mf"></div>
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
      <a class="navbar-brand js-scroll active" href="/">ToNight</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <div class="container">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="/register">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(/images/bg-01.jpg);">
                    <div class="overlay-mf"></div>
                    <span class="login100-form-title-1">
                        Login
                    </span>
                </div>

                <form class="login100-form validate-form" method="post" action="/postlogin">
                    {{csrf_field()}}
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
                        <span class="label-input100">Email</span>
                        <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                        <span class="label-input100">Password</span>
                        <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-30">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>

                        </div>

                        <div>
                            <a href="/forgotPassword" class="txt1">
                                Forgot Password?
                            </a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
<!--===============================================================================================-->
    <script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="/vendor/bootstrap/js/popper.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="/vendor/daterangepicker/moment.min.js"></script>
    <script src="/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="/js/login.js"></script>

</body>
</html>