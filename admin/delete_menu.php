<?php
include 'db.php';
$id = $_GET['id'];

// ambil gambar
$result = mysqli_query($conn, "SELECT gambar FROM menu WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if ($row) {
    $gambar = $row['gambar'];
    mysqli_query($conn, "DELETE FROM menu WHERE id=$id");
    if (file_exists($gambar)) unlink($gambar);
}

header("Location: admin.php");
exit;
