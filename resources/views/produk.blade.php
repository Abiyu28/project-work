<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-950 text-white min-h-screen p-10">
    <h1 class="text-3xl font-bold mb-6">Daftar Produk</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ($produk as $item)
            <div class="bg-white/5 border border-white/10 rounded-xl p-5">
                <h2 class="font-semibold text-lg">{{ $item['nama'] }}</h2>
                <p class="text-indigo-400 mt-1">Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>
            </div>
        @endforeach
    </div>
</body>

</html>
