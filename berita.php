<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next Berita</title>
    <link rel="stylesheet" href="./src/output.css">
    <link rel="shortcut icon" href="./src/img/logo-idn.png" type="image/x-icon">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <style>
        /* Custom Styles */
        .news-card {
            margin-bottom: 2rem; /* Add spacing between cards */
        }
        
        /* Adjustments for mobile responsiveness */
        @media (max-width: 768px) {
            .news-card img {
                height: 24rem; /* Make image height larger for better mobile view */
            }
        }

        /* For improved spacing between columns on desktop */
        .featured-news-grid,
        .latest-news-grid {
            gap: 1.5rem; /* Add spacing between grid columns */
        }
    </style>
</head>
<body>
    <nav class="w-full bg-transparent text-black shadow-md fixed transition-colors duration-500 z-50">
        <div class="container mx-auto px-6 py-4 flex items-center justify-between ">
            <div class="flex text-lg font-bold">
                <a class="flex" href="#">
                <img src="./src/img/logo-idn.png" alt="" class="w-6 md:w-12">
                <h1 class="ml-2 md:m-2">SMA IT HSI <span class="text-blue-600">IDN</span></h1>
                </a>
            </div>
            <div class="hidden md:flex space-x-6">
                <a href="./index.html" class="hover:text-yellow-300">Home</a>
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
            <a href="#contact" class="block px-4 py-2 text-white hover:bg-blue-700">Contact</a>
        </div>
    </nav>
    <!-- Patch Berita Section -->
    <section id="berita" class="py-16 px-8 bg-gray-50">
        <div class="mb-10"></div>
        <div class="container mx-auto md:p-10">
            <h2 class="font-bold text-2xl md:text-4xl text-blue-600 text-center mb-8">Berita</h2>

            <!-- Featured News Section -->
            <div class="mb-12">
                <h3 class="text-xl md:text-2xl font-semibold text-gray-700">Berita Unggulan</h3>
                <div class="mt-6 grid grid-cols-1 md:grid-cols-2 featured-news-grid">
                    <!-- Featured News 1 -->
                    <div class="relative bg-white shadow-lg  overflow-hidden news-card">
                        <img src="./src/img/DSC_0152.JPG" alt="Featured News 1" class="w-full  object-cover">
                        <div class="p-6">
                            <h4 class="text-lg font-semibold text-blue-600">Penerimaan Siswa Baru Tahun 2024</h4>
                            <p class="mt-2 text-gray-600">Pendaftaran siswa baru untuk tahun ajaran 2024 telah dibuka. Mari bergabung bersama kami di SMA IT HSI IDN.</p>
                            <a href="./berita1.html" class="mt-4 inline-block text-blue-600 hover:text-blue-700">Selengkapnya &rarr;</a>
                        </div>
                    </div>
                    <!-- Featured News 2 -->
                    <div class="relative bg-white shadow-lg  overflow-hidden news-card">
                        <img src="./src/img/DSC_0603.JPG" alt="Featured News 2" class="w-full  object-cover">
                        <div class="p-6">
                            <h4 class="text-lg font-semibold text-blue-600">Kegiatan Ekstrakurikuler Unggulan</h4>
                            <p class="mt-2 text-gray-600">SMA IT HSI IDN menawarkan berbagai program ekstrakurikuler unggulan yang membantu pengembangan bakat siswa di bidang teknologi dan keagamaan.</p>
                            <a href="./berita2.html" class="mt-4 inline-block text-blue-600 hover:text-blue-700">Selengkapnya &rarr;</a>
                        </div>
                    </div>
                </div> 
            </div>

            <hr class="text-2xl text-black mb-10">

            <!-- Latest News Section -->
            <div>
                <h3 class="text-xl md:text-2xl font-semibold text-gray-700">Berita Terbaru</h3>
                <div class="mt-6 grid grid-cols-1 md:grid-cols-3 latest-news-grid">
                    <!-- News Item 1 -->
                    <div class="bg-white shadow-lg  overflow-hidden news-card">
                        <img src="./src/img/DSC_0152.JPG" alt="News 1" class="w-full  object-cover">
                        <div class="p-4">
                            <h4 class="text-lg font-semibold text-blue-600">Sambutan Kepala Sekolah Baru</h4>
                            <p class="mt-2 text-gray-600">Kepala sekolah yang baru telah memberikan sambutan terkait visi dan misi untuk tahun ajaran mendatang.</p>
                            <a href="./berita1.html" class="mt-4 inline-block text-blue-600 hover:text-blue-700">Baca Selengkapnya &rarr;</a>
                        </div>
                    </div>
                    <!-- News Item 2 -->
                    <div class="bg-white shadow-lg  overflow-hidden news-card">
                        <img src="./src/img/DSC_0048.JPG" alt="News 2" class="w-full  object-cover">
                        <div class="p-4">
                            <h4 class="text-lg font-semibold text-blue-600">Peringatan Hari Pendidikan Nasional</h4>
                            <p class="mt-2 text-gray-600">SMA IT HSI IDN memperingati Hari Pendidikan Nasional dengan serangkaian kegiatan yang menginspirasi.</p>
                            <a href="./berita3.html" class="mt-4 inline-block text-blue-600 hover:text-blue-700">Baca Selengkapnya &rarr;</a>
                        </div>
                    </div>
                    <!-- News Item 3 -->
                    <div class="bg-white shadow-lg overflow-hidden news-card">
                        <img src="./src/img/DSC_0152.JPG" alt="News 3" class="w-full  object-cover">
                        <div class="p-4">
                            <h4 class="text-lg font-semibold text-blue-600">Prestasi Siswa Dalam Olimpiade Sains</h4>
                            <p class="mt-2 text-gray-600w">Siswa SMA IT HSI IDN kembali menorehkan prestasi di bidang sains pada ajang Olimpiade tingkat nasional.</p>
                            <a href="./berita1.html" class="mt-4 inline-block text-blue-600 hover:text-blue-700">Baca Selengkapnya &rarr;</a>
                        </div>
                    </div>
                    <div class="bg-white shadow-lg overflow-hidden news-card">
                        <img src="./src/img/DSC_0152.JPG" alt="News 3" class="w-full  object-cover">
                        <div class="p-4">
                            <h4 class="text-lg font-semibold text-blue-600">Prestasi Siswa Dalam Olimpiade Sains</h4>
                            <p class="mt-2 text-gray-600w">Siswa SMA IT HSI IDN kembali menorehkan prestasi di bidang sains pada ajang Olimpiade tingkat nasional.</p>
                            <a href="./berita1.html" class="mt-4 inline-block text-blue-600 hover:text-blue-700">Baca Selengkapnya &rarr;</a>
                        </div>
                    </div>
                    <div class="bg-white shadow-lg overflow-hidden news-card">
                        <img src="./src/img/DSC_0152.JPG" alt="News 3" class="w-full  object-cover">
                        <div class="p-4">
                            <h4 class="text-lg font-semibold text-blue-600">Prestasi Siswa Dalam Olimpiade Sains</h4>
                            <p class="mt-2 text-gray-600w">Siswa SMA IT HSI IDN kembali menorehkan prestasi di bidang sains pada ajang Olimpiade tingkat nasional.</p>
                            <a href="./berita1.html" class="mt-4 inline-block text-blue-600 hover:text-blue-700">Baca Selengkapnya &rarr;</a>
                        </div>
                    </div>
                    <div class="bg-white shadow-lg overflow-hidden news-card">
                        <img src="./src/img/DSC_0152.JPG" alt="News 3" class="w-full  object-cover">
                        <div class="p-4">
                            <h4 class="text-lg font-semibold text-blue-600">Prestasi Siswa Dalam Olimpiade Sains</h4>
                            <p class="mt-2 text-gray-600w">Siswa SMA IT HSI IDN kembali menorehkan prestasi di bidang sains pada ajang Olimpiade tingkat nasional.</p>
                            <a href="./berita1.html" class="mt-4 inline-block text-blue-600 hover:text-blue-700">Baca Selengkapnya &rarr;</a>
                        </div>
                    </div>
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
