@extends('layouts.app')

@section('title', 'Lookbook')

@section('content')
<!-- SECTION: Carousel Lookbook -->
<section class="w-full min-h-screen bg-black overflow-hidden relative">
    <div id="carousel" class="flex overflow-x-auto snap-x snap-mandatory scroll-smooth no-scrollbar h-screen">
        <div class="w-full flex-shrink-0 snap-center h-screen">
            <img src="/images/about.jpg" alt="Look 1" class="object-cover w-full h-full">
        </div>
        <div class="w-full flex-shrink-0 snap-center h-screen">
            <img src="/images/rumah.png" alt="Look 2" class="object-cover w-full h-full">
        </div>
        <div class="w-full flex-shrink-0 snap-center h-screen">
            <img src="/images/look3.jpg" alt="Look 3" class="object-cover w-full h-full">
        </div>
    </div>

    <!-- Navigasi Panah -->
    <button onclick="scrollCarousel(-1)" class="absolute left-2 sm:left-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-40 p-2 sm:p-3 rounded-full hover:bg-opacity-60 z-10 text-black">
        &#8592;
    </button>
    <button onclick="scrollCarousel(1)" class="absolute right-2 sm:right-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-40 p-2 sm:p-3 rounded-full hover:bg-opacity-60 z-10 text-black">
        &#8594;
    </button>
</section>

<!-- SECTION: Event Description -->
<section class="bg-white py-16 px-4 sm:px-10">
    <div class="flex flex-col-reverse md:flex-row items-center max-w-5xl mx-auto gap-10">
        <!-- Text -->
        <div class="text-black w-full" data-aos="fade-right" data-aos-delay="300">
            <h2 class="text-2xl sm:text-4xl font-bold text-gray-800 mb-4 text-center md:text-left">Bakti Sosial Ramadhan 2025</h2>
            <p class="text-gray-600 text-base sm:text-lg leading-relaxed mb-6 text-justify">
                Kegiatan ini merupakan bagian dari program Karang Taruna RW 14 dalam rangka menyambut bulan suci Ramadhan dengan semangat berbagi. Melibatkan masyarakat setempat, kegiatan ini bertujuan memberikan bantuan sembako dan edukasi kepada warga yang membutuhkan.
            </p>
            <div class="flex flex-col sm:flex-row sm:items-start gap-6 sm:gap-12 text-gray-700">
                <div>
                    <h4 class="font-semibold text-gray-900">📅 Tanggal</h4>
                    <p>12 April 2025</p>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-900">📍 Lokasi</h4>
                    <p>Balai RW 14, Jl. Melati, Bandung</p>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-900">⏰ Waktu</h4>
                    <p>09:00 - 15:00 WIB</p>
                </div>
            </div>
        </div>

        <!-- Image -->
        <div class="w-full md:w-1/3 flex justify-center mb-8 md:mb-0" data-aos="fade-left" data-aos-delay="400">
            <img src="/images/logo.png" alt="Ramadhan Icon" class="w-32 sm:w-48 h-32 sm:h-48 object-contain drop-shadow-lg rounded-full bg-green-50 p-4">
        </div>
    </div>
</section>

<!-- SECTION: Dokumentasi -->
<section class="bg-gray-100 py-16 px-4 sm:px-10">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-2xl sm:text-4xl font-bold text-gray-800 text-center mb-10">Dokumentasi Kegiatan</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 sm:gap-6">
            <img src="/images/dokumentasi1.jpg" alt="Dokumentasi 1" class="w-full h-60 sm:h-72 object-cover rounded-xl shadow-md">
            <img src="/images/dokumentasi2.jpg" alt="Dokumentasi 2" class="w-full h-60 sm:h-72 object-cover rounded-xl shadow-md">
            <img src="/images/dokumentasi3.jpg" alt="Dokumentasi 3" class="w-full h-60 sm:h-72 object-cover rounded-xl shadow-md">
            <img src="/images/dokumentasi4.jpg" alt="Dokumentasi 4" class="w-full h-60 sm:h-72 object-cover rounded-xl shadow-md">
            <img src="/images/dokumentasi5.jpg" alt="Dokumentasi 5" class="w-full h-60 sm:h-72 object-cover rounded-xl shadow-md">
            <img src="/images/dokumentasi6.jpg" alt="Dokumentasi 6" class="w-full h-60 sm:h-72 object-cover rounded-xl shadow-md">
        </div>
    </div>
</section>

<!-- JS: Carousel Scroll -->
<script>
    function scrollCarousel(direction) {
        const carousel = document.getElementById('carousel');
        const width = carousel.offsetWidth;
        carousel.scrollBy({ left: width * direction, behavior: 'smooth' });
    }
</script>

<!-- Tailwind helper -->
<style>
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }
    .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>
@endsection
