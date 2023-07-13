<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Gunung Sindoro</title>

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
                        <li style="background-image:url(assets/img/sindoro.png)">
                            <div class="container text text-center">
                                <h1 class="white margin-bottom-small">Gunung Sindoro</h1>
                                <!-- <p class="heading white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde veniam aperiam rerum quis atque, illum.</p> -->
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Gunung Sindoro</li>
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
                                    <h2 class="margin-bottom-null title line left">About Gunung Sindoro</h2>
                                    <p class="heading left grey margin-bottom-null">Discover the wild nature</p>
                                    <div class="padding-onlytop-md">
                                        <p>Gunung Sindoro adalah gunung yang terletak di Provinsi Jawa Tengah, Indonesia, dengan ketinggian sekitar 3.150 meter di atas permukaan laut. Terletak di antara Kabupaten Temanggung dan Kabupaten Wonosobo, gunung ini menawarkan pendakian menantang dengan pemandangan alam yang spektakuler. Terdapat jalur pendakian melalui Desa Kledung atau Desa Sigedang, yang melewati hutan lebat dengan flora dan fauna yang beragam. Puncak Gunung Sindoro memberikan panorama menakjubkan dengan pemandangan gunung-gunung lain, dan lahan terbuka di sekitar puncak dikenal dengan keindahannya yang mirip "Bukit Teletubbies". Kompleks Candi Arjuna di kaki Gunung Sindoro juga menjadi objek wisata budaya dan sejarah yang menarik. Gunung Sindoro merupakan tujuan populer bagi para pendaki yang mencari tantangan dan keindahan alam yang luar biasa.</p>
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
                                            <span class="meta grey">CP 1: 085876797621/081328096081/08190386023 (Jalur Bansari)</span>
                                            <span class="meta grey">CP 2: 085869115403/085643808488/085292781090 (Jalur Kledung)</span>
                                            <span class="meta grey">CP 3: 081227967705 (Jalur Tambi)</span>
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
                        <div class="bg-img overlay simple-parallax responsive" style="background-image:url(assets/img/sindoro.png)">
                           <div class="container">
                               <!-- Trek data -->
                               <div class="text trek-data text-center">
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-money service big margin-bottom-null white"></i>
                                       <em class="color">mdpl</em>
                                       <h3 class="white">3150</h3>
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
                                       <h3 class="white">± 6-7</h3>
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
                                <p>Gunung Sindoro, terletak di Provinsi Jawa Tengah, Indonesia, merupakan salah satu gunung tertinggi di Pulau Jawa dengan ketinggian sekitar 3.150 meter di atas permukaan laut. Pendakian Gunung Sindoro menawarkan tantangan yang memuaskan, dengan beberapa jalur pendakian yang dapat dipilih, seperti melalui Desa Kledung atau Desa Sigedang. Perjalanan pendakian ini memungkinkan pendaki melewati hutan yang lebat dengan flora dan fauna yang beragam, serta menyaksikan pemandangan sungai, air terjun kecil, dan panorama spektakuler gunung-gunung lain seperti Gunung Sumbing, Gunung Merbabu, dan Gunung Merapi.
                                <p>Salah satu daya tarik Gunung Sindoro adalah keindahan alam di sekitar puncak, yang meliputi lahan terbuka luas yang sering disebut "Padang Savana" atau "Bukit Teletubbies" karena keindahannya yang mirip dengan pemandangan di acara televisi anak-anak Teletubbies. Selain itu, Gunung Sindoro juga memiliki kompleks candi yang terkenal sebagai kompleks Candi Arjuna, yang menjadi objek wisata budaya dan sejarah yang sering dikunjungi oleh wisatawan.
                                <p>Gunung Sindoro menjadi destinasi populer bagi para pendaki yang mencari tantangan dan keindahan alam yang luar biasa. Pemandangan spektakuler, pengalaman mendaki yang menantang, serta keberagaman alam dan nilai sejarah yang dimiliki Gunung Sindoro menjadikannya tempat petualangan yang tak terlupakan bagi pecinta alam dan para pendaki yang ingin menjelajahi keajaiban alam Pulau Jawa.</p>
                                <h6 class="heading uppercase padding-onlytop-sm"><b>Deskripsi Trek</b></h6>
                                <p><b>1.Jalur pendakian Gunung Sindoro via Kledung</b></p>
                                <p>Jalur pendakian Gunung Sindoro lewat Kledung adalah jalur pertama yang populer dilalui oleh para petualang. Berlokasi di Desa Kledung, untuk menuju basecamp ini, kamu perlu naik bus jurusan Magelang – Wonosobo dan turun di Desa Kledung.
                                Dari basecamp ke Pos 1 di jalur Kledung ini akan dilengkapi dengan jalan bebatuan melewati lahan pertanian penduduk. Karena sudah cukup populer bahwa jalan ini adalah jalan pendakian ke Gunung Sindoro, pada akhirnya banyak jasa ojek yang menunggu kamu di sana.
                                Jika kamu lebih memilih trekking, setidaknya kamu akan melampaui waktu perjalanan sekitar 45 menit sampai 1 jam. Setelah melewati batas lahan pertanian penduduk, kamu kan bertemu dengan hutan dan akan sampai di Watu Gede di ketinggian 1.900 mdpl.</p>
                                <p>5 alasan lain kenapa kamu harus mencoba mendaki Gunung Slamet via Kledung:</p>
                                <ul class="post margin-bottom">
                                    <li>Keindahan alam yang memukau.</li>
                                    <li>Aksesibilitas yang baik.</li>
                                    <li>Tantangan pendakian yang menarik.</li>
                                    <li>Keberagaman flora dan fauna.</li>
                                    <li>Panorama puncak yang menakjubkan</li>
                                </ul>

                                <p><b>2.Jalur Pendakian Gunung Sindoro via Sikatok/b></p>
                                <p>Berlokasi di Desa Sigedang, Tambi – jalur pendakian Gunung Sindoro juga populer lewat Sikatok. Hal ini dikarenakan oleh predikat jalur pendakian tercepat untuk sampai ke Puncak Sindoro. Jalur ini akan mengajak kamu untuk melewati perkebunan teh yang sangat luas.
                                Perjalanan dari basecamp menuju pintu masuk kebun teh Sikatok bisa kamu lakukan dengan trekking selama 20 menit atau naik ojek saja.
                                Dari pertigaan menuju Pos 1, kamu dapat tempuh dengan estimasi waktu pendakian 20 menit saja. Kemudian, dari pos 1 ke pos 2 – dapat ditempuh dengan waktu sekitar 30 menit berjalan melalui jalan setapak yang masih di tengah-tengah kebun teh tersebut.
                                Dari Pos 2 ke Pos 3 akan ditandai dengan berakhirnya kebun teh tersebut. Setelah itu, kamu akan menanjak selama 3 jam yang akan mengantarkan kamu sampai ke Tebing Jeblugan Alit atau Watu Susu. Dari Watu Susu ke Sabana, bisa kamu tempuh 1.5 jam saja.</p>
                                <p>5 alasan lain kenapa kamu harus mencoba mendaki Gunung Sindoro via Gunung Sikatok:</p>
                                <ul class="post margin-bottom">
                                    <li>Keindahan alam yang memukau.</li>
                                    <li>Kesendirian dan kedamaian.</li>
                                    <li>Tantangan pendakian yang menarik.</li>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58888.12557645862!2d109.94019711695354!3d-7.275599218900106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70757555351a43%3A0x6e1fd0eaed14acb5!2sGn.%20Sindoro!5e0!3m2!1sid!2sid!4v1686195075856!5m2!1sid!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    </div>
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