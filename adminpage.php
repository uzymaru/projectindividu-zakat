<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Rumah Zakat | Admin Page</title>
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
                        <div class="menu-item-box center ">---------------------------------------------</div>
                        <div class="menu-item-box center ">Selamat Datang : <?php echo $login_session; ?></div>
						<div class="menu-item-box center "><a href="adminlogout.php">Log Out</a></div>
                        </nav>
                        <hr>
                </div>
            </div>
        </header>

    <!--admin update-->
    <section class="call-action section-padding color-green">
        <div class="container">
          <div class="col-8">
              <div class="call-title">Admin<i class="quickweb-icon-smile"></i></div>
          </div>
          <div class="col-4 padding-tb">
              <div class="call-action-but" style="text-align:center;"><a href="adminedit.php">Admin Edit</a></div>
          </div>
        </div>
    </section>
    <section class="call-action section-padding color-blue">
      <div class="container">
        <div class="col-8">
          <div class="call-title">Donasi</div>
        </div>
        <div class="col-4 padding-tb">
          <div class="call-action-but" style="text-align:center;"><a href="donatur_lihat.php">Daftar Donatur</a></div>
          <div class="call-action-but" style="text-align:center;"><a href="donasi_lihat.php">Lihat Donasi</a></div>
        </div>
      </div>
    </section>
	<section class="call-action section-padding color-green">
        <div class="container">
          <div class="col-8">
              <div class="call-title">Berita</div>
          </div>
          <div class="col-4 padding-tb">
              <div class="call-action-but" style="text-align:center;"><a href="berita_arsip.php">Lihat Berita</a></div>
			  <div class="call-action-but" style="text-align:center;"><a href="berita.php">Tambah Berita</a></div>
          </div>
        </div>
    </section>
    <section class="call-action section-padding color-blue">
        <div class="container">
          <div class="col-8">
              <div class="call-title">Data Master</div>
          </div>
          <div class="col-4 padding-tb">
              <div class="call-action-but" style="text-align:center;"><a href="bank_input.php">Kelola Bank</a></div>
              <div class="call-action-but" style="text-align:center;"><a href="kategoridonasi_input.php">Kelola Kategori Donasi</a></div>
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
