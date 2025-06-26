<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Karang Taruna RW 14</title>
    <script src="https://cdn.tailwindcss.com"></script>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
     <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- script dari halaman yang extend layout ini -->
    @yield('scripts')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

</head>
<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script>
    window.addEventListener('scroll', function () {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 20) {
            navbar.classList.remove('bg-transparent');
            navbar.classList.add('bg-white', 'shadow');
            // Ganti teks jadi gelap jika perlu
            navbar.querySelectorAll('a').forEach(el => el.classList.remove('text-white'));
            navbar.querySelectorAll('a').forEach(el => el.classList.add('text-black'));
            document.getElementById('title-text')?.classList.replace('text-white', 'text-black');
        } else {
            navbar.classList.add('bg-transparent');
            navbar.classList.remove('bg-white', 'shadow');
            navbar.querySelectorAll('a').forEach(el => el.classList.remove('text-black'));
            navbar.querySelectorAll('a').forEach(el => el.classList.add('text-white'));
            document.getElementById('title-text')?.classList.replace('text-black', 'text-white');
        }
    });
</script>



    @include('partials.navbar')

    <main class="min-h-screen">
        @yield('content')
    </main>

    @include('partials.footer')


</html>
