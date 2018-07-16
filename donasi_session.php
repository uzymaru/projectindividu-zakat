<?php
// Membangun Koneksi dengan Server dengan nama server, user_id dan password sebagai parameter
$connection = mysql_connect("localhost", "root", "");
// Seleksi Database
$db = mysql_select_db("db_evav", $connection);
session_start();// Memulai Session
// Menyimpan Session
$user_check=$_SESSION['login_user'];
// Ambil nama karyawan berdasarkan username karyawan dengan mysql_fetch_assoc
$ses_sql=mysql_query("select username from donatur where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if (mysql_num_rows($ses_sql)>0) {
// echo '<script type="text/javascript">alert("Anda telah terdaftar, silahkan login ");document.location.href="donasi.php";</script>';
	# code...
}
if(!isset($login_session)){
mysql_close($connection); // Menutup koneksi
// header('Location: donasi.php'); // Mengarahkan ke Home Page
}
?>