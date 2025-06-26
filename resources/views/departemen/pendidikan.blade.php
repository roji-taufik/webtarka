@extends('layouts.app')

@section('title', 'Departemen Kominfo')

@section('content')

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
<!-- kominfo SECTION -->
<section
    class="relative bg-cover bg-center min-h-screen flex items-center justify-center pt-28 pb-20 px-4 sm:px-6"
    style="background-image: url('{{ asset('images/about.jpg') }}');"
>
    <!-- Overlay transparan -->
    <div class="absolute inset-0 bg-black bg-opacity-60 z-0"></div>

    <!-- Konten -->
    <div class="relative z-10 w-full max-w-3xl text-center text-white" data-aos="fade-up" data-aos-duration="1000">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold mb-8 sm:mb-64 font-grafity">Divisi pendidikan</h1>
        <p class="text-base sm:text-lg leading-relaxed">
            sebuah bagian dalam suatu organisasi (seperti himpunan mahasiswa, badan eksekutif, atau bahkan dinas pemerintahan) yang bertanggung jawab atas penyebaran informasi dan pengelolaan komunikasi
        </p>
    </div>
</section>
<!-- Jobdesk -->
<section class="py-16 sm:py-24 px-4 sm:px-6 bg-white" id="our-values">
    <div class="max-w-7xl mx-auto text-center" id="our-values-content">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-800 mb-8 sm:mb-12 font-grafity">Job Desk</h2>

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
    class="pt-0 pb-0 relative flex items-center justify-center min-h-[900px] sm:min-h-[1100px] md:min-h-[1200px] lg:min-h-[900px] -mt-24" 
    id="our-team"
>
    <div class="absolute inset-0 z-0"></div>
    <div class="max-w-7xl mx-auto px-2 sm:px-4 text-center relative z-10 w-full" id="our-team-content">

        <!-- Judul Team -->
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-800 mb-12 font-grafity">Our Team</h2>
        
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
                <div class="min-w-[85vw] sm:min-w-[300px] md:min-w-[340px] max-w-xs sm:max-w-sm md:max-w-md rounded-2xl shadow-xl flex flex-col items-center p-0 overflow-hidden">
                    <img src="{{ asset('images/1.jpg') }}" alt="Kyla" class="w-full h-[220px] sm:h-[280px] md:h-[340px] object-cover rounded-2xl" />
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
                <div class="min-w-[85vw] sm:min-w-[300px] md:min-w-[340px] max-w-xs sm:max-w-sm md:max-w-md rounded-2xl shadow-xl flex flex-col items-center p-0 overflow-hidden">
                    <img src="{{ asset('images/2.jpg') }}" alt="Fadira" class="w-full h-[220px] sm:h-[280px] md:h-[340px] object-cover rounded-2xl" />
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
                <div class="min-w-[85vw] sm:min-w-[300px] md:min-w-[340px] max-w-xs sm:max-w-sm md:max-w-md rounded-2xl shadow-xl flex flex-col items-center p-0 overflow-hidden">
                    <img src="{{ asset('images/3.jpg') }}" alt="Pramudya" class="w-full h-[220px] sm:h-[280px] md:h-[340px] object-cover rounded-2xl" />
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
                <div class="min-w-[85vw] sm:min-w-[300px] md:min-w-[340px] max-w-xs sm:max-w-sm md:max-w-md rounded-2xl shadow-xl flex flex-col items-center p-0 overflow-hidden">
                    <img src="{{ asset('images/4.jpg') }}" alt="Pramudya" class="w-full h-[220px] sm:h-[280px] md:h-[340px] object-cover rounded-2xl" />
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
                <div class="min-w-[85vw] sm:min-w-[300px] md:min-w-[340px] max-w-xs sm:max-w-sm md:max-w-md rounded-2xl shadow-xl flex flex-col items-center p-0 overflow-hidden">
                    <img src="{{ asset('images/5.jpg') }}" alt="Pramudya" class="w-full h-[220px] sm:h-[280px] md:h-[340px] object-cover rounded-2xl" />
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
</section>

@endsection

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const container = document.getElementById('teamContainer');
        const leftBtn = document.getElementById('scrollLeft');
        const rightBtn = document.getElementById('scrollRight');

        function getScrollAmount() {
            const card = container.querySelector('div');
            return card ? card.offsetWidth + 24 : 344;
        }

        // Tambahkan efek animasi custom pada card
        function animateCards(direction) {
            const cards = container.querySelectorAll('div');
            cards.forEach(card => {
                card.style.transition = 'transform 0.4s cubic-bezier(.77,0,.18,1), opacity 0.4s';
                card.style.transform = `scale(0.95) rotateY(${direction === 'right' ? '-' : ''}10deg)`;
                card.style.opacity = '0.7';
            });
            setTimeout(() => {
                cards.forEach(card => {
                    card.style.transform = 'scale(1) rotateY(0deg)';
                    card.style.opacity = '1';
                });
            }, 400);
        }

        // Loop kanan dengan animasi menarik
        async function scrollRightLoop() {
            const scrollAmount = getScrollAmount();
            animateCards('right');
            await new Promise(resolve => {
                container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
                setTimeout(resolve, 400);
            });
            const firstCard = container.children[0];
            container.appendChild(firstCard);
            container.scrollLeft -= scrollAmount;
        }

        // Loop kiri dengan animasi menarik
        async function scrollLeftLoop() {
            const scrollAmount = getScrollAmount();
            const lastCard = container.children[container.children.length - 1];
            container.insertBefore(lastCard, container.children[0]);
            container.scrollLeft += scrollAmount;
            animateCards('left');
            await new Promise(resolve => {
                container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
                setTimeout(resolve, 400);
            });
        }

        if (leftBtn && rightBtn && container) {
            leftBtn.addEventListener('click', scrollLeftLoop);
            rightBtn.addEventListener('click', scrollRightLoop);
        }
    });
</script>
