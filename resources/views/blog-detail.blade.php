<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Artikel</title>

        <!-- Favicons -->
        <link href="{{ asset('assets/admin/img/logo.png') }}" rel="icon">
        <link href="{{ asset('assets/admin/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}">

        <!-- Optional theme -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap-theme.min.css') }}">

        <!-- Custom css -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
        
        <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">
        
        <link rel="stylesheet" href="{{ asset('assets/css/puredesign.css') }}">
        
        <!-- Flexslider -->
        <link rel="stylesheet" href="{{ asset('assets/css/flexslider.css') }}">
        
        <!-- Owl -->
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
        
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
        
        <link rel="stylesheet" href="{{ asset('assets/css/jquery.fullPage.css') }}">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
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
            <!--  Header & Menu  -->
            <header id="header" class="fixed transparent full-width">
                <div class="container">
                    <nav class="navbar navbar-default white">
                        <!--  Header Logo  -->
                        <div id="logo">
                            <a class="navbar-brand" href="/montanha">
                                <img src="assets/img/logo1.png" class="normal" alt="logo">
                                <img src="assets/img/logo1.png" class="retina" alt="logo">
                                <img src="assets/img/logoputih.png" class="normal white-logo" alt="logo">
                                <img src="assets/img/logo1.png" class="retina white-logo" alt="logo">
                            </a>
                        </div>
                        <!--  END Header Logo  -->
                       <!--  Classic menu, responsive menu classic  -->
                       @include('component.topbar')
                        <!--  END Classic menu, responsive menu classic  -->
                        <!--  Button for Responsive Menu Classic  -->
                        <div id="menu-responsive-classic">
                            <div class="menu-button">
                                <span class="bar bar-1"></span>
                                <span class="bar bar-2"></span>
                                <span class="bar bar-3"></span>
                            </div>
                        </div>
                        <!--  END Button for Responsive Menu Classic  -->
                        <!--  Search Box  -->
                        <div id="search-box" class="full-width">
                            <form role="search" id="search-form" class="black big">
                                <div class="form-input">
                                    <input class="form-field black big" type="search" placeholder="Search...">
                                    <span class="form-button big">
                                        <button type="button">
                                            <i class="icon ion-ios-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                            <button class="close-search-box">
                                <i class="icon ion-ios-close-empty"></i>
                            </button>
                        </div>
                        <!--  END Search Box  -->
                    </nav>
                </div>
            </header>
            <!--  END Header & Menu  -->
            
            <!--  Page Content, class footer-fixed if footer is fixed  -->
            <div id="page-content" class="header-static footer-fixed">
                <!--  Slider  -->
                <div id="flexslider" class="fullpage-wrap small">
                    <ul class="slides">
                        <li style="background-image:url({{ asset('assets/img/tips&trik_mendaki2.png') }})">
                            <div class="container text text-center">
                                <h1 class="white margin-bottom-small">{{ $news->title }}</h1>
                                <p class="heading white">{{ $news->small_description }}</p>
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                        <ol class="breadcrumb">
                            <li><a href="/montanha">Home</a></li>
                            <li class="active">Artikel</li>
                        </ol>
                    </ul>
                </div>
                <!--  END Slider  -->
                <div id="post-wrap" class="content-section fullpage-wrap">
                    <div class="row margin-leftright-null">
                        <div class="container text">
                            <div class="row content-post no-margin">
                                <!--  Post Meta  -->
                                <div class="col-md-12 padding-leftright-null text-center">
                                    <span class="date">{{ $news->created_at->format('d M Y H:i ') }}</span>
                                </div>
                                <!--  END Post Meta  -->
                                <div class="col-md-12 padding-onlytop-md padding-leftright-null">
                                    {!! $news->description !!}
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--  END Page Content, class footer-fixed if footer is fixed  -->
            
        <!--  Footer. Class fixed for fixed footer  -->
        <footer class="fixed full-width">
            <div class="container">
                <div class="row no-margin" style="display: flex;flex-direction: row;justify-content: center;column-gap: 200px;">
                      
                    <div class="col-sm-4 col-md-2 padding-leftright-null">
                        <h6 class="heading white margin-bottom-extrasmall"><u>Contacts</u></h6>
                        <ul class="info">
                            <!-- <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i> Seismo Group</a></li> -->
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> @montanha</a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> @montanha</a></li>
                            <li><a href="#"><i class="" aria-hidden="true"></i> +62 08123456789</a></li>
                            <li><a href="#"><i class="" aria-hidden="true"></i> montanha@gmail.com</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-4 col-md-4 padding-leftright-null">
                            <h6 class="heading white margin-bottom-extrasmall"><u>Address</u></h6>
                            <ul class="info">
                                <li><a href="https://goo.gl/maps/MWKTrmCoqMSqpR3F8" target="_blank" rel="noopener">Jl.Imam Bonjol No.03<br>Kelurahan Pendrikan Kidul</br>Kecamatan Semarang Tengah</br>
                                Kota Semarang, Jawa Tengah, Indonesia</br></a></li>
                            </ul>
                    </div>
                    
                </div>

                <div class="copy">
                    <div class="row no-margin">
                        <div class="col-md-8 padding-leftright-null">
                            &copy; 2023 Montanha - Hiking &amp; made by <a href="http://www.patrickdavid.it">Seismo Group</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!--  END Footer. Class fixed for fixed footer  -->
        </div>
        <!--  Main Wrap  -->
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <!-- All js library -->
        <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.flexslider-min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.fullPage.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=false"></script>
        <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('assets/js/smooth.scroll.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.scrolly.js') }}"></script>
        <script src="{{ asset('assets/js/plugins-scroll.js') }}"></script>
        <script src="{{ asset('assets/js/imagesloaded.min.js') }}"></script>
        <script src="{{ asset('assets/js/pace.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>