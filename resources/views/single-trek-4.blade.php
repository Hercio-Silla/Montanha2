<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Gunung Ungaran</title>

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
                        <li style="background-image:url(assets/img/galeri-3.png)">
                            <div class="container text text-center">
                                <h1 class="white margin-bottom-small">Gunung Ungaran</h1>
                                <!-- <p class="heading white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde veniam aperiam rerum quis atque, illum.</p> -->
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Gunung Ungaran</li>
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
                                    <h2 class="margin-bottom-null title line left">About Gunung Ungaran</h2>
                                    <p class="heading left grey margin-bottom-null">Discover the wild nature</p>
                                    <div class="padding-onlytop-md">
                                        <p>Gunung Ungaran adalah gunung yang terletak di Provinsi Jawa Tengah, Indonesia, dengan ketinggian sekitar 2.050 meter di atas permukaan laut. Gunung ini menawarkan keindahan alam yang spektakuler dengan beberapa jalur pendakian yang dapat dipilih, seperti melalui Desa Bawen atau Desa Gedong Songo. Selama pendakian, pendaki akan melewati hutan yang lebat dengan flora dan fauna yang beragam. Puncak Gunung Ungaran menawarkan panorama menakjubkan dengan pemandangan pegunungan dan kota-kota di sekitarnya. Terdapat pula kompleks Gedong Songo, yang terdiri dari tujuh candi Hindu kuno, sebagai daya tarik tambahan. Gunung Ungaran juga menjadi tempat yang populer untuk camping dan trekking, menawarkan pengalaman alam yang menantang bagi para pecinta alam dan pendaki.</p>
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
                                            <span class="meta grey">CP 1: 085640734875 (Jalur Bandungan)</span>
                                            <span class="meta grey">CP 2: 081225711243 (Jalur Bandungan)</span>
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
                        <div class="bg-img overlay simple-parallax responsive" style="background-image:url(assets/img/galeri-3.png)">
                           <div class="container">
                               <!-- Trek data -->
                               <div class="text trek-data text-center">
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-money service big margin-bottom-null white"></i>
                                       <em class="color">mdpl</em>
                                       <h3 class="white">2050</h3>
                                   </div>
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-hour service big margin-bottom-null white"></i>
                                       <em class="color">Status</em>
                                       <h3 class="white">Tidak Aktif</h3>
                                   </div>
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-camp-bag service big margin-bottom-null white"></i>
                                       <em class="color">Kesulitan</em>
                                       <h3 class="white">Sedang-Menengah</h3>
                                   </div>
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-male service big margin-bottom-null white"></i>
                                       <em class="color">Solo Trek</em>
                                       <h3 class="white">Ya</h3>
                                   </div>
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-watch service big margin-bottom-null white"></i>
                                       <em class="color">Jam</em>
                                       <h3 class="white">± 4-6</h3>
                                   </div>
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-distance service big margin-bottom-null white"></i>
                                       <em class="color">Jumlah Trek</em>
                                       <h3 class="white">2</h3>
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
                                <p>Gunung Ungaran adalah gunung di Provinsi Jawa Tengah, Indonesia, dengan ketinggian sekitar 2.050 meter di atas permukaan laut. Gunung ini menjadi salah satu destinasi pendakian yang populer di wilayah tersebut. Keindahan alamnya menakjubkan dan menyajikan pemandangan spektakuler.</p>
                                <p>Terdapat beberapa jalur pendakian yang dapat dipilih, seperti melalui Desa Bawen atau Desa Gedong Songo. Kedua jalur ini menawarkan pengalaman pendakian yang menantang namun memuaskan. Pendaki akan melewati hutan yang lebat dengan flora dan fauna yang beragam. Ada juga titik peristirahatan di sepanjang perjalanan untuk menikmati pemandangan indah sekitar.</p>
                                <p>Daya tarik utama Gunung Ungaran adalah kompleks Gedong Songo yang terdiri dari tujuh candi Hindu kuno. Dari puncak Gunung Ungaran, pengunjung dapat menikmati panorama pegunungan yang menghampar dan melihat Gunung Merbabu, Gunung Merapi, serta Kota Semarang pada cuaca yang cerah.</p>
                                <p>Selain pendakian, Gunung Ungaran juga populer untuk camping dan trekking. Banyak pendaki yang menghabiskan waktu semalam di sekitar gunung untuk menikmati keindahan alam malam dan langit berbintang.</p>
                                <p>Secara keseluruhan, Gunung Ungaran merupakan destinasi yang cocok bagi pecinta alam, pendaki, dan penggemar petualangan yang ingin menikmati keindahan alam serta menguji keterampilan mendaki mereka.</p>
                                <h6 class="heading uppercase padding-onlytop-sm"><b>Deskripsi Trek</b></h6>
                                <p><b>1.Jalur pendakian Gunung Ungaran via Mawar</b></p>
                                <p>Jalur pendakian Gunung Ungaran via Mawar merupakan jalur pendakian Gunung Ungaran favorit para pendaki pemula. Karena jalur Mawar memiliki jalur yang relatif landai, waktu tempuh cepat dan area camping ground yang nyaman.
                                Lokasi basecamp pendakian Gunung Ungaran via Mawar berada di Kluwihan, Sidomukti, Kec. Bandungan, Kabupaten Semarang. Dari pasar Jimbaran, kamu ambil arah naik searah dengan jalan menuju objek wisata Umbul Sidomukti. Dari Umbul Sidomukti nanti naik lagi ke arah Mawar Camp – Gunung Ungaran.</p>
                                <p>5 alasan lain kenapa kamu harus mencoba mendaki Gunung Ungaran via Mawar:</p>
                                <ul class="post margin-bottom">
                                    <li>Jalur pendakiannya relatif pendek dan ramah untuk pendaki pemula.</li>
                                    <li>Terdapat camping ground yang nyaman dengan fasilitas yang lengkap.</li>
                                    <li>Terdapat sumber air di jalur pendakian.</li>
                                    <li>Pemandangan alam di jalur pendakian sangat indah.</li>
                                    <li>Banyak lokasi ngecamp yang strategis.</li>
                                </ul>

                                <p><b>2.Jalur Pendakian Gunung Ungaran via Parantunan</b></p>
                                <p>Jalur Perantunan merupakan jalur pendakian Gunung Ungaran dari sisi selatan Gunung Ungaran. Melalui jalur Parantunan, kamu dapat mendaki ketiga puncak sekaligus, yaitu Puncak Bondolan, Puncak Botak dan Puncak Tugu Banteng Raiders.
                                Memang jalur Parantunan tidak sepopuler jalur Mawar, tapi jalur ini menawarkan pengalaman mendaki yang istimewa. Karena jalur pendakiannya relatif landai, jarak antar posnya dekat dan jalur pendakian didominasi oleh jalan tanah.</p>
                                <p>5 alasan lain kenapa kamu harus mencoba mendaki Gunung Ungaran via Gunung Parantunan:</p>
                                <ul class="post margin-bottom">
                                    <li>Jalur pendakiannya relatif pendek dan ramah untuk pendaki pemula.</li>
                                    <li>Terdapat camping ground yang nyaman dengan fasilitas yang lengkap.</li>
                                    <li>Terdapat sumber air di jalur pendakian.</li>
                                    <li>Pemandangan alam di jalur pendakian sangat indah.</li>
                                    <li>Banyak lokasi ngecamp yang strategis.</li>
                                </ul>

                                <div class="table-responsive shadow">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Description Trek -->
                    <!-- Google map trek. Go to Google Maps, choose walking trail and share with iframe -->
                    <div class="row margin-leftright-null trek-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126684.70665188605!2d110.22451336599816!3d-7.137898790958745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70877673433705%3A0x45187cfff17d1552!2sGn.%20Ungaran!5e0!3m2!1sid!2sid!4v1686195314198!5m2!1sid!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    </div>
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