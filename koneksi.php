<?php 
error_reporting(E_ALL);
$host = "localhost";
$user = "root";
$pass = "";
$db   = "bms";

$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn == false)
 {
	echo "koneksi ke server gagal.";
	die();
}
 ?>