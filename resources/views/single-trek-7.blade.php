<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Gunung Prau</title>

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
                        <li style="background-image:url(assets/img/galeri-1.png)">
                            <div class="container text text-center">
                                <h1 class="white margin-bottom-small">Gunung Prau</h1>
                                <p class="heading white">Explore pengalamanmu dengan mendaki gunung di Jawa Tegah</p>
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Gunung Prau</li>
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
                                    <h2 class="margin-bottom-null title line left">About Gunung Prau</h2>
                                    <p class="heading left grey margin-bottom-null">Let's Explore Gunung Prau</p>
                                    <div class="padding-onlytop-md">
                                        <p>Gunung Prau adalah sebuah gunung yang terletak di Jawa Tengah, Indonesia. Dengan ketinggian sekitar 2.565 meter di atas permukaan laut, Gunung Prau merupakan salah satu destinasi pendakian yang populer di antara para pendaki lokal maupun mancanegara. Gunung Prau terletak di wilayah Dieng, Kabupaten Wonosobo. Rute pendakian yang umumnya digunakan adalah melalui Desa Dieng Kulon. Gunung ini menawarkan perjalanan pendakian yang menantang namun menarik dengan pemandangan alam yang luar biasa sepanjang perjalanan.</p>
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
                                            <span class="meta grey">CP 1: 085875663666 (Basecamp Patak Banteng)</span>
                                            <span class="meta grey">CP 2: 082234135789 (Basecamp Dieng)</span>
                                            <span class="meta grey">CP 3: 082138949293 (Basecamp Wates)</span>
                                            <span class="meta grey">CP 4: 085225152221 (Basecamp Kalilembu)</span>
                                            <span class="meta grey">CP 5: 082220893233 (Basecamp Dwarawati)</span>
                                            <span class="meta grey">CP 6: 081912914178 (Basecamp Igirmranak)</span>
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
                        <div class="bg-img overlay simple-parallax responsive" style="background-image:url(assets/img/galeri-1.png)">
                           <div class="container">
                               <!-- Trek data -->
                               <div class="text trek-data text-center">
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-money service big margin-bottom-null white"></i>
                                       <em class="color">mdpl</em>
                                       <h3 class="white">2565</h3>
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
                                       <h3 class="white">± 4</h3>
                                   </div>
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-distance service big margin-bottom-null white"></i>
                                       <em class="color">Jumlah Trek</em>
                                       <h3 class="white">6</h3>
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
                                <p>Gunung Prau adalah sebuah gunung yang terletak di Jawa Tengah, Indonesia. Dengan ketinggian sekitar 2.565 meter di atas permukaan laut, Gunung Prau merupakan salah satu destinasi pendakian yang populer di antara para pendaki lokal maupun mancanegara.</p>
                                <p>Gunung Prau terletak di wilayah Dieng, Kabupaten Wonosobo. Rute pendakian yang umumnya digunakan adalah melalui Desa Dieng Kulon. Gunung ini menawarkan perjalanan pendakian yang menantang namun menarik dengan pemandangan alam yang luar biasa sepanjang perjalanan.</p>
                                <p>Saat pendakian, pendaki akan melewati hutan pinus yang indah, padang rumput yang luas, dan daerah pegunungan yang eksotis. Salah satu daya tarik utama Gunung Prau adalah pemandangan matahari terbit yang menakjubkan dari puncaknya. Ketika cuaca cerah, pendaki dapat menyaksikan panorama spektakuler dengan awan yang membentang di bawah dan pemandangan gunung-gunung lainnya di kejauhan.</p>
                                <p>Puncak Gunung Prau juga merupakan tempat yang populer untuk berkemah. Banyak pendaki yang memilih untuk menghabiskan malam di puncak gunung untuk menikmati keindahan alam malam yang jauh dari cahaya kota. Suasana yang tenang dan udara segar di sekitar gunung membuat pengalaman berkemah di Gunung Prau menjadi sangat menenangkan.</p>
                                <p>Selain itu, Gunung Prau juga terkenal dengan formasi batu yang menyerupai sumber air, yang disebut sebagai Candi Cetho. Tempat ini menjadi spot foto yang populer di gunung ini.</p>
                                <p>Gunung Prau adalah destinasi yang sangat direkomendasikan bagi para pendaki dan pecinta alam yang mencari petualangan dan keindahan alam yang menakjubkan. Dengan panorama alam yang memukau dan pengalaman mendaki yang menantang, Gunung Prau menjadi tujuan yang menarik untuk dieksplorasi.</p>
                                <h6 class="heading uppercase padding-onlytop-sm"><b>Deskripsi Trek</b></h6>
                                <p><b>1. Jalur Pendakian Gunung Prau via Patak Banteng</b></p>
                                <p>Jalur pendakian Gunung Prau via Patakbanteng merupakan jalur pendakian Gunung Prau yang paling digemari oleh para pendaki pemula. Hal ini karena jalur pendakian Gunung Prau via Patakbanteng cenderung mudah, pemandangannya bagus dan fasilitas wisatanya lengkap. Bahkan ada warung warga di samping jalur pendakian. Jadi, pendaki nggak perlu takut kehabisan bekal selama pendakian.</p>
                                <p>Karena jalur pendakian Patakbanteng sangat populer, jangan kaget jika saat kamu mendaki lewat sana, jalur pendakian penuh sesak oleh para pendaki. Bahkan saat weekend atau libur nasional, jalur pendakian macet. Hal ini karena saking banyaknya pendaki yang baru naik atau baru turun dari puncak Prau via Patakbanteng.</p>
                                <p>5 alasan kenapa jalur Patak Banteng wajib kamu coba</p>
                                <ul class="post margin-bottom">
                                    <li>Pertama, jalur pendakiannya viral di sosial media.</li>
                                    <li>Kedua, fasilitas wisata lengkap dan pelayanannya bagus.</li>
                                    <li>Ketiga, rute dan petunjuk jalur pendakian sangat jelas.</li>
                                    <li>Keempat, waktu tempuh cepat dan medan pendakian relatif mudah.</li>
                                    <li>Kelima, pemandangan alam yang memukau.</li>
                                </ul>
                                <p><b>2. Jalur Pendakian Gunung Prau via Kalilembu</b></p>
                                <p>Jalur pendakian Gunung Prau via Kalilembu merupakan jalur pendakian Gunung Prau dari pintu masuk Kalilembu, Dieng.Jalur Kalilembu memang tidak sepopuler jalur pendakian Patakbanteng. Karena akses menuju basecamp cukup jauh dari jalan raya, jarak tempuh ke puncak relatif jauh dan belum viral di sosial media. Namun, jalur Kalilembu memiliki panorama alam yang nggak kalah keren dari jalur-jalur lainnya.</p>
                                <p>Ada 3 alasan kenapa kamu wajib mencoba mendaki Gunung Prau via Kalilembu:</p>
                                <ul class="post margin-bottom">
                                    <li>Pertama, jalur pendakian relatif landai dan tidak terlalu ramai.</li>
                                    <li>Kedua, mengeksplorasi Gunung Prau dari jalur lain.</li>
                                    <li>Ketiga, pertemuan 3 jalur. Ternyata jalur Kalilembu ujungnya nanti akan bertemu dengan jalur pendakian lain saat menjelang puncak. Jika beruntung, kamu akan bertemu pendaki dari jalur Dwarawati dan jalur Dieng di pertigaan sebelum tanjakan menuju puncak.</li>
                                </ul>
                                <p><b>3. Jalur Pendakian Gunung Prau via Dwarawati</b></p>
                                <p>Jalur pendakian Gunung Prau via Dwarawati merupakan jalur pendakian yang memiliki pintu masuk dari Dieng Kulon. Lokasi basecamp-nya dekat dengan objek wisata Candi Dwarawati. Makanya, jalur pendakian ini lebih dikenal dengan nama jalur pendakian Dwarawati daripada jalur pendakian Dieng Kulon.</p>
                                <p>Lokasi basecamp Dwarawati berada di Krajan, Dieng Kulon, Batur, Banjarnegara, Jawa Tengah. Akses transportasinya cukup mudah. Kamu bisa menggunakan motor, mobil, ojek untuk sampai ke basecamp. Jika kamu menggunakan bus jurusan dieng, kamu tinggal berhenti saja di area wisata candi Dwarawati. Setelahnya, kamu tinggal jalan kaki ke basecamp Dwarawati.</p>
                                <p>3 alasan kenapa kamu wajib coba mendaki Gunung Prau melalui jalur Dwarawati:</p>
                                <ul class="post margin-bottom">
                                    <li>Pertama, jalur pendakiannya relatif landai dan jarak tempuhnya pendek (2,75 km).</li>
                                    <li>Kedua, fasilitas wisata lengkap dan petugas pengelolanya ramah.</li>
                                    <li>Ketiga, pemandangan alam Gunung Prau dari Dieng Kulon sangat memesona.</li>
                                </ul>
                                <p><b>4. Jalur Pendakian Gunung Prau via Dieng</b></p>
                                <p>Jalur pendakian Gunung Prau via Dieng merupakan jalur pendakian Gunung Prau dari pintu masuk Dieng Wetan. Lokasi basecamp Dieng berada di Kalilembu, Dieng, Wetan, Kabupaten Wonosobo.</p>
                                <p>Jalur pendakian Dieng cukup landai dan nyaman, tidak terlalu ramai pendaki. Pemandangannya juga bagus. Dan jalur pendakian Dieng nantinya akan bergabung dengan jalur Dwarawati di persimpangan pos 2. Jadi, mungkin kamu akan bertemu pendaki lain dari jalur lain setelah pos 2.</p>
                                <p>3 alasan kenapa jalur Dieng wajib kamu coba.</p>
                                <ul class="post margin-bottom">
                                    <li>Pertama, jalur pendakian Dieng landai dan relatif sepi.</li>
                                    <li>Kedua, jarak pendakian relatif pendek dan waktu tempuhnya cepat.</li>
                                    <li>Ketiga, pemandangan alamnya cantik.</li>
                                </ul>
                                <p><b>5. Jalur Pendakian Gunung Prau via Igirmranak</b></p>
                                <p>Jalur pendakian Gunung Prau via Igirmranak merupakan jalur pendakian dari sisi tenggara Gunung Prau. Jalur ini tergolong baru, karena baru diresmikan oleh Perhutani sejak Juni 2017. Lokasi basecamp pendakian berada di desa Igirmranak, kecamatan Kejajar, Wonosobo. Biarpun tergolong baru, jalur pendakian ini sudah di kelola dengan baik, lho. Jadi, nyaman dan aman untuk para pendaki.</p>
                                <p>Ada 5 alasan kenapa jalur pendakian Igirmranak sangat diminati para pendaki</p>
                                <ul class="post margin-bottom">
                                    <li>Pertama, jalur pendakiannya nyaman.</li>
                                    <li>Kedua, relatif sepi pendaki. Jalur Igirmranak masih relatif sepi pendaki.</li>
                                    <li>Ketiga, terdapat sumber mata air sampai pos 2.</li>
                                    <li>Keempat, pemandangan alam dari sisi tenggara Gunung Prau sangat indah.</li>
                                    <li>Kelima, spot sunrise dan sunset sepanjang jalan.</li>
                                </ul>
                                <p><b>6. Jalur Pendakian Gunung Prau via Wates</b></p>
                                <p>Jalur pendakian Gunung Prau via Wates merupakan jalur pendakian Gunung Prau dari pintu masuk Wates, kabupaten Temanggung. Basecamp Wates berada di Gejungan, Wates, Wonoboyo, Kabupaten Temanggung. Ketinggian basecamp sekitar 1.896 mdpl. Jadi, perjalananmu ke Puncak Prau akan jauh lebih lama daripada saat melewati jalur Patakbanteng maupun Dwarawati.</p>
                                <p>3 alasan kenapa jalur Wates wajib kamu coba.</p>
                                <ul class="post margin-bottom">
                                    <li>Jalur pendakian relatif sepi dan pemandangan alamnya bagus.</li>
                                    <li>Banyak tempat ngecamp yang nyaman dan posisinya strategis.</li>
                                    <li>Ada ojek gunung sampai pos 1.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END Description Trek -->
                    <!-- Google map trek. Go to Google Maps, choose walking trail and share with iframe -->
                    <div class="row margin-leftright-null trek-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37951.094558454904!2d109.86847641538807!3d-7.181020576096082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700d1687dec7cb%3A0xc722cd27c1f9c86a!2sGn.%20Prau!5e0!3m2!1sid!2sid!4v1686196138287!5m2!1sid!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    </div>
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