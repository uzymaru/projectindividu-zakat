<?php
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
                                                                  <li><a href="about.php"><h6>About</h6></a></li>
                                                                  <li><a href="arsip.php"><h6>Berita</h6></a></li>
                                                                  <li><a href="#contact"><h6>Contact</h6></a></li>
                                                                  <li><a href="donatur.php" class="btn btn-skin"><h5>Donasi</h5></a></li>
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

    <!--buku-->
    <section class="service section-padding color-white" id="buku">
        <div class="container">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                    <div class="section-heading text-center">
                    <h2 class="h-bold">BUKU</h2>
                    <div class="divider-header"></div>
                    <p>Koleksi buku Rumah Zakat</p>
                    </div>
                    </div>
                </div>
            </div>

        </div>
            <div class="service-box">
            <div class="container">

<div class="row content-wrapper welcome-service-row plr0">
<div class="columns large-12 plr0">
<div class="row content-wrapper-inner">
<div class="columns content welcome-box large-12">
<?php
$sql=mysql_query("select * from buku order by id desc");
// $datapost=;
while($datapost=mysql_fetch_array($sql)){?>
<div class="images">
<h3><b><?PHP echo $datapost ['kode_buku'];?></b></h3>
<h3><?PHP echo $datapost ['judul_buku'];?></h3>
<h3><?PHP echo $datapost ['diskripsi_buku'];?></h3>
<img class="img-responsive img-thumbnail center-block" src="images/<?PHP echo $datapost['gambar_buku'];?>"/>
<h3><?PHP echo $datapost ['stok_buku'];?></h3>
<h3><?PHP echo $datapost ['kategori'];?></h3>
</div>
<?php }?>
<br><br><br><br>
</div>
</div>
</div>
</div>
</div>



            </div>

        </div>

    </section>
    <br><br><br><br>
    <section class="call-action section-padding color-green">
     <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                    <div class="section-heading text-center">
                    <h2 class="h-bold">Donasikan Sebagian dari Anda </h2>
                    <div align="center">
                                 <a class="btn" href="donatur.php"><img src="client/img/donate.png" alt="First slide"></a>
                            </div>
                    </div>
                    </div>
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
                                    (Umar) 081387074868
                                </p>
                                <div class="service-icon">
                                    <span class="fa fa-envelope-o fa-5x"></span>
                                </div>
                                <p>
                                    <b>E-mail.</b><br>
                                    tbnuhuevav@gmail.com
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
