<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Gunung Slamet</title>

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
                        <li style="background-image:url(assets/img/galeri-8.png)">
                            <div class="container text text-center">
                                <h1 class="white margin-bottom-small">Gunung Slamet</h1>
                                <!-- <p class="heading white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde veniam aperiam rerum quis atque, illum.</p> -->
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Gunung Slamet</li>
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
                                    <h2 class="margin-bottom-null title line left">About Gunung Slamet</h2>
                                    <p class="heading left grey margin-bottom-null">Discover the wild nature</p>
                                    <div class="padding-onlytop-md">
                                        <p>Gunung Slamet adalah gunung berapi kerucut tipe A yang terletak di Jawa Tengah, Indonesia. Dengan ketinggian 3.432 meter di atas permukaan laut, Gunung Slamet adalah gunung tertinggi di Jawa Tengah dan kedua tertinggi di pulau Jawa setelah Gunung Semeru. Terletak di antara lima kabupaten, yaitu Banyumas, Purbalingga, Pemalang, Tegal, dan Brebes, Gunung Slamet menjadi tujuan pendakian populer meskipun medannya sulit dan cuaca di sana dingin serta basah. Gunung ini juga memiliki kawah aktif terakhir yang disebut Kawah IV.</p>
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
                                            <span class="meta grey">CP 1: 085643755398 (Jalur Guci)</span>
                                            <span class="meta grey">CP 2: 085726000335 (Jalur Bambangan)</span>
                                            <span class="meta grey">CP 3: 085742035447 (Jalur Kaliwadas / Kali Gua)</span>
                                            <span class="meta grey">CP 4: 085629278312 (Jalur Prabasari)</span>
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
                        <div class="bg-img overlay simple-parallax responsive" style="background-image:url(assets/img/galeri-8.png)">
                           <div class="container">
                               <!-- Trek data -->
                               <div class="text trek-data text-center">
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-money service big margin-bottom-null white"></i>
                                       <em class="color">mdpl</em>
                                       <h3 class="white">3432</h3>
                                   </div>
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-hour service big margin-bottom-null white"></i>
                                       <em class="color">Status</em>
                                       <h3 class="white">Tidak Aktif</h3>
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
                                       <h3 class="white">± 12-16</h3>
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
                                <!-- <p class="heading center grey margin-bottom-null">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p> -->
                            </div>
                            <div class="col-md-12 text">
                                <p>Gunung Slamet adalah gunung berapi kerucut tipe A yang terletak di Jawa Tengah, Indonesia, dengan ketinggian mencapai 3.432 meter di atas permukaan laut. Terletak di antara lima kabupaten, yaitu Banyumas, Purbalingga, Pemalang, Tegal, dan Brebes, Gunung Slamet menjadi gunung tertinggi di Jawa Tengah dan kedua tertinggi di Pulau Jawa setelah Gunung Semeru. Gunung ini juga dikenal sebagai salah satu "gunung tunggal" terluas di Indonesia dengan diameter tunggal terluas dan luas total area mencapai 560 km². Meskipun medannya sulit dan suhunya sangat dingin serta basah, Gunung Slamet cukup populer sebagai tujuan pendakian.</p>
                                <p>Kawah IV di Gunung Slamet merupakan kawah terakhir yang masih aktif, dengan aktivitas terakhir pada level siaga medio-2009. Gunung Slamet juga memiliki daya tarik wisata di sekitarnya, seperti kawasan wisata Baturraden yang terletak di kaki gunung dan pemandian air panas Guci di sisi utara Gunung Slamet. Gunung Slamet menjadi simbol dan kebanggaan bagi masyarakat di Tatar Banyumasan, yang mendiami wilayah Banyumas Raya. Dengan suhu rata-rata yang paling dingin di Pulau Jawa dan curah hujan tahunan yang tinggi, Gunung Slamet menawarkan pengalaman pendakian yang menantang dan pemandangan alam yang indah, menjadikannya tujuan favorit para pendaki dan wisatawan alam.</p>
                                <h6 class="heading uppercase padding-onlytop-sm"><b>Deskripsi Trek</b></h6>
                                <p><b>1.Jalur pendakian Gunung Slamet via Bambangan</b></p>
                                <p>Jalur pendakian via Bambangan disebut jalur paling dikenal dan disarankan untuk pendaki karena sudah dikelola dengan baik.
                                Saking populernya, jalur ini selalu ramai baik pada akhir pekan maupun hari libur nasional.
                                Jalur via Bambangan memiliki durasi pendakian paling pendek bila dibandingkan dengan jalur lainnya.
                                Dengan durasi 7-8 jam melewati 9 pos, Anda dapat mencapai puncak Gunung Slamet.
                                Lama pendakian normalnya 2-3 hari, dengan lokasi berkemah yang ideal di Pos 5 yang terdapat sumber air dan Pos 7.
                                Di jalur ini, tersedia basecamp yang kondisinya baik dan warung untuk memenuhi kebutuhan logistik selama pendakian.
                                Anda juga bisa menemukan jasa porter atau pemandu dengan mudah di jalur pendakian Gunung Slamet via Bambangan.
                                Jalur via Bambangan berlokasi di Jalan Raya Gunung, Bambangan, Kutabawa, Kecamatan Karangreja, Purbalingga, Jawa Tengah.</p>
                                <p>5 alasan lain kenapa kamu harus mencoba mendaki Gunung Slamet via Bambangan:</p>
                                <ul class="post margin-bottom">
                                    <li>Keindahan alam yang memukau.</li>
                                    <li>Aksesibilitas yang baik.</li>
                                    <li>Tantangan pendakian yang menarik.</li>
                                    <li>Keberagaman flora dan fauna.</li>
                                    <li>Panorama puncak yang menakjubkan</li>
                                </ul>

                                <p><b>2.Jalur Pendakian Gunung Slamet via Gunung Malang</b></p>
                                <p>Gunung Malang terletak di sisi selatan Gunung Slamet dan termasuk salah satu jalur pendakian yang cocok untuk pemula.
                                Jalur yang terletak tidak jauh dari jalur via Bambangan ini telah diresmikan oleh PA Gunung Slamet dan Perhutani.
                                Medan yang akan Anda lalui cukup ringan sampai dengan Pos 3 lalu mulai menanjak terus sampai ke Pos 5 alias puncak Gunung Malang.
                                Setelah itu, trek pendakian menurun, hingga tiba di pos puncak Gunung Slamet.
                                Keseluruhan pos diperkirakan dapat dicapai dalam jangka waktu 8-9 jam tergantung kecepatan pendakian. 
                                Anda dapat menemukan sumber air di Pos 3 dan Pos 4 dan idealnya berkemah di Pos 6.
                                Basecamp pendakian via Gunung Malang terletak di Clekatakan, Pulosari, Kabupaten Pemalang, Jawa Tengah.</p>
                                <p>5 alasan lain kenapa kamu harus mencoba mendaki Gunung Slamet via Gunung Malang:</p>
                                <ul class="post margin-bottom">
                                    <li>Keindahan alam yang memukau.</li>
                                    <li>Kesendirian dan kedamaian.</li>
                                    <li>Tantangan pendakian yang menarik.</li>
                                    <li>Keberagaman flora dan fauna.</li>
                                    <li>Panorama puncak yang menakjubkan</li>
                                </ul>

                                <p><b>3.Jalur Pendakian Gunung Slamet via Dipajaya</b></p>
                                <p>Jalur pendakian Gunung Slamet via Dipajaya adalah alternatif lain di jalur via Bambangan. 
                                Anda akan melewati Pos 1 dan Pos 2 yang berbeda dengan jalur Bambangan, lalu dilanjutkan dengan Pos 3 sampai puncak yang sama dengan jalur Bambangan.
                                Jalur ini memangkas waktu dua jam dari jalur Bambangan sehingga Anda akan lebih cepat sampai ke puncak Gunung Slamet.
                                Meskipun begitu, jalur via Dipajaya termasuk cukup sulit dengan medan yang terjal dari basecamp sampai Pos 2.
                                Namun, panorama yang disuguhkan tak hanya pegunungan tetapi juga hamparan pantai utara Jawa yang cukup memanjakan mata.
                                Selama pendakian, Anda dapat menemukan sumber air di Pos 5 dan berkemah di sana atau di Pos 7. 
                                Alamat basecamp Dipajaya yaitu di Clekatakan, Pulosari, Kabupaten Pemalang, Jawa Tengah.</p>
                                <p>5 alasan lain kenapa kamu harus mencoba mendaki Gunung Slamet via Dipajaya:</p>
                                <ul class="post margin-bottom">
                                    <li>Keindahan alam yang memukau.</li>
                                    <li>Pengalaman pendakian yang tenang.</li>
                                    <li>Tantangan medan yang menarik.</li>
                                    <li>Keberagaman flora dan fauna.</li>
                                    <li>Panorama puncak yang menakjubkan</li>
                                </ul>

                                <p><b>4.Jalur Pendakian Gunung Slamet via Guci</b></p>
                                <p>Daerah Guci terkenal dengan wisata pemandian air panas dan semakin ramai dengan adanya jalur pendakian Gunung Slamet.
                                Jalur ini memiliki karakter trek yang panjang dan lebih landai jika dibandingkan dengan jalur pendakian lainnya sehingga cocok untuk pendaki pemula.
                                Untuk memulai pendakian, Anda dapat memilih tiga basecamp berbeda mulai dari basecamp Permadi, basecamp Gupala, atau basecamp Kompak. 
                                Kendati relatif landai, jalur pendakian ini memiliki medan beragam, dari trek berbatu, hutan pinus dan hutan tropis, sampai semak belukar dan trek berpasir.
                                Durasi pendakian normal selama 2-3 hari yang terbagi dalam 5 pos, dengan sumber air tersedia di Pos 4. 
                                Basecamp jalur pendakian via Guci terletak di Pekandangan, Rembul, Kecamatan Bojong, Tegal, Jawa Tengah.</p>
                                <p>5 alasan lain kenapa kamu harus mencoba mendaki Gunung Slamet via Guci:</p>
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
                    <!-- END Description Trek -->
                    <!-- Google map trek. Go to Google Maps, choose walking trail and share with iframe -->
                    <div class="row margin-leftright-null trek-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15831.877453974088!2d109.20137660727792!3d-7.244326214456318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ff3184df71285%3A0x79839e3468a02f5b!2sGn.%20Slamet!5e0!3m2!1sid!2sid!4v1684828111245!5m2!1sid!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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