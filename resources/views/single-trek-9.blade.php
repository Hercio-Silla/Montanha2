<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Gunung Bismo</title>

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
                        <li style="background-image:url(assets/img/bisma.png)">
                            <div class="container text text-center">
                                <h1 class="white margin-bottom-small">Gunung Bismo</h1>
                                <p class="heading white">Explore pengalamanmu dengan mendaki gunung di Jawa Tegah</p>
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Gunung Bismo</li>
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
                                    <h2 class="margin-bottom-null title line left">About Gunung Bismo</h2>
                                    <p class="heading left grey margin-bottom-null">Let's Explore Gunung Bismo</p>
                                    <div class="padding-onlytop-md">
                                        <p>Gunung Bismo atau Gunung Bisma adalah sebuah gunung yang berada di Kabupaten Wonosobo, Provinsi Jawa Tengah. Gunung Bisma masih berada di Pegunungan Komplek Gunung Api Dieng. Secara Administrasi, Gunung Bisma terletak di Kabupaten Wonosobo.</p>
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
                                            <span class="meta grey">CP 1:  0877-3111-1319 (Pos Pendakian)</span>
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
                        <div class="bg-img overlay simple-parallax responsive" style="background-image:url(assets/img/bisma.png)">
                           <div class="container">
                               <!-- Trek data -->
                               <div class="text trek-data text-center">
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-money service big margin-bottom-null white"></i>
                                       <em class="color">mdpl</em>
                                       <h3 class="white">2365</h3>
                                   </div>
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-hour service big margin-bottom-null white"></i>
                                       <em class="color">Status</em>
                                       <h3 class="white">Tidak Aktif</h3>
                                   </div>
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-camp-bag service big margin-bottom-null white"></i>
                                       <em class="color">Kesulitan</em>
                                       <h3 class="white">Sedang</h3>
                                   </div>
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-male service big margin-bottom-null white"></i>
                                       <em class="color">Solo Hiking</em>
                                       <h3 class="white">YA</h3>
                                   </div>
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-watch service big margin-bottom-null white"></i>
                                       <em class="color">Jam</em>
                                       <h3 class="white">± 3</h3>
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
                                <p>Gunung Bismo atau Gunung Bisma adalah sebuah gunung yang berada di Kabupaten Wonosobo, Provinsi Jawa Tengah. Gunung Bisma masih berada di Pegunungan Komplek Gunung Api Dieng. Secara Administrasi, Gunung Bisma terletak di Kabupaten Wonosobo. tepatnya di perbatasan Desa Campursari dengan Desa Sikunang, Kecamatan Kejajar, Kabupaten Wonosobo, Provinsi Jawa Tengah. Gunung Bisma memiliki ketinggian 2.365 meter di atas permukaan air laut Mdpl. Gunung Bisma merupakan bekas gunung api dengan kawah tua yang terpotong membuka kearah tenggara. Lembah yang dulunya merupakan pusat kubah lava gunung Bisma, kini menjadi desa Sikunang yang ada di jalur alternatif menuju Dataran Tinggi Dieng (jalur Sembungan).</p>
                                <p>Beberapa jalur pendakian Gunung Bisma bisa ditempuh melalui Dusun Pulosari [Basecamp Pendakian Gunung Bismo via Pulosari], Desa Campursari, Kejajar, Wonosobo. Desa Slukatan Kecamatan Mojotengah, desa Deroduwur Kecamatan Mojotengah, desa Sikunang kecamatan Kejajar, maupun via Dusun Depok, Krinjing kecamatan Watumalang.</p>
                                <h6 class="heading uppercase padding-onlytop-sm">Description Trek</h6>
                                <p><b>1.Gunung Bismo Via Maron</b></p>
                                <p>Perjalanan menuju puncak bismo via maron masih tergolong mudah, banyak pendaki yang melalui basecamp maron karena trek pendakian tidak terlalu menguras tenaga. Sepanjang perjalanan pendaki akan melewati perkebunan milik warga.</p>
                                <p><b>Gunung Bismo via Deroduwur</b></p>
                                <p>Untuk pendakian Gunung Bismo via deroduwur kalian akan menemui trek yang cukup landai dan disuguhi pemandangan perbukitan yang cukup bagus, kalian akan menjumpai pepohonan dan semak-semak dan ilalang yang masih alami.</p>
                                <p>Jalur pendakian gunung bismo via Deroduwur biasa disebut dengan jalur Dewa brata karena trek jalur ini didominasi trek yang landai. Pemandangan disekitarnya terdiri dari ilalang, pohon kerucut dan rumput hijau yang masih alami.</p>
                                <p>Setelah, sampai di pos dua (Hutan Pakis) pendaki akan menghadapi trek pendakian yang berbeda dari pos satu, trek pos dua didominasi trek yang menanjak dan terdapat pepohonan yang rindang sepanjang jalur pendakian.</p>
                                <p><b>3.Gunung Bismo via Sikunang</b></p>
                                <p>Untuk pendakian Gunung Bismo via Sikunang pendaki akan menemui trek yang cukup landai dan disuguhi pemandangan perbukitan yang cukup bagus. Pendaki akan menjumpai pepohonan dan semak-semak serta ilalang yang masih alami. Basecamp sikunang masih tergolong sepi karena banyak pendaki yang memilih jalur silandak.</p>
                                <p>Estiminasi Pendakian Gunung Bismo via Sikunang kurang lebih memakan waktu sekitar 2-4 jam, kalian dapat menempuh pendakian dengan lebih cepat asalkan memiliki fisik yang cukup bagus. Perjalanan untuk mencapai puncak Gunung Bismo trek yang dilalui lebih mudah dan sangat direkomendasikan untuk pendaki pemula.</p>
                                <p>Selain itu, kalian juga bisa berwisata sekaligus ke kawasan pengunungan Dieng. karena Gunung Bismo masih satu kawasan dengan Pegunungan Dieng.</p>
                                <p><b>4.Gunung Bismo via Pulosari</b></p>
                                <p>Jalur pendakian gunung Bismo via Pulosari menjadi jalur yang baru dibuka belum lama ini. Jalur ini memiliki basecamp yang cukup bagus dan rapi. Selain itu di sekitar basecamp terdapat juga warung yang menjual pernak-pernik gunung seperti gantungan kunci, baju, makanan dan minuman.</p>
                                <p>Jalur bismo via pulosari sekarang mulai dikenal oleh para pendaki, jalur ini memiliki medan yang landai dan beberapa tanjakan. Sesampainya dipuncak, pendaki juga dapat melihat gunung prau, gunung sumbing dan gunung sindoro.</p>
                                <p><b>5.Gunung Bismo via Silandak</b></p>
                                <p>Pendakian Gunung Bismo via Silandak pihak warga belum menyediakan basecamp ataupun pos pendakian untuk sampai ke puncak. Perjalanan menuju puncak gunung bismo via jalur silandakmasih tergolong sepi karena belum banyak pendaki yang mengetahui basecamp silandak.</p>
                                <p>Sepanjang perjalanan pendaki dapat melihat pohon-pohon dan semak, setelah melewati dusun Silandak pendaki masih harus melewati tanah pertanian milik warga setempat. Jalur yang sama ini juga bisa dilewati dari desa di baratnya silandak seperti dari desa Melikan dan Buntu Deroduwur. Setelah melewati tanah pertanian, pendaki akan melewati hutan semak dan ilalang.</p>
                            </div>
                        </div>
                    </div>
                    <!-- END Description Trek -->
                    <!-- Google map trek. Go to Google Maps, choose walking trail and share with iframe -->
                    <div class="row margin-leftright-null trek-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63325.36821493482!2d109.8458893803507!3d-7.259553297509778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700b88f401c273%3A0xf93313399338905!2sGunung%20Bismo!5e0!3m2!1sid!2sid!4v1686196388203!5m2!1sid!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    </div>
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
                    
                    <!-- Call to Action -->
                    <!-- <div class="row text margin-leftright-null color-background">
                        <div class="col-md-12 text-center">
                            <h4 class="big white">Would you like more info about this trip?</h4>
                            <h4 class="big margin-bottom-small white">Call us at <a href="" class="btn-pro simple white">+40 45615654</a> or</h4>
                            <a href="#" target="_blank" class="btn-alt small white margin-null active shadow">Contact us</a>
                        </div>
                    </div> -->
                    <!-- END Call to Action -->
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