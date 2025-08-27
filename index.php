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
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .map-container {
            filter: grayscale(20%);
            transition: all 0.3s ease;
        }
         .map-container:hover {
            filter: grayscale(0%);
        }
        
        .whatsapp-button {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
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
<section class="hero-gradient py-20 relative" style="background-image: url('Picture8.png'); background-size: cover; background-position: center;">
    <div class="absolute inset-0 left-0 w-1/2 bg-black opacity-50 z-0"></div> <!-- Bayangan di sisi kiri -->
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center relative z-10"> <!-- z-10 untuk memastikan konten di atas bayangan -->
        <div class="md:w-1/2 mb-10 md:mb-0">
          <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
  Nikmati Kelezatan 
  <span class="text-[#D2B48C]">Olahan Ayam Kampung</span>
</h2>
<p class="text-white mb-6 text-lg">
  Berbagai Varian Olahan Ayam yang Menggugah Selera.
</p>
<a href="#produk" class="bg-[#D2B48C] hover:bg-[#c1a374] text-white px-6 py-3 rounded-full font-medium transition-all shadow-lg">
  Lihat Menu
</a>


        </div>
        <div class="md:w-1/2">
            <img src="picture/Picture1.png" alt="Foto hidangan lengkap UMKM Es Bening" class="rounded-lg shadow-xl w-full"> <!-- Ganti dengan nama file gambar Anda -->
        </div>
    </div>
</section>

 <!-- Video Promosi -->
    <div class="container mx-auto px-4 mt-10">
        <h3 class="text-2xl font-bold text-white text-center mb-4">Video Promosi</h3>
        <div class="flex justify-center">
<iframe width="560" height="315" src="https://www.youtube.com/embed/orl6IaUH9gs?si=UqgcGtlOo3gug0wj" 
title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>        </div>
    </div>
        <!-- Lokasi Section -->
    <section id="lokasi" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Lokasi Kami</h2>
                <div class="w-20 h-1 bg-red-600 mx-auto"></div>
            </div>
            
            <div class="flex flex-col md:flex-row gap-8 items-center">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Kunjungi Outlet Kami</h3>
                    <p class="text-gray-600 mb-4"><i class="fas fa-map-marker-alt text-red-600 mr-2"></i> Jl.Gereja No.33,Panjer,Kec.Kebumen,Kabupaten Kebumen,Jawa Tengah 54321</p>
                    <p class="text-gray-600 mb-6"><i class="fas fa-clock text-red-600 mr-2"></i> Buka setiap hari 08.00 - 20.00 WIB</p>
                    
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h4 class="font-bold text-gray-800 mb-3">Hubungi Kami:</h4>
                        <p class="text-gray-600 mb-2"><i class="fas fa-phone text-red-600 mr-2"></i> +62 877-1509-7888</p>
                        <p class="text-gray-600"><i class="fab fa-instagram text-red-600 mr-2"></i> @ayamesbening</p>
                    </div>
                </div>
                
                <div class="md:w-1/2 map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.042118406871!2d109.65749749999999!3d-7.6786211999999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7acb081b584703%3A0xa88ecfe40831b2d8!2sAyam%20Kampung%20Es%20Bening!5e0!3m2!1sid!2sid!4v1755580167630!5m2!1sid!2sid" 
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

     <!-- Sejarah Es Bening Section -->
    <section id="sejarah" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Sejarah Es Bening</h2>
                <div class="w-20 h-1 bg-red-600 mx-auto"></div>
            </div>
            <p class="text-gray-600 mb-4 text-lg max-w-2xl mx-auto">
                UMKM Es Bening didirikan pada tahun 2020 dengan tujuan untuk menghadirkan hidangan ayam kampung yang berkualitas tinggi dan cita rasa yang autentik. 
                Dengan menggunakan bahan-bahan segar dan resep tradisional, kami berkomitmen untuk memberikan pengalaman kuliner yang tak terlupakan bagi pelanggan kami. 
                Sejak awal berdirinya, Es Bening telah menjadi pilihan utama bagi pecinta ayam kampung di daerah ini, dan kami terus berinovasi untuk menghadirkan varian menu yang lebih menarik.
            </p>
        <div class="product-card bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300">
    <div class="flex items-center mb-6">
        <div class="h-32 w-32 overflow-hidden mr-4"> <!-- Mengatur ukuran gambar -->
            <img src="yumiro.png" alt="Ayam rica-rica pedas dengan taburan cabai merah dan daun kemangi segar dalam piring saji tradisional" class="w-full h-full object-cover">
        </div>
        <div>
            <h4 class="text-xl font-bold text-gray-800 mb-2"> Yu Miro (Saminem)</h4>
            <p class="text-gray-600"></p>
            <div class="flex justify-between items-center">
                <span class="text-red-600 font-bold">1940-an</span>
            </div>
        </div>
    </div>
    <div class="product-card bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300">
    <div class="flex items-center mb-6">
        <div class="h-32 w-32 overflow-hidden mr-4"> <!-- Mengatur ukuran gambar -->
            <img src="simbah.png" alt="Ayam rica-rica pedas dengan taburan cabai merah dan daun kemangi segar dalam piring saji tradisional" class="w-full h-full object-cover">
        </div>
        <div>
            <h4 class="text-xl font-bold text-gray-800 mb-2">  Simbah Khalimah (Mbah Sendur)</h4>
            <p class="text-gray-600">Cikal bakal bisnis Ayam Es Bening sudah 
                                    dimulai beberapa dekade yang lalu. Saat itu 
                                    Simbah Khalimah (Mbah Sendur) merintis 
                                    usaha dengan berjualan daging ayam 
                                    kampung dari rumah ke rumah</p>
            <div class="flex justify-between items-center">
                <span class="text-red-600 font-bold">1970-an</span>
            </div>
            
        </div>
    </div>
    
</div>
<h4 class="text-xl font-bold text-gray-800 mb-2"> Yu Miro, Sang Menantu</h4>
 <div class="flex justify-between items-center">
                <span class="text-red-600 font-bold">1970-an</span>
            </div>
 <p class="text-gray-600 mb-4 text-lg max-w-2xl mx-auto">
                UMKM Es Bening didirikan pada tahun 2020 dengan tujuan untuk menghadirkan hidangan ayam kampung yang berkualitas tinggi dan cita rasa yang autentik. 
                Dengan menggunakan bahan-bahan segar dan resep tradisional, kami berkomitmen untuk memberikan pengalaman kuliner yang tak terlupakan bagi pelanggan kami. 
                Sejak awal berdirinya, Es Bening telah menjadi pilihan utama bagi pecinta ayam kampung di daerah ini, dan kami terus berinovasi untuk menghadirkan varian menu yang lebih menarik.
            </p>
            <h4 class="text-xl font-bold text-gray-800 mb-2">Era Generasi Ketiga</h4>
 <div class="flex justify-between items-center">
                <span class="text-red-600 font-bold">2016</span>
            </div>
 <p class="text-gray-600 mb-4 text-lg max-w-2xl mx-auto">
                                                UBabak baru Ayam Es Bening dimulai oleh 
                                generasi ketiga. Saat ini Ayam Es Bening 
                                dikembangkan oleh menantu Yu Miro, yaitu             
                                Ibu Nia, Untuk mengikuti perkembangan zaman, 
                                Ayam Es Bening tidak hanya menyediakan 
                                daging ayam mentah premium. Namun juga 
                                aneka menu olahan ayam kampung dan 
                                daging dengan resep warisan turun temurun. 
                                Semua produk dipastikan halal, sehat, lezat, 
                                higienis, bebas bahan pangan tambahan (MSG 
                                dan pengawet) dan praktis
                                            </p>
     <div class="flex items-center mb-6">
        <div class="h-32 w-32 overflow-hidden mr-4"> <!-- Mengatur ukuran gambar -->
            <img src="Picture7.png" alt="Ayam rica-rica pedas dengan taburan cabai merah dan daun kemangi segar dalam piring saji tradisional" class="w-full h-full object-cover">
        </div>
        <div>
            <h4 class="text-xl font-bold text-gray-800 mb-2"> Kurnia Dwi (Bu nia)</h4>
            <p class="text-gray-600"></p>
            <div class="flex justify-between items-center">
                <span class="text-red-600 font-bold">2016-sekarang</span>
                 <p class="text-gray-600"> Pemilik Ayam Es Bening adalah pasangan suami istri Sugiarto                   
                                        (Pak Gi) dan Kurnia Dwi (Bu Nia). 
                                        Keduanya berkolaborasi dalam 
                                        menjalankan aktivitas bisnis.</p>                                                    
            </div>
        </div>
    </div>      
     <p class="text-gray-600">  Sugiarto (Pak Gi) adalah pria asli 
                                                Kebumen. Sejak muda, Pak Gi sudah 
                                                menunjukkan jiwa wirausaha. Alumni 
                                                Universitas Gajah Mada ini  pantang 
                                                menyerah menjajaki berbagai peluang 
                                                bisnis. Pengalaman bisnisnya, membuat 
                                                kemampuannya dalam melihat peluang 
                                                pasar tidak diragukan lagi. Di Ayam Es 
                                                Bening, Pak Gi fokus strategi pemasaran, 
                                                dan pendistribusian produk</p>
                    <p class="text-gray-600"> Kurnia Dwi, (Bu Nia), awalnya tidak 
                                                mengira akan terjun ke dunia bisnis 
                                                kuliner. Kemampuannya dalam 
                                                mengkombinasikan keahlian memasak 
                                                dan resep warisan dari ibu mertua, 
                                                menghasilkan menu istimewa Ayam Es 
                                                Bening.</p> 
                    <p class="=text-gray-600">Alumni Universitas Muhammadiyah 
                                                Malang ini tak kenal lelah dalam 
                                                berinovasi menu dan mengikuti 
                                                berbagai pelatihan serta pameran 
                                                UMKM pangan. Di Ayam Es Bening, Bu Nia 
                                                fokus dalam proses produksi dan detail 
                                                pengemasan produk</p>                                     
    </section>

    <!-- Produk Section -->
    <section id="produk" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Produk Kami</h2>
                <div class="w-20 h-1 bg-red-600 mx-auto"></div>
            </div>

            <!-- Varian Ayam -->
            <div class="mb-16">
                <h3 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Varian Ayam</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Ayam Ungkep -->
                    <div class="product-card bg-gray-800 rounded-lg overflow-hidden shadow-md transition-all duration-300">
                    <div class="h-48 overflow-hidden">
                        <img src="ungkep.png" alt="Ayam ungkep kuning dengan bumbu rempah lengkap disimpan dalam wadah bambu tradisional" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <<h4 class="text-xl font-bold text-white mb-2">Ayam Ungkep</h4>
                        <p class="text-gray-300 mb-4">
                            Ayam bumbu ungkep merupakan produk terlaris dari Ayam Es Bening. 
                            Diolah dengan bumbu dari aneka rempah-rempah pilihan yang memberikan 
                            keistimewaan rasa yang khas. Setelah digoreng menu ini menjadi 
                            semakin istimewa karena daging ayam yang empuk, gurih, dan taburan 
                            kremes yang menggugah selera.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-red-600 font-bold">Rp 25.000</span>
                        </div>
                    </div>
                    </div>


                    
                    <!-- Ayam Semur -->
                   <div class="product-card bg-gray-800 rounded-lg overflow-hidden shadow-md transition-all duration-300">
                        <div class="h-48 overflow-hidden">
                            <img src="bacem.png" alt="Ayam semur kecap manis dengan kuah kental dan bawang merah goreng taburan di atas piring keramik" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-white mb-2">Ayam Bumbu Bacem</h4>
                            <p class="text-gray-300 mb-4">Bacem terkenal sebagai menu khas 
                                                                        Jawa bagian tengah hingga timur. 
                                                                        Ayam bumbu bacem memadukan 
                                                                        bumbu dari aneka rempah-rempah 
                                                                        pilihan, gula merah dan kecap, yang 
                                                                        menciptakan ayam lembut dengan 
                                                                        rasa manis dan gurih, membuatnya 
                                                                        unik dan istimewa.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-red-600 font-bold">Rp 27.000</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Ayam Rica-rica -->
                    <div class="product-card bg-gray-800 rounded-lg overflow-hidden shadow-md transition-all duration-300">
                        <div class="h-48 overflow-hidden">
                            <img src="rica.png" alt="Ayam rica-rica pedas dengan taburan cabai merah dan daun kemangi segar dalam piring saji tradisional" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-white mb-2">Ayam Bumbu Rica</h4>
                            <p class="text-gray-300 mb-4">Menu ini merupakan olahan ayam kampung dengan aneka bumbu 
                                                            dari rempah-rempah pilihan dan 
                                                            disajikan bersama kuah yang 
                                                            memiliki cita rasa pedas dan manis 
                                                            yang nikmat.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-red-600 font-bold">Rp 28.000</span>
                            </div>
                        </div>
                    </div>
                    <!--Ayam Bumbu Panggang-->
                     <div class="product-card bg-gray-800 rounded-lg overflow-hidden shadow-md transition-all duration-300">
                        <div class="h-48 overflow-hidden">
                            <img src="panggang.png" alt="Ayam rica-rica pedas dengan taburan cabai merah dan daun kemangi segar dalam piring saji tradisional" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-white mb-2">Ayam Bumbu Panggang</h4>
                            <p class="text-gray-300 mb-4">Ayam bumbu panggang adalah menu spesial karena setelah 
                                                            daging ayam kampung dimasak 
                                                            dengan bumbu dari aneka rempah
                                                            rempah pilihan beserta gula dan 
                                                            kecap hingga meresap, kemudian 
                                                            daging ayam dipanggang. 
                                                            Kelembutan daging ayam berpadu 
                                                            dengan aroma bakar khas yang 
                                                            menggugah selera.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-red-600 font-bold">Rp 28.000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Varian Sambal -->
            <div class="mb-16">
                <h3 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Varian Sambal</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Sambal Bawang -->
                    <div class="product-card bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300">
                        <div class="h-48 overflow-hidden">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/d6707fce-3aef-4089-8876-cdd70e2671e3.png" alt="Sambal bawang merah dengan tekstur kasar dan kilau minyak dalam mangkuk kecil dengan sendok kayu" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-gray-800 mb-2">Sambal Bawang</h4>
                            <p class="text-gray-600 mb-4">Sambal dengan potongan bawang merah goreng yang renyah, pedasnya pas dan mantap.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-red-600 font-bold">Rp 5.000</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sambal Kering -->
                    <div class="product-card bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300">
                        <div class="h-48 overflow-hidden">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/f357a312-bde3-4ff0-878f-8d48f2ef4c09.png" alt="Sambal kering berbentuk serpihan merah dengan potongan cabai kering dalam stoples kaca kecil" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-gray-800 mb-2">Sambal Kering</h4>
                            <p class="text-gray-600 mb-4">Sambal kering dengan tekstur renyah yang tahan lama, perpaduan cabai dan bawang yang sempurna.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-red-600 font-bold">Rp 7.000</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sambal Kacang -->
                    <div class="product-card bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300">
                        <div class="h-48 overflow-hidden">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/07cdf33a-5538-4f0e-9b8e-ab7acf52fe12.png" alt="Sambal kacang kental dengan taburan kacang cincang halus dalam mangkuk keramik putih" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-gray-800 mb-2">Sambal Kacang</h4>
                            <p class="text-gray-600 mb-4">Sambal dengan kacang yang creamy dan gurih, cocok untuk ayam maupun hidangan lainnya.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-red-600 font-bold">Rp 8.000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Varian Keripik -->
            <div>
                <h3 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Varian Keripik</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Keripik Kentang -->
                    <div class="product-card bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300">
                        <div class="h-48 overflow-hidden">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/53afbb18-e5f8-49cd-bf53-2b7848d9243f.png" alt="Keripik kentang tipis berwarna kuning keemasan dalam kemasan transparan dengan stiker brand" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-gray-800 mb-2">Keripik Kentang</h4>
                            <p class="text-gray-600 mb-4">Keripik kentang iris tipis, garing dengan sensasi asin gurih yang bikin ketagihan.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-red-600 font-bold">Rp 15.000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Varian Jus -->
             <div>
                <h3 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Aneka Jus Buah Segar</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- JUS -->
                    <div class="product-card bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300">
                        <div class="h-48 overflow-hidden">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/53afbb18-e5f8-49cd-bf53-2b7848d9243f.png" alt="Keripik kentang tipis berwarna kuning keemasan dalam kemasan transparan dengan stiker brand" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-gray-800 mb-2">Jus Semangka</h4>
                            <p class="text-gray-600 mb-4">Keripik kentang iris tipis, garing dengan sensasi asin gurih yang bikin ketagihan.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-red-600 font-bold">Rp 15.000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Nasi Box -->
             <div>
                <h3 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Nasi Box</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Keripik Kentang -->
                    <div class="product-card bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300">
                        <div class="h-48 overflow-hidden">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/53afbb18-e5f8-49cd-bf53-2b7848d9243f.png" alt="Keripik kentang tipis berwarna kuning keemasan dalam kemasan transparan dengan stiker brand" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-gray-800 mb-2">Nasi Box</h4>
                            <p class="text-gray-600 mb-4">Keripik kentang iris tipis, garing dengan sensasi asin gurih yang bikin ketagihan.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-red-600 font-bold">Rp 15.000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Snack Box -->
             <div>
                <h3 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Snack Box</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Keripik Kentang -->
                    <div class="product-card bg-white rounded-lg overflow-hidden shadow-md transition-all duration-300">
                        <div class="h-48 overflow-hidden">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/53afbb18-e5f8-49cd-bf53-2b7848d9243f.png" alt="Keripik kentang tipis berwarna kuning keemasan dalam kemasan transparan dengan stiker brand" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-gray-800 mb-2">Snack Box</h4>
                            <p class="text-gray-600 mb-4">Keripik kentang iris tipis, garing dengan sensasi asin gurih yang bikin ketagihan.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-red-600 font-bold">Rp 15.000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Pesan Section -->
    <section id="pesan" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Pesan Sekarang</h2>
                <div class="w-20 h-1 bg-red-600 mx-auto"></div>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Pesan langsung melalui WhatsApp untuk pengalaman pemesanan yang lebih mudah dan cepat. Respon cepat dan pelayanan ramah!</p>
            </div>
            
            <div class="max-w-md mx-auto bg-gradient-to-r from-red-50 to-orange-50 rounded-2xl p-8 shadow-lg text-center">
                <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fab fa-whatsapp text-green-600 text-4xl"></i>
                </div>
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Pesan via WhatsApp</h3>
                <p class="text-gray-600 mb-6">Klik tombol di bawah untuk langsung terhubung dengan kami via WhatsApp.</p>
                <a href="https://wa.me/6285162523862?text=Halo%20Es%20Bening,%20saya%20ingin%20memesan..." 
                   class="whatsapp-button inline-flex items-center bg-green-500 hover:bg-green-600 text-white font-bold py-4 px-8 rounded-full text-lg transition-all">
                    <i class="fab fa-whatsapp mr-2 text-xl"></i> Pesan Sekarang
                </a>
            </div>
            
            <!-- Menu Pilihan -->
            <div class="mt-16 bg-gray-50 p-8 rounded-xl">
                <h3 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Paket Siap Beli</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-gradient-to-b from-black via-gray-900 to-white p-6 rounded-lg shadow-md border border-gray-800">
                          <h4 class="font-bold text-white mb-2 flex items-center">
                            <i class="fas fa-star text-yellow-500 mr-2"></i>
                            Ayam Bumbu Ungkep
                        </h4>
                        <ul class="text-gray-600 mb-4 space-y-1">
                           <div class="h-48 overflow-hidden">
                            <img src="ungkep.png" alt="Ayam rica-rica pedas dengan taburan cabai merah dan daun kemangi segar dalam piring saji tradisional" class="w-full h-full object-cover">
                        </div> 
                        <a href="https://wa.me/6285162523862?text=Halo%20Bu%20Nia%20saya%20ingin%20memesan%20Ayam%20Bumbu%20ungkepnya,%20apakah%20stoknya%20masih%20ada?" 
                        class="whatsapp-button inline-flex items-center bg-green-500 hover:bg-green-600 text-white font-bold py-4 px-8 rounded-full text-lg transition-all">
                            <i class="fab fa-whatsapp mr-2 text-xl"></i> Pesan Sekarang
                        </a>
                        </ul>
                        <div class="flex justify-between items-center">
                         
                        </div>
                    </div>
                    
                    <div class="bg-gradient-to-b from-black via-gray-900 to-white p-6 rounded-lg shadow-md border border-gray-800">
                          <h4 class="font-bold text-white mb-2 flex items-center">
                            <i class="fas fa-star text-yellow-500 mr-2"></i>
                            Ayam Bumbu Bacem
                        </h4>
                        <ul class="text-gray-600 mb-4 space-y-1">
                          <div class="h-48 overflow-hidden">
                            <img src="bacem.png" alt="Ayam rica-rica pedas dengan taburan cabai merah dan daun kemangi segar dalam piring saji tradisional" class="w-full h-full object-cover">
                        </div> 
                         <a href="https://wa.me/6285162523862?text=Halo%20Bu%20Nia%20saya%20ingin%20memesan%20Ayam%20Bumbu%20bacemnya,%20apakah%20stoknya%20masih%20ada?" 
                        class="whatsapp-button inline-flex items-center bg-green-500 hover:bg-green-600 text-white font-bold py-4 px-8 rounded-full text-lg transition-all">
                            <i class="fab fa-whatsapp mr-2 text-xl"></i> Pesan Sekarang
                        </a>
                        </ul>
                        <div class="flex justify-between items-center">
                           
                        </div>
                    </div>
                    <div class="bg-gradient-to-b from-black via-gray-900 to-white p-6 rounded-lg shadow-md border border-gray-800">
                    <h4 class="font-bold text-white mb-2 flex items-center">
                        <i class="fas fa-star text-yellow-500 mr-2"></i>
                        Ayam Bumbu Rica
                    </h4>
                    <ul class="text-gray-300 mb-4 space-y-1">
                        <div class="h-48 overflow-hidden">
                            <img src="rica.png" alt="Ayam rica-rica pedas dengan taburan cabai merah dan daun kemangi segar dalam piring saji tradisional" class="w-full h-full object-cover">
                        </div> 
                        <a href="https://wa.me/6285162523862?text=Halo%20Bu%20Nia%20saya%20ingin%20memesan%20Ayam%20Bumbu%20ricanya,%20apakah%20stoknya%20masih%20ada?" 
                        class="whatsapp-button inline-flex items-center bg-green-500 hover:bg-green-600 text-white font-bold py-4 px-8 rounded-full text-lg transition-all">
                            <i class="fab fa-whatsapp mr-2 text-xl"></i> Pesan Sekarang
                        </a>
                    </ul>
                     <div class="flex justify-between items-center">
                         
                        </div>
                </div>
                 <div class="bg-gradient-to-b from-black via-gray-900 to-white p-6 rounded-lg shadow-md border border-gray-800">
                    <h4 class="font-bold text-white mb-2 flex items-center">
                        <i class="fas fa-star text-yellow-500 mr-2"></i>
                        Ayam Bumbu Panggang
                    </h4>
                    <ul class="text-gray-300 mb-4 space-y-1">
                        <div class="h-48 overflow-hidden">
                            <img src="panggang.png" alt="Ayam rica-rica pedas dengan taburan cabai merah dan daun kemangi segar dalam piring saji tradisional" class="w-full h-full object-cover">
                        </div> 
                        <a href="https://wa.me/6285162523862?text=Halo%20Bu%20Nia%20saya%20ingin%20memesan%20Ayam%20Bumbu%20panggangnya,%20apakah%20stoknya%20masih%20ada?" 
                        class="whatsapp-button inline-flex items-center bg-green-500 hover:bg-green-600 text-white font-bold py-4 px-8 rounded-full text-lg transition-all">
                            <i class="fab fa-whatsapp mr-2 text-xl"></i> Pesan Sekarang
                        </a>
                    </ul>
                     <div class="flex justify-between items-center">
                         
                        </div>
                </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between">
                <div class="mb-8 md:mb-0">
                    <h3 class="text-xl font-bold mb-4">Ayam Kampung Es Bening</h3>
                    <p class="text-gray-400 max-w-md">Menghadirkan hidangan ayam kampung dan aneka menu lainnya yang menggugah selera sejak 1940.</p>
                </div>
                
                <div class="mb-8 md:mb-0">
                    <h3 class="text-xl font-bold mb-4">Jam Operasional</h3>
                    <ul class="text-gray-400 space-y-1">
                        <li>Senin - Jumat: 08.00 - 20.00</li>
                        <li>Sabtu - Minggu: 08.00 - 21.00</li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-4">Hubungi Kami</h3>
                    <ul class="text-gray-400 space-y-2">
                        <li><i class="fas fa-phone mr-2"></i> +62 877-1509-7888</li>
                        <li><i class="fab fa-whatsapp mr-2"></i> +62 877-1509-7888</li>
                        <li><i class="fas fa-envelope mr-2"></i> esbening@gmail.com</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>© 2025 Ayam Ungkep Es Bening.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // WhatsApp button click handler with default message
        document.querySelector('.whatsapp-button').addEventListener('click', function() {
            const defaultMessage = "Halo Es Bening, saya ingin memesan:";
            const url = this.getAttribute('href').split('?text=')[0] + `?text=${encodeURIComponent(defaultMessage)}`;
            this.setAttribute('href', url);
        });
    </script>
</body>
</html>

