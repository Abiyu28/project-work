<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-950 text-white antialiased">

    <!-- Navbar -->
    <nav class="border-b border-white/10">
        <div class="max-w-6xl mx-auto px-6 py-5 flex items-center justify-between">
            <span class="text-lg font-bold tracking-tight">ProjectWork</span>
            <div class="flex gap-6 text-sm text-slate-300">
                <a href="/" class="hover:text-white transition">Home</a>
                <a href="/blog" class="hover:text-white transition">Blog</a>
                <a href="/contact" class="hover:text-white transition">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="max-w-6xl mx-auto px-6 py-24 text-center">
        <span class="inline-block px-4 py-1.5 rounded-full bg-indigo-500/10 text-indigo-400 text-xs font-semibold tracking-wide uppercase mb-6">
            Dibangun dengan Laravel & Tailwind
        </span>

        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight leading-tight">
            Selamat Datang di
            <span class="bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">
                ProjectWork
            </span>
        </h1>

        <p class="mt-6 text-lg text-slate-400 max-w-2xl mx-auto">
            Aplikasi ini dibangun menggunakan Laravel dan Tailwind CSS v4 — cepat, modern, dan mudah dikembangkan.
        </p>

        <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/contact" class="px-6 py-3 rounded-lg bg-indigo-600 hover:bg-indigo-500 font-semibold transition">
                Mulai Sekarang
            </a>
            <a href="/blog" class="px-6 py-3 rounded-lg border border-white/20 hover:bg-white/5 font-semibold transition">
                Lihat Blog
            </a>
        </div>
    </section>
    <!-- Feature cards -->
    <section class="max-w-6xl mx-auto px-6 pb-24 grid md:grid-cols-3 gap-6">
        <div class="p-6 rounded-2xl bg-white/5 border border-white/10">
            <div class="w-10 h-10 rounded-lg bg-indigo-500/20 flex items-center justify-center mb-4">
                <span class="text-indigo-400 text-xl">⚡</span>
            </div>
            <h3 class="font-semibold text-lg mb-2">Cepat</h3>
            <p class="text-slate-400 text-sm">Dibangun di atas Vite, hot-reload super cepat saat development.</p>
        </div>

        <div class="p-6 rounded-2xl bg-white/5 border border-white/10">
            <div class="w-10 h-10 rounded-lg bg-purple-500/20 flex items-center justify-center mb-4">
                <span class="text-purple-400 text-xl">🎨</span>
            </div>
            <h3 class="font-semibold text-lg mb-2">Modern</h3>
            <p class="text-slate-400 text-sm">Styling dengan Tailwind CSS v4, tanpa config yang rumit.</p>
        </div>

        <div class="p-6 rounded-2xl bg-white/5 border border-white/10">
            <div class="w-10 h-10 rounded-lg bg-pink-500/20 flex items-center justify-center mb-4">
                <span class="text-pink-400 text-xl">🚀</span>
            </div>
            <h3 class="font-semibold text-lg mb-2">Mudah Dikembangkan</h3>
            <p class="text-slate-400 text-sm">Struktur Laravel yang rapi, siap ditambah fitur apapun.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="border-t border-white/10 py-8
