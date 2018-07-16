<?php
include('session.php');
?>
<?php
include "koneksi.php";
//proses input berita
if(isset($_POST['input'])){
 
 $judul = addslashes(strip_tags($_POST['judul']));
 $kategori = $_POST['kategori'];
 $headline = addslashes(strip_tags($_POST['headline']));

 $isi_berita = addslashes(strip_tags($_POST['isi']));
 //insert ke tabel
 $query = "INSERT INTO berita VALUES('','$kategori','$judul','$headline','$isi_berita',now())";
 $sql = mysql_query($query);
 if($sql){
  echo "&nbsp;"; 
 }else{
  echo "<span style='color: red;'>Berita gagal ditambahkan</span>";
 }
}

$sql_kategori="select * from kategori order by id_kategori";
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
                <form enctype="multipart/form-data" method="post" action="berita/update_berita.php?&id=<?php echo $_GET['id'] ?>">
                  <table width="701" border="0">
                    <?php
                    include'koneksi.php';
                    $id = $_GET['id'];
                    $edit       = "select * from berita where id_berita=$id";
                    // echo $edit;
                      $hasil    = mysql_query($edit);
                      $c        = mysql_fetch_array($hasil);
                      // print_r($c['gambar']);
                    ?>
                    <?php
                    include'koneksi.php';
                    $sql_kategori="select * from kategori order by id_kategori";
                    $kueri_kategori=mysql_query($sql_kategori) or die(mysql_error());
                    ?>
                    <tr>
                      <td width="92"><small><strong>Kategori</strong></small></td>
                      <td width="10">:</td>
                      <td width="585">
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
                    <tr>
                      <td><small><strong>Judul</strong></small></td>
                      <td>:</td>
                      <td><input type="text" name="judul_berita" value="<?php echo $c['judul_berita']; ?>"></td>
                    </tr>
                    <tr>
                      <td><small><strong>isi artikel </strong></small></td>
                      <td>:</td>
                      <td><textarea name="isi_berita" cols="30" rows="10" id="isi_berita"><?php echo $c['isi_berita'] ?></textarea></td>
                    </tr>
                    <tr>
                      <td><small><strong>Gambar</strong></small></td>
                      <td>:</td>
                      <td><input type="file" name="fupload" id="nama_file" value="<?php echo $c['gambar']; ?>"></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>:</td>
                      <td>
                        <img width="100px" class="img-responsive img-thumbnail" src="berita/foto/<?php echo $c['gambar']; ?>">
                        <br>
                      <input type="submit" name="Submit" value="Submit"></td>
                    </tr>
                  </table>
                </form>
        <br><br>
        </article>
    
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