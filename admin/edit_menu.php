<?php
include 'db.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM menu WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Menu</title>
</head>
<body>
  <h2>Edit Menu</h2>
  <form action="update_menu.php?id=<?= $row['id'] ?>" method="POST" enctype="multipart/form-data">
    
    <label for="kategori">Kategori:</label>
    <input type="text" name="kategori" value="<?= $row['kategori'] ?>" required><br><br>

    <label for="nama_menu">Nama Menu:</label>
    <input type="text" name="nama_menu" value="<?= $row['nama_menu'] ?>" required><br><br>

    <label>Gambar Sekarang:</label><br>
    <img src="uploads/<?= $row['gambar'] ?>" width="120"><br><br>

    <!-- ✅ Input upload gambar baru (opsional) -->
    <label for="gambar">Upload Gambar Baru (opsional):</label>
    <input type="file" name="gambar" accept="image/*"><br><br>

    <button type="submit">Update</button>
  </form>
</body>
</html>
