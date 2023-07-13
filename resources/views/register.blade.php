<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Form Register</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/admin/img/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/admin/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-theme.min.css">

    <!-- Custom css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/css/puredesign.css">

    <!-- Flexslider -->
    <link rel="stylesheet" href="assets/css/flexslider.css">

    <!-- Owl -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/jquery.fullPage.css">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/login.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <!--  loader  -->
    <div id="myloader">
        <span class="loader">
            <div class="inner-loader"></div>
        </span>
    </div>

    <!--  Main Wrap  -->
    <div id="main-wrap" class="full-width">


        <div class="login">
            <img src="assets/img/home1.png" alt="login image" class="login__img">

            <form action="{{ route('register') }}" method="POST" class="login__form">
               @csrf
                <h1 class="login__title">Register</h1>

                <div class="login__content">
                    <div class="login__box">
                        <i class="ri-lock-2-line login__icon"></i>

                        <div class="login__box-input">
                           <input type="text" name="name" required class="login__input" id="" placeholder=" ">
                           <label for="" class="login__label">Nama</label>
                           @error('name')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                        </div>
                    </div>
                    <div class="login__box">
                        <i class="ri-user-3-line login__icon"></i>

                        <div class="login__box-input">
                           <input type="email" name="email" required class="login__input" placeholder=" ">
                           <label for="" class="login__label">Email</label>
                           @error('email')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                        </div>
                    </div>

                    <div class="login__box">
                        <i class="ri-lock-2-line login__icon"></i>

                        <div class="login__box-input">
                            <input type="password" name="password" required class="login__input" id="login-pass" placeholder=" ">
                            <label for="" class="login__label">Password</label>
                            <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                            @error('password')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                        </div>
                    </div>


                </div>

                <button type="submit" class="login__button">Register</button>

                <p class="login__register">
                    Sudah have an account? <a href="/login">Login</a>
                </p>
            </form>

        </div>
    </div>
    <!--  Main Wrap  -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.min.js"></script>
    <!--=============== MAIN JS ===============-->
    <script src="assets/js/login.js"></script>
    <!-- All js library -->
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/jquery.flexslider-min.js"></script>
    <script src="assets/js/jquery.fullPage.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=false"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/smooth.scroll.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/jquery.scrolly.js"></script>
    <script src="assets/js/plugins-scroll.js"></script>
    <script src="assets/js/imagesloaded.min.js"></script>
    <script src="assets/js/pace.min.js"></script>
    <script src="assets/js/maps.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
