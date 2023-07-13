<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Gunung Rogojembangan</title>

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
                        <li style="background-image:url(assets/img/rogo.png)">
                            <div class="container text text-center">
                                <h1 class="white margin-bottom-small">Gunung Rogojembangan</h1>
                                <p class="heading white">Explore pengalamanmu dengan mendaki gunung di Jawa Tegah</p>
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Gunung Rogojembangan</li>
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
                                    <h2 class="margin-bottom-null title line left">About Gunung Rogojembangan</h2>
                                    <p class="heading left grey margin-bottom-null">Let's Explore Gunung RogoJembangan</p>
                                    <div class="padding-onlytop-md">
                                        <p>Gunung Rogojembangan adalah sebuah gunung yang terdapat di Provinsi Jawa Tengah, Indonesia. Secara administratif gunung ini berada di perbatasan Kabupaten Banjarnegara dan Kabupaten Pekalongan. Gunung ini adalah salah satu puncak dari Pegunungan Serayu Utara yang menjulang di sebalah barat Dataran Tinggi Dieng dengan ketinggian sekitar 2.117 mdpl.</p>
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
                                            <span class="meta grey">CP 1: 089561289291 (Jalur Bambangan)</span>
                                            <span class="meta grey">CP 2: 081671202810 (Jalur Gunung Malang)</span>
                                            <span class="meta grey">CP 3: 085193518929 (Jalur Dipajaya)</span>
                                            <span class="meta grey">CP 4: 082157381028 (Jalur Guci)</span>
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
                        <div class="bg-img overlay simple-parallax responsive" style="background-image:url(assets/img/rogo.png)">
                           <div class="container">
                               <!-- Trek data -->
                               <div class="text trek-data text-center">
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-money service big margin-bottom-null white"></i>
                                       <em class="color">mdpl</em>
                                       <h3 class="white">2117</h3>
                                   </div>
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-hour service big margin-bottom-null white"></i>
                                       <em class="color">Status</em>
                                       <h3 class="white">Tidak Aktif</h3>
                                   </div>
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-camp-bag service big margin-bottom-null white"></i>
                                       <em class="color">Kesulitan</em>
                                       <h3 class="white">Tinggi</h3>
                                   </div>
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-male service big margin-bottom-null white"></i>
                                       <em class="color">Solo Hiking</em>
                                       <h3 class="white">TIDAK</h3>
                                   </div>
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-watch service big margin-bottom-null white"></i>
                                       <em class="color">Jam</em>
                                       <h3 class="white">± 3</h3>
                                   </div>
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-distance service big margin-bottom-null white"></i>
                                       <em class="color">Jumlah Trek</em>
                                       <h3 class="white">4</h3>
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
                                <p class="heading center grey margin-bottom-null">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            </div>
                            <div class="col-md-12 text">
                                <p>Gunung Argojambangan adalah sebuah gunung yang terdapat di Provinsi Jawa Tengah, Indonesia. Secara administratif gunung ini berada di perbatasan Kabupaten Banjarnegara dan Kabupaten Pekalongan. Gunung ini adalah salah satu puncak dari Pegunungan Serayu Utara yang menjulang di sebalah barat Dataran Tinggi Dieng dengan ketinggian sekitar 2.117 mdpl. Gunung Argojambangan bukan merupakan gunung berapi namun pada masa silam pernah ada aktivitas vulkanik di gunung ini.</p>
                                <p>Gunung ini memiliki 2 akses pendakian, yang pertama bisa melalui Kecamatan Wanayasa, Kabupaten Banjarnegara dan Kecamatan Petungkriono di Kabupaten Pekalongan. Ada beberapa desa yang mengelilingi kaki gunung ini yaitu: Desa Gumelem, Semego, Tempuran, Wanaraja dan Desa Jatilawang. Namun jalur pendakian yang paling sering dilalui adalah dari Desa Gumelem dan Desa Semego. Puncak gunung ini tidak terlalu lebar kira-kira hanya selebar lapangan badminton, berupa tanah yang datar dan tanpa tumbuhan. Di puncak gunung ini juga terdapat sebuah sumur kecil namun sekarang sudah tak berisi air lagi.</p>
                                <p>Gunung Argojambangan menjadi salah satu tujuan wisata di Kabupaten Banjarnegara dan Kabupaten Pekalongan. Bagian utara kaki gunung ini merupakan tebing-tebing curam yang dihiasi beberapa air terjun, yang paling terkenal adalah Curug Bajing di Desa Tlogopakis, Kecamatan Petungkriono. Selain itu terdapat Curug Cinde, Curug Watugajah dan Curug Muncar.</p>
                                <h6 class="heading uppercase padding-onlytop-sm">Description Trek</h6>
                                <p><b>1. Jalur Pendakian via Bambangan</b></p>
                                <p>Jalur pendakian via Bambangan disebut jalur paling dikenal dan disarankan untuk pendaki karena sudah dikelola dengan baik. Saking populernya, jalur ini selalu ramai baik pada akhir pekan maupun hari libur nasional. Jalur via Bambangan memiliki durasi pendakian paling pendek bila dibandingkan dengan jalur lainnya. Dengan durasi 7-8 jam melewati 9 pos, Anda dapat mencapai puncak Gunung Slamet. Lama pendakian normalnya 2-3 hari, dengan lokasi berkemah yang ideal di Pos 5 yang terdapat sumber air dan Pos 7. Di jalur ini, tersedia basecamp yang kondisinya baik dan warung untuk memenuhi kebutuhan logistik selama pendakian. Anda juga bisa menemukan jasa porter atau pemandu dengan mudah di jalur pendakian Gunung Slamet via Bambangan. Jalur via Bambangan berlokasi di Jalan Raya Gunung, Bambangan, Kutabawa, Kecamatan Karangreja, Purbalingga, Jawa Tengah.</p>
                                <p><b>2. Jalur Pendakian via Gunung Malang</b></p>
                                <p>Gunung Malang terletak di sisi selatan Gunung Slamet dan termasuk salah satu jalur pendakian yang cocok untuk pemula. Jalur yang terletak tidak jauh dari jalur via Bambangan ini telah diresmikan oleh PA Gunung Slamet dan Perhutani. Medan yang akan Anda lalui cukup ringan sampai dengan Pos 3 lalu mulai menanjak terus sampai ke Pos 5 alias puncak Gunung Malang. Setelah itu, trek pendakian menurun, hingga tiba di pos puncak Gunung Slamet. Keseluruhan pos diperkirakan dapat dicapai dalam jangka waktu 8-9 jam tergantung kecepatan pendakian. Anda dapat menemukan sumber air di Pos 3 dan Pos 4 dan idealnya berkemah di Pos 6. Basecamp pendakian via Gunung Malang terletak di Clekatakan, Pulosari, Kabupaten Pemalang, Jawa Tengah.</p>
                                <p><b>3. Jalur Pendakian via Dipajaya</b></p>
                                <p>Jalur pendakian Gunung Slamet via Dipajaya adalah alternatif lain di jalur via Bambangan. Anda akan melewati Pos 1 dan Pos 2 yang berbeda dengan jalur Bambangan, lalu dilanjutkan dengan Pos 3 sampai puncak yang sama dengan jalur Bambangan. Jalur ini memangkas waktu dua jam dari jalur Bambangan sehingga Anda akan lebih cepat sampai ke puncak Gunung Slamet. Meskipun begitu, jalur via Dipajaya termasuk cukup sulit dengan medan yang terjal dari basecamp sampai Pos 2. Namun, panorama yang disuguhkan tak hanya pegunungan tetapi juga hamparan pantai utara Jawa yang cukup memanjakan mata. Selama pendakian, Anda dapat menemukan sumber air di Pos 5 dan berkemah di sana atau di Pos 7. Alamat basecamp Dipajaya yaitu di Clekatakan, Pulosari, Kabupaten Pemalang, Jawa Tengah.</p>
                                <p><b>4. Jalur Pendakian via Guci</b></p>
                                <p>Daerah Guci terkenal dengan wisata pemandian air panas dan semakin ramai dengan adanya jalur pendakian Gunung Slamet. Jalur ini memiliki karakter trek yang panjang dan lebih landai jika dibandingkan dengan jalur pendakian lainnya sehingga cocok untuk pendaki pemula. Untuk memulai pendakian, Anda dapat memilih tiga basecamp berbeda mulai dari basecamp Permadi, basecamp Gupala, atau basecamp Kompak. Kendati relatif landai, jalur pendakian ini memiliki medan beragam, dari trek berbatu, hutan pinus dan hutan tropis, sampai semak belukar dan trek berpasir. Durasi pendakian normal selama 2-3 hari yang terbagi dalam 5 pos, dengan sumber air tersedia di Pos 4. Basecamp jalur pendakian via Guci terletak di Pekandangan, Rembul, Kecamatan Bojong, Tegal, Jawa Tengah.</p>
                            </div>
                        </div>
                    </div>
                    <!-- END Description Trek -->
                    <!-- Google map trek. Go to Google Maps, choose walking trail and share with iframe -->
                    <div class="row margin-leftright-null trek-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31668.508159369067!2d109.6921780753165!3d-7.176345711108453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700529ea4b8c17%3A0xb86bee363008fb65!2sGn.%20Rogojembangan!5e0!3m2!1sid!2sid!4v1686196464165!5m2!1sid!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    </div>
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