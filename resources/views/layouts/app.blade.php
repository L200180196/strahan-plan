<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
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
        <a href="{{ url('/strahan') }}" class="flex items-center gap-3 hover:opacity-80 transition">
            <!-- Ganti src sesuai logo kamu -->
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-10 h-10">
            <h1 class="text-2xl font-semibold tracking-wide text-white">STRAHAN CHANNEL</h1>
        </a>


        <div class="flex items-center gap-6">
            <div class="relative">
                <button id="dropdownButton" class="font-semibold hover:underline flex items-center gap-1">
                    RAPAT
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-0.5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div id="dropdownMenu"
                    class="absolute right-0 mt-1 bg-blue-600 text-white text-sm rounded-md shadow-md hidden z-50 w-44">
                    <a href="/strahan/jadwal" class="block px-4 py-2 hover:bg-blue-500">Input Jadwal</a>
                    <a href="/strahan/jadwal-rapat" class="block px-4 py-2 hover:bg-blue-500">Jadwal Rapat</a>
                    <a href="/strahan/aula-tritura" class="block px-4 py-2 hover:bg-blue-500">Aula Tritura</a>
                    <a href="/strahan/rupat-wilhan" class="block px-4 py-2 hover:bg-blue-500">Rupat Wilhan</a>
                    <a href="/strahan/rupat-kersin" class="block px-4 py-2 hover:bg-blue-500">Rupat Kersin</a>
                    <a href="/strahan/rupat-jakstra" class="block px-4 py-2 hover:bg-blue-500">Rupat Jakstra</a>
                    <a href="/strahan/rupat-rahkomhan" class="block px-4 py-2 hover:bg-blue-500">Rupat Rahkomhan</a>
                </div>
            </div>
            <a href="/strahan/login" class="font-semibold hover:underline">LOGIN</a>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    @yield('content')

    <!-- FOOTER -->
    <footer class="bg-yellow-400 text-black text-sm flex justify-between items-center border-t overflow-hidden">

        <!-- Bagian kiri: tanggal dan waktu -->
        <div class="flex items-center gap-2 text-sm font-medium text-black">
            <span id="tanggal" class="bg-blue-200 px-3 py-1 rounded"></span>
            <span id="waktu" class="bg-orange-300 px-3 py-1 rounded"></span>
        </div>

        <!-- Bagian kanan: running text -->
        <div class="relative w-3/4 overflow-hidden">
            <div class="animate-marquee whitespace-nowrap font-semibold">
                Selamat Datang di Ditjen Strahan Kemhan RI.
            </div>
        </div>
    </footer>
    <script>
        function updateTanggalWaktu() {
            const now = new Date();

            // Format hari dan tanggal (contoh: Kamis, 16 Oktober 2025)
            const optionsTanggal = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            const tanggalFormatted = now.toLocaleDateString('id-ID', optionsTanggal);

            // Format waktu (contoh: 13 : 36)
            const jam = String(now.getHours()).padStart(2, '0');
            const menit = String(now.getMinutes()).padStart(2, '0');
            const waktuFormatted = `${jam} : ${menit}`;

            // Tampilkan ke elemen HTML
            document.getElementById('tanggal').textContent = tanggalFormatted;
            document.getElementById('waktu').textContent = waktuFormatted;
        }

        // Jalankan saat halaman pertama kali dimuat
        updateTanggalWaktu();

        // Update setiap 1 detik
        setInterval(updateTanggalWaktu, 1000);

        const dropdownButton = document.getElementById('dropdownButton');
        const dropdownMenu = document.getElementById('dropdownMenu');

        // Toggle dropdown saat tombol diklik
        dropdownButton.addEventListener('click', (event) => {
            event.stopPropagation(); // cegah klik menutup langsung
            dropdownMenu.classList.toggle('hidden');
        });

        // Tutup dropdown saat klik di luar area dropdown
        window.addEventListener('click', (event) => {
            if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    </script>

</body>

</html>
