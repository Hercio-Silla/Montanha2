<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Gunung Lawu</title>

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
                        <li style="background-image:url(assets/img/lawu-1.png)">
                            <div class="container text text-center">
                                <h1 class="white margin-bottom-small">Gunung Lawu</h1>
                                <p class="heading white">Explore pengalamanmu dengan mendaki gunung di Jawa Tegah</p>
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Gunung Lawu</li>
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
                                    <h2 class="margin-bottom-null title line left">About Gunung Lawu</h2>
                                    <p class="heading left grey margin-bottom-null">Let's Explore Gunung Lawu</p>
                                    <div class="padding-onlytop-md">
                                        <p>Gunung Lawu adalah sebuah gunung berapi aktif yang terletak di Pulau Jawa, tepatnya di perbatasan Jawa Tengah dan Jawa Timur, Indonesia. Gunung Lawu memiliki ketinggian sekitar 3.265 mdpl. Gunung Lawu terletak di antara tiga kabupaten, yaitu Karanganyar di Jawa Tengah, Ngawi, dan Magetan di Jawa Timur. Status gunung ini adalah gunung api "istirahat", yang diperkirakan terakhir meletus pada tanggal 28 November 1885 dan telah lama tidak aktif, terlihat dari rapatnya vegetasi serta puncaknya yang tererosi.</p>
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
                                            <span class="meta grey">CP 1: 085708015727 (Jalur Cemara Sewu)</span>
                                            <span class="meta grey">CP 2: 081575899797 (Jalur Cemoro Kandang)</span>
                                            <span class="meta grey">CP 3: 0853-2566-3738 (Jalur Candi Ceto)</span>
                                            <span class="meta grey">CP 4: 0821-4181-7515 (Jalur Singolangu)</span>
                                            <span class="meta grey">CP 5: 081393023422 (Jalur Tambak)</span>
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
                        <div class="bg-img overlay simple-parallax responsive" style="background-image:url(assets/img/lawu-1.png)">
                           <div class="container">
                               <!-- Trek data -->
                               <div class="text trek-data text-center">
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-money service big margin-bottom-null white"></i>
                                       <em class="color">mdpl</em>
                                       <h3 class="white">390€</h3>
                                   </div>
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-hour service big margin-bottom-null white"></i>
                                       <em class="color">Status</em>
                                       <h3 class="white">12/02/2017</h3>
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
                                       <h3 class="white">2</h3>
                                   </div>
                                   <div class="col-sm-4 col-md-2">
                                       <i class="pd-icon-distance service big margin-bottom-null white"></i>
                                       <em class="color">Jumlah Trek</em>
                                       <h3 class="white">10,3 Km</h3>
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
                                <p>Gunung Lawu adalah sebuah gunung berapi aktif yang terletak di Pulau Jawa, tepatnya di perbatasan Jawa Tengah dan Jawa Timur, Indonesia. Gunung Lawu memiliki ketinggian sekitar 3.265 mdpl. Gunung Lawu terletak di antara tiga kabupaten, yaitu Karanganyar di Jawa Tengah, Ngawi, dan Magetan di Jawa Timur. Status gunung ini adalah gunung api "istirahat", yang diperkirakan terakhir meletus pada tanggal 28 November 1885 dan telah lama tidak aktif, terlihat dari rapatnya vegetasi serta puncaknya yang tererosi. Studi pada 2019 tentang geothermal heat flow mensugestikan bahwa Gunung Lawu masih aktif sampai sekarang. Pada tahun 1978, serangkaian gempa bumi dilaporkan dirasakan di area sekitar Gunung Lawu dan diikuti oleh suara mirip dentuman dari arah gunung. Gunung Lawu merupakan salah satu gunung terdingin di Jawa, setelah Gunung Semeru, dan Gunung Slamet yang merupakan titik terdingin di Jawa.</p>
                                <p>Di lerengnya terdapat kepundan kecil yang masih mengeluarkan uap air (fumarol) dan belerang (solfatara). Gunung Lawu mempunyai kawasan hutan Dipterokarp Bukit, hutan Dipterokarp Atas, hutan Montane, dan hutan Ericaceous. Gunung Lawu memiliki tiga puncak, yakni Hargo Dalem, Hargo Dumiling, dan puncak tertinggi bernama Hargo Dumilah.</p>
                                <p>Di lereng gunung ini terdapat sejumlah tempat yang populer sebagai tujuan wisata, terutama di daerah Tawangmangu, Cemorosewu, dan Sarangan. Sedikit ke bawah, di sisi barat terdapat dua komplek percandian dari masa akhir Majapahit, yaitu Candi Sukuh dan Candi Cetho. Di kaki gunung ini juga terletak komplek pemakaman kerabat Praja Mangkunagaran: Astana Girilayu dan Astana Mangadeg. Di dekat komplek ini terletak Astana Giribangun, mausoleum untuk keluarga presiden ke-2 Indonesia, Soeharto.</p>
                                <h6 class="heading uppercase padding-onlytop-sm">Description Trek</h6>
                                <p><b>1. Jalur Pendakian Gunung Lawu via Cemoro Sewu</b></p>
                                <p>Jalur pendakian gunung Lawu via Cemoro Sewu adalah jalur pendakian yang paling popular di gunung Lawu. Lokasi basecamp Cemoro Sewu berada di Jl. Raya Sarangan, Sampe, Ngancar, Kec. Plaosan, Kabupaten Magetan, Jawa Timur.</p>
                                <p>5 alasan kenapa jalur Cemoro Sewu sangat popular di kalangan pendaki</p>
                                <ul class="post margin-bottom">
                                    <li>Ada banyak fasilitas pendukung di area basecamp. Mulai dari tempat ibadah, basecamp yang bersih, banyak pedagang yang buka sampai malam hingga kemudahan transportasi.</li>
                                    <li>Medan pendakian via Cemoro Sewu tergolong mudah. Karena jarak tempuh ke puncak relatif pendek dengan jalur yang sebagian besar terbuat dari batu.</li>
                                    <li>Jalur pendakian memiliki petunjuk arah yang sangat jelas dan tidak memiliki banyak percabangan.</li>
                                    <li>Ada petugas basecamp, tim SAR & relawan anak gunung Lawu yang selalu siap siaga jika ada musibah di gunung.</li>
                                    <li>Pada hari libur ada pedagang yang berjualan di beberapa pos pendakian di gunung Lawu.</li>
                                </ul>
                                <p><b>2. Jalur Pendakian Gunung Lawu via Cemoro Kandang</b></p>
                                <p>Secara administratif, Cemoro Kandang adalah basecamp pendakian gunung Lawu yang berada di provinsi Jawa Tengah. Tapi, secara geografis, basecamp Cemoro Kandang itu letaknya berdampingan dengan basecamp Cemoro Sewu. Jarak pemisahnya hanya 200an meter. Jadi, kamu dapat berpindah provinsi hanya dalam hitungan menit jika lari dari basecamp Cemoro Kandang ke Cemoro Sewu.</p>
                                <p>Menurut kami, jalur pendakian Cemoro Kandang lebih landai dan lebih panjang daripada jalur pendakian Cemoro Sewu. Jalanan di jalur pendakian Cemoro Kandang juga sebagian besar masih berupa jalan setapak yang didominasi tanah. Jadi, bagi pendaki yang menyukai jalur pendakian tanah, Cemoro Kandang dapat menjadi alternatif. Namun, saat musim hujan, jalan yang terbuat dari tanah sering sangat licin dan berlumpur sehingga pendaki perlu berhati-hati.</p>
                                <p><b>3. Jalur Pendakian Gunung Lawu via Candi Ceto</b></p>
                                <p>Jalur pendakian gunung Lawu via Candi Ceto merupakan jalur pendakian gunung Lawu yang berada di Karanganyar, Jawa Tengah. Lokasi basecamp Candi Ceto berada di Cetho, Gumeng, Jenawi, Kabupaten Karanganyar. Di mana, lokasi ini berasa di dalam satu kompleks wisata candi Ceto.</p>
                                <p>Medan pendakian melalui jalur Candi Ceto ini berbeda dengan jalur Cemoro Sewu.</p>
                                <ul class="post margin-bottom">
                                    <li>Pertama, jalur pendakian via Candi Ceto berupa tanah.</li>
                                    <li>Kedua, banyak pohon keramat yang berusia ratusan tahun.</li>
                                    <li>Ketiga, ada sumber air di area pos 3 (pos mata air).</li>
                                    <li>Keempat, terdapat sabana cantik di atas gunung di pos V.</li>
                                    <li>Terakhir, ada tempat misterius sisa-sisa sejarah jaman dahulu yang bernama pasar Dieng.</li>
                                </ul>
                                <p>Menurut kami, pendakian via jalur Candi Ceto ini mirip dengan jalur pendakian gunung Argopuro. Karena vegetasi alamnya sangat mirip. Bisa dibilang, jalur pendakian Lawu via Candi Ceto sebagai ekosistem mini dari jalur pendakian gunung Argopuro.</p>
                                <p><b>4. Jalur Pendakian Gunung Lawu via Tambak</b></p>
                                <p>Jalur pendakian gunung Lawu via Tambak merupakan jalur pendakian Lawu yang gerbang pendakiannya berada di dusun Tambak, Berjo, Ngargoyoso, Karanganyar. Dulunya, jalur ini hanya dipakai oleh abadi dalem keraton & para penduduk sekitar yang ingin ke puncak Lawu. Tapi, sekarang sudah dikelola secara resmi oleh Gentapala (Generasi Tambak Pecinta Alam).</p>
                                <p>Medan jalur pendakian Lawu via Tambak masih berupa jalanan setapak, hutan, perbukitan dan tanjakan batu yang lumayan terjal. Jalur Tambak terhubung juga dengan jalur Cemoro Kandang. Di mana, pertemuan kedua jalur tersebut berada di atas area Sunset Camp. Banyak orang menyebut area persimpangan ini Selo Penangkep. Jadi, pendaki yang ingin lintas jalur, bisa mendaki via Tambak dan turun via Cemoro Kandang.</p>
                                <p><b>5. Jalur Pendakian Gunung Lawu via Singolangu</b></p>
                                <p>Jalur pendakian gunung Lawu via Singolangu merupakan salah satu jalur pendakian ke gunung Lawu yang paling tua. Menurut literatur yang kami temukan, jalur Singolangu merupakan jalur pendakian spiritual dari raja Brawijaya V. Jika kamu mendaki melalui jalur Singolangu, kamu akan menemukan beberapa petilasan dari raja Majapahit tersebut. Misalnya petilasan Watu Lapak & Cemoro Lawang.</p>
                                <p>Bagi yang belum tahu, basecamp pendakian Singolangu terletak di Singolangu, Sarangan, Plaosan, kabupaten Magetan. Untuk bisa sampai ke basecamp pendaki dapat menggunakan jasa ojek online atau angkutan umum. Kalau angkutan umum, pendaki hanya bisa sampai jalan raya besar di Singolangu, untuk mencapai basecamp, pendaki wajib jalan kaki atau naik ojek pangkalan. Tapi, jangan takut, jaraknya lumayan dekat.</p>
                            </div>
                        </div>
                    </div>
                    <!-- END Description Trek -->
                    <!-- Google map trek. Go to Google Maps, choose walking trail and share with iframe -->
                    <div class="row margin-leftright-null trek-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8265.101309216141!2d111.18865773252371!3d-7.627865324854631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e798c8138540ea3%3A0x78393c7070cc3f2b!2sGn.%20Lawu!5e0!3m2!1sid!2sid!4v1686196285939!5m2!1sid!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    </div>
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