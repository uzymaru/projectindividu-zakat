<?php
include('session.php');
?>
<?php
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

<?PHP if (isset($_POST['uploadimages'])) {//// UNTUK MENAMBAH
	$kode_buku=strip_tags($_POST['kode_buku']);
	$judul_buku=strip_tags($_POST['judul_buku']);
	$diskripsi_buku=strip_tags($_POST['diskripsi_buku']);
	$gambar_buku=$_FILES['gambar_buku']['name'];
	$stok_buku=strip_tags($_POST['stok_buku']);
	$kategori=strip_tags($_POST['kategori']);
	$tgl=date("h:i:s-j-m-Y");
	$fileError = $_FILES['gambar_buku']['error'];
	$typeimages = array('image/bmp', 'image/gif', 'image/jpg', 'image/jpeg', 'image/png');
if(!in_array($_FILES['gambar_buku']['type'],$typeimages)){
echo' <ecnter>FORMAT images SALAH</center>';//images sallah
}elseif($fileSize=$_FILES['gambar_buku']['size']< 20000 || $fileError < 20000){
$sql=mysql_query("insert into buku values('','$kode_buku','$judul_buku','$diskripsi_buku','$gambar_buku','$stok_buku','$kategori')");
			$move = move_uploaded_file($_FILES['gambar_buku']['tmp_name'],'images/'.$gambar_buku);
			if(!$sql)
			  { echo '<script language="javascript" type="text/javascript">
alert("upload images gagal !");</script>';
	echo "<meta http-equiv='refresh' content='0; url=buku_input.php'>";

			  } else
			  {

echo '<script language="javascript" type="text/javascript">
alert("upload images berhasil !");</script>';
	echo "<meta http-equiv='refresh' content='0; url=buku_input.php'>";
			   }
	}
	}
?>



<?PHP if (isset($_POST['edituploadimages'])) {// UNTUK MENGEDIT
	$id=$_GET['id'];
	$kode_buku=strip_tags($_POST['kode_buku']);
	$judul_buku=strip_tags($_POST['judul_buku']);
	$diskripsi_buku=strip_tags($_POST['diskripsi_buku']);
	$gambar_buku=$_FILES['gambar_buku']['name'];
	$stok_buku=strip_tags($_POST['stok_buku']);
	$kategori=strip_tags($_POST['kategori']);
	$images=strip_tags($_POST['tmp_name']);
	$tgl=date("h:i:s-j-m-Y");
	if($gambar_buku == ""){
	$edit=mysql_query("UPDATE buku SET kode_buku='$kode_buku',judul_buku='$judul_buku',diskripsi_buku='$diskripsi_buku',stok_buku='$stok_buku',kategori='$kategori' WHERE id='$id'");
	if(!$edit-portofolio){ echo '<script language="javascript" type="text/javascript">
alert("edit images berhasil !");</script>';
	echo "<meta http-equiv='refresh' content='0; url=buku_input.php'>";
			  } else
			  { echo '<script language="javascript" type="text/javascript">
alert("edit  berhasil !");</script>';
	echo "<meta http-equiv='refresh' content='0; url=buku_input.php'>";
}
}
else{
$cari=mysql_query("select * from buku where id='$id'");
		$dt=mysql_fetch_array($cari);
		$gambar_buku=$dt['gambar_buku'];
		$tmpfile = "./images/$images";

$typeimages = array('image/bmp', 'image/gif', 'image/jpg', 'image/jpeg', 'image/png');
if(!in_array($_FILES['gambar_buku']['type'],$typeimages)){
echo' FORMAT images SALAH';
}elseif($fileSize=$_FILES['gambar_buku']['size']< 20000 || $fileError < 20000){
unlink ($tmpfile);
$edit2=mysql_query("UPDATE buku SET kode_buku='$kode_buku',judul_buku='$judul_buku',diskripsi_buku='$diskripsi_buku',gambar_buku='$gambar_buku'
,stok_buku='$stok_buku',kategori='$kategori' WHERE id='$id'");
	$move = move_uploaded_file($_FILES['gambar_buku']['tmp_name'],'./images/'.$gambar_buku);
	if(!$edit2)
		 { echo '<script language="javascript" type="text/javascript">
alert("edit images gagal !");</script>';
	echo "<meta http-equiv='refresh' content='0; url=buku_input.php'>";


			  } else
			  { echo '<script language="javascript" type="text/javascript">
alert("edit images berhasil !");</script>';
	echo "<meta http-equiv='refresh' content='0; url=buku_input.php'>";

}
			   }
	}
	}
	?>


<?PHP
if (isset($_GET['act'])) {
	# code...
	 $act=$_GET['act'];//UNTUK MENHAPUS
	$id=abs((int)$_GET['id']);
		if ($act=='del'){
		$cari=mysql_query("select * from buku where id='$id'");
		$dt=mysql_fetch_array($cari);
		$gmbr=$dt['gambar_buku'];
		$tmpfile = "./images/$gmbr";
		$sql=mysql_query("delete from buku where id='$id'");
		if(!$sql){
	echo '<script language="javascript" type="text/javascript">
	alert("delete images gagal !");</script>';
		echo "<meta http-equiv='refresh' content='0; url=buku_input.php'>";
		}else{
				unlink ($tmpfile);
	echo '<script language="javascript" type="text/javascript">
	alert("delete images berhasil !");</script>';
		echo "<meta http-equiv='refresh' content='0; url=buku_input.php'>";
		}
	}
}
?>

<div class="container">
<?PHP if (isset($_GET['id'])) {
 $id=abs((int)$_GET['id']);
}else{
	$id=null;
}	# code...
if($id!= ''){
$sql=mysql_query("select * from buku where id='$id'");
while($post=mysql_fetch_array($sql)){?>

<div class="button-2" >Edit Buku</div><br><br>
<table>
<form name="form1" action="" method="post" enctype="multipart/form-data">
<tr>
	<td><label class="label2">Kode Buku</label></td>
	<td>:</td>
	<td><input type="text" name="kode_buku" value="<?PHP echo $post['kode_buku'];?>" required></td>
</tr>
<tr>
	<td><label class="label2">Judul Buku</label></td>
	<td>:</td>
	<td><input type="text" name="judul_buku" value="<?PHP echo $post['judul_buku'];?>" required></td>
</tr>
<tr>
	<td><label class="label2">Deskripsi Buku</label></td>
	<td>:</td>
	<td><input type="text" name="diskripsi_buku" value="<?PHP echo $post['diskripsi_buku'];?>" required></td>
</tr>
<tr>
	<td><label class="label2">Gambar Buku</label></td>
	<td>:</td>
	<td><img id="gmbr" class="img-thumbnail" src="images/<?PHP echo $post['gambar_buku'];?>" width="70" height="70"/>
	<span><div id="sembunyi" >
	<label for="reg_input_name" class="req">Images</label>
	<input name="gambar_buku" type="file" id="gambar_buku" accept="images/*" style="width:65%">
	<input name="tmp_name" type="hidden" id="" value="<?php echo $post['gambar_buku']; ?>" style="width:65%">
	</div><br>
	</span>
	<span>

	 <!--<a id="tampil" href="javascript:toggle();" rel="nofollow">Change Image</a>-->
	</span></td>

</tr>
<tr>
	<td><label class="label2">stok_buku</label></td>
	<td>:</td>
	<td><input type="text" name="stok_buku" value="<?PHP echo $post['stok_buku'];?>" required></td>
</tr>
<tr>
	<td><label class="label2">Kategori</label></td>
	<td>:</td>
	<td><select name="kategori" value="<?PHP echo $post['kategori'];?>" required>
									<option value="Bacaan">Bacaan</option>
									<option value="Pelajaran">Pelajaran</option>
									<option value="Budaya">Budaya</option>
									<option value="Lain-Lain">Lain-lain</option>
				</select></td>
</tr>
<tr>
	<td><input name="edituploadimages" class="button" type="submit" value="UPDATE"></td>
</tr>

</form>
</table>
<?PHP }} else { ?>

<div class="button-2" >Input Buku</div><br><br>
<table>
<form name="form1" action="" method="post" enctype="multipart/form-data">
<tr>
<td><label class="label2">Kode Buku</label></td>
<td>:</td>
<td><input type="text" name="kode_buku" required></td>
</tr>
<tr>
<td><label class="label2">Judul Buku</label></td>
<td>:</td>
<td><input type="text" name="judul_buku" required></td>
</tr>
<tr>
<td><label class="label2">Diskripsi Buku</label></td>
<td>:</td>
<td><input type="text" name="diskripsi_buku" required></td>
</tr>
<tr>
<td><label class="label2">images</label></td>
<td>:</td>
<td><input name="gambar_buku" type="file" required></td>
</tr>
<tr>
<td><label class="label2">Jumlah Stok</label></td>
<td>:</td>
<td><input type="text" name="stok_buku" required></td>
</tr>
<tr>
<td><label class="label2">Kategori</label></td>
<td>:</td>
<td><select name="kategori" required>
									<option value="Bacaan">Bacaan</option>
									<option value="Pelajaran">Pelajaran</option>
									<option value="Budaya">Budaya</option>
									<option value="Lain-Lain">Lain-lain</option>
				</select></td>
</tr>
<tr>
  <td><input name="uploadimages" class="button" type="submit" value="SIMPAN"></td>
</tr>

</form><?PHP }?>
</table>
<br><br><br>
  <ul>
			<li><div class="call-action-but" style="text-align:center;"><a href="adminpage.php">Back to Admin</a></div></li>
		</ul>
</div>
</div>
</div>
	</section>
	<section class="call-action section-padding color-white">
		<div class="container">

<div class="row content-wrapper welcome-service-row plr0">
<div class="columns large-12 plr0">
<div class="row content-wrapper-inner">
<div class="columns content welcome-box large-12">
<?php $sql=mysql_query("select * from buku order by id desc");$no=0;
while($datapost=mysql_fetch_array($sql)){$no++?>
<div class="images">
<h3><b><?PHP echo $datapost ['kode_buku'];?></b></h3>
<h3><?PHP echo $datapost ['judul_buku'];?></h3>
<h3><?PHP echo $datapost ['diskripsi_buku'];?></h3>
<img src="images/<?PHP echo $datapost['gambar_buku'];?>"/>
<h3><?PHP echo $datapost ['stok_buku'];?></h3>
<h3><?PHP echo $datapost ['kategori'];?></h3>
<a class="edit" href="buku_input.php?id=<?PHP echo $datapost['id'];?>">EDIT images</a>
<a class="hapus" href="buku_input.php?id=<?PHP echo $datapost['id'];?>&act=del">HAPUS</a>
</div>
<?php }?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</div>
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
