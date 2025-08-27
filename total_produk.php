<?php
require 'koneksi.php';

// Ambil semua produk dari database
$result = $conn->query("SELECT * FROM produk");

// Hitung total semua produk
$total_produk = $result->num_rows;

// Hitung total per kategori secara otomatis
$total_per_kategori = [];
while($row = $result->fetch_assoc()) {
    $kategori = $row['kategori'];
    if(!isset($total_per_kategori[$kategori])) {
        $total_per_kategori[$kategori] = 0;
    }
    $total_per_kategori[$kategori]++;
}

// Daftar kategori
$kategori_list = [
    'Ayam' => 'Ayam',
    'Sambal' => 'Sambal',
    'Keripik' => 'Keripik',
    'Jus' => 'Jus Buah',
    'Nasi' => 'Nasi Box',
    'Snack' => 'Snack Box'
];
?>
