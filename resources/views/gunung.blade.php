<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Daftar Gunung</title>

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
                        <li style="background-image:url(assets/img/home1.png)">
                            <div class="container text text-center">
                                <h1 class="white margin-bottom-small">Daftar Gunung di Jawa Tengah</h1>
                                <p class="heading white">Explore pengalamanmu dengan mendaki gunung di Jawa Tegah</p>
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Gunung</li>
                        </ol>
                    </ul>
                </div>
                <!--  END Slider  -->
                <div id="page-wrap" class="content-section fullpage-wrap grey-background">
                    <div class="container text">
                        <section id="masonry-filters" class="">
                            <!--  Filters
                            <div class="row margin-null">
                                <div class="col-sm-12 padding-leftright-null text-center">
                                    <ul class="col-md-12 filters padding-leftright-null">
                                        <li data-filter="*" class="is-checked">All</li>
                                        <li data-filter=".hiking">Hiking</li>
                                        <li data-filter=".trekking">Trekking</li>
                                        <li data-filter=".canyoning">Canyoning</li>
                                        <li data-filter=".adventure">Adventure</li>
                                    </ul>
                                </div>
                            </div>
                            END Filters  -->
                        </section>
                        <!--  All treks  -->
                        <section id="showcase-treks" class="page" data-isotope="load-simple">
                            <div class="masonry-items two-columns">
                                <!--  Single Trek  -->
                                <div class="item one-item trekking">
                                    <div class="showcase-trek">
                                        <img src="assets/img/galeri-8.png" alt="">
                                        <div class="content text-center">
                                            <div class="row margin-leftright-null">
                                                <div class="meta">
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>± 12-16</h3>
                                                        <h4>Jam</h4>
                                                    </div>
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>3432</h3>
                                                        <h4>Mdpl</h4>
                                                    </div>
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>Sedang</h3>
                                                        <h4>Kesulitan</h4>
                                                    </div>
                                                </div>
                                                <div class="category">
                                                    <h3>Gunung Slamet</h3>
                                                </div>
                                                <div class="info">
                                                    <div class="col-md-12 padding-leftright-null">
                                                        <h6 class="heading">Kabupaten Pemalang</h6>
                                                        <p class="margin-null">Jawa Tengah, Indonesia</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/trek" class="link"></a>
                                    </div>
                                </div>
                                <!--  END Single Trek  -->
                                <div class="item one-item hiking adventure">
                                    <div class="showcase-trek">
                                        <img src="assets/img/galeri-6.png" alt="">
                                        <div class="content text-center">
                                            <div class="row margin-leftright-null">
                                                <div class="meta">
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>± 7-8</h3>
                                                        <h4>Jam</h4>
                                                    </div>
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>3371</h3>
                                                        <h4>Mdpl</h4>
                                                    </div>
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>Sedang</h3>
                                                        <h4>Kesulitan</h4>
                                                    </div>
                                                </div>
                                                <div class="category">
                                                    <h3>Gunung Sumbing</h3>
                                                </div>
                                                <div class="info">
                                                    <div class="col-md-12 padding-leftright-null">
                                                        <h6 class="heading">Kota Wonosobo</h6>
                                                        <p class="margin-null">Jawa Tengah, Indonesia</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/trek2" class="link"></a>
                                    </div>
                                </div>
                                <div class="item one-item canyoning adventure">
                                    <div class="showcase-trek">
                                        <img src="assets/img/sindoro.png" alt="">
                                        <div class="content text-center">
                                            <div class="row margin-leftright-null">
                                                <div class="meta">
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>± 6-7</h3>
                                                        <h4>Jam</h4>
                                                    </div>
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>3150</h3>
                                                        <h4>Mdpl</h4>
                                                    </div>
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>Sedang</h3>
                                                        <h4>Kesulitan</h4>
                                                    </div>
                                                </div>
                                                <div class="category">
                                                    <h3>Gunung Sindoro</h3>
                                                </div>
                                                <div class="info">
                                                    <div class="col-md-12 padding-leftright-null">
                                                        <h6 class="heading">Kabupaten Temanggung</h6>
                                                        <p class="margin-null">Jawa Tengah, Indonesia</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/trek3" class="link"></a>
                                    </div>
                                </div>
                                <div class="item one-item canyoning adventure">
                                    <div class="showcase-trek">
                                        <img src="assets/img/galeri-3.png" alt="">
                                        <div class="content text-center">
                                            <div class="row margin-leftright-null">
                                                <div class="meta">
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>± 2-4</h3>
                                                        <h4>Jam</h4>
                                                    </div>
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>2050</h3>
                                                        <h4>Mdpl</h4>
                                                    </div>
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>Rendah</h3>
                                                        <h4>Kesulitan</h4>
                                                    </div>
                                                </div>
                                                <div class="category">
                                                    <h3>Gunung Ungaran</h3>
                                                </div>
                                                <div class="info">
                                                    <div class="col-md-12 padding-leftright-null">
                                                        <h6 class="heading">Kabupaten Semarang</h6>
                                                        <p class="margin-null">Jawa Tengah, Indonesia</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/trek4" class="link"></a>
                                    </div>
                                </div>
                                <div class="item one-item canyoning adventure">
                                    <div class="showcase-trek">
                                        <img src="assets/img/galeri-4.png" alt="">
                                        <div class="content text-center">
                                            <div class="row margin-leftright-null">
                                                <div class="meta">
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>± 8-12</h3>
                                                        <h4>Jam</h4>
                                                    </div>
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>3145</h3>
                                                        <h4>Mndpl</h4>
                                                    </div>
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>Rendah</h3>
                                                        <h4>Kesulitan</h4>
                                                    </div>
                                                </div>
                                                <div class="category">
                                                    <h3>Gunung Merbabu</h3>
                                                </div>
                                                <div class="info">
                                                    <div class="col-md-12 padding-leftright-null">
                                                        <h6 class="heading">Kabupaten Boyolali</h6>
                                                        <p class="margin-null">Jawa Tengah, Indonesia</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/trek5" class="link"></a>
                                    </div>
                                </div>
                                <div class="item one-item canyoning adventure">
                                    <div class="showcase-trek">
                                        <img src="assets/img/galer-7.png" alt="">
                                        <div class="content text-center">
                                            <div class="row margin-leftright-null">
                                                <div class="meta">
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>± 2</h3>
                                                        <h4>Jam</h4>
                                                    </div>
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>1726</h3>
                                                        <h4>Mdpl</h4>
                                                    </div>
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>Rendah</h3>
                                                        <h4>Kesulitan</h4>
                                                    </div>
                                                </div>
                                                <div class="category">
                                                    <h3>Gunung Andong</h3>
                                                </div>
                                                <div class="info">
                                                    <div class="col-md-12 padding-leftright-null">
                                                        <h6 class="heading">Kabupaten Magelang</h6>
                                                        <p class="margin-null">Jawa Tengah, Indonesia</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/trek-6" class="link"></a>
                                    </div>
                                </div>
                                <div class="item one-item canyoning adventure">
                                    <div class="showcase-trek">
                                        <img src="assets/img/galeri-1.png" alt="">
                                        <div class="content text-center">
                                            <div class="row margin-leftright-null">
                                                <div class="meta">
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>± 4</h3>
                                                        <h4>Jam</h4>
                                                    </div>
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>2565</h3>
                                                        <h4>Mdpl</h4>
                                                    </div>
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>Medium</h3>
                                                        <h4>Tinggi</h4>
                                                    </div>
                                                </div>
                                                <div class="category">
                                                    <h3>Gunung Prau</h3>
                                                </div>
                                                <div class="info">
                                                    <div class="col-md-12 padding-leftright-null">
                                                        <h6 class="heading">Kabupaten Batang</h6>
                                                        <p class="margin-null">Jawa Tengah, Indonesia</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/trek7" class="link"></a>
                                    </div>
                                </div>
                                <div class="item one-item canyoning adventure">
                                    <div class="showcase-trek">
                                       <img src="assets/img/lawu-1.png" alt="">
                                        <div class="content text-center">
                                            <div class="row margin-leftright-null">
                                                <div class="meta">
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>± 7</h3>
                                                        <h4>Jam</h4>
                                                    </div>
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>3265</h3>
                                                        <h4>Mdpl</h4>
                                                    </div>
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>Tinggi</h3>
                                                        <h4>Kesulitan</h4>
                                                    </div>
                                                </div>
                                                <div class="category">
                                                    <h3>Gunung Lawu</h3>
                                                </div>
                                                <div class="info">
                                                    <div class="col-md-12 padding-leftright-null">
                                                        <h6 class="heading">Kabupaten Karanganyar</h6>
                                                        <p class="margin-null">Jawa Tengah, Indonesia</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/trek8" class="link"></a>
                                    </div>
                                </div>
                                <div class="item one-item canyoning adventure">
                                    <div class="showcase-trek">
                                       <img src="assets/img/bisma.png" alt="">
                                        <div class="content text-center">
                                            <div class="row margin-leftright-null">
                                                <div class="meta">
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>± 3</h3>
                                                        <h4>Jam</h4>
                                                    </div>
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>2365</h3>
                                                        <h4>Mdpl</h4>
                                                    </div>
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>Sedang</h3>
                                                        <h4>Kesulitan</h4>
                                                    </div>
                                                </div>
                                                <div class="category">
                                                    <h3>Gunung Bismo</h3>
                                                </div>
                                                <div class="info">
                                                    <div class="col-md-12 padding-leftright-null">
                                                        <h6 class="heading">Kabupaten Wonosobo</h6>
                                                        <p class="margin-null">Jawa Tengah, Indonesia</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/trek9" class="link"></a>
                                    </div>
                                </div>
                                
                                <div class="item one-item trekking">
                                    <div class="showcase-trek">
                                      <img src="assets/img/rogo.png" alt="">
                                        <div class="content text-center">
                                            <div class="row margin-leftright-null">
                                                <div class="meta">
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>± 3</h3>
                                                        <h4>Jam</h4>
                                                    </div>
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>2117</h3>
                                                        <h4>Mdpl</h4>
                                                    </div>
                                                    <div class="col-md-4 padding-leftright-null">
                                                        <h3>Tinggi</h3>
                                                        <h4>Kesulitan</h4>
                                                    </div>
                                                </div>
                                                <div class="category">
                                                    <h3>Gunung Rogojembangan</h3>
                                                </div>
                                                <div class="info">
                                                    <div class="col-md-12 padding-leftright-null">
                                                        <h6 class="heading">Kabupaten Pekalongan</h6>
                                                        <p class="margin-null">Jawa Tengah, Indonesia</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/trek10" class="link"></a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--  END All treks  -->
                    </div>
                    <!--  Call to Action  -->
                    <!-- <div class="row margin-leftright-null color-background">
                        <div class="col-md-12 text text-center">
                            <h4 class="big white margin-bottom-small">Would you like more info about other trips?</h4>
                            <a href="#" target="_blank" class="btn-alt small white margin-null active shadow">Contact us</a>
                        </div>
                    </div> -->
                    <!--  END Call to Action  -->
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