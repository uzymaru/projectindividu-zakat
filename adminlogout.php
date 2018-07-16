<?php
session_start();
if(session_destroy()) // Menghapus Sessions
{
header("Location: admin.php"); // Langsung mengarah ke Home adminlogin.php
}
?>