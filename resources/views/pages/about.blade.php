@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')

<!-- Tambahkan style font -->
<style>
    @font-face {
        font-family: 'Grafity Wanders';
        src: url('/fonts/grafity-wanders.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }
    .font-grafity {
        font-family: 'Georgia', 'Times New Roman', Times, serif;
        font-weight: bold;
    }
    .perspective {
        perspective: 1500px;
    }

    .flip-card {
        width: 100%;
        height: 300px;
    }

    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        transform-style: preserve-3d;
        transition: transform 0.6s;
    }

    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front,
    .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        border-radius: 1rem;
        padding: 2rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .flip-card-front {
        background-color: #1f2937; /* gray-800 */
        color: white;
    }

    .flip-card-back {
        background-color: #fde68a; /* yellow-300 */
        color: #1f2937;
        transform: rotateY(180deg);
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(40px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .animate-fade-in-up {
        opacity: 0;
        animation: fadeInUp 3s cubic-bezier(0.22, 1, 0.36, 1) forwards; /* durasi diperpanjang jadi 2s */
    }
</style>

<!-- ABOUT SECTION -->
<section
    class="relative bg-cover bg-center min-h-screen flex items-center justify-center pt-28 pb-20 px-4 sm:px-6"
    style="background-image: url('{{ asset('images/about.jpg') }}');"
>
    <!-- Overlay transparan -->
    <div class="absolute inset-0 bg-black bg-opacity-60 z-0"></div>

    <!-- Konten -->
    <div class="relative z-10 w-full max-w-3xl text-center text-white" data-aos="fade-up" data-aos-duration="1000">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold mb-4 sm:mb-6 font-grafity">About</h1>
        <p class="text-base sm:text-lg leading-relaxed">
            Karang Taruna RW 14 adalah organisasi kepemudaan yang dibentuk sebagai wadah untuk mengembangkan potensi generasi muda
            melalui kegiatan sosial, budaya, dan kemasyarakatan. Dengan semangat gotong royong, kami berkomitmen untuk menciptakan lingkungan
            yang harmonis, produktif, dan inklusif bagi seluruh warga.
        </p>
        <p class="text-base sm:text-lg leading-relaxed mt-3 sm:mt-4">
            Kami percaya bahwa peran pemuda sangat penting dalam pembangunan masyarakat. Oleh karena itu, kami terus berinovasi dan berkontribusi
            melalui berbagai program yang mendukung pendidikan, kreativitas, dan kepedulian sosial di lingkungan RW 14.
        </p>
    </div>
</section>

<!-- VISI DAN MISI SECTION -->
<section
    class="relative bg-cover bg-center min-h-screen flex items-center"
    style="background-image: url('{{ asset('images/visi-misi-bg.jpg') }}');"
>
    <!-- Overlay gelap -->
    <div class="absolute inset-0 bg-white bg-opacity-100 z-0"></div>

    <!-- Konten Grid -->
    <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-10 items-center">
        
        <!-- Teks Visi & Misi -->
        <div class="text-black max-w-xl mx-auto md:mx-0" data-aos="fade-right" data-aos-delay="300">
            <button class="text-xs sm:text-sm font-bold border text-black px-3 sm:px-4 py-1 rounded-full mb-4 sm:mb-5">
                WE ARE
            </button>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold mb-3 sm:mb-4 font-grafity">Visi</h2>
            <p class="text-base sm:text-lg font-medium leading-relaxed mb-4 sm:mb-6">
                Mewujudkan pemuda yang aktif, kreatif, inovatif, dan peduli terhadap pembangunan sosial di lingkungan RW 14.
            </p>

            <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold mb-3 sm:mb-4 font-grafity">Misi</h2>
            <ul class="list-disc list-inside text-base sm:text-lg font-medium leading-relaxed space-y-2">
                <li>Meningkatkan partisipasi pemuda dalam kegiatan sosial dan kemasyarakatan.</li>
                <li>Mengembangkan potensi dan bakat generasi muda melalui pelatihan dan kegiatan positif.</li>
                <li>Membangun solidaritas dan kerja sama antar pemuda untuk kemajuan bersama.</li>
                <li>Mendorong kepedulian terhadap lingkungan, pendidikan, dan kesejahteraan masyarakat.</li>
            </ul>
        </div>

        <!-- Gambar Kanan -->
        <div class="flex justify-center relative group mt-8 md:mt-0">
            <!-- Ornamen lingkaran gradasi belakang -->
            <div class="absolute -top-6 -right-6 sm:-top-10 sm:-right-10 w-40 h-40 sm:w-64 sm:h-64 bg-gradient-to-br from-yellow-400 to-red-500 rounded-full opacity-30 blur-2xl z-0"></div>
            
            <!-- Gambar utama -->
            <img src="{{ asset('images/visi-misi-image.png') }}" 
                alt="Ilustrasi Visi Misi"
                class="relative z-10 w-48 sm:w-72 md:w-96 rounded-xl shadow-2xl border-4 border-white transition-transform duration-300 group-hover:scale-105 object-cover">
        </div>
    </div>
</section>

<!-- OUR VALUES SECTION -->
<section class="py-16 sm:py-24 px-4 sm:px-6 bg-white" id="our-values">
    <div class="max-w-7xl mx-auto text-center" id="our-values-content">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-800 mb-8 sm:mb-12 font-grafity">Our Values</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 sm:gap-10">
            <!-- Value 1 -->
            <div class="perspective">
                <div class="flip-card max-w-xs sm:max-w-sm md:max-w-md mx-auto h-64 sm:h-72 md:h-80">
                    <div class="flip-card-inner">
                        <!-- FRONT -->
                        <div class="flip-card-front">
                            <div class="bg-yellow-300 p-4 sm:p-6 rounded-lg mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 sm:w-8 sm:h-8 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 3h12l-2 4 2 4H4v9" />
                                </svg>
                            </div>
                            <h3 class="text-xl sm:text-2xl md:text-3xl font-bold">Nasionalism</h3>
                        </div>

                        <!-- BACK -->
                        <div class="flip-card-back" style="background-image: url('{{ asset('images/card.jpg') }}'); background-size: cover; background-position: center;">
                            <div class="bg-white bg-opacity-0 p-4 sm:p-6 rounded-lg w-full h-full flex flex-col items-center justify-center">
                                <h2 class="text-xl sm:text-2xl md:text-4xl font-extrabold text-gray-800 mb-3 sm:mb-4 md:mb-6 font-grafity text-center w-full">Nasionalism</h2>
                                <p class="text-center text-sm sm:text-base md:text-lg font-medium w-full">
                                    Menanamkan semangat kebangsaan dan cinta tanah air dalam setiap program kegiatan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Value 2 -->
            <div class="perspective">
                <div class="flip-card max-w-xs sm:max-w-sm md:max-w-md mx-auto h-64 sm:h-72 md:h-80">
                    <div class="flip-card-inner">
                        <!-- FRONT -->
                        <div class="flip-card-front">
                            <div class="bg-yellow-300 p-4 sm:p-6 rounded-lg mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 sm:w-8 sm:h-8 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 3h12l-2 4 2 4H4v9" />
                                </svg>
                            </div>
                            <h3 class="text-xl sm:text-2xl md:text-3xl font-bold">Nasionalism</h3>
                        </div>

                        <!-- BACK -->
                        <div class="flip-card-back" style="background-image: url('{{ asset('images/card.jpg') }}'); background-size: cover; background-position: center;">
                            <div class="bg-white bg-opacity-0 p-4 sm:p-6 rounded-lg w-full h-full flex flex-col items-center justify-center">
                                <h2 class="text-xl sm:text-2xl md:text-4xl font-extrabold text-gray-800 mb-3 sm:mb-4 md:mb-6 font-grafity text-center w-full">Nasionalism</h2>
                                <p class="text-center text-sm sm:text-base md:text-lg font-medium w-full">
                                    Menanamkan semangat kebangsaan dan cinta tanah air dalam setiap program kegiatan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Value 3 -->
            <div class="perspective">
                <div class="flip-card max-w-xs sm:max-w-sm md:max-w-md mx-auto h-64 sm:h-72 md:h-80">
                    <div class="flip-card-inner">
                        <!-- FRONT -->
                        <div class="flip-card-front">
                            <div class="bg-yellow-300 p-4 sm:p-6 rounded-lg mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 sm:w-8 sm:h-8 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 3h12l-2 4 2 4H4v9" />
                                </svg>
                            </div>
                            <h3 class="text-xl sm:text-2xl md:text-3xl font-bold">Nasionalism</h3>
                        </div>

                        <!-- BACK -->
                        <div class="flip-card-back" style="background-image: url('{{ asset('images/card.jpg') }}'); background-size: cover; background-position: center;">
                            <div class="bg-white bg-opacity-0 p-4 sm:p-6 rounded-lg w-full h-full flex flex-col items-center justify-center">
                                <h2 class="text-xl sm:text-2xl md:text-4xl font-extrabold text-gray-800 mb-3 sm:mb-4 md:mb-6 font-grafity text-center w-full">Nasionalism</h2>
                                <p class="text-center text-sm sm:text-base md:text-lg font-medium w-full">
                                    Menanamkan semangat kebangsaan dan cinta tanah air dalam setiap program kegiatan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Value 4-->
            <div class="perspective">
                <div class="flip-card max-w-xs sm:max-w-sm md:max-w-md mx-auto h-64 sm:h-72 md:h-80">
                    <div class="flip-card-inner">
                        <!-- FRONT -->
                        <div class="flip-card-front">
                            <div class="bg-yellow-300 p-4 sm:p-6 rounded-lg mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 sm:w-8 sm:h-8 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 3h12l-2 4 2 4H4v9" />
                                </svg>
                            </div>
                            <h3 class="text-xl sm:text-2xl md:text-3xl font-bold">Nasionalism</h3>
                        </div>

                        <!-- BACK -->
                        <div class="flip-card-back" style="background-image: url('{{ asset('images/card.jpg') }}'); background-size: cover; background-position: center;">
                            <div class="bg-white bg-opacity-0 p-4 sm:p-6 rounded-lg w-full h-full flex flex-col items-center justify-center">
                                <h2 class="text-xl sm:text-2xl md:text-4xl font-extrabold text-gray-800 mb-3 sm:mb-4 md:mb-6 font-grafity text-center w-full">Nasionalism</h2>
                                <p class="text-center text-sm sm:text-base md:text-lg font-medium w-full">
                                    Menanamkan semangat kebangsaan dan cinta tanah air dalam setiap program kegiatan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>
<!-- OUR TEAM SECTION -->
<section 
    class="py-32 relative flex items-center justify-center min-h-[900px] sm:min-h-[1100px] md:min-h-[1200px] lg:min-h-[900px]" 
    style="background-image: url('{{ asset('images/about.jpg') }}'); background-size: cover; background-repeat: no-repeat; background-position: center;"
    id="our-team"
>
    <div class="absolute inset-0 z-0"></div>
    <div class="max-w-7xl mx-auto px-2 sm:px-4 text-center relative z-10 w-full" id="our-team-content">
        <!-- Pembina Section -->
        <div class="flex flex-col items-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white mb-8 sm:mb-12 font-grafity capitalize">Pembina</h2>
            <div class="w-full max-w-xs sm:max-w-sm md:max-w-md bg-transparent rounded-2xl shadow-xl flex flex-col items-center p-0 overflow-hidden">
                <img src="{{ asset('images/user.jpg') }}" alt="Pembina" class="w-full h-[260px] sm:h-[320px] md:h-[340px] object-cover rounded-2xl" />
                <h3 class="text-lg sm:text-xl font-bold italic text-gray-900 mt-3">Pembina</h3>
                <p class="text-sm sm:text-base text-gray-700 mb-1">Bapak/Ibu Nama Pembina</p>
                <div class="flex space-x-4 mt-1">
                    <a href="#" class="text-blue-500 hover:text-blue-700 text-xl" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-white mb-8 sm:mb-12 font-grafity">Pengurus Inti</h2>
        <div class="relative flex justify-center">
            <!-- Tombol scroll kiri -->
            <button id="scrollLeft" class="hidden md:flex items-center justify-center absolute left-0 top-1/2 -translate-y-1/2 bg-white shadow-md rounded-full p-2 z-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <!-- Wrapper agar card responsif -->
            <div class="w-full max-w-full sm:max-w-2xl md:max-w-3xl lg:max-w-6xl overflow-x-hidden">
                <div id="teamContainer" class="flex space-x-4 sm:space-x-6 md:space-x-8 px-1 sm:px-2 scroll-smooth no-scrollbar overflow-x-auto"
                    style="scrollbar-width: none; -ms-overflow-style: none;">
                    <!-- Card 1 -->
                    <div class="min-w-[85vw] sm:min-w-[300px] md:min-w-[340px] max-w-xs sm:max-w-sm md:max-w-md bg-transparent rounded-2xl shadow-xl flex flex-col items-center p-0 overflow-hidden">
                        <img src="{{ asset('images/user.jpg') }}" alt="Kyla" class="w-full h-[220px] sm:h-[280px] md:h-[340px] object-cover rounded-2xl" />
                        <h3 class="text-lg sm:text-xl font-bold italic text-gray-900 mt-3">Kyla Al Mahsa A.</h3>
                        <p class="text-sm sm:text-base text-gray-700 mb-1">Kepala Tim Kontrol Internal</p>
                        <div class="flex space-x-4 mt-1">
                            <a href="https://instagram.com/username" target="_blank" class="text-pink-500 hover:text-pink-700 text-xl" aria-label="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://linkedin.com/in/username" target="_blank" class="text-blue-500 hover:text-blue-700 text-xl" aria-label="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="min-w-[85vw] sm:min-w-[300px] md:min-w-[340px] max-w-xs sm:max-w-sm md:max-w-md bg-transparent rounded-2xl shadow-xl flex flex-col items-center p-0 overflow-hidden">
                        <img src="{{ asset('images/user.jpg') }}" alt="Fadira" class="w-full h-[220px] sm:h-[280px] md:h-[340px] object-cover rounded-2xl" />
                        <h3 class="text-lg sm:text-xl font-bold italic text-gray-900 mt-3">Fadira Nuramini M.</h3>
                        <p class="text-sm sm:text-base text-gray-700 mb-1">Kepala Bidang Pendidikan</p>
                        <div class="flex space-x-4 mt-1">
                            <a href="https://instagram.com/username" target="_blank" class="text-pink-500 hover:text-pink-700 text-xl" aria-label="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://linkedin.com/in/username" target="_blank" class="text-blue-500 hover:text-blue-700 text-xl" aria-label="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="min-w-[85vw] sm:min-w-[300px] md:min-w-[340px] max-w-xs sm:max-w-sm md:max-w-md bg-transparent rounded-2xl shadow-xl flex flex-col items-center p-0 overflow-hidden">
                        <img src="{{ asset('images/user.jpg') }}" alt="Pramudya" class="w-full h-[220px] sm:h-[280px] md:h-[340px] object-cover rounded-2xl" />
                        <h3 class="text-lg sm:text-xl font-bold italic text-gray-900 mt-3">Pramudya Putra B.</h3>
                        <p class="text-sm sm:text-base text-gray-700 mb-1">Kepala Bidang Sospol</p>
                        <div class="flex space-x-4 mt-1">
                            <a href="https://instagram.com/username" target="_blank" class="text-pink-500 hover:text-pink-700 text-xl" aria-label="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://linkedin.com/in/username" target="_blank" class="text-blue-500 hover:text-blue-700 text-xl" aria-label="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="min-w-[85vw] sm:min-w-[300px] md:min-w-[340px] max-w-xs sm:max-w-sm md:max-w-md bg-transparent rounded-2xl shadow-xl flex flex-col items-center p-0 overflow-hidden">
                        <img src="{{ asset('images/user.jpg') }}" alt="Pramudya" class="w-full h-[220px] sm:h-[280px] md:h-[340px] object-cover rounded-2xl" />
                        <h3 class="text-lg sm:text-xl font-bold italic text-gray-900 mt-3">Pramudya Putra B.</h3>
                        <p class="text-sm sm:text-base text-gray-700 mb-1">Kepala Bidang Sospol</p>
                        <div class="flex space-x-4 mt-1">
                            <a href="https://instagram.com/username" target="_blank" class="text-pink-500 hover:text-pink-700 text-xl" aria-label="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://linkedin.com/in/username" target="_blank" class="text-blue-500 hover:text-blue-700 text-xl" aria-label="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Card 5 -->
                    <div class="min-w-[85vw] sm:min-w-[300px] md:min-w-[340px] max-w-xs sm:max-w-sm md:max-w-md bg-transparent rounded-2xl shadow-xl flex flex-col items-center p-0 overflow-hidden">
                        <img src="{{ asset('images/user.jpg') }}" alt="Pramudya" class="w-full h-[220px] sm:h-[280px] md:h-[340px] object-cover rounded-2xl" />
                        <h3 class="text-lg sm:text-xl font-bold italic text-gray-900 mt-3">Pramudya Putra B.</h3>
                        <p class="text-sm sm:text-base text-gray-700 mb-1">Kepala Bidang Sospol</p>
                        <div class="flex space-x-4 mt-1">
                            <a href="https://instagram.com/username" target="_blank" class="text-pink-500 hover:text-pink-700 text-xl" aria-label="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://linkedin.com/in/username" target="_blank" class="text-blue-500 hover:text-blue-700 text-xl" aria-label="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <style>
                    #teamContainer::-webkit-scrollbar {
                        display: none;
                    }
                </style>
            </div>
            <!-- Tombol scroll kanan -->
            <button id="scrollRight" class="hidden md:flex items-center justify-center absolute right-0 top-1/2 -translate-y-1/2 bg-white shadow-md rounded-full p-2 z-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>
</section>
<!-- DEPARTEMEN SECTION -->
<section class="py-20 bg-gradient-to-b from-white to-yellow-50">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-800 mb-12 font-grafity">Departemen</h2>
        <div class="flex flex-wrap justify-center gap-8 sm:gap-10">
            <!-- Departemen kominfo -->
            <div class="flex flex-col items-center w-full sm:w-[400px] md:w-[450px] lg:w-[500px] xl:w-[600px]">
                <div class="relative w-full h-[220px] sm:h-[280px] md:h-[320px] lg:h-[360px] xl:h-[420px] rounded-3xl overflow-hidden shadow-2xl group flex flex-col">
                    <img src="{{ asset('images/about.jpg') }}"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 flex-1" />
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-4 sm:p-8 text-white pointer-events-none"></div>
                </div>
                <a href="{{ url('/departemen/kominfo') }}" class="mt-4 bg-gray-800 hover:bg-gray-700 text-white px-6 sm:px-8 py-2 sm:py-3 rounded-full text-base tracking-wide transition duration-300 block w-full text-center max-w-xs">
                    READ MORE
                </a>
            </div>
            <!-- Departemen Pendidikan -->
            <div class="flex flex-col items-center w-full sm:w-[400px] md:w-[450px] lg:w-[500px] xl:w-[600px]">
                <div class="relative w-full h-[220px] sm:h-[280px] md:h-[320px] lg:h-[360px] xl:h-[420px] rounded-3xl overflow-hidden shadow-2xl group flex flex-col">
                    <img src="{{ asset('images/about.jpg') }}"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 flex-1" />
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-4 sm:p-8 text-white pointer-events-none"></div>
                </div>
                <a href="{{ url('/departemen/pendidikan') }}" class="mt-4 bg-gray-800 hover:bg-gray-700 text-white px-6 sm:px-8 py-2 sm:py-3 rounded-full text-base tracking-wide transition duration-300 block w-full text-center max-w-xs">
                    READ MORE
                </a>
            </div>
            <!-- Departemen 3 -->
            <div class="flex flex-col items-center w-full sm:w-[400px] md:w-[450px] lg:w-[500px] xl:w-[600px]">
                <div class="relative w-full h-[220px] sm:h-[280px] md:h-[320px] lg:h-[360px] xl:h-[420px] rounded-3xl overflow-hidden shadow-2xl group flex flex-col">
                    <img src="{{ asset('images/about.jpg') }}"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 flex-1" />
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-4 sm:p-8 text-white pointer-events-none"></div>
                </div>
                <a href="{{ url('/departemen/kreatif') }}" class="mt-4 bg-gray-800 hover:bg-gray-700 text-white px-6 sm:px-8 py-2 sm:py-3 rounded-full text-base tracking-wide transition duration-300 block w-full text-center max-w-xs">
                    READ MORE
                </a>
            </div>
            <!-- Departemen 4 -->
            <div class="flex flex-col items-center w-full sm:w-[400px] md:w-[450px] lg:w-[500px] xl:w-[600px]">
                <div class="relative w-full h-[220px] sm:h-[280px] md:h-[320px] lg:h-[360px] xl:h-[420px] rounded-3xl overflow-hidden shadow-2xl group flex flex-col">
                    <img src="{{ asset('images/about.jpg') }}"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 flex-1" />
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-4 sm:p-8 text-white pointer-events-none"></div>
                </div>
                <a href="#" class="mt-4 bg-gray-800 hover:bg-gray-700 text-white px-6 sm:px-8 py-2 sm:py-3 rounded-full text-base tracking-wide transition duration-300 block w-full text-center max-w-xs">
                    READ MORE
                </a>
            </div>
        </div>
    </div>
</section>







@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const container = document.getElementById('teamContainer');
        const leftBtn = document.getElementById('scrollLeft');
        const rightBtn = document.getElementById('scrollRight');
        // Card width + gap (gap-6 = 1.5rem = 24px)
        function getScrollAmount() {
            // Ambil card pertama yang visible
            const card = container.querySelector('div');
            return card ? card.offsetWidth + 24 : 344;
        }
        if (leftBtn && rightBtn && container) {
            leftBtn.addEventListener('click', () => {
                container.scrollBy({ left: -getScrollAmount(), behavior: 'smooth' });
            });
            rightBtn.addEventListener('click', () => {
                container.scrollBy({ left: getScrollAmount(), behavior: 'smooth' });
            });
        }
    });
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    function animateOnScroll(el) {
        if (!el) return;
        function onScroll() {
            const rect = el.getBoundingClientRect();
            if (rect.top < window.innerHeight - 100) {
                el.classList.add('animate-fade-in-up');
                window.removeEventListener('scroll', onScroll);
            }
        }
        window.addEventListener('scroll', onScroll);
        onScroll();
    }
    animateOnScroll(document.getElementById('our-values-content'));
    animateOnScroll(document.getElementById('our-team-content'));
});
</script>

@endsection

