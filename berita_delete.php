<?php
include "koneksi.php";
if(isset($_GET['id'])){
 $id_berita = $_GET['id'];
}else{
 die("Error. No Id Selected!"); 
}
?>
<html>
    <head><title>Delete Berita</title>
     <link href="style.css" rel="stylesheet">
	</head>    
<body>
<?
    //proses delete berita
if(!empty($id_berita)&&$id_berita!=""){
	  $query = "DELETE FROM berita WHERE id_berita='$id_berita'";  
	  $sql = mysql_query($query);
	  if($sql){
		   echo "<span style='color: blue;'>Berita telah berhasil dihapus</span>";
	   }else{
		   echo "<span style='color: red;'>Berita gagal dihapus</span>";
	  }
	  echo "klik <a href='berita_arsip.php'>di sini untuk kembali ke halaman arsip berita";
}else{
  	die("Access Denied"); 
 }
?>
</body>
</html>
