<?php
include('session.php');
?>
<?php
include "koneksi.php";
//proses input berita
if(isset($_POST['inputberita'])){

 $judul = addslashes(strip_tags($_POST['judul']));
 $kategori = $_POST['kategori'];
 $headline = addslashes(strip_tags($_POST['headline']));

 $isi_berita = addslashes(strip_tags($_POST['isi']));
 //insert ke tabel
 $query = "INSERT INTO $tb_berita VALUES('','$kategori','$judul','$headline','$isi_berita',now())";
 $sql = mysql_query($query);
 if($sql){
  echo "&nbsp;";
 }else{
  echo "<span style='color: red;'>Berita gagal ditambahkan</span>";
 }
}

$sql_kategori="select * from $tb_kberita order by id_kategori_berita";
                            $kueri_kategori=mysql_query($sql_kategori) or die(mysql_error());
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

<?php
if (isset($_POST['addkategori'])) {
  extract($_POST);
  $sql = mysql_query("INSERT INTO $tb_kberita (nama,deskripsi) values ('$nama','$deskripsi')");
  if ($sql) {
    echo '<script language="javascript" type="text/javascript">alert("Tambah Data berhasil !");</script>';
    echo "<meta http-equiv='refresh' content='0; url=berita.php'>";
  }else {
    // echo mysql_error();
    echo '<script language="javascript" type="text/javascript">alert("Tambah Data Gagal !");</script>';
    echo "<meta http-equiv='refresh' content='0; url=berita.php'>";
  }
}
 ?>
<section class="call-action section-padding color-white">
    <div class="container">
		<section id="content" class="two-column with-left-sidebar">
      <div class="row">
        <div class="col-md-6">
          <article>
            <div class="alert alert-warning">
              Input Berita
            </div>
            <form class="form" action="berita/proses_berita.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="judul_berita" class="control-label">Judul Berita</label>
                <input type="text" name="judul_berita" value="" class="form-control">
              </div>
              <div class="form-group">
                <label for="Kategori" class="control-label">Kategori</label>
                <select name="kategori" class="form-control">
                  <?php
                  while (list($kode,$nama_status)=mysql_fetch_array($kueri_kategori))
                  {
                    ?>
                    <option  value="<?php echo $kode ?>"><?php echo $nama_status ?></option>
                    <?php
                  }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label for="isi_berita" class="control-label">Isi berita</label>
                <textarea name="isi_berita" rows="8" cols="80" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <label for="Gambar" class="control-label">Gambar</label>
                <input type="file" name="fupload" id="nama_file" class="form-control"></td>
              </div>
              <div class="form-group">
                <input name="inputberita" class="btn btn-primary" type="submit" value="Input Berita" />
              </div>
            </form>
            <?php /* ?>
            <form action="berita/proses_berita.php" method="post" name="input" enctype="multipart/form-data">
              <table border="0" cellpadding="0" style="width: 700px;">
                <tr>
                  <td colspan="2"><div class="call-action-but" style="text-align:center;">Input Berita</div><br><br></td>
                </tr>
                <tr>
                  <td width="200">Judul Berita</td>
                  <td>: <input name="judul_berita" size="30" type="text" /></td>
                </tr>
                <tr>
                  <td>Kategori</td>
                  <td>:
                    <select name="kategori">
                      <?php
                      while (list($kode,$nama_status)=mysql_fetch_array($kueri_kategori))
                      {
                        ?>
                        <option  value="<?php echo $kode ?>"><?php echo $nama_status ?></option>
                        <?php
                      }
                      ?>
                    </select>

                  </td>
                </tr>
                  <!-- <tr>
                  <td>Headline Berita</td>
                  <td>: <textarea cols="50" name="headline" rows="4"></textarea></td>
                  </tr> -->
                <tr>
                  <td>Isi Berita</td>
                  <td>: <textarea cols="50" name="isi_berita" rows="10"></textarea></td>
                </tr>
                <tr>
                  <td><small><strong>Gambar</strong></small></td>
                  <td>:
                    <input type="file" name="fupload" id="nama_file"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;&nbsp;
                    <input name="inputberita" class="btn btn-primary" type="submit" value="Input Berita" />
                    &nbsp;&nbsp;
                    <input name="reset" class="btn btn-warning" type="reset" value="Cancel" /></td>
              </tr>
              </table>
            </form>
            <?php */ ?>
              <br><br>
            </article>
        </div>

        <div class="col-md-6">
          <form class="form" action="" method="post">
            <div class="form-group">
              <label for="" class="control-label">Nama Kategori</label>
              <input type="text" name="nama" value="" class="form-control">
            </div>
            <div class="form-group">
              <label for="" class="control-label">Deskripsi</label>
              <input type="text" name="deskripsi" value="" class="form-control">
            </div>
            <div class="form-group">
              <input type="submit" name="addkategori" value="Simpan" class="form-control btn btn-primary">
            </div>
          </form>

          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <td>Nama kategori</td>
                <td>Deskripsi</td>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = mysql_query("SELECT * FROM $tb_kberita order by id_kategori_berita");
               ?>
              <?php while ($data=mysql_fetch_array($sql)) { ?>
              <tr>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['deskripsi']; ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>

      </div>

		<ul>
			<li><div class="button-2" ><a href="adminpage.php">Back to Admin</a></div></li>
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
