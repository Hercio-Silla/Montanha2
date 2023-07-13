<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Gunung Merbabu</title>

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
                        <li style="background-image:url(assets/img/galeri-4.png)">
                            <div class="container text text-center">
                                <h1 class="white margin-bottom-small">Gunung Merbabu</h1>
                                <!-- <p class="heading white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde veniam aperiam rerum quis atque, illum.</p> -->
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Gunung Merbabu</li>
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
                                    <h2 class="margin-bottom-null title line left">About Gunung Merbabu</h2>
                                    <p class="heading left grey margin-bottom-null">Discover the wild nature</p>
                                    <div class="padding-onlytop-md">
                                        <p>Gunung Merbabu adalah gunung berapi aktif yang terletak di tiga kabupaten berbeda, yaitu Magelang, Boyolali, dan Semarang. Dengan ketinggian 3.145 meter di atas permukaan laut, gunung ini pernah dikenal dengan sebutan Damalung/Pamarihan dalam naskah-naskah kuno sebelum Islam masuk ke nusantara. Sebelum menjadi Taman Nasional pada tahun 2004, Merbabu adalah kawasan hutan lindung yang menjadi tempat tinggal bagi berbagai satwa dan tanaman hutan yang dilindungi. Nama "Merbabu" berasal dari kata "Meru" dan "Abu" yang berarti Gunung Abu, mengacu pada catatan sejarah mengenai letusan pada tahun 1560 dan 1797. Ada laporan lain tentang letusan pada tahun 1570, namun kebenarannya belum dikonfirmasi oleh ahli vulkanologi.</p>
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
                                            <span class="meta grey">CP 1: 081393062419 (Jalur Selo)</span>
                                            <span class="meta grey">CP 2: 082327290278 (Jalur Wekas)</span>
                                            <span class="meta grey">CP 3: 081325757220/081325932700 (Jalur Cuntel)</span>
                                            <span class="meta grey">CP 4: 085225552130 (Jalur Thekelan)</span>
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
                        <div class="bg-img overlay simple-parallax responsive" style="background-image:url(assets/img/galeri-4.png)">
                           <div class="container">
                               <!-- Trek data -->
                               <div class="text trek-data text-center">
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-money service big margin-bottom-null white"></i>
                                       <em class="color">mdpl</em>
                                       <h3 class="white">3145</h3>
                                   </div>
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-hour service big margin-bottom-null white"></i>
                                       <em class="color">Status</em>
                                       <h3 class="white">Aktif</h3>
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
                                       <h3 class="white">± 8-12</h3>
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
                                <p>Gunung Merbabu merupakan salah satu gunung berapi aktif di Indonesia yang secara administratif berada di tiga kabupaten berbeda, Magelang, Boyolali dan Semarang. Gunung setinggi 3.145 meter dari atas permukaan laut ini pernah dikenal dengan sebutan gunung Damalung/Pamarihan melalui naskah-naskah kuno sebelum Islam masuk ke nusantara.
                                Sebelum ditetapkan sebagai Taman Nasional pada tahun 2004, gunung Merbabu merupakan kawasan hutan lindung yang dijadikan rumah bagi ratusan satwa dan tanaman hutan yang dilindungi.
                                Nama "Merbabu" ini secara etimologi berasal dari kata "Meru" dan "Abu" yang berarti Gunung Abu berdasarkan naskah lama peninggalan Belanda. Dari naskah-naskah lama itu pula diketahui gunung Merbabu pernah meletus pada tahun 1560 dan 1797. Ada juga laporan yang menyebutkan gunung ini pernah meletus pada tahun 1570, namun karena tidak pernah dikonfirmasi kebenarannya oleh ahli vulkanologi maka informasi ini masih abu-abu.</p>
                                <div class="table-responsive shadow">
                                <h6 class="heading uppercase padding-onlytop-sm"><b>Deskripsi Trek</b></h6>
                                <p><b>1.Jalur pendakian Gunung Merbabu via Selo</b></p>
                                <p>Jalur pendakian gunung Merbabu via Selo merupakan jalur pendakian paling popular di gunung Merbabu. Lokasi basecamp Selo berada di desa Genting Tarubatang, Dusun I, Suroteleng, Selo, Kabupaten Boyolali, Jawa Tengah. Dari pasar Selo, masih naik ke atas lagi untuk sampai ke basecamp.</p>
                                <p>5 alasan lain kenapa kamu harus mencoba mendaki Gunung Merbabu via Selo:</p>
                                <ul class="post margin-bottom">
                                    <li>Jalur pendakiannya landai dan cenderung mudah.</li>
                                    <li>Pemandangan alam dari jalur Selo sangat indah.</li>
                                    <li>Pendaki bisa ngecamp di Sabana 2 yang terkenal indah dan memesona.</li>
                                    <li>Pendaki bisa melihat gunung Merapi yang sangat megah dengan sangat jelas.</li>
                                    <li>Fasilitas dari pihak pengelola sudah memadai.</li>
                                </ul>

                                <p><b>2.Jalur Pendakian Gunung Merbabu via Suwanting</b></p>
                                <p>Jalur pendakian gunung Merbabu via Suwanting adalah jalur pendakian dari arah barat gunung Merbabu. Pintu masuk jalur Suwanting berada di kabupaten Magelang. Lokasi basecamp Suwanting berada di Jl. Suwanting, Suwanting, Banyuroto, Sawangan, Magelang, Jawa Tengah.
                                Karena pintu masuk jalur pendakian Suwanting berada di bagian barat gunung Merbabu, maka jalur pendakiannya sangat terjal. Karena bagian barat gunung Merbabu berisi deretan bukit yang sangat tinggi dan curam. Beberapa pendaki bahkan menjuluki jalur Suwanting sebagai jalur Merbabu yang nggak ada bonusnya. Dan tidak cocok untuk pendaki pemula. Karena pendaki akan full nanjak sampai puncak.</p>
                                <p>5 alasan lain kenapa kamu harus mencoba mendaki Gunung Merbabu via Suwanting:</p>
                                <ul class="post margin-bottom">
                                    <li>Pendaki bisa melihat pemandangan alam gunung Merbabu dari sisi barat.</li>
                                    <li>Pendaki dapat melihat matahari terbenam dengan panorama gunung Merapi yang sedang erupsi.</li>
                                    <li>Pendaki bisa melihat kawah Candradimuka gunung Merbabu dari jalur pendakian.</li>
                                    <li>Pendaki dapat spot sunrise dan sunset dengan panorama yang indah di puncak Suwanting.</li>
                                    <li>Pendaki akan mendapatkan pemandangan sabana gunung Merbabu yang beda dari jalur lainnya. Unik dan cantik.</li>
                                </ul>

                                <p><b>3.Jalur Pendakian Gunung Merbabu via Wekas</b></p>
                                <p>Jalur pendakian gunung Merbabu via Wekas merupakan jalur pendakian dari sisi barat gunung Merbabu. Gerbang pendakian jalur Wekas berada desa Wekas, Magelang. Lokasi basecamp Wekas berada di Area Sawah/Kebun, Kaponan, Pakis, Magelang, Jawa Tengah. Dulu basecamp pendakian berada di bawah. Semenjak jalanan perkampungan mulai di cor, basecamp Wekas di pindah ke atas. Tujuannya agar jarak pendakian lebih pendek sehingga ramah untuk pendaki pemula.</p>
                                <p>5 alasan lain kenapa kamu harus mencoba mendaki Gunung Merbabu via Wekas:</p>
                                <ul class="post margin-bottom">
                                    <li>Jalur Wekas merupakan jalur tercepat untuk mencapai puncak gunung Merbabu.</li>
                                    <li>Terdapat sumber air di area pos 2 sehingga pendaki tidak perlu takut kehabisan air untuk minum.</li>
                                    <li>Jalur pendakian gunung Merbabu via Wekas sudah dilengkapi petunjuk arah berupa PAL HM per 100 m dan PAL Bantu di setiap percabangan jalan.</li>
                                    <li>Pendaki bisa melihat kawah Candradimuka gunung Merbabu dengan sangat jelas.</li>
                                    <li>Pemandangan alam mulai dari pos 2 hingga puncak gunung Merbabu sangat memukau.</li>
                                </ul>

                                <p><b>4.Jalur Pendakian Gunung Merbabu via Cuntel</b></p>
                                <p>Jalur pendakian gunung Merbabu via Cuntel merupakan jalur pendakian gunung Merbabu dengan jarak tempuh normal. Perjalanan dari basecamp Cuntel sampai puncak Merbabu kurang lebih 6,43 km. Dengan jarak tersebut, jalur Cuntel menjadi jalur pendakian terpanjang dibandingkan dengan jalur pendakian gunung Merbabu lainnya.
                                Basecamp jalur pendakian Merbabu via Cuntel berada di Jl. UmbulSongo Km.2,5 RT.01/RW.01, Cuntel, Cunta, Kopeng, Kec. Getasan, Semarang, Jawa Tengah. Kawasan basecamp Cuntel berada di kawasan wisata Kopeng. Jadi, kamu akan dengan mudah menemukan basecamp Cuntel. Papan petunjuk arah dan petunjuk via Google Map sangat jelas.</p>
                                <p>5 alasan lain kenapa kamu harus mencoba mendaki Gunung Merbabu via Cuntel:</p>
                                <ul class="post margin-bottom">
                                    <li>Pendaki bisa memasuki kawasan kawah mati Candradimuka gunung Merbabu.</li>
                                    <li>Pendaki dapat melihat flora & fauna Taman Nasional Gunung Merbabu di hutan Cuntel.</li>
                                    <li>Jalur Cuntel memiliki sumber air di pos bayangan 2.</li>
                                    <li>Pendaki bisa mendapatkan pemandangan lautan awan dengan latar belakang gunung Sindoro dan gunung Sumbing yang sangat indah.</li>
                                    <li>Jalur pendakian memiliki banyak jalan setapak yang landai.</li>
                                </ul>

                                <p><b>5.Jalur Pendakian Gunung Merbabu via Thekelan</b></p>
                                <p>Jalur pendakian gunung Merbabu via Thekelan merupakan jalur pendakian gunung Merbabu dari sisi utara. Dengan mendaki dari sisi utara kamu akan mendapatkan pemandangan dari 5 gunung yanag cantik. Di antaranya: gunung Telomoyo, gunung Andong, gunung Ungaran, gunung Sindoro hingga gunung Sumbing.
                                Gerbang pendakian jalur utara berada di Thekelan, Batur, Kec. Getasan, Semarang, Jawa Tengah. Jalur pendakian Merbabu dari bagian utara cenderung normal. Karena masih banyak terdapat jalur pendakian yang landai dan memutari bukit.</p>
                                <p>5 alasan lain kenapa kamu harus mencoba mendaki Gunung Merbabu via Thekelan:</p>
                                <ul class="post margin-bottom">
                                    <li>Pendaki akan mendapatkan pemandangan 5 gunung cantik dari sisi utara dan barat gunung Merbabu. Kelima pemandangan gunung cantik itu adalah gunung Sindoro, gunung Sumbing, gunung Telomoyo, gunung Andong, hingga gunung Ungaran.</li>
                                    <li>Ada banyak sumber air di jalur pendakian Thekelan.</li>
                                    <li>Pendaki bisa mengunjungi kawah mati gunung Merbabu.</li>
                                    <li>Jalur pendakian Merbabu Via Thekelan memiliki berbagai jenis medan pendakian yang menantang.</li>
                                    <li>Thekelan merupakan jalur pendakian gunung Merbabu tertua.</li>
                                </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Description Trek -->
                    <!-- Google map trek. Go to Google Maps, choose walking trail and share with iframe -->
                    <div class="row margin-leftright-null trek-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63297.49589504332!2d110.3661773025775!3d-7.454908616839892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a7b455e544767%3A0xf7af0c6e80ad2dde!2sGn.%20Merbabu!5e0!3m2!1sid!2sid!4v1686195632157!5m2!1sid!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    </div>
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