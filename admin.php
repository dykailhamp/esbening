<?php
require 'koneksi.php';
include 'total_produk.php';
include 'tambah_produk.php';

// Hapus produk
if(isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    // Hapus gambar lama
    $result = $conn->query("SELECT gambar FROM produk WHERE id=$id");
    if($result && $row = $result->fetch_assoc()) {
        if(file_exists('uploads/'.$row['gambar'])) {
            unlink('uploads/'.$row['gambar']);
        }
    }
    $conn->query("DELETE FROM produk WHERE id=$id");
    header("Location: admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Ayam Kampung Es Bening</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</head>
<body class="flex min-h-screen bg-gray-100">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-lg">
        <div class="p-6 font-bold text-xl border-b">Admin Panel</div>
        <nav class="p-6 space-y-3">
            <a href="admin.php" class="flex items-center gap-2 text-gray-700 hover:text-blue-600"><i data-feather="home"></i> Dashboard</a>
            <a href="#tambah" class="flex items-center gap-2 text-gray-700 hover:text-blue-600"><i data-feather="plus-circle"></i> Tambah Produk</a>
            <a href="#daftar" class="flex items-center gap-2 text-gray-700 hover:text-blue-600"><i data-feather="list"></i> Daftar Produk</a>
        </nav>
    </aside>

    <!-- Main Container -->
    <main class="flex-1 p-6">
        <h1 class="text-2xl font-bold mb-6">Dashboard Admin</h1>

        <!-- Total Produk -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <div class="bg-blue-100 text-blue-800 px-6 py-4 rounded shadow flex items-center gap-2">
                <i data-feather="package"></i>
                <span class="font-bold">Total Produk: <?= $total_produk ?></span>
            </div>
            <?php foreach($kategori_list as $key => $nama): ?>
                <div class="bg-green-100 text-green-800 px-4 py-4 rounded shadow flex items-center gap-2">
                    <?php
                    $icon = match($key) {
                        'Ayam' => 'feather',
                        'Sambal' => 'slack',
                        'Keripik' => 'coffee',
                        'Jus' => 'coffee',
                        'Nasi' => 'box',
                        'Snack' => 'gift',
                        default => 'box'
                    };
                    ?>
                    <i data-feather="<?= $icon ?>"></i>
                    <span><?= $nama ?>: <strong><?= $total_per_kategori[$key] ?? 0 ?></strong></span>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Form Tambah Produk -->
        <div id="tambah" class="mb-6 bg-white p-6 rounded shadow">
            <h2 class="text-xl font-bold mb-4">Tambah Produk</h2>
            <form method="POST" enctype="multipart/form-data" class="space-y-4">
                <div>
                    <label>Nama Produk</label>
                    <input type="text" name="nama_produk" class="w-full border p-2 rounded" required>
                </div>
                <div>
                    <label>Kategori</label>
                    <select name="kategori" class="w-full border p-2 rounded" required>
                        <?php foreach($kategori_list as $key => $nama) {
                            echo "<option value='$key'>$nama</option>";
                        } ?>
                    </select>
                </div>
                <div>
                    <label>Harga</label>
                    <input type="number" name="harga" class="w-full border p-2 rounded" required>
                </div>
                <div>
                    <label>Gambar</label>
                    <input type="file" name="gambar" accept="image/*" class="w-full border p-2 rounded" required>
                </div>
                <button type="submit" name="tambah" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah</button>
            </form>
        </div>

        <!-- Daftar Produk -->
        <div id="daftar" class="bg-white p-6 rounded shadow">
            <h2 class="text-xl font-bold mb-4">Daftar Produk</h2>
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border p-2">ID</th>
                        <th class="border p-2">Nama</th>
                        <th class="border p-2">Kategori</th>
                        <th class="border p-2">Harga</th>
                        <th class="border p-2">Gambar</th>
                        <th class="border p-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $produk = $conn->query("SELECT * FROM produk");
                    while($row = $produk->fetch_assoc()):
                    ?>
                    <tr>
                        <td class="border p-2"><?= $row['id'] ?></td>
                        <td class="border p-2"><?= $row['nama_produk'] ?></td>
                        <td class="border p-2"><?= $kategori_list[$row['kategori']] ?? $row['kategori'] ?></td>
                        <td class="border p-2">Rp <?= number_format($row['harga'],0,',','.') ?></td>
                        <td class="border p-2">
                            <?php if($row['gambar'] && file_exists('uploads/'.$row['gambar'])): ?>
                                <img src="uploads/<?= $row['gambar'] ?>" width="80">
                            <?php else: ?>
                                -
                            <?php endif; ?>
                        </td>
                        <td class="border p-2">
                            <a href="admin.php?hapus=<?= $row['id'] ?>" class="text-red-600 hover:underline" onclick="return confirm('Hapus produk ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

    </main>

    <script>
        feather.replace()
    </script>
</body>
</html>
