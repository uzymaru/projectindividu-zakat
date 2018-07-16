<?php
$server   = "localhost";
$username = "root";
$password = "";
$database = "db_evav";

//other config
$tb_admin = 'admin';
$tb_bank = 'bank';
$tb_berita = 'berita';
$tb_donasi = 'donasi';
$tb_kdonasi = 'kategori';
$tb_kberita = 'kategori_berita';

error_reporting(null);
$koneksi = mysql_connect($server,$username,$password) or die ('Koneksi gagal');

if($koneksi){
	mysql_select_db($database) or die ('Database belum dibuat');
}

?>
