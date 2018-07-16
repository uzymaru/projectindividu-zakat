<?
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Rumah Zakat | Arsip Berita</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0"/>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon" />
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
                        <div class="logo"><img src="image/2.png" /></div>
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
                        <div class="menu-item-box center "><a href="about.html" class="menu-link">About</a></div>
                        <div class="menu-item-box center "><a href="buku.php" class="menu-link">Buku</a></div>
                        <div class="menu-item-box center "><a href="donatur.php" class="menu-link">Donasi</a></div>
                        <div class="menu-item-box center "><a href="#contact" class="menu-link">Contact</a></div>
                        </nav>
                        <hr>
                </div>
            </div>
        </header>
    
    <!--about-->   
    <section class="choose-theme section-padding color-white"  id="about">
    <div class="container">
<?
					$query = "SELECT A.id_berita, B.nm_kategori, A.judul, A.isi, A.headline, A.tanggal FROM berita A, kategori_berita B WHERE A.id_kategori=B.id_kategori ORDER BY A.id_berita DESC";
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
                    <div class="col-6 copyright">© 2016 All Rights Reserved by Rumah Zakat Al - Ikhlas | Rumah Zakat </div>
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