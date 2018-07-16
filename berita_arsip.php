<?php
include('session.php');
?>
<?php
include "koneksi.php";
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
    <link href="client/css/bootstrap.min.css" rel="stylesheet" type="text/css">

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


<section class="call-action section-padding color-white">
    <div class="container">



		<section id="content" class="two-column with-left-sidebar">

	    <article>

    <div class="button-2" >Arsip Berita</div><br><br>
<ol>
              <?php
              include "koneksi.php";
              $query = "select * from $tb_kberita,$tb_berita where $tb_berita.kategori=$tb_kberita.id_kategori_berita order by $tb_berita.id_berita desc";
              $sql = mysql_query($query);
              ?>
                          <table class="table table-hover table-bordered">
                            <tr >
                              <th><small>NO</small></th>
                              <th><small>Kategori</small></th>
                              <th><small>judul</small></th>
                              <th><small>Tgl input </small></th>
                              <th><small>Gambar</small></th>
                              <th><small>AKSI</small></th>
                            </tr>
                                  <?php
                                  $no=1;
                                  while ($data=mysql_fetch_array($sql))
                                  {
                                  ?>
                            <tr >
                              <td><small><?php echo $no?></small></td>
                              <td><small><?php echo $data['nama']; ?></small></td>
                              <td><small><?php echo $data['judul_berita']; ?></small></td>
                              <td><small><?php echo $data['tgl_input']; ?></small></td>
                              <td><small><img src="berita/foto/<?php echo $data['gambar']; ?>" height="30" width="30"></small></td>
                              <td><small><a href="berita/hapus_berita.php?filenya=<?php echo $data['gambar']; ?>&id=<?php echo $data['id_berita']; ?>" onClick = "return confirm('Apakah Anda ingin mengapus data <?php echo $data['id_berita']; ?>?')"> Hapus </a> | <a href="berita_edit.php?id=<?php echo $data['id_berita']; ?>" >Edit</a> </small></td>
                            </tr>
                                  <?php
                                  $no++;
                                  }
                                  ?>
                          </table>
<?

 //}
 ?>

</ol>
<br><br>
		</article>


		<ul>
			<li><div class="call-action-but" style="text-align:center;"><a href="berita.php">Tambah Berita</a></div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<div class="call-action-but" style="text-align:center;"><a href="adminpage.php">Back to Admin</a></div></li>
		</ul>
        </section>


    	<div class="clear"></div>
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
