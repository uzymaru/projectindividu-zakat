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

	<!--admin update-->
	<section class="call-action section-padding color-green">
		<div class="container">

<?PHP if (isset($_POST['inputData'])) {//// UNTUK MENAMBAH
	$nama_bank=strip_tags($_POST['nama_bank']);
	$no_rekening=strip_tags($_POST['no_rekening']);
	$sql=mysql_query("insert into bank values('','$nama_bank','$no_rekening')");
			if(!$sql)
			  { echo '<script language="javascript" type="text/javascript">
alert("Data tidak dapat disimpan !");</script>';
	echo "<meta http-equiv='refresh' content='0; url=bank_input.php'>";

			  } else
			  {

echo '<script language="javascript" type="text/javascript">
alert("Data berhasil disimpan !");</script>';
	echo "<meta http-equiv='refresh' content='0; url=bank_input.php'>";
			   }
}
?>



<?PHP if (isset($_POST['editData'])) {// UNTUK MENGEDIT
	$id=$_GET['id'];
	$nama_bank=strip_tags($_POST['nama_bank']);
	$no_rekening=strip_tags($_POST['no_rekening']);
	$tgl=date("h:i:s-j-m-Y");
		$edit=mysql_query("UPDATE bank SET nama_bank='$nama_bank',no_rekening='$no_rekening' WHERE id_bank='$id'");
		if(!$edit){
			// echo mysql_error();
			echo '<script language="javascript" type="text/javascript">alert("edit Data Gagal !");</script>';
			echo "<meta http-equiv='refresh' content='0; url=bank_input.php'>";
	  } else {
			echo '<script language="javascript" type="text/javascript">alert("edit Data berhasil !");</script>';
			echo "<meta http-equiv='refresh' content='0; url=bank_input.php'>";
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
$sql=mysql_query("select * from bank where id_bank='$id'");
while($post=mysql_fetch_array($sql)){?>

<div class="button-2" >Edit Buku</div><br><br>
<table>
<form name="form1" action="" method="post" enctype="multipart/form-data">
<tr>
	<td><label class="label2">Nama Bank</label></td>
	<td>:</td>
	<td><input type="text" name="nama_bank" value="<?PHP echo $post['nama_bank'];?>" required></td>
</tr>
<tr>
	<td><label class="label2">No Rekening</label></td>
	<td>:</td>
	<td><input type="text" name="no_rekening" value="<?PHP echo $post['no_rekening'];?>" required></td>
</tr>
<tr>
	<td><input name="editData" class="button" type="submit" value="UPDATE"></td>
</tr>

</form>
</table>
<?PHP }} else { ?>

<div class="button-2" >Input Bank</div><br><br>
<table>
<form name="form1" action="" method="post" enctype="multipart/form-data">
<tr>
<td><label class="label2">Nama Bank</label></td>
<td>:</td>
<td><input type="text" name="nama_bank" required></td>
</tr>
<tr>
<td><label class="label2">No Rekening</label></td>
<td>:</td>
<td><input type="text" name="no_rekening" required></td>
</tr>
<tr>
  <td><input name="inputData" class="button" type="submit" value="SIMPAN"></td>
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
<?php $sql=mysql_query("select * from bank order by id_bank desc");$no=0; ?>
<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<td>Nama Bank</td>
			<td>Rekening</td>
			<td>Aksi</td>
		</tr>
	</thead>
	<tbody>
		<?php while($datapost=mysql_fetch_array($sql)){$no++?>
		<tr>
			<td><?= $datapost['nama_bank']; ?></td>
			<td><?= $datapost['no_rekening']; ?></td>
			<td><a href="?id=<?= $datapost['id_bank']; ?>" class="btn btn-success btn-sm">Ubah</a></td>
		</tr>
		<?php }?>
	</tbody>
</table>
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
