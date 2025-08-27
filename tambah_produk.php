<?php
require 'koneksi.php';

if(isset($_POST['tambah'])) {
    $nama = $_POST['nama_produk'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];

    // Upload gambar
    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];

    if(!is_dir('uploads')) {
        mkdir('uploads', 0777, true);
    }

    $gambar_baru = uniqid() . "_" . $gambar;
    move_uploaded_file($tmp, 'uploads/' . $gambar_baru);

    // Insert ke database
    $conn->query("INSERT INTO produk (nama_produk, kategori, harga, gambar) VALUES ('$nama', '$kategori', '$harga', '$gambar_baru')");
    header("Location: admin.php");
}
?>
