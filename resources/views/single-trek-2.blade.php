<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Gunung Sumbing</title>

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
                        <li style="background-image:url(assets/img/galeri-6.png)">
                            <div class="container text text-center">
                                <h1 class="white margin-bottom-small">Gunung Sumbing</h1>
                                <!-- <p class="heading white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde veniam aperiam rerum quis atque, illum.</p> -->
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Gunung Sumbing</li>
                        </ol>
                    </ul>
                </div>
                <!--  END Slider  -->
                <div id="post-wrap" class="content-section fullpage-wrap">
                    <!-- Section same Height. Child get the parent Height. Set the same id -->
                    <div class="row margin-leftright-null">
                        <div class="container">
                            <!-- About -->
                            <div class="col-lg-6 padding-leftright-null">
                                <div data-responsive="parent-height" data-responsive-id="adv" class="text padding-lg-bottom-null">
                                    <h2 class="margin-bottom-null title line left">About Gunung Sumbing</h2>
                                    <p class="heading left grey margin-bottom-null">Discover the wild nature</p>
                                    <div class="padding-onlytop-md">
                                        <p>Gunung Sumbing, dengan ketinggian puncak 3.371 mdpl, adalah gunung api terletak di Jawa Tengah, Indonesia. Gunung ini merupakan gunung tertinggi ketiga di Pulau Jawa setelah Gunung Semeru dan Gunung Slamet. Administratif, Gunung Sumbing terletak di tiga wilayah kabupaten, yaitu Kabupaten Magelang, Kabupaten Temanggung, dan Kabupaten Wonosobo. Bersama dengan Gunung Sindoro, Gunung Sumbing membentuk bentang alam gunung kembar, mirip dengan Gunung Merapi dan Gunung Merbabu ketika dilihat dari arah Temanggung. Ada sebuah jalan provinsi yang melintasi celah antara Gunung Sumbing dan Gunung Sindoro yang menghubungkan kota Temanggung dan kota Wonosobo, yang dikenal sebagai "Kledung Pass".</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END About -->
                            <div class="col-lg-6 padding-leftright-null">
                                <div data-responsive="child-height" data-responsive-id="adv" class="text padding-md-top-null height-auto-lg">
                                    <div class="grey-background box-shadow text responsive-padding-sm">
                                        <!-- Hiker -->
                                        <div class="hiker">
                                            <img src="assets/img/profil.jpeg" alt="">
                                            <h3 class="">Contact Person</h3>
                                            <span class="meta grey">CP 1: 089688246671/085868611446 (Jalur Kaliangkrik) </span>
                                            <span class="meta grey">CP 2: 085868611446 (Jalur Garung)</span>
                                            <ul class="social">
                                                <li>
                                                    <a href=""><i class="icon ion-social-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href=""><i class="icon ion-social-dribbble"></i></a>
                                                </li>
                                                <li>
                                                    <a href=""><i class="icon ion-social-instagram"></i></a>
                                                </li>
                                                <li>
                                                    <a href=""><i class="icon ion-social-snapchat"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- END Hiker -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Section same Height. Child get the parent Height. Set the same id -->
                    <!--  Section Image Background with overlay  -->
                    <div class="row margin-leftright-null grey-background">
                        <div class="bg-img overlay simple-parallax responsive" style="background-image:url(assets/img/galeri-6.png)">
                           <div class="container">
                               <!-- Trek data -->
                               <div class="text trek-data text-center">
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-money service big margin-bottom-null white"></i>
                                       <em class="color">mdpl</em>
                                       <h3 class="white">3371</h3>
                                   </div>
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-hour service big margin-bottom-null white"></i>
                                       <em class="color">Status</em>
                                       <h3 class="white">Aktif</h3>
                                   </div>
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-camp-bag service big margin-bottom-null white"></i>
                                       <em class="color">Kesulitan</em>
                                       <h3 class="white">Sedang-Sulit</h3>
                                   </div>
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-male service big margin-bottom-null white"></i>
                                       <em class="color">Solo Hiking</em>
                                       <h3 class="white">Ya</h3>
                                   </div>
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-watch service big margin-bottom-null white"></i>
                                       <em class="color">Jam</em>
                                       <h3 class="white">± 7-8</h3>
                                   </div>
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-distance service big margin-bottom-null white"></i>
                                       <em class="color">Jumlah Trek</em>
                                       <h3 class="white">5</h3>
                                   </div>
                               </div>
                               <!-- END Trek data -->
                           </div>
                        </div>
                    </div>
                    <!--  END Section Image Background with overlay  -->
                    <!-- Description Trek -->
                    <div class="row margin-leftright-null">
                        <div class="container">
                            <div class="col-md-12 text padding-bottom-null text-center">
                                <h2 class="margin-bottom-null title line center">More info</h2>
                                <!-- <p class="heading center grey margin-bottom-null">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p> -->
                            </div>
                            <div class="col-md-12 text">
                                <p>Gunung Sumbing adalah gunung api yang terdapat di Jawa Tengah, Indonesia. (Ketinggian puncak 3.371 mdpl), gunung Sumbing merupakan gunung tertinggi ketiga di Pulau Jawa setelah Gunung Semeru dan Gunung Slamet. Gunung ini secara administratif terletak di tiga wilayah kabupaten, yaitu Kabupaten Magelang; Kabupaten Temanggung; dan Kabupaten Wonosobo. Bersama dengan Gunung Sindoro, Gunung Sumbing membentuk bentang alam gunung kembar, seperti Gunung Merapi dan Gunung Merbabu, apabila dilihat dari arah Temanggung. Celah antara gunung ini dan Gunung Sindoro dilalui oleh jalan provinsi yang menghubungkan kota Temanggung dan kota Wonosobo. Jalan ini biasa dijuluki sebagai "Kledung Pass".</p>
                                <h6 class="heading uppercase padding-onlytop-sm"><b>Deskripsi Trek</b></h6>
                                <p><b>1.Jalur pendakian Gunung Sumbing via Garung</b></p>
                                <p>Bagi yang ingin mendaki Gunung Sumbing untuk pertama kali, disarankan melalui jalur Garung karena lokasinya yang mudah dijangkau dan populer. Disini juga bisa bertemu dengan banyak pendaki lain sehingga tidak merasa sendirian saat mendaki. Selain itu melalui jalur Garung Ini base camp berada di pinggir jalan dan mudah ditemukan. Bagi yang datang dari Semarang dan sekitarnya bisa lewat jalan Sumowono – Temanggung – dan Wonosobo, pas di perbatasan antara Temanggung dan Wonosobo ada jalan di sebelah kiri, bisa ke plang dan lihat tulisan “Garung Base” Panggilan Perkemahan”.
                                Estimasi waktu tempuh dari base camp ke puncak adalah 8-9 jam melalui jalur trekking Garung. Namun, itu juga tergantung pada kecepatan berjalan Anda dan panjang langkah Anda saat mendaki. Dibutuhkan setidaknya 3 pos terdepan, waktu tempuh 3,5 jam, dan membutuhkan waktu sekitar 5 jam untuk mencapai puncak.</p>
                                <p>5 alasan lain kenapa kamu harus mencoba mendaki Gunung Slamet via Garung:</p>
                                <ul class="post margin-bottom">
                                    <li>Keindahan alam yang memukau.</li>
                                    <li>Aksesibilitas yang baik.</li>
                                    <li>Tantangan pendakian yang menarik.</li>
                                    <li>Keberagaman flora dan fauna.</li>
                                    <li>Panorama puncak yang menakjubkan</li>
                                </ul>

                                <p><b>2.Jalur Pendakian Gunung Sumbing via Cepit Parakan</b></p>
                                <p>Lokasi jalur pendakian ini berada di Desa Cepit, Parakan, Kabupaten Temanggung. Meski tidak selalu menjadi pilihan pertama bagi para petualang dan pendaki yang ingin menaklukan Gunung Sumbing, jalur pendakian ini memberikan pemandangan yang indah. Untuk mencapai base camp di jalur pendakian Cepit Parakan, langsung saja menuju Rumah Sakit Ngesti Waluyo yang sudah dekat dengan desa Cepit. Dari sana akses sangat mudah. Perjalanan melalui Cepit Parakan atau mendaki Gunung Sumbing sangat singkat. Hanya membutuhkan waktu 7 jam untuk mencapai Puncak Bentu setelah melewati tiga pos terdepan. Tentu saja, itu juga tergantung pada kecepatan berjalan.</p>
                                <p>5 alasan lain kenapa kamu harus mencoba mendaki Gunung Slamet via Cepit Parakan:</p>
                                <ul class="post margin-bottom">
                                    <li>Keindahan alam yang memukau.</li>
                                    <li>Kesendirian dan kedamaian.</li>
                                    <li>Tantangan pendakian yang menarik.</li>
                                    <li>Keberagaman flora dan fauna.</li>
                                    <li>Panorama puncak yang menakjubkan</li>
                                </ul>

                                <p><b>3.Jalur Pendakian Gunung Sumbing via Bowongso</b></p>
                                <p>Jalur pendakian yang satu ini sangat populer bagi yang ingin mendaki di Gunung Sumbing. Meski demikian, jalur ini sepi sehingga tidak disarankan untuk pemula.
                                Konon, jalur pendakian ini memiliki beberapa rintangan dan tantangan yang cukup berat atau cukup ekstrem. Untuk mencapai base camp pendakian ini, cukup menuju terminal Mendolo Wonosobo. Dari terminal hanya perlu berjalan kaki menuju Pasar Kertek, dari sini Anda bisa mencapai Base Camp Bowongso Total waktu pendakian melalui jalur Bowongso adalah 7 jam Tentu saja, seperti rencana perjalanan sebelumnya, 7 jam hanyalah perkiraan. Bahkan, tentunya juga tergantung seberapa cepat berjalan saat menanjak.</p>
                                <p>5 alasan lain kenapa kamu harus mencoba mendaki Gunung Slamet via Bowongso:</p>
                                <ul class="post margin-bottom">
                                    <li>Keindahan alam yang memukau.</li>
                                    <li>Pengalaman pendakian yang tenang.</li>
                                    <li>Tantangan medan yang menarik.</li>
                                    <li>Keberagaman flora dan fauna.</li>
                                    <li>Panorama puncak yang menakjubkan</li>
                                </ul>

                                <p><b>4.Jalur Pendakian Gunung Sumbing via Mangli Kaliangkrik atau Dusun Butuh</b></p>
                                <p>jalur via Dusun Butuh diklaim sebagai jalur pendakian Gunung Sumbing paling cepat. Jalur pendakian Gunung Sumbing ini memang kurang terkenal, namun jalur ini juga menjadi pilihan utama para pendaki. Berada di Desa Mangli, Kaliangkrik, Kabupaten Magelang, untuk mencapai desa tersebut harus menuju ke Desa Kalegen. Desa Manli dan Base Camp Gunung Sumbing dapat dicapai dengan ojek dari Desa Kalagen. Pada pendakian ini akan melewati setidaknya 4 pos selama 4 jam, dengan 2 jam lagi dari pos terakhir ke puncak. Seluruh perjalanannya seperti trekking hanya membutuhkan waktu 6-7 jam untuk mencapai puncak Gunung Sumbing.</p>
                                <p>5 alasan lain kenapa kamu harus mencoba mendaki Gunung Slamet via Mangli Kaliangkrik atau Dusun Butuh:</p>
                                <ul class="post margin-bottom">
                                    <li>Keindahan alam yang memukau.</li>
                                    <li>Pengalaman pendakian yang tenang.</li>
                                    <li>Tantangan medan yang menarik.</li>
                                    <li>Keberagaman flora dan fauna.</li>
                                    <li>Panorama puncak yang menakjubkan</li>
                                </ul>

                                <p><b>5.Jalur Pendakian Gunung Sumbing via Sipetung</b></p>
                                <p>Jalur Pendakian Gunung Sumbing ini terletak di Desa Jambu, Kecamatan Kledung, Kabupaten Temanggung. Dari arah Magelang – Wonosobo, terdapat beberapa rambu yang menunjukkan jalan masuk ke desa Jambu di kecamatan Kledung, yaitu di kiri jalan. Dari pintu masuk desa, bisa berjalan kaki menuju base camp pendakian yang jaraknya 500 meter. Kemudian, ketika semuanya sudah siap, berjalan kaki selama 7 hingga 8 jam untuk menuju puncak.</p>
                                <p>5 alasan lain kenapa kamu harus mencoba mendaki Gunung Slamet via Sipetung:</p>
                                <ul class="post margin-bottom">
                                    <li>Keindahan alam yang memukau.</li>
                                    <li>Pengalaman pendakian yang tenang.</li>
                                    <li>Tantangan medan yang menarik.</li>
                                    <li>Keberagaman flora dan fauna.</li>
                                    <li>Panorama puncak yang menakjubkan</li>
                                </ul>

                                <div class="table-responsive shadow">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Google map trek. Go to Google Maps, choose walking trail and share with iframe -->
                    <div class="row margin-leftright-null trek-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31653.78042775419!2d110.05190027554134!3d-7.384956817861267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a9c697b1bf411%3A0x7cb176b5c2587d2d!2sGn.%20Sumbing!5e0!3m2!1sid!2sid!4v1685088614596!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- END Google map trek. Go to Google Maps, choose walking trail and share with iframe -->
                    <!--  Share Btn  -->
                    <div id="share">
                        <a class="share-btn">
                            <i class="icon ion-android-share-alt"></i>
                        </a>
                        <div class="share-icons" style="display:none">
                            <a href="" class="share-google">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </a>
                            <a href="" class="share-twitter">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="" class="share-linkedin">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="" class="share-mail">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <!--  END Share Btn  -->
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