@extends('layouts.app')

@section('title', 'Kontak Kami')

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

<section class="min-h-screen bg-gradient-to-r from-white via-gray-100 to-white py-16 px-6 sm:px-10">
   
<h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold mb-6 text-center font-grafity">Kontak Kami</h1>
   
   <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-10 bg-white shadow-xl rounded-3xl overflow-hidden">
        
        <!-- Bagian Kiri: Informasi Kontak -->
        <div class="relative bg-cover bg-center p-10 text-white flex flex-col justify-center"
             style="background-image: url('/images/about.jpg');">
            <div class="bg-gradient-to-b from-black/60 to-black/80 absolute inset-0 z-0"></div>
            <div class="relative z-10 space-y-6">
                <h4 class="text-yellow-400 font-bold uppercase tracking-wider">Get in Touch</h4>
                <h2 class="text-3xl sm:text-4xl font-bold leading-tight">Don't hesitate to contact us for more information.</h2>
                <p class="text-gray-200 max-w-md">If you have questions, please contact us via the contact form or contact information on this page.</p>

                <div class="mt-6 space-y-6 text-white">
                    <div class="flex items-center gap-4">
                        <div class="bg-yellow-400 rounded-full p-3">
                            <svg class="w-5 h-5 text-black" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3.5A1.5 1.5 0 013.5 2h13A1.5 1.5 0 0118 3.5v13a1.5 1.5 0 01-1.5 1.5h-13A1.5 1.5 0 012 16.5v-13zM3.5 3a.5.5 0 00-.5.5V4l7 4.5L17 4v-.5a.5.5 0 00-.5-.5h-13zM17 5.236l-7.25 4.667a.5.5 0 01-.5 0L3 5.236V16.5a.5.5 0 00.5.5h13a.5.5 0 00.5-.5V5.236z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold">Contact Us (Humas)</p>
                            <p class="text-sm">humas@karangtarunarw14.com</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="bg-yellow-400 rounded-full p-3">
                            <svg class="w-5 h-5 text-black" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3.5A1.5 1.5 0 013.5 2h13A1.5 1.5 0 0118 3.5v13a1.5 1.5 0 01-1.5 1.5h-13A1.5 1.5 0 012 16.5v-13zM3.5 3a.5.5 0 00-.5.5v12a.5.5 0 00.5.5h13a.5.5 0 00.5-.5v-12a.5.5 0 00-.5-.5h-13z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold">Organization Relations (Humas)</p>
                            <p class="text-sm">0811-1956-188</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="bg-yellow-400 rounded-full p-3">
                            <svg class="w-5 h-5 text-black" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3.5A1.5 1.5 0 013.5 2h13A1.5 1.5 0 0118 3.5v13a1.5 1.5 0 01-1.5 1.5h-13A1.5 1.5 0 012 16.5v-13zM3.5 3a.5.5 0 00-.5.5v12a.5.5 0 00.5.5h13a.5.5 0 00.5-.5v-12a.5.5 0 00-.5-.5h-13z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold">Media Partnership (Birpro)</p>
                            <p class="text-sm">0896-7623-0335</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bagian Kanan: Form Kontak -->
        <div class="p-10 bg-white">
            <h3 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-6">Send us a message</h3>

            @if(session('success'))
                <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form action="/contact" method="POST" class="space-y-5">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name" required class="w-full bg-gray-100 p-3 rounded-md">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Phone</label>
                        <input type="text" name="phone" class="w-full bg-gray-100 p-3 rounded-md">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" required class="w-full bg-gray-100 p-3 rounded-md">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Subject</label>
                    <input type="text" name="subject" class="w-full bg-gray-100 p-3 rounded-md">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea name="message" rows="5" required class="w-full bg-gray-100 p-3 rounded-md"></textarea>
                </div>
                <div>
                    <button type="submit" class="w-full bg-gradient-to-r from-blue-700 to-blue-500 text-white font-semibold py-3 rounded-md shadow-lg hover:opacity-90 transition">SEND</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
