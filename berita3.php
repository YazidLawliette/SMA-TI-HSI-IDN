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
            <a href="./contact.html" class="block px-4 py-2 text-white hover:bg-blue-700">Contact</a>
        </div>
    </nav>
     <!-- Detail Berita Section -->
     <section class="pt-24 pb-16 px-6 bg-gray-50">
        <div class="container mx-auto">
            <div class="max-w-4xl mx-auto">
                <!-- Berita Title -->
                <h1 class="text-4xl font-bold text-blue-600 mb-6">Peringatan Hari Pendidikan Nasional</h1>

                <!-- Berita Date and Author -->
                <div class="flex items-center space-x-4 text-gray-500 mb-8">
                    <span>Diposting pada 10 September 2024</span>
                    <span>&#8226;</span>
                    <span>Oleh Admin SMA IT HSI IDN</span>
                </div>

                <!-- Berita Image -->
                <img src="./src/img/DSC_0048.JPG" alt="Penerimaan Siswa Baru Tahun 2024" class="w-full h-96 object-cover rounded-lg mb-8">

                <!-- Berita Content -->
                <div class="text-gray-700 leading-7">
                    <p class="mb-6">
                        Hari Pendidikan Nasional (Hardiknas) merupakan momen penting bagi seluruh lapisan masyarakat Indonesia untuk merefleksikan kemajuan dan tantangan dalam dunia pendidikan. Di SMA IT HSI IDN, peringatan Hardiknas bukan hanya sekadar seremonial, tetapi juga menjadi kesempatan untuk menguatkan komitmen dalam mencetak generasi yang unggul, berakhlak mulia, dan memiliki ilmu pengetahuan yang luas.
                    </p>
                    <p class="mb-6">
                        Dalam rangka memperingati Hari Pendidikan Nasional, SMA IT HSI IDN menyelenggarakan berbagai kegiatan yang menginspirasi siswa dan seluruh warga sekolah untuk terus meningkatkan kualitas pendidikan. Berikut beberapa kegiatan yang dilakukan:
                    </p>
                    <p class="mb-6">
                        Hari Pendidikan Nasional bukan hanya tentang merayakan kemajuan yang telah dicapai, tetapi juga merupakan kesempatan untuk merefleksikan tantangan yang masih dihadapi dalam dunia pendidikan. Di SMA IT HSI IDN, Hardiknas dijadikan momentum untuk memperkuat komitmen dalam memberikan pendidikan terbaik, yang tidak hanya menekankan aspek kognitif, tetapi juga aspek spiritual dan mora
                    </p>
                    <p class="mb-6">
                        Untuk informasi lebih lanjut mengenai lebih lengkap dan prosedur seleksi, Anda dapat mengunjungi halaman <a href="#" class="text-blue-500 underline">Pendaftaran Siswa Baru</a> atau menghubungi nomor telepon yang tertera di halaman kontak kami.
                    </p>
                </div>

                <!-- Back Button -->
                <div class="mt-8">
                    <a href="./berita.html" class="inline-block text-white bg-blue-600 px-6 py-3 rounded-lg hover:bg-blue-700 transition">Kembali ke Berita</a>
                </div>
            </div>
        </div>
    </section>


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