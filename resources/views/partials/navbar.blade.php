<header id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 bg-transparent">
    <div class="max-w-7xl mx-auto flex items-center justify-between p-4">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-12 h-12">
            <div class="font-bold text-sm leading-tight text-white" id="title-text">
                <div>Karang Taruna</div>
                <div>Rw - 14</div>
            </div>
        </div>
        <!-- Hamburger Button (Mobile) -->
        <button id="nav-toggle" class="md:hidden text-black focus:outline-none" aria-label="Toggle Menu">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
        <!-- Navigation Links -->
        <nav id="nav-menu" class="hidden md:flex space-x-6 font-medium">
            <a href="/" class="text-white hover:text-blue-300">Home</a>
            <a href="/about" class="text-white hover:text-blue-300">About</a>
            <a href="/news" class="text-white hover:text-blue-300">Look Book</a>
            <a href="/contact" class="text-white hover:text-blue-300">Contact</a>
        </nav>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-white bg-opacity-95 px-4 pb-4 pt-2">
        <a href="/" class="block py-2 text-black hover:text-blue-800">Home</a>
        <a href="/about" class="block py-2 text-black hover:text-blue-800">About</a>
        <a href="/news" class="block py-2 text-black hover:text-blue-800">News</a>
        <a href="/contact" class="block py-2 text-black hover:text-blue-800">Contact</a>
    </div>
    <script>
        // Simple vanilla JS toggle
        const navToggle = document.getElementById('nav-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        navToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</header>
