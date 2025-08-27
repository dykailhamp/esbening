<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kategori   = mysqli_real_escape_string($conn, $_POST['kategori']);
    $nama_menu  = mysqli_real_escape_string($conn, $_POST['nama_menu']);

    // Proses upload gambar
    $gambar = "";
    if (!empty($_FILES['gambar']['name'])) {
        $targetDir = "uploads/";
        $fileName  = time() . "_" . basename($_FILES["gambar"]["name"]); 
        $targetFilePath = $targetDir . $fileName;

        // cek & upload
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetFilePath)) {
            $gambar = $fileName; // hanya nama file yang disimpan ke DB
        } else {
            echo "Gagal upload gambar!";
            exit;
        }
    }

    // Simpan ke database
    $sql = "INSERT INTO menu (kategori, nama_menu, gambar) 
            VALUES ('$kategori', '$nama_menu', '$gambar')";
    if (mysqli_query($conn, $sql)) {
        header("Location: admin.php"); 
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
