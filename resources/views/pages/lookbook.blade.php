@extends('layouts.app')

@section('title', 'Lookbook Program')

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
</style>
<section 
    class="pt-28 pb-20 px-4 sm:px-6 min-h-screen bg-cover bg-center bg-no-repeat relative"
    style="background-image: url('{{ asset('images/about.jpg') }}');"
>
    <!-- Overlay agar teks tetap terbaca -->
    <div class="absolute inset-0 bg-white bg-opacity-70 backdrop-blur-sm z-0"></div>

    <div class="max-w-7xl mx-auto relative z-10">
        <h1 class="text-3xl sm:text-4xl font-extrabold text-center text-gray-800 mb-10 font-grafity">Lookbook Program</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <!-- Card Program 1 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                <img src="{{ asset('images/about.jpg') }}" alt="Program 1" class="w-full h-56 object-cover">
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Bakti Sosial Ramadhan</h3>
                    <p class="text-sm text-gray-600 mb-4">Berbagi sembako & buka bersama warga selama bulan Ramadhan.</p>
                    <a href="/program/ramadhan" class="inline-block px-4 py-2 bg-yellow-400 text-sm font-semibold text-gray-900 rounded hover:bg-yellow-500 transition">Lihat Detail</a>
                </div>
            </div>

            <!-- Card Program 2 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                <img src="{{ asset('images/program2.jpg') }}" alt="Program 2" class="w-full h-56 object-cover">
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Festival Anak RW 14</h3>
                    <p class="text-sm text-gray-600 mb-4">Perlombaan dan edukasi anak-anak dalam Hari Anak Nasional.</p>
                    <a href="#" class="inline-block px-4 py-2 bg-yellow-400 text-sm font-semibold text-gray-900 rounded hover:bg-yellow-500 transition">Lihat Detail</a>
                </div>
            </div>

            <!-- Card Program 3 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                <img src="{{ asset('images/program3.jpg') }}" alt="Program 3" class="w-full h-56 object-cover">
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Pelatihan Digital UMKM</h3>
                    <p class="text-sm text-gray-600 mb-4">Edukasi digital marketing & e-commerce untuk pelaku UMKM.</p>
                    <a href="#" class="inline-block px-4 py-2 bg-yellow-400 text-sm font-semibold text-gray-900 rounded hover:bg-yellow-500 transition">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
