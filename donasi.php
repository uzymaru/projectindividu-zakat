<?php
include('donasi_session.php');
?>
<?php
include('koneksi.php');
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
    <script src="client/js/jquery.min.js"></script>


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
                                                                  <li><a href="about.php"><h6>About</h6></a></li>
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
      <br><br><br>
    <section class="choose-theme section-padding color-white"  id="login">
    <div class="container">

              <fieldset>
        <legend>Konfirmasi Donasi</legend>
        Selamat Datang : <?php echo $login_session; ?> | <b><a href="donasilogout.php">Log Out</a></b>
        <br><br><br>


<?PHP if (isset($_POST['prosesdonasi'])) {//// UNTUK MENAMBAH
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
	$jumlah=strip_tags($_POST['jumlah']);
    $id_kategori=strip_tags($_POST['id_kategori']);
	$id_bank=strip_tags($_POST['id_bank']);
    $id_donatur=$_SESSION['id_donatur'];
	$tgl=date("Y-m-d h:i:s");
	$sql=mysql_query("insert into donasi (jumlah,id_kategori,id_donatur,tgl_proses,id_bank)
        values('$jumlah','$id_kategori','$id_donatur','$tgl','$id_bank') ");
		if(!$sql)
		  {
          echo '<script language="javascript" type="text/javascript">
            alert("Data gagal diproses, coba lagi !");</script>';
           echo "<meta http-equiv='refresh' content='0; url=donasi.php'>";

		  }else{
            echo '<script language="javascript" type="text/javascript">
            alert("Data anda berhasil!");</script>';
           echo "<meta http-equiv='refresh' content='0; url=donasi.php'>";
          }
	}
  if (isset($_POST['konfirmasi'])) {
    extract($_POST);
    $lokasi_file = $_FILES['fupload']['tmp_name'];
    $nama_file   = ($_FILES['fupload']['name'])?($_FILES['fupload']['name']):'';
    include 'berita/fungsi_gambar.php';
    if (!empty($lokasi_file)) {
      UploadFile2($nama_file,'bukti_konfirmasi/');
      $update_donasi = mysql_query("UPDATE donasi SET bukti_konfirmasi='$nama_file', an_rekening='$an_rekening', bank_asal='$bank_asal', jml_kirim=$jml_kirim, bukti_konfirmasi='$nama_file'");
      if ($update_donasi) {
        echo "<script>alert('Data berhasil disimpan'); </script>\n"; //exit ;
      }else{
        echo mysql_error();
        // echo "<script>alert('Data gagal disimpan coba lagi<br>'); </script>\n"; exit ;
      }
    }else{
      echo "<script>alert('Anda perlu melampirkan bukti pengiriman'); </script>\n"; //exit ;
    }
  }
?>

<?php
$query_kategori = mysql_query("SELECT * FROM kategori kategori");
$query_bank = mysql_query("SELECT * FROM bank");

 ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
          <form class="form" action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="jumlah" class="control-label">Jumlah</label>
              <input type="text" name="jumlah" value="" class="form-control">
            </div>
            <div class="form-group">
              <label for="jumlah" class="control-label">Pembayaran Untuk</label>
              <select name="id_kategori" id="id_kategori" class="form-control">
                  <?php while ($kategori = mysql_fetch_array($query_kategori)) {?>
                      <option value="<?= $kategori['id_kategori']; ?>"><?= $kategori['nama_kategori']; ?></option>
                  <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="jumlah" class="control-label">Metode pembayaran</label>
              <select name="id_bank" required class="form-control">
                  <?php while ($bank = mysql_fetch_array($query_bank)) {?>
                      <option value="<?= $bank['id_bank']; ?>"><?= $bank['nama_bank']; ?></option>
                  <?php } ?>
              </select>
            </div>
            <div class="from-group">
              <input name="prosesdonasi" class="button-2" type="submit" value="KIRIM">
            </div>
          </form>
        </div>
        <div class="col-md-6">
            Daftar donasi anda
            <?php
            $id_donatur = $_SESSION['id_donatur'];
            $query_donasi = mysql_query("SELECT * FROM donasi
                join kategori on kategori.id_kategori=donasi.id_kategori
                join bank on bank.id_bank=donasi.id_bank
                where id_donatur=$id_donatur  ")
             ?>
            <table class="table table-hover">
                <tr>
                    <td>Tanggal Donasi</td>
                    <td>Jumlah</td>
                    <td>Tujuan</td>
                    <td>Metode Pembayaran</td>
                    <td>Konfirmasi</td>
                </tr>
                <?php while ($datadonasi = mysql_fetch_array($query_donasi)) {
                    $date = date_create($datadonasi['tgl_proses']);
                    ?>
                    <tr>
                        <td><?= date_format($date,'d M Y h:i'); ?></td>
                        <td><?= $datadonasi['jumlah']; ?></td>
                        <td><?= $datadonasi['nama_kategori']; ?></td>
                        <td><?= $datadonasi['nama_bank']; ?></td>
                        <td>
                            <?php if ($datadonasi['bukti_konfirmasi']==''): ?>
                                <div class="btn-group" role="group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Belum
                                  <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a href="" type="button" data-toggle="modal" data-target="#myModal" data-iddonasi="<?= $datadonasi['id_donasi']; ?>">Konfirmasi</a></li>
                                </ul>
                                </div>
                            <?php else: ?>
                              <a target="_blank" href="bukti_konfirmasi/<?= $datadonasi['bukti_konfirmasi']; ?>">
                                <span class="label label-success">sudah</span>
                              </a>
                            <?php endif ?>

                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog modal-custom" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Konfirmasi pembayaran</h4>
                                  </div>
                                  <div class="modal-body">
                                    <form action="" class="form" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="File" class="control-label">Bukti konfirmasi </label>
                                            <input type="file" name="fupload" class="form-control">
                                            <input type="hidden" class="form-control" name="id_donasi" id="id_donasi">
                                        </div>
                                        <div class="form-group">
                                          <label for="anrekening" class="control-label">Nama Bank</label>
                                          <input type="text" class="form-control" name="an_rekening" value="" placeholder="Nama Pemilik Rekening">
                                        </div>
                                        <div class="form-group">
                                          <label for="anrekening" class="control-label">Bank Asal</label>
                                          <input type="text" class="form-control" name="bank_asal" value="" placeholder="Nama Bank">
                                        </div>
                                        <div class="form-group">
                                          <label for="jml_kirim" class="control-label">Jumlah Kirim</label>
                                          <input type="text" name="jml_kirim" value="" class="form-control">
                                        </div>
                                  </div>
                                  <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                                    <input name="konfirmasi" type="submit" class="btn btn-primary">Save changes</input>
                                  </div>
                                    </form>
                                </div>
                              </div>
                            </div>

                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <br>
</div>
</div>
</div>
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
    <script>
        $('#myModal').on('show.bs.modal', function (event) {
            console.log('cek');
          var button = $(event.relatedTarget) // Button that triggered the modal
          var id_donasi = button.data('iddonasi') // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use $ here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('#id_donasi').val(id_donasi)
        })
    </script>
</body>

</html>
