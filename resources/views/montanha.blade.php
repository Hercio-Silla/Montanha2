<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- <div id=logo>
        <img src="assets/img/logo1.png" class="normal" alt="logo">
    </div> -->
    <title>Montanha</title>

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
            <div id="flexslider-nav" class="fullpage-wrap small">
                <ul class="slides">
                    <li style="background-image:url(assets/img/home1.png)">
                        <div class="container text">
                            <h1 class="white flex-animation">It's time to <br> start your adventures</h1>
                            <h2 class="white flex-animation">Mari mulai petualangan anda bersama kami</h2>
                            <a href="#" class="shadow btn-alt small activetwo margin-bottom-null flex-animation">More info</a>
                        </div>
                        <div class="gradient dark"></div>
                    </li>
                    <li style="background-image:url(assets/img/home2.png)">
                        <div class="text container">
                            <h1 class="white flex-animation no-opacity">MONTANHA</h1>
                            <h2 class="white flex-animation no-opacity">Pendaki yang berpengalaman tidak terintimidasi oleh gunung, dia terinspirasi olehnya.</h2>
                            <a href="#" class="shadow btn-alt small activetwo margin-bottom-null flex-animation no-opacity">More info</a>
                        </div>
                        <div class="gradient dark"></div>
                    </li>
                </ul>
                <div class="slider-navigation">
                    <a href="#" class="flex-prev"><i class="icon ion-ios-arrow-thin-left"></i></a>
                    <div class="slider-controls-container"></div>
                    <a href="#" class="flex-next"><i class="icon ion-ios-arrow-thin-right"></i></a>
                </div>
            </div>
            <!--  END Slider  -->
            <div id="home-wrap" class="content-section fullpage-wrap">
                <!-- Section About -->
                <div class="row margin-leftright-null">
                    <div class="container">
                        <div class="col-md-12 padding-leftright-null">
                            <div class="text text-center">
                                <h2 class="margin-bottom-null title center">About Montanha</h2>
                                <p class="heading center grey z-index">Montanha adalah sebuah situs web yang memberikan informasi mengenai gunung-gunung di Jawa Tengah. Situs web ini menyediakan informasi terkait daftar gunung, peta, rute pendakian, dan forum berdiskusi untuk para pendaki. Pengguna situs web ini dapat menggunakan informasi yang diberikan untuk merencanakan pendakian, melakukan riset tentang gunung di Jawa Tengah, serta bisa mendapatkan tips dan tricks untuk kegiatan pendakian di Jawa Tengah.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Section About -->
               
                <!-- Trip Showcase  -->
                <div id="showcase-treks" class="text padding-bottom-null grey-background center">
                    <div class="container">
                        <div class="col-md-12 padding-leftright-null text-center">
                            <h2 class="margin-bottom-null title line center">Daftar Gunung</h2>
                            <p class="heading center grey margin-bottom-null">Let's Explore Gunung Jawa Tengah</p>
                        </div>
                        <div class="col-md-12 padding-leftright-null">
                            <section class="showcase-carousel text">
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
                            </section>
                            <div class="col-md-12 text text-center">
                                <a href="/gunung" class="shadow btn-alt small activetwo margin-bottom-null flex-animation no-opacity">More info</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  END Trip Showcase  -->

                <!--  Section Image Background with overlay  -->
                <div class="row margin-leftright-null grey-background">
                    <div class="bg-img overlay simple-parallax responsive" style="background-image:url(assets/img/testimoni.png)">
                        <div class="container">
                            <!-- Testimonials -->
                            <section class="testimonials-carousel-simple col-md-12 text padding-bottom-null">
                                <div class="item padding-leftright-null">
                                    <div class="padding-top-null padding-bottom-null">
                                        <blockquote class="margin-bottom-small white">Webnya kreatif dan bagusss kerenn<em class="small grey-light">Virnika geming</em></blockquote>
                                    </div>
                                </div>
                                <div class="item padding-leftright-null">
                                    <div class="padding-top-null padding-bottom-null">
                                        <blockquote class="margin-bottom-small white">Webnya buguss kerenn, sangat membantu saya dalam petualangan saya<em class="small grey-light">enrico</em></blockquote>
                                    </div>
                                </div>
                            </section>
                            <!-- END Testimonials -->
                        </div>
                    </div>
                </div>
                <!--  END Section Image Background with overlay  -->
                 <!-- Carousel Gallery -->
                 <div class="row margin-leftright-null padding-sm">
                    <div class="col-md-12 padding-leftright-null text padding-bottom-null text-center">
                                <h2 class="margin-bottom-null title line center">Galeri Terakhir Kami</h2>
                                <!-- <p class="heading center grey margin-bottom-null"></p> -->
                                <br><br>
                                <div class="gallery-carousel">
                                    <div class="item">
                                        <div class="image" style="background-image:url(assets/img/galeri-1.png)"></div>
                                    </div>
                                    <div class="item">
                                        <div class="image" style="background-image:url(assets/img/galeri-2.png)"></div>
                                    </div>
                                    <div class="item">
                                        <div class="image" style="background-image:url(assets/img/galeri-3.png)"></div>
                                    </div>
                                    <div class="item">
                                        <div class="image" style="background-image:url(assets/img/galeri-4.png)"></div>
                                    </div>
                                    <div class="item">
                                        <div class="image" style="background-image:url(assets/img/galeri-5.png)"></div>
                                    </div>
                                    <div class="item">
                                        <div class="image" style="background-image:url(assets/img/galeri-6.png)"></div>
                                    </div>
                                    <div class="item">
                                        <div class="image" style="background-image:url(assets/img/galer-7.png)"></div>
                                    </div>
                                    <div class="item">
                                        <div class="image" style="background-image:url(assets/img/galeri-8.png)"></div>
                                    </div>
                                    <div class="item">
                                        <div class="image" style="background-image:url(assets/img/galeri-9.png)"></div>
                                    </div>
                                    <div class="item">
                                        <div class="image" style="background-image:url(assets/img/galeri-10.png)"></div>
                                    </div>
                                    <div class="item">
                                        <div class="image" style="background-image:url(assets/img/galer-7.png)"></div>
                                    </div>
                                </div>
                    </div>
                </div>
                <!-- Carousel Gallery -->
                
                <!-- Section News -->
                            <div class="col-md-12 padding-leftright-null text padding-bottom-null text-center">
                                <h2 class="margin-bottom-null title line center">Artikel Terakhir Kami</h2>
                                <!-- <p class="heading center grey margin-bottom-null">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p> -->
                            </div>
                            <div class="col-md-12 text" id="news">
                                <!-- Single News -->
                                <div class="col-sm-6 single-news horizontal-news">
                                    <article>
                                        <div class="col-md-6 padding-leftright-null">
                                            <div class="image" style="background-image:url(assets/img/tips&trik_mendaki.png)"></div>
                                        </div>
                                        <div class="col-md-6 padding-leftright-null">
                                            <div class="content">
                                                <h3>Tips n Trik Mendaki</h3>
                                                <span class="date">02.04.2023</span>
                                                <p>Kegiatan mendaki juga memiliki tips dan trik agar perjalanan menuju puncak tidak membosankan dan sampai di puncak dengan aman.</p>
                                                <span class="category">Travel</span>
                                                <span class="category">Artiel</span>
                                            </div>
                                        </div>
                                        <a href="/art2" class="link"></a>
                                    </article>
                                </div>
                                <!-- END Single News -->
                                <div class="col-sm-6 single-news horizontal-news">
                                    <article>
                                        <div class="col-md-6 padding-leftright-null">
                                            <div class="image" style="background-image:url(assets/img/perkap_mendaki1.png)"></div>
                                        </div>
                                        <div class="col-md-6 padding-leftright-null">
                                            <div class="content">
                                                <h3>Peralatan & Perlengkapan</h3>
                                                <span class="date">05.04.2023</span>
                                                <p>Dalam kegiatan mendaki tentu perlengkapan dan peralatan yang digunakan untuk kebutuhan mendaki harus di persiapkan.</p>
                                                <span class="category">Gunung</span>
                                                <span class="category">Artikel</span>
                                            </div>
                                            <a href="/art1" class="link"></a>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-md-12 text text-center">
                                <a href="/blog" class="shadow btn-alt small activetwo margin-bottom-null flex-animation no-opacity">More info</a>
                            </div>
                <!-- END Section News -->
                <!--  Sponsor  -->
                <div class="row no-margin">
                    <div class="container text">                      
                    </div>
                </div>
                <!--  Sponsor  -->
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
                            <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i> @montanha</a></li>
                            <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i> @montanha</a></li>
                            <li><a href=""><i class="" aria-hidden="true"></i> +62 08123456789</a></li>
                            <li><a href=""><i class="" aria-hidden="true"></i> montanha@gmail.com</a></li>
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
                        <div class="col-md-4 padding-leftright-null">
                            <!-- <ul class="social">
                                <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul> -->
                        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>

<script>
    $(document).ready(() => {
        @if(\Session::get('message'))
        Swal.fire({
            icon: 'success',
            title: 'Perhatian',
            text: '{{ \Session::get('message') }}',
        })
        @endif
    })
</script>