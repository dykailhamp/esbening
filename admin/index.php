<?php
include 'db.php'; // koneksi database
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayam Kampung Es Bening - Berbagai Varian Olahan Ayam Kampung</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
     <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }
        .hero-gradient {
            background: linear-gradient(135deg, #ffedcc 0%, #ffcc99 100%);
        }
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 
                        0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .map-container { filter: grayscale(20%); transition: all 0.3s ease; }
        .map-container:hover { filter: grayscale(0%); }
        .whatsapp-button { animation: pulse 2s infinite; }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Header/Navigation -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <h1 class="text-xl md:text-2xl font-bold text-gray-800">AYAM KAMPUNG Es Bening</h1>
            </div>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="#produk" class="text-gray-700 hover:text-red-600 transition">Produk</a></li>
                    <li><a href="#lokasi" class="text-gray-700 hover:text-red-600 transition">Lokasi</a></li>
                    <li><a href="#pesan" class="text-gray-700 hover:text-red-600 transition">Pesan</a></li>
                    <li><a href="#sejarah" class="text-gray-700 hover:text-red-600 transition">Sejarah</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-gradient py-20 text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                Berbagai Varian Olahan Ayam Kampung
            </h2>
            <p class="text-lg md:text-xl text-gray-700">
                Nikmati cita rasa khas ayam kampung segar dan berkualitas
            </p>
        </div>
    </section>

    <!-- Produk Section (Dynamic dari DB) -->
    <section id="produk" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">Produk Kami</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

                <?php
                $result = mysqli_query($conn, "SELECT * FROM menu ORDER BY id DESC");
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "
                    <div class='bg-gray-50 rounded-lg overflow-hidden shadow-md product-card transition transform hover:-translate-y-1'>
                        <img src='uploads/".$row['gambar']."' alt='".$row['nama_menu']."' class='w-full h-48 object-cover'>
                        <div class='p-4'>
                            <h3 class='text-lg font-semibold text-gray-800'>".$row['nama_menu']."</h3>
                            <p class='text-sm text-gray-500'>".$row['kategori']."</p>
                        </div>
                    </div>
                    ";
                }
                ?>
                
            </div>
        </div>
    </section>

    <!-- Lokasi Section -->
    <section id="lokasi" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Lokasi Kami</h2>
            <div class="map-container rounded-lg overflow-hidden shadow-lg mx-auto" style="max-width: 800px; height: 400px;">
                <iframe src="https://maps.google.com/maps?q=Jakarta&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                        width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </section>

    <!-- Pesan Section -->
    <section id="pesan" class="py-16 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Pesan Sekarang</h2>
            <p class="mb-4">Klik tombol di bawah untuk memesan via WhatsApp</p>
            <a href="https://wa.me/6281234567890" target="_blank" 
               class="bg-green-500 text-white px-6 py-3 rounded-full text-lg font-semibold whatsapp-button">
                <i class="fab fa-whatsapp"></i> Pesan via WhatsApp
            </a>
        </div>
    </section>

    <!-- Sejarah Section -->
    <section id="sejarah" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Sejarah Kami</h2>
            <p class="text-gray-700 max-w-2xl mx-auto">
                Ayam Kampung Es Bening berdiri sejak tahun 2020 dengan tujuan menghadirkan olahan ayam kampung yang sehat, segar, dan lezat.
                Kami berkomitmen menjaga kualitas dan rasa di setiap hidangan yang kami sajikan.
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-300 py-6 text-center">
        <p>&copy; <?= date('Y') ?> Ayam Kampung Es Bening. All rights reserved.</p>
    </footer>

</body>
</html>
