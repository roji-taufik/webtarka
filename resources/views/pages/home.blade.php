@extends('layouts.app')

@section('title', 'Beranda')

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
</style>

<!-- HERO SECTION -->
<section
    class="relative bg-cover bg-center min-h-screen flex items-center"
    style="background-image: url('{{ asset('images/rumah.png') }}');"
>
    <div class="absolute inset-0 bg-black bg-opacity-50 z-0"></div>

    <div class="relative z-10 w-full max-w-7xl mx-auto px-6">
        <div class="max-w-xl text-white">
            <button class="text-sm font-bold border text-white px-4 py-1 rounded-full mb-5">
                WELCOME TO
            </button>
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6 font-grafity">
                Karang Taruna RW 14
            </h1>
            <p class="text-lg leading-relaxed font-semibold">
                Karang Taruna RW 14 adalah organisasi kepemudaan yang berperan aktif dalam membangun masyarakat.
                Kami bertujuan untuk menjadi aktif, responsif, dan konstruktif melalui berbagai kegiatan sosial dan pengabdian.
            </p>
        </div>
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
    <div class="relative z-10 w-full max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        
        <!-- Teks Visi & Misi -->
        <div class="text-black max-w-xl" data-aos="fade-right" data-aos-delay="300">
            <button class="text-sm font-bold border text-black px-4 py-1 rounded-full mb-5">
                WE ARE
            </button>
            <h2 class="text-3xl md:text-4xl font-extrabold mb-4 font-grafity">Visi</h2>
            <p class="text-lg font-medium leading-relaxed mb-6">
                Mewujudkan pemuda yang aktif, kreatif, inovatif, dan peduli terhadap pembangunan sosial di lingkungan RW 14.
            </p>

            <h2 class="text-3xl md:text-4xl font-extrabold mb-4 font-grafity">Misi</h2>
            <ul class="list-disc list-inside text-lg font-medium leading-relaxed space-y-2">
                <li>Meningkatkan partisipasi pemuda dalam kegiatan sosial dan kemasyarakatan.</li>
                <li>Mengembangkan potensi dan bakat generasi muda melalui pelatihan dan kegiatan positif.</li>
                <li>Membangun solidaritas dan kerja sama antar pemuda untuk kemajuan bersama.</li>
                <li>Mendorong kepedulian terhadap lingkungan, pendidikan, dan kesejahteraan masyarakat.</li>
            </ul>
        </div>

       <!-- Gambar Kanan -->
<div class="flex justify-center relative group">
    <!-- Ornamen lingkaran gradasi belakang -->
    <div class="absolute -top-10 -right-10 w-64 h-64 bg-gradient-to-br from-yellow-400 to-red-500 rounded-full opacity-30 blur-2xl z-0"></div>
    
    <!-- Gambar utama -->
    <img src="{{ asset('images/visi-misi-image.png') }}" 
         alt="Ilustrasi Visi Misi"
         class="relative z-10 max-w-full rounded-xl shadow-2xl border-4 border-white transition-transform duration-300 group-hover:scale-105">
</div>
    </div>
</section>

@endsection
