<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Register ToNight</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="/css/roboto-font.css">
    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-5/css/fontawesome-all.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="/css/login.css"/>
</head>
<body class="form-v5">
    <div id="login" class="intro route bg-image" style="background-image: url(/images/bg_lounge.jpg)">
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
            <a class="nav-link js-scroll" href="/login">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <div class="page-content">
        <div class="form-v5-content">
            <div class="login100-form-title" style="background-image: url(/images/bg-01.jpg);">
                    <span class="login100-form-title-1">
                        Register
                    </span>
                </div>
            <form class="form-detail" action="{{URL::to('/store')}}" method="post">
                {{csrf_field()}}
                <div class="form-row">
                    <label for="name">Nama</label>
                    <input type="text" name="name" id="full-name" class="input-text" placeholder="Your Name" required>
                </div>
                <div class="form-row">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="your-email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                </div>
                <div class="form-row">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
                </div>
                <div class="container-login100-form-btn">
                    <button type ="submit" class="login100-form-btn" action="{{URL::to('/postRegistration')}}">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>