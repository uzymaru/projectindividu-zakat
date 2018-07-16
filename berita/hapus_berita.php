
<?php 
include "koneksi.php";
?>

<?php

$id_berita  = $_GET['id'];
$foto		= $_GET['filenya'];


if ($foto=="")
{
$query = mysql_query("delete from berita where id_berita='$id_berita'");

} else {
$query = mysql_query("delete from berita where gambar='$foto'");
unlink("foto/$_GET[filenya]");
}


if ($query){
echo"<script>alert('data berhasil di hapus...');
document.location.href='../berita_arsip.php'; </script>\n";
}
else
{echo"<script>alert('hapus gagal');
document.location.href='../berita_arsip.php'; </script>\n";}


?>
