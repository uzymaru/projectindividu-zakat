<?
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    .images-container h3 { text-align:center;font-family:Arial, Helvetica, sans-serif;font-size:20px;color:#999999}
    .images {float:left;width:190px; padding:5px; border: dotted 1px #eeeeee; margin:3;}
    .images h3 {text-align:center;font-family:Arial, Helvetica, sans-serif;font-size:14px;color:#333333; margin:0px; padding:4px;}
    .images img {height:170px;}

    .edit{float:left; text-align:center;font-size:14px; color:#fff; font-family:Arial, Helvetica, sans-serif; background:#0066FF; padding:4px; display:block}
    .hapus {float:right;text-align:center;font-size:14px; color:#ffffff; font-family:Arial, Helvetica, sans-serif; background:#FF0000; padding:4px; display:block; width:80px;}
    a{text-decoration:none;}
    </style>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rumah Zakat</title>

    <!-- css -->
    <link href="client/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="client/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="client/css/nivo-lightbox.css" rel="stylesheet" />
    <link href="client/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="client/css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="client/css/owl.theme.css" rel="stylesheet" media="screen" />
    <link href="client/css/flexslider.css" rel="stylesheet" />
    <link href="client/css/animate.css" rel="stylesheet" />
    <link href="client/css/style.css" rel="stylesheet">
    <link href="client/color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <section id="intro" class="home-slide text-light">

        <!-- Carousel -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->

<!-- Navigation -->
    <div id="navigation">
        <nav class="navbar navbar-custom" role="navigation">
                              <div class="container">
                                    <div class="row">
                                          <div class="col-md-2">
                                                   <div class="site-logo">
                                                            <a href="index.php" class="brand"><img src="client/images/2.png" /></a>
                                                    </div>
                                          </div>


                                          <div class="col-md-10">

                                                      <!-- Brand and toggle get grouped for better mobile display -->
                                          <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                                <i class="fa fa-bars"></i>
                                                </button>
                                          </div>
                                                      <!-- Collect the nav links, forms, and other content for toggling -->
                                                      <div class="collapse navbar-collapse" id="menu">
                                                            <ul class="nav navbar-nav navbar-right">
                                                                  <li><a href="index.php"><h6>Home</h6></a></li>
                                                                  <li><a href="#about"><h6>About</h6></a></li>
                                                                  <li><a href="arsip.php"><h6>Berita</h6></a></li>
                                                                  <li><a href="#contact"><h6>Contact</h6></a></li>
                                                                  <li><a href="donatur.php" class="btn btn-skin"><h7>Donasi</h7></a></li>
                                                                  <li><a href="admin.php" class="btn btn-skin"><h7>Admin</h7></a></li>
                                                            </ul>
                                                      </div>
                                                      <!-- /.Navbar-collapse -->

                                          </div>
                                    </div>
                              </div>
                              <!-- /.container -->
                        </nav>
    </div>
     <!-- /Navigation -->


            <div class="carousel-inner">
                <div class="item active">
                    <img src="client/img/1.jpg" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>Rumah Zakat</span>
                            </h2>
                            <br>
                            <h3>
                                <span>Donasikan Sebagian Dari Anda</span>
                            </h3>
                            <br>
                            <div class="">
                                 <a class="btn" href="donatur.php"><img src="client/img/donate.png" alt="First slide"></a></div>
                        </div>
                    </div><!-- /header-text -->
                </div>
                <div class="item">
                    <img src="client/img/2.jpg" alt="Second slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                                                <div class="col-md-12 text-center">
                            <h2>
                                <span>Rumah Zakat</span>
                            </h2>
                            <br>
                            <h3>
                                <span>Donasikan Sebagian Dari Anda</span>
                            </h3>
                            <br>
                            <div class="">
                                 <a class="btn" href="donatur.php"><img src="client/img/donate.png" alt="First slide"></a></div>
                        </div>
                    </div><!-- /header-text -->
                </div>
                <div class="item">
                    <img src="client/img/3.jpg" alt="Third slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>Rumah Zakat</span>
                            </h2>
                            <br>
                            <h3>
                                <span>Donasikan Sebagian Dari Anda</span>
                            </h3>
                            <br>
                            <div class="">
                                 <a class="btn" href="donatur.php"><img src="client/img/donate.png" alt="First slide"></a>
                            </div>
                        </div>
                    </div><!-- /header-text -->
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div><!-- /carousel -->

    </section>
    <!-- /Section: intro -->
    <br><br><br><br>
    <!--about-->
    <section class="choose-theme section-padding color-white"  id="about">
    <div class="container">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                    <div class="section-heading text-center">
                    <h2 class="h-bold">About</h2>
                    <div class="divider-header"></div>
                    <p>Sekilas tentang Rumah Zakat</p>
                    </div>
                    </div>
                </div>
            </div>

        </div>
            <p class="main-content">Zakat adalah harta yang wajib dikeluarkan apabila telah memenuhi syarat – syarat yang telah ditentukan oleh agama, dan disalurkan kepada orang–orang yang telah ditentukan pula, yaitu delapan golongan yang berhak menerima zakat sebagaimana yang tercantum dalam Al-Qur’an surat At-Taubah ayat 60 :<br><br>

“Sesungguhnya zakat-zakat itu, hanyalah untuk orang-orang fakir, orang-orang miskin, pengurus-pengurus zakat, para muallaf yang dibujuk hatinya, untuk budak, orang-orang yang berhutang, untuk jalan Allah dan untuk mereka yuang sedang dalam perjalanan, sebagai suatu ketetapan yang diwajibkan Allah, dan Allah Maha Mengetahui lagi Maha Bijaksana .”
<br><br>
Zakat dalam bahasa Arab mempunyai beberapa makna :
<br>
Pertama, zakat bermakna At-Thohuru, yang artinya membersihkan atau mensucikan. Makna ini menegaskan bahwa orang yang selalu menunaikan zakat karena Allah dan bukan karena ingin dipuji manusia, Allah akan membersihkan dan mensucikan baik hartanya maupun jiwanya. Allah SWT berfirman dalam surat At-Taubah ayat 103:
<br><br>
“Ambillah zakat dari sebagian harta mereka, dengan zakat itu kamu membersihkan dan mensucikan mereka dan mendoalah untuk mereka. Sesungguhnya doa kamu itu ketenteraman jiwa bagi mereka. Dan Allah Maha Mendengar lagi Maha Mengetahui.”
<br><br>
Kedua, zakat bermakna Al-Barakatu, yang artinya berkah. Makna ini menegaskan bahwa orang yang selalu membayar zakat, hartanya akan selalu dilimpahkan keberkahan oleh Allah SWT, kemudian keberkahan harta ini akan berdampak kepada keberkahan hidup. Keberkahan ini lahir karena harta yang kita gunakan adalah harta yang suci dan bersih, sebab harta kita telah dibersihkan dari kotoran dengan menunaikan zakat yang hakekatnya zakat itu sendiri berfungsi untuk membersihkan dan mensucikan harta.
<br><br>
Ketiga, zakat bermakna An-Numuw, yang artinya tumbuh dan berkembang. Makna ini menegaskan bahwa orang yang selalu menunaikan zakat, hartanya (dengan izin Allah) akan selalu terus tumbuh dan berkembang. Hal ini disebabkan oleh kesucian dan keberkahan harta yang telah ditunaikan kewajiban zakatnya. Tentu kita tidak pernah mendengar orang yang selalu menunaikan zakat dengan ikhlas karena Allah, kemudian banyak mengalami masalah dalam harta dan usahanya, baik itu kebangkrutan, kehancuran, kerugian usaha, dan lain sebagainya. Tentu kita tidak pernah mendengar hal seperti itu, yang ada bahkan sebaliknya.
<br><br>
Selama beraktivitas di Lembaga Amil Zakat, sampai saat ini penulis belum menemukan orang –orang yang rutin menunaikan zakat kemudian berhenti dari menunaikan zakat disebabkan usahanya bangkrut atau ekonominya bermasalah, bahkan yang ada adalah orang–orang yang selalu menunaikan zakat, jumlah nominal zakat yang dikeluarkannya dari waktu ke waktu semakin bertambah besar, itulah bukti bahwa zakat sebenarnya tidak mengurangi harta kita, bahkan sebaliknya. Memang secara logika manusia, dengan membayar zakat maka harta kita akan berkurang, misalnya jika kita mempunyai penghasilan Rp. 2.000.000,- maka zakat yang kita keluarkan adalah 2,5 % dari Rp. 2.000.000,- yaitu Rp 50.000,-. Jika kita melihat menurut logika manusia, harta yang pada mulanya berjumlah Rp.2.000.000,- kemudian dikeluarkan Rp. 50.000,- maka harta kita menjadi Rp. 1.950.000,- yang berarti jumlah harta kita berkurang. Tapi, menurut ilmu Allah yang Maha Pemberi rizki, zakat yang kita keluarkan tidak mengurangi harta kita, bahkan menambah harta kita dengan berlipat ganda. Allah SWT berfirman dalam surat Ar-Rum ayat 39 :
<br><br>
“Dan sesuatu riba yang kamu berikan agar dia bertambah pada harta manusia, maka riba itu tidak menambah pada sisi Allah. Dan apa yang kamu berikan berupa zakat yang kamu maksudkan untuk mencapai keridhaan Allah, maka itulah orang-orang yang melipat gandakan .”
<br><br>
Dalam ayat ini Allah berfirman tentang zakat yang sebelumnya didahului dengan firman tentang riba. Dengan ayat ini Allah Maha Pemberi Rizki menegaskan bahwa riba tidak akan pernah melipat gandakan harta manusia, yang sebenarnya dapat melipat gandakannya adalah dengan menunaikan zakat.
<br><br>
Keempat, zakat bermakna As-Sholahu, yang artinya beres atau keberesan, yaitu bahwa orang orang yang selalu menunaikan zakat, hartanya akan selalu beres dan jauh dari masalah. Orang yang dalam hartanya selalu ditimpa musibah atau masalah, misalnya kebangkrutan, kecurian, kerampokan, hilang, dan lain sebagainya boleh jadi karena mereka selalu melalaikan zakat yang merupakan kewajiban mereka dan hak fakir miskin beserta golongan lainnya yang telah Allah sebutkan dalam Al – Qur’an.
<br><br>
Zakat Emas dan Perak
Zakat Perdagangan
Zakat Pertanian
Zakat Profesi
Zakat Hadiah
Zakat Simpanan
Zakat Fitrah
Zakat Saham dan Investasi
 <br><br>

Zakat Emas dan Perak
Zakat Emas
Ketentuan :
– Mencapai haul
– Mencapai nishab, 85 gr emas murni
– Besar zakat 2,5 %
<br><br>
Cara Menghitung :
1. Jika seluruh emas/perak yang dimiliki, tidak dipakai atau dipakainya hanya setahun sekali
2. Zakat emas/perak = emas yang dimiliki x harga emas x 2,5 %
3. Jika emas yang dimiliki ada yang dipakaiZakat = (emas yang dimiliki – emas yang dipakai) x harga emas x 2,5 %
<br><br>
 Zakat Perak
Ketentuan :
– Mencapai haul
– Mencapai nishab 595 gr perak
– Besar zakat 2,5 %Cara Menghitung :
– Jika seluruh perak yang dimiliki, tidak dipakai atau dipakainya hanya setahun sekali
– Zakat = perak yang dimiliki x harga perak x 2,5 %
– Jika emas yang dimiliki ada yang dipakai
–  Zakat = (perak yang dimiliki – perak yang dipakai) x harga emas x 2,5 %
<br><br>
Zakat Perdagangan
Ketentuan :
<br><br>
– Telah mencapai haul
– Mencapai nishab 85 gr emas
– Besar zakat 2,5 %
– Dapat dibayar dengan barang atau uang
– Berlaku untuk perdagangan secara individu atau badan usaha (CV, PT, koperasi)
<br><br>
Cara Hitung :
<br>
Zakat Perdagangan = ( Modal yang diputar + keuntungan + piutang yang dapat dicairkan ) – (hutang + kerugian) x  2,5 %
<br><br>
Zakat Pertanian
Ketentuan :
– Mencapai nishab 653 kg gabah atau 520 kg jika yang dihasilkan adalah makanan pokok. Jika selain makanan pokok, maka nishabnya disamakan dengan makanan pokok paling umum di daerah
– Kadar zakat apabila diairi dengan air hujan, sungai, atau mata air, maka 10 %- Kadar zakat jika diairi dengan cara disiram (dengan menggunakan alat) atau irigasi maka zakatnya 5 %
<br><br>
Zakat Profesi
Zakat Profesi adalah zakat yang dikeluarkan dari penghasilan profesi bila telah mencapai nishab.Menurut Yusuf Qorodhowi, sangat dianjurkan untuk menghitung zakat dari pendapatan kasar (brutto), untuk lebih menjaga kehati-hatian.
<br><br>
Nisab sebesar 5 wasaq / 652,8 kg gabah setara 520 kg beras. Besar zakat profesi yaitu 2,5 %.
Terdapat 2 kaidah dalam menghitung zakat profesi
<br><br>
Menghitung dari pendapatan kasar (brutto)
Besar Zakat yang dikeluarkan = Pendapatan total (keseluruhan) x 2,5%
<br><br>
Menghitung dari pendapatan bersih (netto)
1. Pendapatan wajib zakat=Pendapatan total – Pengeluaran perbulan*
2. Besar zakat yang harus dibayarkan=Pendapatan wajib zakat x 2,5 %
<br><br>
Keterangan :
* Pengeluaran per bulan adalah pengeluaran kebutuhan primer (sandang, pangan, papan )
* Pengeluaran perbulan termasuk : Pengeluaran diri , istri, 3 anak, orang tua dan Cicilan Rumah. Bila dia seorang istri, maka kebutuhan diri, 3 anak dan cicilan Rumah tidak termasuk dalam pengeluaran perbulan.
<br><br>
 

Zakat Hadiah
Jika hadiah tersebut terkait dengan gaji maka ketentuannya sama dengan zakat profesi dan dikeluarkan pada saat menerima hadiah.
Besar Zakat yang dikeluarkan 2.5%.
<br><br>
Jika komisi, terdiri dari 2 bentuk :
Pertama, jika komisi dari hasil prosentasi keuntungan perusahaan kepada pegawai, maka zakat yang dikeluarkan sebesar 10%.
Kedua, jika komisi dari hasil profesi misalnya makelar, maka zakatnya seperti zakat profesi.
Jika hibah :
Pertama, jika sumber hibah tidak diduga – duga maka zakat yang dikeluarkan sebesar 20%.
Kedua, jika sumber hibah sudah diduga dan diharapkan, maka hibah tersebut digabungkan dengan kekayaan yang ada, zakat yang dikeluarkan sebesar 2.5%.
<br><br>
Zakat simpanan
Uang simpanan dikenakan zakat dari jumlah saldo akhir bila telah mencapai haul. Besarnya nisab senilai 85 gr emas.
Besar zakat yang harus dikeluarkan 2,5 %
 <br><br>

Tabungan
Saldo akhir : saldo akhir – Bagi hasil/bunga
Besarnya zakat : 2,5 % x saldo akhir
 <br><br>

Zakat Simpanan Deposito
Penghitungan sama dengan zakat simpanan tabungan.
 <br><br>
Zakat Fitrah
Ketentuan :
Besarnya zakat fitrah adalah 2.5 kg
<br><br>
Atau menurut Abu Hanifah, boleh membayarkan sesuai dengan harga makanan pokok
<br><br>
Orang yang wajib membayar zakat fitrah
Semua muslim tanpa membedakan laki-laki dan perempuan, bayi, anak-anak dan dewasa, kaya atau miskin (yang mempunyai makanan pokok lebih dari sehari)
<br><br>
Waktu mengeluarkan zakat fitrah :
Boleh diberikan awal bulan Ramadhan, tetapi wajibnya zakat fitrah diberikan menjelang Sholat Idul Fitri atau tenggelamnya matahari di akhir bulan Ramadhan
<br><br>
Zakat Saham dan Investasi
<br><br>
Hasil dari keuntungan investasi saham, wajib dikeluarkan zakatnya sesuai dengan kesepakatan para ulama pada Muktamar Internasional Pertama tentang zakat di Kuwait (29 Rajab 1404.) Namun para ulama berbeda tentang kewajiban pengeluaran zakatnya.Pendapat pertama yang dikemukakan oleh Syeikh Abdurrahman Isa dalam kitabnya “al-Muamalah al-Haditsah wa Ahkmuha” mengatakan bahwa yang harus diperhatikan sebelum pengeluaran zakat adalah status perusahaannya, di mana:
<br><br>
Jika perusahaan tersebut hanya bergerak di bidang layanan jasa, misalnya biro perjalanan, biro iklan, perusahaan jasa angkutan (darat, laut, udara), perusahaan hotel, maka sahamnya tidak wajib dizakati. Hal ini dikarenakan saham-saham itu terletak pada alat-alat, perlengkapan, gedung-gedung, sarana dan prasarana lainnya. Namun keuntungan yang diperoleh dimasukkan ke dalam harta para pemilik saham tersebut, lalu zakatnya dikeluarkan bersama harta lainnya jika telah mencapai haul dan nishab (jangka waktu dan jumlah tertentu).
<br><br>
Jika perusahaan tersebut adalah perusahaan dagang murni yang melakukan transaksi jual beli komoditi tanpa melakukan proses pengolahan, seperti perusahaan yang menjual hasil-hasil industri, perusahaan dagang dalam negeri, perusahaan ekspor-impor, dan lain lain, maka saham-saham perusahaan tersebut wajib dikeluarkan zakatnya di samping zakat atas keuntungan yang diperoleh. Caranya adalah dengan menghitung kembali jumlah keseluruhan saham kemudian dikurangi harga alat-alat, barang-barang ataupun inventaris lainnya. Besarnya kadar zakat adalah 2,5 persen dan bisa dikeluarkan setiap akhir tahun.
<br><br>
Jika perusahaan tersebut bergerak di bidang industri dan perdagangan sekaligus, artinya melakukan pengolahan suatu komoditi dan kemudian menjual kembali hasil produksinya, seperti perusahaan Minyak dan Gas (MIGAS), perusahaan pengolahan mebel, marmer dan sebagainya, maka sahamnya wajib dizakatkan dengan mekanisme yang sama dengan perusahaan kategori kedua
<br><br>
Pendapat kedua adalah pendapat Abu Zahrah. Menurutnya, saham wajib dizakatkan tanpa melihat status perusahaannya karena saham adalah harta yang beredar dan dapat diperjual-belikan, dan pemiliknya mendapatkan keuntungan dari hasil penjualan tersebut. Ini termasuk kategori komoditi perdagangan dengan besaran zakat 2,5 persen dari harga pasarnya. Caranya adalah setiap akhir tahun, yang bersangkutan melakukan penghitungan harga saham pada harga pasar, lalu menggabungkannya dengan dividen (keuntungan) yang diperoleh. Jika besarnya harga saham dan keuntungannya tersebut mencapai nishab maka saham tersebut wajib dizakatkan.
<br><br>
Yusuf Qaradawi sendiri mempunyai pendapat yang agak berbeda dengan kedua pendapat di atas. Beliau mengatakan jika saham perusahaan berupa barang atau alat seperti mesin produksi, gedung, alat transportasi dan lain-lain, maka saham perusahaan tersebut tidak dikenai zakat. Zakat hanya dikenakan pada hasil bersih atau keuntungan yang diperoleh perusahaan, dengan kadar zakat 10 persen. Hukum ini juga berlaku untuk aset perusahaan yang dimiliki oleh individu/perorangan. Lain halnya kalau saham perusahaan berupa komoditi yang diperdagangkan (tercatat di bursa saham), zakat dapat dikenakan pada saham dan keuntungannya sekaligus karena dianalogikan dengan urudh tijarah (komoditi perdagangan). Besarnya kadar zakat adalah 2,5 persen.
<br><br>
Hal ini juga berlaku untuk aset serupa (surat-surat berharga lainnya) yang dimiliki oleh perorangan. Pendapat yang terakhir ini, sebagaimana disampaikan Yusuf Qaradawi nampaknya lebih mudah dalam aplikasinya. Zakat saham hanya diwajibkan pada saham yang berupa komoditi perdagangan dengan kadar zakat 2,5 persen. Untuk saham yang berupa alat-alat atau barang, zakatnya adalah pada keuntungan yang diperoleh dan bukan pada nilai saham itu sendiri. Kadar zakatnya 10 persen, dianalogikan dengan zakat hasil pertanian dan perkebunan.
Hal ini juga berlaku untuk aset serupa (surat-surat berharga lainnya) yang dimiliki oleh perorangan. Pendapat yang terakhir ini, sebagaimana disampaikan Yusuf Qaradawi nampaknya lebih mudah dalam aplikasinya. Zakat saham hanya diwajibkan pada saham yang berupa komoditi perdagangan dengan kadar zakat 2,5 persen. Untuk saham yang berupa alat-alat atau barang, zakatnya adalah pada keuntungan yang diperoleh dan bukan pada nilai saham itu sendiri. Kadar zakatnya 10 persen, dianalogikan dengan zakat hasil pertanian dan perkebunan.
<br><br>
Zakat THR
Zakat sebagaimana yang sudah difahami bersama adalah sebuah kewajiban bagi setiap muslim yang memiliki kekayaan yang sudah mencapai nishab.
<br><br>
Berkaitan dengan zakat profesi/penghasilan pun sudah cukup jelas dalil-dalil yang menyatakan hal tersebut, didalam kitab Fiqh Zakat, DR. Yusuf Qaradhawi, beliau menjelaskan bahwa zakat profesi terkait dengan al-maal al mustafad (harta yang diperoleh atas suatu proses kepemilikan yang halal) berupa al-amalal (gaji/upah/fee), al-‘atiyyah (bonus). Zakat ini sudah dikenal sejak zaman Khalifah Umar bin Abdul Aziz.
<br><br>
Ada baiknya saya sebutkan beberapa dalil yang menjadi dasar Zakat Profesi/Penghasilan selain dalil umum tentang kewajiban zakat pada seluruh harta yang dimiliki, berikut dalil-dalil yang menguatkan tentang Zakat Profesi/Penghasilan:
<br><br>
1. Surat Al Baqarah ayat 267, ”Hai orang-orang yang beriman, nafkahkanlah (di jalan allah) sebagian dari hasil usahamu yang baik-baik dan sebagian dari apa yang Kami keluarkan dari bumi untuk kamu…”
<br><br>
2. Surat Adz Dzariyat ayat 19, “Dan pada harta benda mereka ada hak untuk orang miskin yang meminta, dan orang miskin yang tidak meminta.”
<br><br>
3. Riwayat Abu Ubaid: “Adalah Umar bin Abdul Aziz, memberi upah kepada pekerjanya dan mengambil zakatnya, dan apabila mengembalikan Al-Madholim diambil zakatnya, dan beliau juga mengambil zakat dari athoyat (gaji rutin) yang diberikan kepada yang menerimanya”.
<br><br>
Dalil-dalil diatas sudah cukup jelas menerangkan tentang kewajiban Zakat Profesi/Penghasilan dari setiap aktifitas pekerjaan/profesi kita baik sebagai Guru, PNS, Dokter, maupun Profesi lainnya.
<br><br>
Selain Penghasilan yang rutin diterima oleh seorang karyawan, biasanya karyawan juga mendapatkan THR sesuai dengan ketentuan yang berlaku di Indonesia, bahwa setiap pegawai ketika masuk hari Raya Idul Fitri akan mendapatkan THR (Tunjangan Hari Raya) dan THR ini hanya diberikan kepada orang yang bekerja, ini artinya THR diberikan sebagai bagian dari pekerjaan. Sehingga ada kewajiban Zakat pada THR karena masih berkaitan dengan pekerjaan (bisa kita lihat dari buku Fiqh Zakat Dr. Yusuf Qardhawi bahwa zakat profesi terkait dengan al-maal al mustafad (harta yang diperoleh atas suatu proses kepemilikan yang halal) berupa al-amalal (gaji/upah/fee), al-‘atiyyah (bonus)). Bagaimana perhitungannya? Berapa besaran nishabnya? Dan hal-hal lain yang berkaitan dengan penunaian Zakat untuk THR.
<br><br>
Ketentuan untuk Zakat THR sama dengan Zakat Profesi/Penghasilan, nishabnya sebesar 520 kg beras (asumsi harga beras Rp. 10.000,- ) maka nishabnya sebesar Rp. 5.200.000,-, ketika kita mendapatkan THR sebesar Rp. 5.200.000,- atau lebih maka kita wajib bayar zakat sebesar 2,5% atau sebesar Rp. 130.000,- (angka yang sangat kecil).
<br><br>
Apakah THR ini bisa digabungkan dengan pendapatan bulanan? Sebagaimana disebutkan diatas bahwa THR berkaitan dengan pekerjaan maka untuk perhitungannya bisa digabungkan, sebagai contoh ada karyawan yang memiliki penghasilan 6 jt karena pada bulan yang sama karyawan tersebut mendapatkan THR sebesar gaji yang diterima yaitu 6 jt maka penghasilan karyawan tersebut pada bulan itu sebesar 12 jt maka untuk perhitungannya:
<br><br>
Rp. 12.000.000,- X 2,5% = Rp. 300.000,-
<br><br>
Bagi karyawan yang penghasilan bulanannya tidak mencapai nishab tetapi setelah digabungkan dengan THR mencapai nishab maka karyawan tersebut wajib membayar zakat, seperti contoh Anton memiliki penghasilan bulanan sebesar 3 jt (belum mencapai nishab, tidak wajib zakat) tetapi pada bulan yang sama Anton menerima THR sebesar gaji bulanan yaitu 3 jt maka penghasilan Anton pada bulan tersebut sebesar 6 jt, maka Anton wajib bayar zakat dengan perhitungan sebagai berikut:
<br><br>
Rp. 6.000.000,- X 2,5% = Rp. 150.000,-
<br><br>
Kesimpulan untuk perhitungan Zakat THR adalah sebagi berikut:
1. Ketika jumlah THR ketika dipisahkan dengan penghasilan bulanan mencapai nishab maka bisa langsung dikeluarkan zakatnya dengan perhitungan terpisah dari pendapatan bulanan
<br><br>
2. Perhitungan THR yang mencapai nishab zakat bisa juga digabungkan dengan penghasilan bulanan kemudian dikeluarkan zakatnya dari total penghasilan dan THR.
<br><br>
3. Bagi yang nominal THRnya tidak mencapai nishab harus digabungkan dengan penghasilanan bulanannya, ketika digabungkan ternyata jumlahnya mencapai nishab maka wajib bayar Zakat, tetapi ketika sudah digabungkan pun tidak mencapai nishab maka tidak wajib Zakat.
<br><br>
Sekian sekilas pembahasan tentang Zakat THR semoga bisa bermanfaat dan bisa menjadi kebaikan buat kita semua serta mendapatkan keridhoan Allah swt sehingga dengan kesungguhan kita mengamalkan segala perintah-Nya menjadikan hidup kita lebih bahagia baik di dunia maupun di akhirat. Wallahu a’alam bish-shawab.
<br><br>


Sumber : https://www.rumahzakat.org/zakat/</p><br><br>
    </div>
    </section>

    <!--donasi-->
    <section class="call-action section-padding color-green">
        <div class="container">
          <div class="col-8">
              <div class="call-title">Donasikan Sebagian dari Anda <i class="quickweb-icon-smile"></i></div>
          </div>
          <div align="center">
                                 <a class="btn" href="donatur.php"><img src="client/img/donate.png" alt="First slide"></a>
                            </div>
        </div>
    </section>

    <!--buku-->
    <section class="service section-padding color-white">
        <div class="container">
            <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                    <div class="section-heading text-center">
                    <h2 class="h-bold">VISI & MISI</h2>
                    <div class="divider-header"></div>
                    <p>Visi dan Misi Rumah Zakat meliputi :</p>
                    </div>
                    </div>
                </div>
            </div>

        </div>
            <div class="service-box">
                <div class="col-10">
                    <div class="feature-name">VISI</div>
                    <div class="feature-content">A. Menjadikan Rumah Zakat sebagai kepustakaan, pusat literatur rakyat Kepulauan Kei.<br>
                                                    B.  Menjadikan Rumah Zakat sebagai wadah belajar yang transformatif.<br>
                                                    C.  Menciptakan generasi yang cerdas, mengetahui dan memahami sejarahnya, kehidupan sosialnya, dan berbakti kepada Nusa dan Bangsa.</div><br><br>
                </div>

                <div class="col-10">
                    <div class="feature-name">MISI</div>
                    <div class="feature-content">A. Memperkenalkan Rumah Zakat kepada masyarakat Kepulauan Kei.<br>
                                                    B.  Menyelenggarakan kegiatan-kegiatan literasi kepada masyarakat untuk menumbuh kembangkan budaya membaca dan menulis dalam masyarakat Kepulauan Kei.<br>
                                                    C.  Mengadakan forum-forum kajian strategis dalam berbagai bidang disiplin keilmuan untuk membiasakan masyarakat mengenal persoalannya.<br>
                                                    D.  Membangun kerjasama dengan pemerintah setempat dan masyarakat guna pencapaian kegiatan-kegiatan yang diselenggarakan.</div>
                </div>

            </div>
        </div>
        <br><br>
        <hr>
    </section>

    <!-- contact -->
    <section id="contact" class="home-section color-dark text-center bg-white">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                    <div class="section-heading text-center">
                    <h2 class="h-bold">Contact us</h2>
                    <div class="divider-header"></div>
                    <p>Jalan Christina Martatiahahu, UN, Kecamatan Pulau Dullah Selatan, Kota Tual, Provinsi Maluku.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row marginbot-80">
                <div class="col-md-8 col-md-offset-2">
                        <form id="contact-form" class="wow bounceInUp" data-wow-offset="10" data-wow-delay="0.2s">
                        <div class="row marginbot-20">
                            <div class="col-md-6 xs-marginbot-20">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3244.1689350927936!2d127.38652623028807!3d0.8004378352953603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sjl.+pemuda%2C+maluku!5e0!3m2!1sid!2sid!4v1469809539809" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <div class="col-md-6">
                            <div class="service-icon">
                                <span class="fa fa-mobile-phone fa-5x"></span>
                            </div>
                                <p>
                                    <b>Telp.</b><br>
                                    (Hasan) 081342031574<br>
                                    (Umar) 081387074868<br>
                                    (Fauzy) 089652046588
                                </p>
                                <div class="service-icon">
                                    <span class="fa fa-envelope-o fa-5x"></span>
                                </div>
                                <p>
                                    <b>E-mail.</b><br>
                                    tbnuhuevav@gmail.com<br>
                                    fauzy.mustafa12@gmail.com
                                </p>
                            </div>
                        </div>
                        </form>
                </div>
            </div>
        </div>

    </section>
    <!-- /contact -->




    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">

                    <div class="text-center">
                        <a href="#intro" class="totop"><i class="fa fa-angle-up fa-3x"></i></a>

                        <p>© 2016 All Rights Reserved by Rumah Zakat Al - Ikhlas | Rumah Zakat </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Core JavaScript Files -->
    <script src="client/js/jquery.min.js"></script>
    <script src="client/js/bootstrap.min.js"></script>
    <script src="client/js/jquery.sticky.js"></script>
    <script src="client/js/jquery.flexslider-min.js"></script>
    <script src="client/js/jquery.easing.min.js"></script>
    <script src="client/js/jquery.scrollTo.js"></script>
    <script src="client/js/jquery.appear.js"></script>
    <script src="client/js/stellar.js"></script>
    <script src="client/js/wow.min.js"></script>
    <script src="client/js/owl.carousel.min.js"></script>
    <script src="client/js/nivo-lightbox.min.js"></script>

    <script src="client/js/custom.js"></script>

</body>

</html>
