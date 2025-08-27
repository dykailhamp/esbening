<?php
include 'db.php';

$id = $_POST['id'];
$kategori = $_POST['kategori'];
$nama_menu = $_POST['nama_menu'];

$update = "UPDATE menu SET kategori='$kategori', nama_menu='$nama_menu'";

// jika ada gambar baru
if (!empty($_FILES["gambar"]["name"])) {
    $targetDir = "uploads/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $fileName = basename($_FILES["gambar"]["name"]);
    $targetFilePath = $targetDir . time() . "_" . $fileName;
    $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
    $allowedTypes = ["jpg","jpeg","png","gif"];

    if (in_array($imageFileType, $allowedTypes)) {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetFilePath)) {
            $update .= ", gambar='$targetFilePath'";
        }
    }
}

$update .= " WHERE id=$id";
mysqli_query($conn, $update);

header("Location: admin.php");
exit;
