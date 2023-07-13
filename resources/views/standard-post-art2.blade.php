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
                            <a class="navbar-brand" href="/montanha">
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
                        <li style="background-image:url(assets/img/tips&trik_mendaki2.png)">
                            <div class="container text text-center">
                                <h1 class="white margin-bottom-small">Tips & Trik</h1>
                                <p class="heading white">Kegiatan mendaki juga memiliki tips dan trik agar perjalanan menuju puncak tidak membosankan dan sampai di puncak dengan aman.</p>
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
                                    <p>Banyak pendaki pemula yang nekat mendaki gunung karena ikut-ikutan trend di media sosial. Alhasil, kebanyakan dari mereka mengalami pengalaman buruk saat pendakian perdana. Ada yang tidak sampai puncak, ada yang sakit hingga ada juga yang dievakuasi oleh tim SAR.</p>                                    
                                    <p>Mendaki gunung itu bukan olahraga jalan sehat. Mendaki gunung itu termasuk olahraga ekstrim di alam bebas yang butuh perlengkapan dan pengetahuan. Jika kamu tidak membekali diri dengan baik, aktivitas hiking kamu akan tidak nyaman dan penuh resiko. Kamu bisa mengalami pengalaman buruk yang tidak bisa kamu lupakan sepanjang hidupmu. Misalnya, kelaparan di gunung, keseleo, sakit, encok, kedinginan hingga kecelakaan gunung.</p>
                                    <p>Sudah banyak berita tentang pendaki tersesat, hilang hingga meninggal di gunung. Kami tidak ingin itu terjadi kepada kamu. Maka dari itu, kami membuat artikel ini khusus untuk kamu, pendaki pemula. Berikut 17 tips mendaki gunung untuk pemula:</p>
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
                                    <p><b>1. Mendakilah bersama pendaki senior</b></p>
                                    <p>Tips mendaki gunung untuk pemula yang akan kami bagikan adalah mendakilah bersama pendaki senior. Sebagai pendaki pemula, kamu wajib pergi bersama pendaki senior yang lebih berpengalaman. Tujuannya adalah untuk keamanan dan kenyamananmu. Jangan nekat pergi sendiri atau bersama rombongan yang semua anggotanya adalah pendaki pemula. Ini akan sangat berisiko.</p>
                                    <p>Pendaki senior memiliki banyak pengalaman dalam mendaki gunung. Mereka bisa memandu dan membantu saat kamu kebingungan. Ini akan meminimalisir kemungkinan terjadinya hal-hal yang tidak diinginkan. Keuntungan lain, kamu bisa mendapatkan kesempatan untuk belajar lebih banyak mengenai cara mendaki gunung dari para senior.</p>
                                    <p>Bergabunglah dengan komunitas pecinta alam atau komunitas pendaki gunung di daerahmu untuk bertemu dengan pendaki lain yang lebih berpengalaman. Kamu bisa belajar banyak hal dari mereka. Bahkan, jika ada rencana pendakian, kamu bisa ikut bergabung bersama mereka.</p>
                                    <!-- END Grid Image -->
                                    <p><b>2. Pilihlah gunung yang memiliki tingkat kesulitan rendah</b></p>
                                    <p>Jangan langsung memaksakan tubuhmu untuk mendaki gunung yang tingkat kesulitannya tinggi. Coba terlebih dahulu dengan gunung yang medannya ringan sehingga bisa ditempuh dengan waktu yang relatif pendek. Cara ini akan membantumu melatih kekuatan fisik dan pernapasan sedikit demi sedikit. Biarkan tubuhmu beradaptasi sehingga nantinya akan terbiasa untuk aktivitas mendaki gunung. Selain itu, dengan memilih gunung yang tingkat kesulitannya rendah, kamu juga bisa lebih menikmati pengalaman mendaki.</p>
                                    <!-- END Grid Image -->
                                    <p><b>3. Bawalah perlengkapan mendaki gunung yang memadai</b></p>
                                    <p>Pendaki perlu membekali diri dengan perlengkapan yang memadai. 10 perlengkapan penting berikut ini wajib dibawa saat mendaki gunung.</p>
                                    <p>Mungkin tidak masalah jika trek yang dilalui hanya jalan setapak biasa. Jika jalur terjal, berpasir dan licin, mengganti sandal ke sepatu ketika menemui situasi tertentu pasti akan membuang-buang waktu pendakian. So, take your comfort.</p>
                                    <ul class="post">
                                        <li>Alat navigasi: kompas, peta cetak, GPS tracker, altimeter watch.</li>
                                        <li>Headlamp dan alat penerangan lain (lengkap dengan baterai cadangan)</li>
                                        <li>Alat pelindung diri dari sinar matahari: tabir surya, kacamata hitam, topi, dan baju lengan panjang.</li>
                                        <li>Perlengkapan P3K: Betadine, plaster, kapas, obat pereda nyeri, obat diare, minyak kayu putih.</li>
                                        <li>Pisau khusus dengan banyak mata. Kamu bisa membelinya di toko perlengkapan outdoor.</li>
                                        <li>Korek api / fire starter.</li>
                                        <li>Makanan dan camilan bergizi dan berkalori tinggi.</li>
                                        <li>Kantong plastik besar untuk menyimpan pakaian kotor maupun sampah-sampah pribadimu selama mendaki gunung.</li>
                                        <li>Jas hujan & pakaian ganti.</li>
                                        <li>Air minum: air putih, minuman pengganti elektrolit tubuh.</li>
                                    </ul>
                                    <!-- END Grid Image -->
                                    <p><b>4. Pelajari cara packing carrier yang benar</b></p>
                                    <p>Seorang pendaki perlu mempelajari cara packing carrier yang benar. Carrier memiliki kapasitas yang besar sehingga memungkinkan penggunanya untuk membawa banyak barang. Namun, jika tidak ditata dengan benar, carrier akan terasa lebih berat dan membuatmu tidak nyaman selama mendaki gunung.</p>
                                    <p>Secara singkat, ada beberapa langkah mudah untuk packing carrier dengan benar. Pertama, catat dulu barang apa saja yang perlu kamu bawa. Tujuannya agar tidak ada barang penting yang tertinggal.</p>
                                    <p>Kedua, sebelum dimasukkan ke dalam carrier, kelompokkan barang-barang tadi berdasarkan jenisnya. Ini akan memudahkanmu saat mencari barang. Masukkan barang-barang yang sudah dikelompokkan tadi ke dalam kantong plastik anti air supaya tidak mudah basah.</p>
                                    <p>Ketiga, stabilkan carrier supaya barang bisa masuk dengan mudah.Caranya, dengan memasukkan matras dengan posisi vertikal ke bagian dalam carrier. Bentuk hingga menyerupai lubang sumur. Cara ini efektif untuk menstabilkan carrier dan membuat nyaman ruang gerakmu saat carrier berada di pundak. Namun, ruang penyimpanan di dalam carrier menjadi makin sempit.</p>
                                    <p>Keempat, mulai susun barangmu dengan benar ke dalam carrier. Perhatikan gambar supaya kamu lebih paham.</p>
                                    <p>Di area nomor 1, susun masukkan barang yang jarang di pakai dan berbobot sedang. Misalnya, sleeping bag. Pada area nomor 2, letakkan barang yang memiliki bobot sedang dan jarang di pakai. Misalnya, pakaian cadangan. Bagian nomor 3, taruh perlengkapan mendaki gunung yang memiliki bobot paling berat. Misalnya, perlengkapan masak, air minum dan bahan makanan mentah. Untuk area nomor 3, silakan taruh snack, camilan, repair kit atau peralatan elektronik. Intinya, barang yang berada di nomor 3 adalah barang yang memiliki bobor ringan. Di area nomor 4, letakkan barang-barang yang sifatnya quick access items seperti kotak P3K, alat penerangan, buff, topi, kaca mata, dan jas hujan. Untuk botol minum, kamu bisa sisipkan di saku-saku kecil yang ada di bagian samping carrier.</p>
                                    <p>Kelima, setelah semua barang masuk, coba seimbangkan ulang carrier dengan cara mendirikannya. Jika masih miring ke satu arah, atur kembali barang di dalamnya. Jangan sampai pundakmu cidera atau ruang gerak terganggu karena carrier yang tidak seimbang.</p>
                                    <p>Terakhir, bawa tas kecil untuk menyimpan barang-barang kecil yang sering dipakai. Misalnya, alat pemotong, korek, uang tunai, dan alat elektronik. Chapter ini baru gambaran umum saja, untuk lebih detailnya, silakan baca artikel cara packing carrier dengan benar di sini.</p>
                                    <!-- END Grid Image -->
                                    <p><b>5. Persiapkan fisik dan mental sebelum berangkat mendaki</b></p>
                                    <p>Tips mendaki gunung untuk pemula selanjutnya adalah lakukan olahraga secara tertarget untuk menggembleng fisik dan mental. Minimal 2 minggu latihan fisik sebelum pendakian. Mendaki gunung termasuk dalam aktivitas fisik yang berat dan ekstrim. Kamu membutuhkan kondisi fisik yang bugar dan prima. Tanpa fisik yang kuat, berbagai risiko kesehatan seperti hipotermia, edema paru, atau mountain sickness bisa menyerangmu kapan saja. Jangankan pendaki pemula, pendaki senior pun masih perlu waspada dengan risiko kesehatan ini. Jadi, persiapkan fisikmu dengan baik.</p>
                                    <p>Latihlah dengan olahraga rutin jauh hari sebelum jadwal pendakian. Kamu bisa melakukan jogging atau squat untuk melatih kekuatan otot kaki. Keduanya tidak membutuhkan peralatan khusus dan bisa kamu lakukan kapan saja. Lakukan perlahan dan tingkatkan jumlahnya setiap hari. Misalnya, di hari pertama dan kedua jogging dengan jarak300 meter, selanjutnya di hari ketiga dan keempat tambah menjadi 400 meter, dan seterusnya.</p>
                                    <p>Di laman website IndoSport juga disarankan bersepeda untuk melatih kekuatan otot kaki. Pilih jalur menanjak agar mendapatkan beban maksimal pada otot kaki bagian belakang. Selain otot kaki, mendaki gunung juga membutuhkan kekuatan pernapasan dan otot punggung. Untuk melatih keduanya, kamu bisa olahraga renang secara rutin.</p>
                                    <p>Kondisi fisik yang sehat dan bugar sangat membantu menjaga mentalmu. Ada banyak rintangan yang akan kamu temui saat mendaki gunung. Tanpa kondisi fisik yang kuat, mentalmu akan lebih cepat drop saat dihadapkan pada kondisi sulit di gunung. Gali banyak informasi seputar aktivitas pendakian di lokasi yang akan kamu tuju. Dari pengalaman kami, ini juga akan sangat membantu mempersiapkan mentalmu.</p>
                                    <!-- END Grid Image -->
                                    <p><b>6. Pamit kepada keluarga atau orang terdekat sebelum pergi mendaki gunung</b></p>
                                    <p>Sebelum mendaki gunung, biasakan untuk pamit kepada keluarga atau orang terdekat. Beritahukan mengenai rencana pendakianmu. Mulai dari kapan berangkat, berapa lama perginya, lokasi, hingga siapa saja yang ikut serta dalam pendakian bersamamu. Tinggalkan nomor kontak orang-orang yang akan ikut serta dalam pendakian. Ini untuk memudahkan komunikasi jika kamu mendadak tidak bisa dihubungi.</p>
                                    <!-- END Grid Image -->
                                    <p><b>7. Mendaki itu bukan perlombaan, jadi, jangan terburu-buru</b></p>
                                    <p>Mendaki gunung tidak perlu dilakukan terburu-buru. Walaupun sebagai pendaki pemula kamu merasa sangat bersemangat, tetapi lebih baik jika kamu menahan sedikit kecepatanmu. Terlalu cepat di awal akan menguras banyak energi. Padahal, kamu belum tahu bagaimana beratnya jalur yang masih akan kamu hadapi untuk mencapai puncak. Kamu juga perlu menyimpan energi untuk kemungkinan jika terjadi situasi darurat. Lakukan pendakian dengan kecepatan yang membuatmu nyaman tanpa perlu terburu-buru. Nikmati perjalananmu menuju ke puncak gunung.</p>
                                    <p>Kalau kamu pergi dengan rombongan, lakukan pendakian sesuai kesepakatan bersama. Baik itu mengenai kecepatan maupun jalur yang akan dilewati. Jangan karena ingin buru-buru duluan sampai di puncak, kamu malah meninggalkan rombonganmu. Jangan pernah lakukan ini karena berbahaya untuk keselamatan jika terpisah dari rombongan pendaki.</p>
                                    <!-- END Grid Image -->
                                    <p><b>8. Jangan asal jalan, mendaki itu ada tekniknya</b></p>
                                    <p>Hal ini biasanya juga sering diabaikan oleh pendaki pemula. Mendaki gunung itu bukan sekadar berjalan menuju puncak. Ada teknik yang perlu diterapkan sesuai dengan karakteristik jalur yang dilewati. Teknik ini akan membantumu mendaki dengan nyaman dan aman.</p>
                                    <p>Pastikan kamu berjalan di jalur yang sudah ditentukan dan ramai dilalui oleh pendaki lainnya. Ikuti instruksi dan petunjuk dari pemimpin rombongan / pendaki senior. Fokus dan perhatikan langkahmu saat berjalan. Beberapa jalur pendakian cukup berbatu dan terjal. Fokuslah untuk tetap berpijak dan berpegangan di tempat yang kokoh.</p>
                                    <!-- END Grid Image -->
                                    <p><b>9. Pelajari beberapa teknik memasak saat hiking</b></p>
                                    <p>Sebagai pendaki pemula, kamu perlu memahami teknik memasak. Tujuannya supaya kamu bisa mengolah berbagai bahan makanan dan tidak kesulitan makan saat berada di gunung. Teknik memasak yang kami maksud di sini meliputi pengetahuan seputar bahan makanan, cara mengatur menu, dan cara mengolah bahan-bahan makanan dengan peralatan yang ada. Untuk lebh jelasnya, silakan baca artikel tips memasak di gunung.</p>
                                    <p>Pengetahuan seputar bahan makanan penting untuk dipelajari agar kamu tahu bahan mana yang bisa dibawa sesuai lamanya waktu pendakian. Jadi, kamu tidak selalu tergantung pada mie instan dan makanan kaleng siap saji. Begitu juga dengan cara mengatur menu. Teknik ini penting dipelajari supaya kamu tidak kehabisan bahan makanan sebelum waktu pendakian selesai.</p>
                                    <p>Yang tidak kalah penting adalah memahami cara mengolah bahan makanan dengan peralatan yang tersedia. Para pendaki biasanya membawa peralatan masak khusus seperti kompor mini, gas kaleng portabel, nesting, cooking set, atau trangia. Semua peralatan memasak ini, terutama yang akan kamu bawa, perlu kamu pelajari bagaimana cara penggunaannya untuk mengolah berbagai bahan makanan.</p>
                                    <p>Kenapa? Karena walaupun alatnya sama, tetapi beda bahan makanan, maka tekniknya pun akan berbeda. Contohnya adalah nesting. Alat ini sangat populer di kalangan pendaki dan bisa dibilang menjadi peralatan memasak wajib bagi para pendaki. Memasak nasi dan memasak sayuran menggunakan nesting memerlukan perlakuan dan teknik yang berbeda supaya hasilnya baik.</p>
                                    <p>Pada beberapa kondisi, kamu juga perlu menggunakan teknik memasak darurat. Ada berbagai kemungkinan yang membuatmu harus benar-benar memanfaatkan alam. Sebut saja kondisi di mana persediaan bahan makanan dan gas portabel habis karena waktu pendakian yang ternyata lebih lama dari rencana awal.</p>
                                    <p>Demi bisa tetap makan, pendaki akan memanfaatkan apa yang ada di alam sebagai bahan makanan. Begitu juga dengan peralatan memasaknya. Contohnya adalah memasak menggunakan api unggun. Kamu perlu mempelajari bagaimana cara membuat api unggun. Begitu juga dengan teknik mengolah makanan dengan api unggun yang jelas tidak bisa kamu atur besar kecil nyala apinya.</p>
                                    <!-- END Grid Image -->
                                    <p><b>10. Perhatikan musim & cuaca, pilih waktu mendaki gunung yang tepat</b></p>
                                    <p>Tips mendaki gunung untuk pemula berikutnya adalah perhatikan cuaca. Mendaki gunung itu tidak bisa dilakukan kapan saja sekehendak hati. Ada waktu khusus di mana sebaiknya kamu tidak pergi mendaki gunung. Hal ini yang perlu kamu pahami. Jika berencana mendaki gunung, pilih waktu yang tepat agar lebih nyaman dan tidak membahayakan diri sendiri.</p>
                                    <p>Di bulan November – Desember biasanya kurang tepat untuk mendaki karena sedang musim hujan. Badai dan kabut tebal akan menjadi penghalang saat pendakian. Lebih lagi di bulan Januari – Maret yang intensitas hujannya lebih tinggi. Pada periode ini hujan disertai angin kencang dan petir sangat berpotensi mengganggu aktivitas pendakian. Jalur pendakian pun menjadi lebih licin dan rentan longsor.</p>
                                    <p>Waktu terbaik untuk melakukan pendakian adalah di akhir April sampai awal Oktober saat musim panas. Kemungkinan terjadinya hujan cukup kecil. Pemandangan alam pada bulan-bulan tersebut pun jauh lebih indah.</p>
                                    <p>Selain memperhatikan musim, kamu juga perlu peka pada cuaca. Beberapa hari menjelang waktu pendakian hingga beberapa jam sebelumnya, rutinlah memeriksa prakiraan cuaca. Ini akan memberimu informasi tentang apa yang harus dipersiapkan sebelum pendakian. Baik itu cara berpakaian maupun pengemasan barang bawaan. Jika cuaca diramalkan akan sangat buruk, kamu bisa menunda waktu pendakian dan mencari rencana lain. Percayalah, mendadak terjebak cuaca buruk di jalur pendakian itu rasanya sungguh tidak nyaman.</p>
                                    <!-- END Grid Image -->
                                    <p><b>11. Pelajari etika pendakian</b></p>
                                    <p>Pendaki pemula perlu memahami etika pendakian. Etika pendakian ini berkaitan erat dengan tanggungjawab terhadap sesama, budaya setempat, dan lingkungan.</p>
                                    <p>Pertama, mari bahas dulu etika pendakian yang berhubungan dengan sesama pendaki. Semua pendaki berhak melewati jalur pendakian dengan rasa aman dan nyaman. Jadi, jangan melakukan hal-hal yang sifatnya mengganggu kenyamanan pendaki lain. Misalnya, berbicara dengan suara sangat nyaring atau memutar musik keras-keras menggunakan speaker portable.</p>
                                    <p>Saat sedang beristirahat untuk mengatur napas di jalur pendakian, berdirilah di tepian supaya tidak menghalangi jalan. Berikan akses kepada pendaki lain untuk lewat. Jika ada pendaki lain yang menyapamu, balas sapaannya dengan sopan.</p>
                                    <p>Selain itu, menjaga jarak aman dengan pendaki lain juga perlu dilakukan. Kami pernah mengalami ada pendaki pemula yang masih takut dengan suasana pendakian di gunung. Di awal-awal mendaki, ia selalu berjalan terlalu dekat ke pendaki lainnya. Walaupun mungkin pendaki lain adalah teman dekat, tetapi tindakan seperti ini bisa mengganggu kenyamanan dan ruang geraknya.</p>
                                    <p>Kedua, etika pendakian terkait budaya setempat. Masing-masing tempat memiliki budaya dan ceritanya masing-masing. Biasanya akan ada informasi (baik itu langsung dari petugas maupun tertulis), mengenai apa yang boleh dan tidak boleh dilakukan oleh pendaki terkait kebiasaan masyarakat setempat. Biasanya, kearifan lokal yang diterapkan oleh masyarakat setempat ditujukan untuk menjaga alam dan penghormatan kepada leluhur. Jadi, berhati-hatilah dan jangan disepelekan.</p>
                                    <p>Terakhir, etika pendakian yang terkait tanggungjawab pada lingkungan. Hal ini berkaitan dengan kewajiban untuk menjaga kebersihan dan kelestarian alam. Jangan mengotori gunung dengan sampah bekas makanan, aksi vandalisme, atau merusak fasilitas yang tersedia. Jangan mengganggu keindahan gunung dengan merusak tanaman atau pepohonan yang tumbuh di sekitar jalur pendakian. Apalagi kalau tanaman tersebut sudah tergolong langka.</p>
                                    <!-- END Grid Image -->
                                    <p><b>12. Jaga asupan air, kalori dan gizi selama aktivitas mendaki gunung</b></p>
                                    <p>Faktor yang turut mendukung keberhasilan pendakian adalah asupan air, kalori, dan gizi yang cukup. Ketiganya menjadi sumber energi untuk tubuh. Tidak sedikit kasus pendaki pemula yang mengalami kelelahan dan hipotermia karena kekurangan asupan air dan makanan bergizi. Untuk itu, kamu wajib menjaga asupan air, kalori, dan gizi selama mendaki gunung. Namun, hal ini akan sulit kamu lakukan jika tidak memiliki pengetahuan mengenai kebutuhan kalori dan manajemen logistik.</p>
                                    <p>Kami akan bahas dulu mengenai kebutuhan kalori bagi pendaki. Setiap orang memiliki kebutuhan kalori yang berbeda. Untuk mengetahui kebutuhan kalori tersebut, ada beberapa metode yang bisa kamu gunakan. Salah satunya dengan menghitung kebutuhan energi berdasarkan Basal Metabolic Rate (BMR) dengan rumus Harris Benedict.</p>
                                    <p>Dilansir dari helloSEHAT, rumusnya bisa kamu lihat di bawah ini:</p>
                                    <p>BMR pria = 66 + (13,7 x berat badan) + (5 x tinggi badan) – (6,8 x usia)</p>
                                    <p>BMR wanita = 655 + (9,6 x berat badan) + (1,8 x tinggi badan) – (4,7 x usia)</p>
                                    <p>BMR ini nantinya masih akan dikalikan dengan faktor aktivitas fisik yang rentang angkanya berkisar di 1,2 – 1,725.</p>
                                    <p>Untuk lebih praktisnya, gunakan kalkulator kalori BMR yang bisa diakses secara online di berbagai website kesehatan. Kamu tinggal memasukkan informasi mengenai jenis kelamin, berat badan, tinggi badan, usia, dan tingkat aktivitas yang akan dilakukan. Kalkulator kalori akan menunjukkan hasil mengenai kebutuhan kalori minimal dan kebutuhan kalori harian.</p>
                                    <p>Setelah mengetahui kebutuhan kalori, kamu bisa mulai melakukan manajemen logistik. Manajemen logistik yang dimaksud di sini adalah mengenai pemilihan bahan-bahan makanan yang akan dibawa saat mendaki. Berikut alternatif bahan makanan dan minuman dengan kandungan kalori dan gizi yang baik untuk dibawa sebagai bekal pendakian:</p>
                                    <ul class="post">
                                        <li>Beras</li>
                                        <li>Cokelat</li>
                                        <li>Sereal</li>
                                        <li>Madu</li>
                                        <li>Umbi-umbian</li>
                                        <li>Kacang</li>
                                        <li>Sosis</li>
                                        <li>Abon</li>
                                        <li>Susu</li>
                                        <li>Wedang Jahe</li>
                                        <li>Minuman Ion</li>
                                        <li>Air Putih</li>
                                    </ul>
                                    <!-- END Grid Image -->
                                    <p><b>13. Selalu ikuti instruksi dan larangan dari petugas gunung</b></p>
                                    <p>Biasanya di setiap jalur pendakian ada instruksi dan larangan yang diinformasikan oleh petugas setempat. Tujuannya untuk keamanan semua pendaki. Instruksi dan larangan ini biasanya sudah mulai diberitahukan sejak kamu berada di pos awal. Kemudian, ada juga yang dipasang berupa papan peringatan di titik-titik tertentu di sepanjang jalur pendakian. Cermati, pahami, dan patuhi semua instruksi serta larangan tersebut. Jangan disepelekan! Sudah banyak kasus kecelakaan maupun pendaki yang hilang karena tidak mematuhi instruksi dari petugas gunung.</p>
                                    <!-- END Grid Image -->
                                    <p><b>14. Pilihlah pakaian hiking yang ringan dan mudah kering</b></p>
                                    <p>Mendaki gunung adalah kegiatan untuk menikmati alam. Namun, kalau gunung dipenuhi dengan sampah, keindahannya akan terganggu dan tidak sedap dipandang. Jadilah pendaki yang bertanggungjawab pada lingkungan. Jangan mengotori gunung dengan sampah sisa bungkus makanan atau minumanmu. Selalu bawa wadah khusus untuk menyimpan sampah dan bawa turun. Tidak berat, kok. Nanti kamu bisa membuangnya saat sudah kembali berada di pos awal. Selain sampah, hindari aksi vandalisme yang juga bisa mengotori keindahan gunung. Jangan mencoret-coret pohon, bebatuan besar, hingga papan informasi yang ada di jalur pendakian.</p>
                                    <!-- END Grid Image -->
                                    <p><b>15. Jangan mengeluh selama pendakian</b></p>
                                    <p>Rasa lelah seringkali membuat pendaki mengeluh. Keluhan ini kadang-kadang keluar dalam bentuk kata-kata yang kurang nyaman didengar. Jangan lupa, banyak gunung di Indonesia adalah tempat yang keramat. Jadi, kata-kata yang tidak pantas bisa saja menimbulkan akibat buruk. Usahakan untuk tidak mengeluh selama pendakian daripada keluar kata-kata yang kurang pantas. Selain itu, terlalu banyak mengeluh akan membuat pendaki lain risih.</p>
                                    <!-- END Grid Image -->
                                    <p><b>16. Jangan berpisah jauh dari rombongan</b></p>
                                    <p>Sepengalaman kami, aktivitas mendaki gunung bersama rombongan adalah pilihan terbaik. Sesama anggota rombongan bisa saling membantu dan saling mengawasi. Usahakan untuk selalu dekat dengan rombonganmu. Jangan sampai terpisah jauh. Gunakan sistem jalan er, middle, atau sweeper supaya tidak terpisah dari rombongan.</p>
                                    <p>Kalau kamu butuh buang air kecil atau pergi mengambil sesuatu, cari tempat yang dekat saja dari titik perhentian rombonganmu. Ajak paling tidak dua orang anggota rombongan untuk menemani. Sebelum memisahkan diri, jangan lupa untuk memberitahukan juga kepada anggota rombongan lain yang tinggal. Jadi, kalau kamu tidak segera kembali, semua anggota rombongan bisa bergerak cepat untuk mencari.</p>
                                    <!-- END Grid Image -->
                                    <p><b>17. Jika tersesat, jangan panik, segera berhenti dan berfikir secara logis</b></p>
                                    <p>Tersesat saat mendaki gunung sangat mungkin terjadi. Kalau kamu sampai tersesat, solusi terbaiknya adalah jangan panik! Berhenti, diam sejenak, dan tenangkan dirimu. Tips mendaki gunung untuk pemula saat tersesat adalah STOP dan berfikir secara logis. Pelajari metode STOP: Sit, Thinking, Observation, Planning. Duduk tenang, berpikir jernih, perhatikan lingkungan sekitar, dan susun rencana untuk kembali ke jalur yang benar.</p>
                                    <p>Jangan melanjutkan pendakian dalam kondisi kebingungan, takut, dan kalut. Kalau terus melanjutkan pendakian, kamu malah bisa semakin jauh tersesat. Saat diri sudah tenang, cobalah berpikir secara logis mengenai cara terbaik agar bisa kembali. Paling tidak, kamu bisa bergerak ke lokasi yang lebih mudah ditemukan oleh tim SAR. Jangan lupa meninggalkan tanda atau jejak supaya bisa dikenali oleh tim SAR atau anggota rombongan lainnya.</p>
                                    <p>Melalui kompas.com, Adi Seno (senior Mapala UI) memberikan beberapa cara bertahan saat tersesat di gunung. Perhatikan tanda-tanda alam untuk membantumu menemukan arah. Misalnya, ketika bertemu pepohonan yang ditumbuhi lumut kemungkinan besar kamu sedang menghadap ke arah timur. Kalau malam hari dan melihat bintang paling terang, kemungkinan itu adalah arah menuju utara.</p>
                                    <p>Kalau kamu masih tersesat hingga hari gelap, carilah ruang terbuka untuk beristirahat. Tempat terbuka lebih aman untuk menginap di malam hari. Berikan juga tanda berupa kayu atau susunan batu yang membentuk nama supaya mudah ditemukan dari udara.</p>
                                    <p>Jangan lupa untuk menghemat perbekalan. Jangan sampai kamu kehabisan makanan saat tersesat. Kondisi perut yang lapar bisa membuatmu semakin panik dan sulit berpikir. Sebisa mungkin atur persediaan makanan agar cukup sampai kamu ditemukan. Namun, kalau memang benar-benar habis, manfaatkan bahan dari alam. Untuk cara yang satu ini kamu butuh kejelian karena tidak semua daun dan buah di hutan bisa kamu makan. Biasanya daun yang berwarna cerah lebih mudah dicerna. Hindari tumbuh-tumbuhan yang bergetah dan berbulu karena biasanya beracun. Untuk mengetes kelayakan tumbuhan yang ingin kamu makan, coba gesekan ke telapak tangan. Kalau gatal, jangan dimakan!</p>
                                    <p>Demikian, 17 tips mendaki gunung untuk pemula, semoga artikelnya bermanfaat bagi kita semua. Adakah informasi penting terkait “tips mendaki gunung untuk pemula” yang kami lewatkan? Jika ada, kami membuka diri terhadap kritik dan saran yang membangun dari pembaca. Silakan tuliskan kritik dan saran kamu melalui kolom komentar ya. Jika kamu suka artikel seperti ini, dukung kami dengan membagikan artikel ini ke teman-teman kamu ya, terima kasih.</p>
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