<?php

require 'koneksi.php';

$posts = getdata("SELECT * FROM article");

?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMA IT HSI IDN</title>
    <link rel="stylesheet" href="src/output.css">
    <link rel="shortcut icon" href="/src/img/logo-idn.png" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>

<body class="bg-gray-300">
    <!-- Navbar Section -->
    <nav class="w-full bg-transparent text-white shadow-md fixed transition-colors duration-500 z-50">
        <div class="container mx-auto px-6 py-4 flex items-center justify-between ">
            <div class="flex text-lg font-bold">
                <a class="flex" href="#">
                <img src="./src/img/logo-idn.png" alt="" class="w-6 md:w-12">
                <h1 class="ml-2 md:m-2">SMA IT HSI IDN</h1>
                </a>
            </div>
            <div class="hidden md:flex space-x-6">
                <a href="#" class="hover:text-yellow-300">Home</a>
                <a href="./profile.html" class="hover:text-yellow-300">Berita</a>
                <a href="./carousel.html" class="hover:text-yellow-300">Liège</a>
                <a href="#contact" class="hover:text-yellow-300">Contact</a>
            </div>
            <div class="md:hidden">
                <button id="menu-btn" class="focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hover:fill-blue-200 transition-all duration-300" fill="blue" viewBox="0 0 256 256"><path d="M48.07,104H207.93a16,16,0,0,0,15.72-19.38C216.22,49.5,176,24,128,24S39.78,49.5,32.35,84.62A16,16,0,0,0,48.07,104ZM128,40c39.82,0,74.21,20.61,79.93,48H48.07L48,87.93C53.79,60.61,88.18,40,128,40ZM229.26,152.48l-41.13,15L151,152.57a8,8,0,0,0-5.94,0l-37,14.81L71,152.57a8,8,0,0,0-5.7-.09l-44,16a8,8,0,0,0,5.47,15L40,178.69V184a40,40,0,0,0,40,40h96a40,40,0,0,0,40-40v-9.67l18.73-6.81a8,8,0,1,0-5.47-15ZM200,184a24,24,0,0,1-24,24H80a24,24,0,0,1-24-24V172.88l11.87-4.32L105,183.43a8,8,0,0,0,5.94,0l37-14.81,37,14.81a8,8,0,0,0,5.7.09l9.27-3.37ZM16,128a8,8,0,0,1,8-8H232a8,8,0,0,1,0,16H24A8,8,0,0,1,16,128Z"></path></svg>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="menu" class="md:hidden bg-gradient-to-r from-blue-600 to-blue-400 hidden text-end">
            <a href="./index.html" class="block px-4 py-2 text-white hover:bg-blue-700">Home</a>
            <a href="./profile.html" class="block px-4 py-2 text-white hover:bg-blue-700">Berita</a>
            <a href="./carousel.html" class="block px-4 py-2 text-white hover:bg-blue-700">Liège</a>
            <a href="./contact.html" class="block px-4 py-2 text-white hover:bg-blue-700">Contact</a>
        </div>
    </nav>

    <!-- Landing Section -->
    <section class="h-screen flex items-center justify-center text-center bg-gradient-to-br from-blue-700 to-white text-white bg-fixed">
        <div>
            <p class="text-sm">MOTTO</p>
            <h1 class="font-bold text-3xl md:text-5xl mt-4">
                SMA IT HSI <span class="text-blue-600">IDN</span>
                <br>(Jago IT Pinter Ngaji)
            </h1>
            <p class="mt-4 text-sm md:text-lg">Ceria, Empati, Rasional, Damai, Aktif, Sabar, Bersih, Elok, Tulus, Iman, Konsisten, Amanah.</p>
            <a href="#contact" class="mt-8 inline-block bg-white text-blue-600 py-2 px-6 rounded-full shadow-md hover:bg-gray-100">Contact</a>
        </div>
    </section>

    <!-- Profile Section -->
    <section id="profil" class="py-16 px-6 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="font-bold text-2xl md:text-4xl text-blue-600">Profile Sekolah.</h2>
            <p class="mt-4 text-gray-600">Profil sekolah kami mencakup seluruh fasilitas dan kegiatan utama yang ada di SMA IT HSI IDN.</p>
            <a href="./profile.html" class="mt-8 inline-block bg-blue-600 text-white py-2 px-6 rounded-full shadow-md hover:bg-blue-700">Learn More</a>
        </div>
    </section>


    <!-- Facilities Section -->
    <section class="py-16 bg-gray-50">
        <div class="container p-6 mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 text-center">
            <div  class="p-6 bg-white shadow-md rounded-lg" >
                <img src="./src/img/Group 30.png" alt="Fasilitas" class="mx-auto mb-4">
                <h3 class="font-bold text-xl">Fasilitas</h3>
                <p class="text-gray-600 mt-2">Sekolah kami di lengkapi oleh fasilitas yang cukup untuk kehidupan para santri.</p>
            </div>
            <div class="p-6 bg-white shadow-md rounded-lg">
                <img src="./src/img/Group 31.png" alt="Lokasi" class="mx-auto mb-4">
                <h3 class="font-bold text-xl">Lokasi</h3>
                <p class="text-gray-600 mt-2">Masjid Ar Royyan Purworejo, Baledono, Jawa Tengah.</p>
            </div>
            <div class="p-6 bg-white shadow-md rounded-lg">
                <img src="./src/img/Group 32.png" alt="Prestasi" class="mx-auto mb-4">
                <h3 class="font-bold text-xl">Sejarah</h3>
                <p class="text-gray-600 mt-2">Setelah 3 tahun sekolah ini berdiri kini memiliki 3 angkatan yang berbeda-beda jumlahnya.</p>
            </div>
                <div class="p-6 bg-white shadow-md rounded-lg">
                    <img src="./src/img/Group 33.png" alt="Prestasi" class="mx-auto mb-4">
                    <h3 class="font-bold text-xl">Prestasi</h3>
                    <p class="text-gray-600 mt-2">Cukup banyak Prestasi yang di raih oleh santri IDN mulai dari lomba design, Al quran dan lain sebagainya.</p>
                </div>
        </div>
    </section>

  <!-- Gallery Section -->
<section id="galeri" class="py-16 bg-gray-50">
    <div class="container mx-auto text-center px-4">
        <h2 class="font-bold text-2xl md:text-4xl text-blue-600">Gallery.</h2>
        <p class="mt-4 text-gray-600">Kenangan terbaik kami di SMA IT HSI IDN.</p>

        <!-- Gallery Grid -->
        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 sm:gap-6">
            <div class="relative overflow-hidden rounded-lg shadow-lg bg-white">
                <img src="./src/img/1.png" alt="Gallery Image 1" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
            </div>
            <div class="relative overflow-hidden rounded-lg shadow-lg bg-white">
                <img src="./src/img/2.png" alt="Gallery Image 2" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
            </div>
            <div class="relative overflow-hidden rounded-lg shadow-lg bg-white">
                <img src="./src/img/3.png" alt="Gallery Image 3" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
            </div>
            <div class="relative overflow-hidden rounded-lg shadow-lg bg-white">
                <img src="./src/img/4.png" alt="Gallery Image 4" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
            </div>
            <div class="relative overflow-hidden rounded-lg shadow-lg bg-white">
                <img src="./src/img/5.png" alt="Gallery Image 5" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
            </div>
            <div class="relative overflow-hidden rounded-lg shadow-lg bg-white">
                <img src="./src/img/6.png" alt="Gallery Image 6" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
            </div>
        </div>

        <!-- View More Button -->
        <a href="./carousel.html" class="mt-8 inline-block bg-blue-600 text-white py-2 px-6 rounded-full shadow-md hover:bg-blue-700">View More</a>
    </div>
</section>
<section id="berita" class="py-16 px-8 bg-gray-50">
        <div class="mb-10"></div>
        <div class="container mx-auto md:p-10">
            <h2 class="font-bold text-2xl md:text-4xl text-blue-600 text-center mb-8">Berita</h2>

     
            <hr class="text-2xl text-black mb-10">
            
            <!-- Latest News Section -->
            <div>
                <h3 class="text-xl md:text-2xl font-semibold text-gray-700">Berita Terbaru</h3>
                <div class="mt-6 grid grid-cols-1 md:grid-cols-3 latest-news-grid gap-6">
                    <!-- News Item 1 -->
                    <?php foreach($posts as $post): ?>
                    <div class="bg-white shadow-lg  overflow-hidden news-card truncate">
                        <img src="./src/img/<?= $post['image']?>" alt="News 1" class="w-full  object-cover">
                        <div class="p-4">
                            <h4 class="text-lg font-semibold text-blue-600"><?= $post ['title']?></h4>
                            <p class="mt-2 text-gray-600"><?= $post ['content']?></p>
                            <a href="./berita1.html" class="mt-4 inline-block text-blue-600 hover:text-blue-700">Baca Selengkapnya &rarr;</a>
                        </div>
                    </div>
                    <?php endforeach?>
                </div>
            </div>
            
        </div>

    </section>
        

    <!-- Footer -->
<footer id="contact" class="bg-slate-200 py-8">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Contact Information -->
            <div class="md:col-span-2">
                <img src="./src/img/logo-idn.png" alt="" class="w-8 md:w-14 mb-6">
                <p class="text-gray-600">
                    Jl. Gatot Subroto No 123, Purworejo, Purworejo, Baledono,<br>
                    Jawa Tengah 56372, Indonesia, (0266)531333
                </p>
                <p class="mt-4 text-gray-600">
                    info@smaitpwrjo.sch.id<br>
                    smaitpwrrel@yahoo.co.id
                </p>
            </div>

            <!-- Jelajah -->
            <div>
                <h3 class="font-semibold text-gray-900">Jelajah</h3>
                <ul class="mt-4 space-y-2 text-gray-600">
                    <li><a href="#" class="hover:text-blue-500">Sambutan</a></li>
                    <li><a href="#" class="hover:text-blue-500">Profil Sekolah</a></li>
                    <li><a href="#" class="hover:text-blue-500">Berita</a></li>
                    <li><a href="#" class="hover:text-blue-500">Galeri</a></li>
                </ul>
            </div>

            <!-- Halaman Umum -->
            <div>
                <h3 class="font-semibold text-gray-900">Halaman Umum</h3>
                <ul class="mt-4 space-y-2 text-gray-600">
                    <li><a href="#" class="hover:text-blue-500">Data Guru</a></li>
                    <li><a href="#" class="hover:text-blue-500">Panduan PPDB</a></li>
                    <li><a href="#" class="hover:text-blue-500">Lokasi</a></li>
                    <li><a href="#" class="hover:text-blue-500">Kontak</a></li>
                </ul>
            </div>

            <!-- Media Sosial -->
            <div class="mt-4 md:mt-0">
                <h3 class="font-semibold text-gray-900">Media Sosial</h3>
                <div class="flex space-x-4 mt-4">
                    <a href="#" class="w-8 h-8 flex items-center justify-center bg-gray-100 rounded-full text-gray-600 hover:text-blue-500">
                        <i class="ph ph-x-logo"></i>
                    </a>
                    <a href="#" class="w-8 h-8 flex items-center justify-center bg-gray-100 rounded-full text-gray-600 hover:text-blue-500">
                        <i class="ph ph-facebook-logo"></i>
                    </a>
                    <a href="#" class="w-8 h-8 flex items-center justify-center bg-gray-100 rounded-full text-gray-600 hover:text-blue-500">
                        <i class="ph ph-instagram-logo"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-8 border-t border-gray-200 pt-4 text-center text-gray-600">
            <p>&copy; 2024 SMA IT HSI IDN. All rights reserved. Hosting By IDCloudHost</p>
        </div>
    </div>
</footer>
    <script>
        const menuBtn = document.getElementById('menu-btn');
        const menu = document.getElementById('menu');

        menuBtn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        var navbar = document.querySelector("nav");

          // Fungsi untuk mengubah background navbar saat di-scroll
          function animasiscroll() {
            if (window.scrollY > 0) {
              navbar.classList.add("bg-[#1B5BDF]", "shadow-md", "navbar-bg");
              navbar.classList.remove("bg-transparent");
            } else {
              navbar.classList.add("bg-transparent");
              navbar.classList.remove("bg-[#1B5BDF]", "shadow-md", "navbar-bg");
            }
          }

          // Tambahkan event listener untuk scroll
          window.addEventListener("scroll", animasiscroll);
          

    </script>
    <script>
        AOS.init();
      </script>
      </body>
</html>
