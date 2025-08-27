<?php
$host = "localhost";
$user = "root";   // username default XAMPP
$pass = "";       // password default kosong
$db   = "menu_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
