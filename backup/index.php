<?
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
<style>
.images-container h3 { text-align:center;font-family:Arial, Helvetica, sans-serif;font-size:20px;color:#999999}
.images {float:left;width:190px; padding:5px; border: dotted 1px #eeeeee; margin:0;}
.images h3 {text-align:center;font-family:Arial, Helvetica, sans-serif;font-size:14px;color:#333333; margin:0px; padding:4px;}
.images img { width:100%;height:170px;}

.edit{float:left; text-align:center;font-size:14px; color:#fff; font-family:Arial, Helvetica, sans-serif; background:#0066FF; padding:4px; display:block}
.hapus {float:right;text-align:center;font-size:14px; color:#ffffff; font-family:Arial, Helvetica, sans-serif; background:#FF0000; padding:4px; display:block; width:80px;}
a{text-decoration:none;}
</style>
    <title>Rumah Zakat Al-Ikhlas</title>
	<link rel="icon" href="image/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0"/>
    <meta charset="utf-8" />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="en" />
    <meta name="keywords" content="mz,mzcreatives,creatives,template,website,onepage,webdesign,portfolio,build website,themeforest" />
    <meta name="description" content="Now you can buy or use template from themeforest design by mzcreatives" />
    <meta property="og:title" content="One page website template for multipurpose website" />

    <!--css-->
    <link href="css/common.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    <link href="css/theme1024.css" rel="stylesheet" type="text/css" />
    <link href="css/theme990.css" rel="stylesheet" type="text/css" />
    <link href="css/theme768.css" rel="stylesheet" type="text/css" />
    <link href="css/theme480.css" rel="stylesheet" type="text/css" />
    <link href="css/theme320.css" rel="stylesheet" type="text/css" />
    <link href="css/theme319.css" rel="stylesheet" type="text/css" />
    <link href="css/quickweb.css" rel="stylesheet" type="text/css" />
    <link href="fonts/style.css" rel="stylesheet" type="text/css" />
    <link href="css/slider_css.css" type="text/css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,700,900' rel='stylesheet' type='text/css'/>

    <!--js-->
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/plugin.js"></script>
</head>
<body>
    <div class="main">
        <header class="header">
            <div class="container">
                <div class="col-12">
                    <div class="col-4 mb-11 logo-set">
                        <div class="logo"><img src="image/blacklogo.png" /></div>
                    </div>
                        <nav class="mob-menu-icon mb-1">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </nav>

                        <nav class="col-8 menu mob-menu pull-right">
                            <nav class="mob-menu-icon" style="padding: 26px 26px;width: 100%;box-sizing: border-box;border-bottom:2px solid #1565C0; ">
                                <span class="icon-bar slide-icon-menu-color"></span>
                                <span class="icon-bar slide-icon-menu-color"></span>
                                <span class="icon-bar slide-icon-menu-color"></span>
                            </nav>
                        <div class="menu-item-box center "><a href="index.php" class="menu-link">Home</a></div>
                        <div class="menu-item-box center "><a href="#about" class="menu-link">About</a></div>
                        <div class="menu-item-box center "><a href="#buku" class="menu-link">Buku</a></div>
                        <div class="menu-item-box center "><a href="donatur.php" class="menu-link">Donasi</a></div>
                        <div class="menu-item-box center "><a href="#contact" class="menu-link">Contact</a></div>
                        </nav>
                </div>
            </div>
        </header>

    <!--home-->
    <section class="banner top" id="home" style="background-image:url(image/banner1.jpg);">
    <div class="texture">
        <div class="container">
            <div class="col-5 mb-12 mb-center banner-box">
                <div class="banner_line1">Rumah Zakat Al-Ikhlas</div>
                <div class="banner_brief_text">Donasikan sebagian dari anda</div>
                    <div    class="mb-center mb-12">
                        <div class="button-1"><a href="donatur.php">Donasi</a></div>
                    </div>
            </div>
        <div class="col-7 mb-12 banner-image"  style="position:relative;"></div>
        </div>
    </div>
    </section>

    <!--about-->
    <section class="choose-theme section-padding color-white"  id="about">
    <div class="container">
        <div class="main-title font-color-m-light">Sekilas tentang Rumah Zakat Al-Ikhlas</div>
            <p class="main-content">Rumah Zakat Al-Ikhlas adalah sebuah cita-cita besar dari penggagasnya dalam usaha untuk merubah sebuah kebiasaan umum yang sudah berlaku sejak dahulu; malas membaca pada masyarakat Kepulauan Kei.

            Berangkat dari semangat yang diamanatkan dalam UUD 1945 "tugas negara adalah mencerdaskan kehidupan bangsa." Disini para inisiator menempatkan diri sebagai bagian dari negara oleh karena itu amanat tersebut sudah semestinya menjadi tanggungjawabnya juga, disinilah letak alasan yang sangat mendasar atas terbentuknya Rumah Zakat Al-Ikhlas yang akrab di sapa TBNE itu...<br><br><a href="about.html">Selengkapnya...</a></p>
        <div class="col-8 about-image"><img src="image/22.png" style="" /></div>
            <div class="col-4 padding-lr" style="box-sizing:border-box;" >
                <div class="sub-title font-color-s-light">
                    Berita Terbaru
                </div>
                <?
					$query = "SELECT A.id_berita, B.nm_kategori, A.judul, A.isi, A.headline, A.tanggal FROM berita A, kategori_berita B WHERE A.id_kategori=B.id_kategori ORDER BY A.id_berita DESC LIMIT 0,5";
				 $sql = mysql_query($query);

				 while ($hasil=mysql_fetch_array($sql)){
				 $id_berita = $hasil['id_berita'];
				 $kategori = stripslashes($hasil['nm_kategori']);
				 $judul = stripslashes($hasil['judul']);
				 $isi = nl2br(stripslashes($hasil['isi']));
				 $headline = stripslashes($hasil['headline']);
				 $tanggal = stripslashes($hasil['tanggal']);
					//tampilkan berita
				 echo "<a href='berita_lengkap.php?id=$id_berita'><h4>
						- $judul</h4></a>";
				echo "<small><b>$headline</b></small><br>";
				 echo "<hr>";
				 }
					?>
                <a href="berita_lihat.php"><div class="button-2" >Arsip</div></a>
            </div>
    </div>
    </section>

    <!--donasi-->
    <section class="call-action section-padding color-green">
        <div class="container">
          <div class="col-8">
              <div class="call-title">Donasikan Sebagian dari Anda <i class="quickweb-icon-smile"></i></div>
          </div>
          <div class="col-4 padding-tb">
              <div class="call-action-but" style="text-align:center;"><a href="donatur.php">Donasi</a></div>
          </div>
        </div>
    </section>

    <!--buku-->
    <section class="service section-padding color-white" id="buku">
        <div class="container">
            <div class="main-title font-color-m-light">Koleksi buku Rumah Zakat Al-Ikhlas</div>
            <br><br><br>
            <div class="service-box">
            <div class="container">

<div class="row content-wrapper welcome-service-row plr0">
<div class="columns large-12 plr0">
<div class="row content-wrapper-inner">
<div class="columns content welcome-box large-12">
<?php $sql=mysql_query("select * from buku order by id desc LIMIT 5");$no=0;
while($datapost=mysql_fetch_array($sql)){$no++?>
<div class="images">
<h3><b><?PHP echo $datapost ['kode_buku'];?></b></h3>
<h3><?PHP echo $datapost ['judul_buku'];?></h3>
<h3><?PHP echo $datapost ['diskripsi_buku'];?></h3>
<img src="images/<?PHP echo $datapost['gambar_buku'];?>"/>
<h3><?PHP echo $datapost ['stok_buku'];?></h3>
<h3><?PHP echo $datapost ['kategori'];?></h3>
</div>
<?php }?>
</div>
</div>
</div>
</div>
</div>



            </div>
            <div class="col-4 padding-tb">
              <div class="call-action-but" style="text-align:center;"><a href="buku.php">Lainnya</a></div>
            </div>
        </div>
        <hr>
    </section>

    <!--contact-->
    <section class="happy-client section-padding color-white" id="contact">
        <div class="container">
              <div class="main-title font-color-m-light">Contact US</div>
        </div>
    </section>
    <section class="map color-light-white" id="contact">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1177.3873351142645!2d128.96208171266875!3d-3.3044777055426016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6b983c7e838e1b%3A0xdcd77380b1c57b5c!2sGereja+Bethel+Indonesia+Sungai+Yordan!5e0!3m2!1sid!2sid!4v1466529686406" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    <section class="contact-address section-padding color-light-white">
        <div class="container">
        <div class="col-12">
            <div class="contact-box col-4">
                <div class="col-12 contact-icon"><i class="quickweb-icon-direction"></i></div>
                    <div class="col-12 contact-title">Jalan Christina Martatiahahu, UN, Kecamatan Pulau Dullah Selatan, Kota Tual, Provinsi Maluku.<br /> California</div>
            </div>
                <div class="contact-box col-4">
                    <div class="col-12 contact-icon"><i class="quickweb-icon-phone"></i></div>
                    <div class="col-12 contact-title">(Hasan) 081342031574<br>(Umar) 081387074868</div>
                </div>
                <div class="contact-box col-4">
                    <div class="col-12 contact-icon"><i class="quickweb-icon-mail-alt"></i></div>
                    <div class="col-12 contact-title">tbnuhuevav@gmail.com</div>
                </div>
        </div>
        </div>
    </section>

    <!--footer-->
    <section class="footer">
        <div class="bottom-footer">
            <div class="container">
                <div class="col-12">
                    <div class="col-6 mb-6 social"><div class="col-3"><i class="quickweb-icon-facebook"></i></div><div class="col-3"><i class="quickweb-icon-twitter"></i></div><div class="col-3"><i class="quickweb-icon-youtube"></i></div><div class="col-3"><i class="quickweb-icon-gplus-1"></i></div></div>
                </div>
                <div class="col-12 creator" style="padding-top:25px;">
                    <div class="col-6 copyright">© 2016 All Rights Reserved by Rumah Zakat Al-Ikhlas </div>
                </div>
            </div>
        </div>
    </section>

    </div>

    <script type="text/javascript">
        thumb_slider({

            thumbs_to_show: 1,
            thumbs_to_move: 1,
            thumbs_width: 0,
            thumbs_count: 0,
            timeout: 10000,
            parent_id: "main_slider",
            container_class: "thumb_slider",
            thumb_class: "thumbs",
            spacing: 0,
            processing: false,
            hover: false,
            next_class: "next",
            prev_class: "prev",
            timer: setTimeout(function () { })
        });
    </script>

</body>
</html>
