<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <div class="sidebar">
    <h2>Admin Panel</h2>
    <ul>
      <li><a href="admin.php">Dashboard</a></li>
      <li><a href="admin.php">Tambah Menu</a></li>
      <li><a href="index.php">Lihat Website</a></li>
    </ul>
  </div>

  <div class="main-content">
    <header>
      <h1>Dashboard Admin</h1>
    </header>

    <div class="card">
      <h3>Tambah Menu Baru</h3>
      <form action="save_menu.php" method="POST">
        <label for="kategori">Kategori:</label>
        <select name="kategori" required>
          <option value="Farian Ayam">Farian Ayam</option>
          <option value="Keripik">Keripik</option>
          <option value="Sambal">Sambal</option>
          <option value="Jus">Jus</option>
          <option value="Nasi Box">Nasi Box</option>
          <option value="Snack Box">Snack Box</option>
        </select>

        <label for="nama_menu">Nama Menu:</label>
        <input type="text" name="nama_menu" required placeholder="Contoh: Ayam Geprek">

        <button type="submit">Simpan</button>
      </form>
    </div>

    <div class="card">
      <h3>Daftar Menu</h3>
      <table>
        <tr>
          <th>ID</th>
          <th>Kategori</th>
          <th>Nama Menu</th>
        </tr>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM menu ORDER BY id DESC");
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>".$row['id']."</td>
                  <td>".$row['kategori']."</td>
                  <td>".$row['nama_menu']."</td>
                </tr>";
        }
        ?>
      </table>
    </div>
  </div>
</body>
</html>
