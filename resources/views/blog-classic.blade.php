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
            <!--  Header & Menu  -->
            <header id="header" class="fixed transparent full-width">
                <div class="container">
                    <nav class="navbar navbar-default white">
                        <!--  Header Logo  -->
                        <div id="logo">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/img/logo.png" class="normal" alt="logo">
                                <img src="assets/img/logo@2x.png" class="retina" alt="logo">
                                <img src="assets/img/logo_white.png" class="normal white-logo" alt="logo">
                                <img src="assets/img/logo_white@2x.png" class="retina white-logo" alt="logo">
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
                        <li style="background-image:url(assets/img/artikel1.jpg)">
                            <div class="container text text-center">
                                <h1 class="white margin-bottom-small">Artikel</h1>
                                <p class="heading white">Baca beragam macam artikel menarik kami</p>
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
                <div id="home-wrap" class="content-section fullpage-wrap row grey-background">
                    <div class="container">
                        <div class="col-md-8 padding-leftright-null">
                            <!--  News Section  -->
                            <section id="news" class="page">
                                <div class="news-items equal one-columns">
                                    @foreach ($news as $item)
                                    <div class="single-news one-item horizontal-news">
                                        <article>
                                            <div class="col-md-6 padding-leftright-null">
                                                <div class="image" style="background-image:url({{ asset($item->thumbnail) }})"></div>
                                            </div>
                                            <div class="col-md-6 padding-leftright-null">
                                                <div class="content">
                                                    <h3>{{ $item->title }}</h3>
                                                    <span class="date">{{ $item->created_at->format('d M Y H:i ') }}</span>
                                                    <p>{{ $item->small_description }}</p>
                                                </div>
                                            </div>
                                            <a href="{{ route('blog.detail', $item->id) }}" class="link"></a>
                                        </article>
                                    </div>
                                    @endforeach
                                </div>
                            </section>
                            <!--  END News Section  -->
                        </div>
                        <!--  Right Sidebar  -->
                        <!-- <div class="col-md-4 text">
                            <aside class="sidebar">
                                <div class="widget-wrapper">
                                    <form class="search-form">
                                        <div class="form-input">
                                            <input type="text" placeholder="Search...">
                                            <span class="form-button">
                                                <button type="button">
                                                    <i class="icon ion-ios-search-strong"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                                <div class="widget-wrapper">
                                    <h5>Categories</h5>
                                    <ul class="widget-categories">
                                        <li><a href="#">Web</a></li>
                                        <li><a href="#">Office</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Awards</a></li>
                                    </ul>
                                </div>
                                <div class="widget-wrapper">
                                    <h5>Recent Post</h5>
                                    <ul class="recent-posts">
                                        <li>
                                            <img src="assets/img/trip1.jpg" alt="">
                                            <div class="content">
                                                <a href="#">
                                                    <span class="meta">
                                                        February 12, 2016
                                                    </span>
                                                    <p>Post with Sidebar</p>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/img/trip2.jpg" alt="">
                                            <div class="content">
                                                <a href="#">
                                                    <span class="meta">
                                                        February 12, 2016
                                                    </span>
                                                    <p>Post with Video</p>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/img/trip3.jpg" alt="">
                                            <div class="content">
                                                <a href="#">
                                                    <span class="meta">
                                                        February 12, 2016
                                                    </span>
                                                    <p>Post with Audio</p>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/img/trip4.jpg" alt="">
                                            <div class="content">
                                                <a href="#">
                                                    <span class="meta">
                                                        February 12, 2016
                                                    </span>
                                                    <p>Post with Gallery</p>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div> -->
                        <!--  END Right Sidebar  -->
                        <div class="row margin-leftright-null">
                            <!--  Navigation  -->
                            <!-- <section id="nav" class="padding-top-null grey-background">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="nav-left">
                                            <a href="single-blog-style-2.html" class="btn-alt small margin-null"><i class="icon ion-ios-arrow-left"></i><span>Older posts</span></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="nav-right">
                                            <a href="#" class="btn-alt small margin-null"><span>Newer posts</span><i class="icon ion-ios-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </section> -->
                            <!--  END Navigation  -->
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
        <script src="assets/js/jquery.min.js"></script>
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
        <script src="assets/js/main.js"></script>
    </body>
</html>