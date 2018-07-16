<?php
session_start(); // Memulai Session
$error=''; // Variabel untuk menyimpan pesan error
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Variabel username dan password
$username=$_POST['username'];
$password=$_POST['password'];
// Membangun koneksi ke database
$connection = mysql_connect("localhost", "root", "");
// Mencegah MySQL injection 
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Seleksi Database
$db = mysql_select_db("db_evav", $connection);
// SQL query untuk memeriksa apakah karyawan terdapat di database?
$query = mysql_query("select * from donatur where password='$password' AND username='$username'", $connection);
$rows = mysql_num_rows($query);
$data = mysql_fetch_assoc($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Membuat Sesi/session
$_SESSION['id_donatur']=$data['id_donatur']; // Membuat Sesi/session
header("location: donasi.php"); // Mengarahkan ke halaman profil
} else {
$error = "Username atau Password belum terdaftar";
}
mysql_close($connection); // Menutup koneksi
}
}
?>