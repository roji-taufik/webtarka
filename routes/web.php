<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/program/ramadhan', function () {
    return view('programs.ramadhan');
})->name('program.ramadhan');
Route::view('/contact', 'contact');

Route::post('/contact', function (Request $request) {
    // Kamu bisa simpan ke file, database, atau kirim email di sini
    // Contoh: simpan sementara ke log
    \Log::info('Pesan dari kontak:', $request->only('name', 'email', 'message'));

    return back()->with('success', 'Pesan Anda telah terkirim!');
});
Route::view('/departemen/pendidikan', 'departemen.pendidikan');
Route::view('/departemen/kreatif', 'departemen.kreatif');
Route::view('/departemen/kominfo', 'departemen.kominfo');

Route::view('/about', 'pages.about');
Route::view('/news', 'pages.lookbook');
Route::view('/contact', 'pages.contact');
