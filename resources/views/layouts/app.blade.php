<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @keyframes marquee {
            0%   { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
        .animate-marquee {
            display: inline-block;
            animation: marquee 10s linear infinite;
        }
    </style>
    <title>STRAHAN CHANNEL</title>
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-b from-blue-200 to-blue-300 min-h-screen flex flex-col">

    <!-- HEADER -->
    <header class="bg-blue-700 text-white flex justify-between items-center px-6 py-3 shadow-md">
        <div class="flex items-center gap-3">
            <!-- Ganti src sesuai logo kamu -->
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-10 h-10">
            <h1 class="text-2xl font-semibold tracking-wide">STRAHAN CHANNEL</h1>
        </div>

        <div class="flex items-center gap-6">
            <div class="relative group">
                <button class="font-semibold hover:underline">RAPAT</button>
                <div class="absolute right-0 mt-1 bg-blue-600 text-white text-sm rounded-md shadow-md hidden group-hover:block">
                    <a href="#" class="block px-4 py-2 hover:bg-blue-500">INPUT JADWAL</a>
                    <a href="#" class="block px-4 py-2 hover:bg-blue-500">RUPAT WILHAN</a>
                    <a href="#" class="block px-4 py-2 hover:bg-blue-500">RUPAT KERSIN</a>
                </div>
            </div>
            <a href="#" class="font-semibold hover:underline">LOGIN</a>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main class="flex-grow flex flex-col items-center py-10 px-4">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-yellow-400 text-black text-sm flex justify-between items-center border-t overflow-hidden">

        <!-- Bagian kiri: tanggal dan waktu -->
        <div class="flex items-center gap-2">
            <span class="bg-blue-200 px-3 py-1 rounded">Kamis, 16 Oktober 2025</span>
            <span class="bg-orange-300 px-3 py-1 rounded">13 : 36 </span>
        </div>

        <!-- Bagian kanan: running text -->
        <div class="relative w-3/4 overflow-hidden">
            <div class="animate-marquee whitespace-nowrap font-semibold">
                Selamat Datang di Ditjen Strahan Kemhan RI.
            </div>
        </div>
    </footer>

</body>
</html>
