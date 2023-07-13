<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Dolomia HTML Template</title>

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
                                <img src="assets/img/logo.png" class="normal" alt="logo">
                                <img src="assets/img/logo@2x.png" class="retina" alt="logo">
                                <img src="assets/img/logo_white.png" class="normal white-logo" alt="logo">
                                <img src="assets/img/logo_white@2x.png" class="retina white-logo" alt="logo">
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
                        <li style="background-image:url(assets/img/perkap_mendaki2.png)">
                            <div class="container text text-center">
                                <h1 class="white margin-bottom-small">Peralatan & Perlengkapan</h1>
                                <p class="heading white">Dalam kegiatan mendaki tentu perlengkapan dan peralatan yang digunakan untuk kebutuhan mendaki harus di persiapkan.</p>
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
                                    <p><b>Peralatan dan Perlengkapan Mendaki Gunung.</b> Kegiatan mendaki gunung kini banyak digemari berbagai kalangan usia khususnya muda-mudi yang suka berpetualang ke alam bebas. Berpetualang di alam bukan layaknya jalan sehat ataupun olahraga biasa. Bagaimanapun juga, pendakian gunung bisa menjadi kegiatan yang menyenangkan dan juga berbahaya. </p>
                                    <p>Tidak sedikit kasus kematian di gunung yang disebabkan karena kecelakaan dan kurang safety'nya peralatan pendakian. Tidak peduli sudah berpengalaman atau masih baru menyapa alam bebas, peralatan pendakian gunung harus disiapkan dan dibawa serta.</p>
                                    <p>Tidak semua pendaki memiliki peralatan pendakian gunung yang lengkap, itulah kenapa jasa penyewaan perlengkapan outdoor banyak dibutuhkan di akhir pekan atau menjelang libur panjang. Peralatan mendaki gunung pastinya ada banyak item, karena mendaki gunung seperti berpindah hunlan ke alam bebas. Jadi, peralatan dan perlengkapan mulai dari tidur, makan hingga keamanan diri harus dipersiapkan ditambah dengan fisik dan mental yang baik.</p>
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
                                    <!--  END Grid Images  -->
                                    <p>Berikut daftar perlengkapan mendaki gunung yang penting ketika melakukan kegiatan di alam bebas :</p>
                                    <!--  Grid Images  -->
                                    <p><b>1. Tenda</b></p>
                                    <section class="grid-images padding-sm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="image simple-shadow" style="background-image:url(assets/img/tenda1.png)">
                                                    <a class="lightbox-image" href="assets/img/tenda1.png"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <p>Tenda merupakan hunian sementara ketika berada di alam bebas. Ada banyak jenis dan merk tenda yang bisa dipilih untuk kenyamanan dan keamanan ketika mendaki gunung. Untuk memilih tenda, sesuaikan dengan kondisi, seperti kapasitas, berat dan model (single layer/double layer). Tenda dome menjadi favorit para petualang dengan berbagai ukuran dan
                                        model.</p>
                                    <p>Ada beberapa hal yang perlu diperhatikan dalam memilih tenda, yaitu model, daya tampung, lapisan (waterproof atau tidak), kemudahan dipacking dan berat tenda. Jika tenda single layer atau double layer tetapi tidak waterproof, maka lapisi dengan flysheet.</p>
                                    <!-- END Grid Image -->
                                    <p><b>2. Peralatan Memasak</b></p>
                                    <section class="grid-images padding-sm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="image simple-shadow" style="background-image:url(assets/img/alat_masak.png)">
                                                    <a class="lightbox-image" href="assets/img/alat_masak.png"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <p>Energi merupakan hal penting dalam segala aktivitas, untuk itulah kenapa logistik sangat diperlukan dalam pendakian. Logistik bisa dibawa dari rumah, atau memanfaatkan logistik alam yang biasanya dimanfaatkan saat survival. Membawa logistik sendiri merupakan hal paling aman dan simple, kemudian memasak dalam kabut dingin, hm.....</p>
                                    <p>Kondisi dingin di gunung harus diimbangi dengan sesuatu yang hangat untuk mencegah hipotermia ataupun untuk memasak makanan favorit ala rumahan, dan tidak sekedar mie Instan.</p>
                                    <p>Perlengkapan masak mendaki gunung yaitu nesting dan kompor. Sedangkan untuk bahan bakar bisa menggunakan minyak gas atau parafin. Sebaiknya tidak menggunakan minyak karena rawan tumpah yang bisa membuat kebakaran.</p>
                                    <!-- END Grid Image -->
                                    <p><b>3. Tas (Carrier/Daypack)</b></p>
                                    <section class="grid-images padding-sm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="image simple-shadow" style="background-image:url(assets/img/tas_carrier.png)">
                                                    <a class="lightbox-image" href="assets/img/tas_carrier.png"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <p>Tas sangat diperlukan jika ingin membawa barang sendiri. Meskipun barang dibawa oleh teman setim, tas memang harus dibawa. Bukan sekedar untuk formalitas, tapi untuk menyimpan barang pribadi lainnya. Untuk membawa semua perlengkapan mendaki gunung, mencakup barang kelompok dan barang pribadi, maka tas carrier wajib dibawa.</p>
                                    <p>Tas gunung memiliki desain khusus dan beberapa bagian yang tidak ada di
                                        tas-tas biasa. Ada berbagai ukuran tas carrier mulai 40 L hingga 100 L. Untuk penggunaan tas carrier, jangan terpaku pada ukuran tas tetapi sesuaikan dengan kebutuhan.</p>
                                    <p>Jika barang bawaan tidak banyak dan tidak memerlukan carrier, maka bisa menggunakan daypack. Jangan lupa untuk kelengkapan tas seperti cover tas yang berguna melindungi hujan (cover waterproof) dan melindungi dari panas dan kotor. Jika tidak membawa jas ponco, sebaiknya jangan lupakan cover waterproof.</p>
                                    <!-- END Grid Image -->
                                    <p><b>4. Sepatu</b></p>
                                    <section class="grid-images padding-sm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="image simple-shadow" style="background-image:url(assets/img/sepatu.png)">
                                                    <a class="lightbox-image" href="assets/img/sepatu.png"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <p>Jangan ikut-ikutan masyarakat sekitar gunung yang menggunakan sandal jepit untuk mendaki gunung. Sepatu gunung adalah perlengkapan wajib yang harus digunakan ketika mendaki gunung. Meski banyak yang beralih menggunakan sandal gunung, sepatu gunung lebih memberikan keamanan ketika ada di alam bebas.</p>
                                    <p>Mungkin tidak masalah jika trek yang dilalui hanya jalan setapak biasa. Jika jalur terjal, berpasir dan licin, mengganti sandal ke sepatu ketika menemui situasi tertentu pasti akan membuang-buang waktu pendakian. So, take your comfort.</p>
                                    <!-- END Grid Image -->
                                    <p><b>5. Matras</b></p>
                                    <section class="grid-images padding-sm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="image simple-shadow" style="background-image:url(assets/img/matras.png)">
                                                    <a class="lightbox-image" href="assets/img/matras.png"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <p>Matras berfungsi sebagai alas, entah alas tidur maupun alas duduk-duduk. Matras memiliki permukaan yang tebal, sehingga aman digunakan untuk alas tidur, mengingat permukaan tanah pasti tidak rata dan bercampur dengan kerikil yang akan mengurangi kenyamanan saat tidur.</p>
                                    <p>Matras biasanya digantikan dengan aluminium foil yang lebih memberikan kehangatan karena sifatnya yang memantulkan panas. Bagaimana agar nyaman?. Bawa keduanya.</p>
                                    <!-- END Grid Image -->
                                    <p><b>6. Sleeping Bag</b></p>
                                    <section class="grid-images padding-sm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="image simple-shadow" style="background-image:url(assets/img/sleeping_bag.png)">
                                                    <a class="lightbox-image" href="assets/img/sleeping_bag.png"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <p>Mungkin sleeping bag lebih berguna daripada selimut atau sarung. Packing'an yang ringkas, tidak banyak makan tempat di dalam tas dan manfaat yang maksimal, membuat sleeping bag harus dibawa ketika mendaki gunung. Ada banyak jenis sleeping bag berdasarkan bahan dan ketebalannya.</p>
                                    <p>Umumnya sleeping bag berasal dari serat sintetis yang lebih awet dibanding dari bulu angsa, tetapi bulu angsa yang tentunya lebih hangat. Sedangkan dari serat sintetis ada tiga jenis yaitu polar, dacron dan polar-dacron.</p>
                                    <!-- END Grid Image -->
                                    <p><b>7. Jaket</b></p>
                                    <section class="grid-images padding-sm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="image simple-shadow" style="background-image:url(assets/img/trip8.jpg)">
                                                    <a class="lightbox-image" href="assets/img/trip8.jpg"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <p>Jaket bukanlah perlengkapan mendaki gunung yang wajib, tetapi kebutuhan. Ada beberapa tipe orang yang tahan terhadap dingin sehingga tidak terlalu butuh jaket dan menggantinya dengan pakaian lengan panjang. Sebagian lagi membutuhkan jaket untuk melindungi diri dari hawa
                                        dingin.</p>
                                    <p>Meski ada yang tidak terlalu membutuhkan jaket di gunung, membawa jaket tetaplah perlu. Siapapun tidak tahu apa yang akan terjadi dalam perjalanan dan bukankah safety dan menjaga suhu tubuh tetap hangat itu lebih baik?.</p>
                                    <p>Memilih jaket tidak perlu terlalu tebal yang malah memakan ruang di dalam tas. Saat ini, banyak produsen peralatan outdoor yang merancang jaket tipis anti angin, waterproof, dan dapat menjaga suhu tubuh agar tetap hangat.</p>
                                    <!-- END Grid Image -->
                                    <p><b>8. Sarung Tangan</b></p>
                                    <section class="grid-images padding-sm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="image simple-shadow" style="background-image:url(assets/img/trip8.jpg)">
                                                    <a class="lightbox-image" href="assets/img/trip8.jpg"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <p>Sarung tangan merupakan peralatan mendaki gunung yang memiliki fungsi sebagai pelindung dan penghangat tangan. Sarung tangan akan melindungi dari gigitan serangga, sengatan matahari, hawa dingin dan permukaan yang kasar.</p>
                                    <!-- END Grid Image -->
                                    <p><b>9. Pelindung Kepala</b></p>
                                    <section class="grid-images padding-sm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="image simple-shadow" style="background-image:url(assets/img/trip8.jpg)">
                                                    <a class="lightbox-image" href="assets/img/trip8.jpg"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <p>Pelindung kepala sangat berguna ketika melakukan pendakian di saat siang ketika panas terik dan malam ketika hawa dingin menyerang. Ada dua jenis pelindung kepala yang bisa digunakan untuk mendaki gunung, yaitu kupluk dan topi. Topi melindungi kepala dari panas terik matahari dan kupluk melindungi dari dinginnya angin malam. Biasanya pendaki ada yang menggunakna buff untuk pengganti kupluk.</p>
                                    <!-- END Grid Image -->
                                    <p><b>10. Gaiters</b></p>
                                    <section class="grid-images padding-sm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="image simple-shadow" style="background-image:url(assets/img/trip8.jpg)">
                                                    <a class="lightbox-image" href="assets/img/trip8.jpg"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <p>Penggunaan gaiters pada pendakin berfungsi untuk melindungi kaki saat melintasi jalur di semak berduri, semak basah, medan pasir atau kerikil. Gaiters akan menghalangi pasir dan kerikil masuk ke dalam sepatu yang membuat pendakian tidak nyaman. Selain itu gaiters juga bisa menjadi penghangat kaki saat pendakian malam.</p>
                                    <!-- END Grid Image -->
                                    <p><b>11. Jas Hujan</b></p>
                                    <section class="grid-images padding-sm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="image simple-shadow" style="background-image:url(assets/img/trip8.jpg)">
                                                    <a class="lightbox-image" href="assets/img/trip8.jpg"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <p>Hujan atau tidak, jas hujan memang perlu dibawa. Selain berguna saat musim hujan, jas hujan bisa berfungsi sebagai penghangat layaknya jaket waterproof. Ada jas hujan khusus outdoor yang dirancang memiliki berat ringan dan tipis, sehingga tidak terlalu makan tempat di dalam tas.</p>
                                    <p>Ada juga jas ponco yang memiliki fungsi ganda untuk membangun bivak atau tenda darurat. Ada berbagai Bentuk Shelter dari Jas Hujan yang Mudah Dibuat jika membawa jas hujan ponco. Selain itu bentuknya yang lebar juga bisa sekalian melindungi tas carrier di punggung saat hujan.</p>
                                    <!-- END Grid Image -->
                                    <p><b>12. Trekking Pole</b></p>
                                    <section class="grid-images padding-sm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="image simple-shadow" style="background-image:url(assets/img/trip8.jpg)">
                                                    <a class="lightbox-image" href="assets/img/trip8.jpg"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <p>Sebagian besar pendaki mungkin masih enggan menggunakan trekking pole. Membawa peralatan mendaki gunung satu ini sangatlah penting dalam pendakian terutama ketika ada di medan berpasir yang membutuhkan lebih besar tumpuan.</p>
                                    <p>Trekking pole memiliki fungsi untuk menyangga berat tubuh, meminimalisir nyeri lutut dan memberikan keseimbangan saat melintasi trek yang curam. Dengan banyak siasat lain, trekking pole bisa berguna dalam banyak hal, seperti menjadi tiang flysheet dan sebagainya.</p>
                                    <!-- END Grid Image -->
                                    <p><b>13. Senter dan Headlamp</b></p>
                                    <section class="grid-images padding-sm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="image simple-shadow" style="background-image:url(assets/img/trip8.jpg)">
                                                    <a class="lightbox-image" href="assets/img/trip8.jpg"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <p>Penerangan sangat diperlukan ketika berada di kegelapan alam bebas untuk memudahkan aktivitas pendakian maupun aktivitas lainnya. Penerangan bisa menggunakan senter dan headlamp. Keduanya memiliki kelebihan dan kekurangan tersendiri.</p>
                                    <p>Ketika menggunakan senter, otomatis salah satu tangan tidak akan leluasa, tetapi bebas mengarahkan penerangan kemanapun. Sedangkan menggunakan headlamp, kedua tangan bebas dan leluasa untuk berpegangan saat melintasi trek terjal maupun memegang trekking pole, tetapi arah sorotan sinar tidak bebas dan mengikuti arah kepala.</p>
                                    <!-- END Grid Image -->
                                    <p><b>14. Tali (Karmantel, Webbing, Tali Rafia, Tali Pramuka)</b></p>
                                    <section class="grid-images padding-sm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="image simple-shadow" style="background-image:url(assets/img/trip8.jpg)">
                                                    <a class="lightbox-image" href="assets/img/trip8.jpg"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <p>Tali dibutuhkan dalam setiap pendakian. Tali memiliki banyak fungsi seperti
                                        untuk mengikat flysheet ke pasak, menjemur pakaian, penanda jejak, naik turun tebing dan sebagainya. Untung penggunaannya, jenis tali tentu berbeda.</p>
                                    <p>Khusus untuk melakukan pemanjatan tebing seperti trek di Jalur Pendakian Gunung Raung, tali karmantel dan webbing wajib dibawa dengan Peralatan Panjat Tebing lainnya. Sedangkan untuk kebutuhan ringan, bisa membawa tali rafia atau tali pramuka.</p>
                                    <!-- END Grid Image -->
                                    <p><b>15. Survival Kit</b></p>
                                    <section class="grid-images padding-sm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="image simple-shadow" style="background-image:url(assets/img/trip8.jpg)">
                                                    <a class="lightbox-image" href="assets/img/trip8.jpg"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <p>Banyak sebagian besar pendaki gunung yang tidak memperhitungkan Survival Kit di dalam peralatan mendaki gunung. Survival Kit diperlukan dalam kondisi darurat, seperti tersesat, kecelakaan dan yang lain.</p>
                                    <p>Ada berbagai Survival Item yang wajib dibawa saat pendakian. Pastikan membawa Survival Item ketika melakukan pendakian khususnya dalam jangka waktu lama.</p>
                                    <!-- END Grid Image -->
                                    <p><b>16. Kantong Sampah/ Trash Bag</b></p>
                                    <section class="grid-images padding-sm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="image simple-shadow" style="background-image:url(assets/img/trip8.jpg)">
                                                    <a class="lightbox-image" href="assets/img/trip8.jpg"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <p>Layaknya slogan "Bawa Turun Sampahmu", jangan lupakan trash bag saat melakukan pendakian. Sebagai tamu di alam bebas, tentu jangan pernah meninggalkan sampah non organik di alam bebas. Selain berbahaya untuk habitat catwa liar juga berbahaya bagi lingkungan.</p>
                                    <p>Jika belum digunakan, trash bag bisa digunakan sebagai sleeping bag untuk menambah panas. Biasanya, banyak pendaki yang melapisi bagian dalam tas carrier dengan trash bag untuk mengantisipasi barang bawaan basah jika cuaca hujan.</p>
                                    <!-- END Grid Image -->
                                    <p><b>17. Kacamata dan Masker</b></p>
                                    <section class="grid-images padding-sm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="image simple-shadow" style="background-image:url(assets/img/trip8.jpg)">
                                                    <a class="lightbox-image" href="assets/img/trip8.jpg"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <p>Kacamata akan melindungi mata dari debu dan sinar matahari saat pendakian. Sementara itu, masker berguna sebagai pelindung pernapasan. Oleh karenanya, dua alat ini menjadi satu kesatuan dalam melindungi organ-organ di wajah.</p>
                                    <!-- END Grid Image -->
                                    <p><b>18. Pakaian</b></p>
                                    <section class="grid-images padding-sm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="image simple-shadow" style="background-image:url(assets/img/trip8.jpg)">
                                                    <a class="lightbox-image" href="assets/img/trip8.jpg"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <p>Perhatikan jenis bahan yang kamu bawa saat mendaki gunung. Usahakan membawa pakaian dengan bahan yang hangat, misalnya rajut atau katun. Selain itu, pastikan kamu membawa sejumlah baju yang cukup dan dalam keadaan kering. Dengan begitu, badan akan terlindung dari cuaca yang tidak bersahabat.</p>
                                    <!-- END Grid Image -->
                                    <p><b>19. Jam Tangan</b></p>
                                    <section class="grid-images padding-sm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="image simple-shadow" style="background-image:url(assets/img/trip8.jpg)">
                                                    <a class="lightbox-image" href="assets/img/trip8.jpg"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <p>Jam tangan merupakan alat penting dalam mendukung kegiatan mendaki gunung yang memiliki banyak fungsi. Tentunya, alat ini tidak hanya berguna sebagai penunjuk waktu. Namun, banyak jam tangan dengan fitur yang berguna untuk pendaki gunung, yaitu termometer, GPS, altimeter, dan barometer. Dengan begitu, jam tangan bermanfaat sebagai alat navigasi yang bisa dibawa dari rumah.</p>
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
                            <div class="row no-margin">
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