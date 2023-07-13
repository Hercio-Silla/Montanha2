<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Artikel 3</title>

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
                        <li style="background-image:url(assets/img/hipotermia2.png)">
                            <div class="container text text-center">
                                <h1 class="white margin-bottom-small">Hipotermia</h1>
                                <p class="heading white">Dalam kegiatan mendaki tak sedikit pendaki mengalami hipotermia, dengan ini kita wajib mengetahui pencegahan dan solusi dalam mengatasinya.</p>
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                        <ol class="breadcrumb">
                            <li><a href="/montanha">Home</a></li>
                            <li class="active">Standard post</li>
                        </ol>
                    </ul>
                </div>
                <!--  END Slider  -->
                <div id="post-wrap" class="content-section fullpage-wrap">
                    <div class="row margin-leftright-null">
                        <div class="container text">
                            <div class="row content-post no-margin">
                                <!--  Post Meta  -->
                                <div class="col-md-12 padding-leftright-null text-center">
                                    <h2 class="margin-bottom-null title simple left">Project description</h2>
                                    <span class="category">Tech</span>
                                    <span class="category last">Social</span>
                                    <span class="date">02.11.2016</span>
                                </div>
                                <!--  END Post Meta  -->
                                <div class="col-md-12 padding-onlytop-md padding-leftright-null">
                                    <p>Hipotermia adalah kondisi kegawatdaruratan medis yang ditandai dengan turunnya suhu tubuh hingga batas membahayakan. Keadaan ini disebabkan karena tubuh kehilangan panas lebih cepat dari panas yang diproduksi. Keadaan ini dapat mengancam nyawa dan harus segera ditangani oleh tenaga medis.</p>
                                    <!--  Grid Images  -->
                                    <section class="grid-images padding-sm padding-md-bottom-null">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="image simple-shadow" style="background-image:url(assets/img/trip6.jpg)">
                                                    <a class="lightbox-image" href="assets/img/trip6.jpg"></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="image simple-shadow" style="background-image:url(assets/img/trip7.jpg)">
                                                    <a class="lightbox-image" href="assets/img/trip7.jpg"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <p>Suhu tubuh yang normal adalah sekitar 37⁰C. Pada hipotermia, suhu tubuh kurang dari 35⁰C. Saat suhu tubuh di bawah normal, maka organ-organ  tubuh seperti jantung, otak, dan organ lainnya tidak dapat berfungsi seperti normal, sehingga lama kelamaan akan berlanjut menjadi kegagalan organ dan kematian.</p>
                                    <p><b>Gejala atau tanda hipotermia</b></p>
                                    <p>Gejala dan tanda hipotermia pada orang dewasa antara lain:</p>
                                    <ul class="post">
                                        <li>Gemetaran atau menggigil.</li>
                                        <li>Nadi lemah.</li>
                                        <li>Hilang kesadaran.</li>
                                        <li>Terlihat tidak bertenaga.</li>
                                        <li>Terlihat mengantuk terus.</li>
                                        <li>Napas lambat dan dangkal.</li>
                                        <li>Bicara cadel atau bergumam.</li>
                                        <li>Gerakan kurang terkoordinasi.</li>
                                        <li>Merasa bingung atau hilang ingatan.</li>
                                    </ul>
                                    <p><b>Penyebab hipotermia</b></p>
                                    <p>Hipotermia terjadi karena tubuh kehilangan panas lebih besar daripada kemampuan tubuh untuk memproduksi panas. Hal ini dapat terjadi karena paparan dingin terlalu lama pada tubuh yang tidak memiliki perlindungan yang cukup (misalnya penggunaan baju tipis, basah, dan lain sebagainya) atau merupakan efek dari suatu penyakit atau hal tertentu, misalnya diabetes, penyakit pada kelenjar tiroid, obat-obatan, penggunaan alkohol, dan penggunaan obat terlarang.</p>
                                    <p>Beberapa mekanisme yang dapat menyebabkan terjadinya hipotermia antara lain:</p>
                                    <ul class="post">
                                        <li>Tercebur di air dingin.</li>
                                        <li>Tinggal di rumah atau tempat yang dingin.</li>
                                        <li>Tidak menggunakan baju hangat yang cukup.</li>
                                        <li>Berada di luar ruangan saat udara dingin dalam waktu lama.</li>
                                        <li>Tidak dapat melepaskan baju yang basah dan tidak ada tempat yang hangat.</li>
                                    </ul>
                                    <p>Orang yang berisiko mengalami hipotermia antara lain:</p>
                                    <ul class="post">
                                        <li>Orang yang tidak mendapatkan makanan yang cukup, pakaian yang layak, atau tempat yang hangat.</li>
                                        <li>Orang yang berada di luar rumah dalam waktu lama, misalnya pendaki gunung, orang yang terlantar, dan lain sebagainya.</li>
                                        <li>Peminum alkohol dan pecandu obat-obatan terlarang.</li>
                                        <li>Orang yang sangat tua, anak-anak, bayi yang berada di lingkungan yang dingin.</li>
                                        <li>Orang dengan gangguan mental.</li>
                                        <li>Orang dengan kondisi sangat kelelahan.</li>
                                        <li>Orang yang mengkonsumsi obat-obatan tertentu, misalnya antidepresan, antipsikotik, obat tidur.</li>
                                        <li>Orang dengan penyakit penyerta, misalnya anoreksia, diabetes, stroke, parkinson, dan lain sebagainya.</li>
                                    </ul>
                                    <p>Cara Menangani</p>
                                    <p>Agar tidak membahayakan nyawa, penderita hipotermia harus segera mendapatkan pertolongan pertama.</p>
                                    <p>Berikut pertolongan pertama yang bisa diberikan untuk pasien hipotermia:</p>
                                    <ul class="post">
                                        <li>Memindahkan pasien hipotermia ke tempat yang hangat dan kering.</li>
                                        <li>Lepaskan pakaian basah, selimuti seluruh tubuh penderita hipotermia.</li>
                                        <li>Periksa pernapasan dan lakukan CPR jika pernapasan berhenti.</li>
                                        <li>Lakukan kontak dari kulit ke kulit.</li>
                                        <li>Jika pasien masih sadar, berikan minuman hangat tanpa alkohol atau kafein.</li>
                                    </ul>
                                    <p>Pencegahan</p>
                                    <p>Orang yang sedang melakukan kegiatan pendakian rentan sekali mengalami hipotermia. Agar hal ini tidak terjadi, kita harus melakukan persiapan sebaik mungkin.</p>
                                    <p>Berikut tips mencegah hipotermia saat mendaki gunung:</p>
                                    <ul class="post">
                                        <li>Memeriksa kondisi cuaca sebelum mendaki</li>
                                        <li>mengenakan pakian berlayer yang terbuat dari wol, sutra, atau polypropylene karena bahan-bahan ini mempertahankan panas lebih baik daripada katun.</li>
                                        <li>Gunakan topi atau syal tebal di kepala.</li>
                                        <li>Konsumsi kalori dalam jumlah yang cukup.</li>
                                        <li>Hindari konsumsi alkohol.</li>
                                    </ul>
                                </div>
                            </div>
                            <!--  Author Meta  -->
                            <div class="row no-margin">
                                <div class="col-md-12 padding-leftright-null">
                                    <div id="post-meta">
                                        <img src="assets/img/hiker1.jpg" alt="">
                                        <div class="author">
                                            <h3>Admin</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus dolorem beatae, laborum magni excepturi repellendus at facere quaerat soluta velit praesentium aliquam sapiente tempora!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  END Autor Meta  -->
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
                            <!--  Comments  -->
                            <!-- <div class="row no-margin">
                                <div class="col-md-12 padding-leftright-null">
                                    <div id="comments">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab-one" aria-controls="tab-one" role="tab" data-toggle="tab" aria-expanded="true">All comments</a></li>
                                            <li role="presentation" class=""><a href="#tab-two" aria-controls="tab-two" role="tab" data-toggle="tab" aria-expanded="false">Leave a comment</a></li>
                                        </ul>
                                        <!--  Nav Tabs  -->
                                        <!-- Tab panes -->
                                        <div class="tab-content no-margin-bottom">
                                            <div role="tabpanel" class="tab-pane padding-md active" id="tab-one">
                                                <div class="comment">
                                                    <div class="row margin-null">
                                                       <div class="col-md-12 padding-leftright-null">
                                                           <img src="assets/img/hiker2.jpg" alt="">
                                                           <div class="content">
                                                               <span class="comment-author">
                                                                   Asia Rossi
                                                               </span>
                                                               <span class="comment-date">
                                                                   12.11.2017
                                                               </span>
                                                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti quo fuga corporis sunt voluptate, quia, beatae voluptates est possimus impedit eveniet quaerat nulla sapiente. Omnis odit quas est fuga nam.</p>
                                                               <span class="comment-btn">
                                                                   <a href="#">Reply</a>
                                                               </span>
                                                           </div>
                                                       </div>
                                                    </div>
                                                </div>
                                                <div class="comment reply">
                                                    <div class="row margin-null">
                                                        <div class="col-md-10 col-md-offset-2 padding-leftright-null">
                                                            <img src="assets/img/hiker3.jpg" alt="">
                                                            <div class="content">
                                                                <span class="comment-author">
                                                                    John Doe
                                                                </span>
                                                                <span class="comment-date">
                                                                    12.11.2017
                                                                </span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti quo fuga corporis sunt voluptate, quia, beatae voluptates est possimus impedit eveniet quaerat nulla sapiente. Omnis odit quas est fuga nam.</p>
                                                                <span class="comment-btn">
                                                                    <a href="#">Reply</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment">
                                                    <div class="row">
                                                        <div class="col-md-12 padding-leftright-null">
                                                            <img src="assets/img/hiker4.jpg" alt="">
                                                            <div class="content">
                                                                <span class="comment-author">
                                                                    Jessica Brown
                                                                </span>
                                                                <span class="comment-date">
                                                                    12.11.2017
                                                                </span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti quo fuga corporis sunt voluptate, quia, beatae voluptates est possimus impedit eveniet quaerat nulla sapiente. Omnis odit quas est fuga nam.</p>
                                                                <span class="comment-btn">
                                                                    <a href="#">Reply</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane padding-md" id="tab-two">
                                                <section class="comment-form">
                                                    <form id="contact-form">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <input class="form-field" name="name" id="name" type="text" placeholder="Name">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-field" name="mail" id="mail" type="text" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <textarea class="form-field" name="messageForm" id="messageForm" rows="6" placeholder="Your Message"></textarea>
                                                                <div class="submit-area">
                                                                    <input type="submit" id="submit-contact" class="btn-alt" value="Submit">
                                                                    <div id="msg" class="message"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  END Comments  -->
                        </div>
                    </div>
                </div>
            </div> -->
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