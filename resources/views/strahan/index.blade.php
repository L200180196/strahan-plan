@extends('layouts.app')

@section('content')
<!-- MAIN CONTENT -->
    <main class="flex flex-col md:flex-row flex-grow p-6 gap-6">

        <!-- VIDEO AREA -->
        <div class="flex-1 bg-white rounded-lg shadow-md p-4 flex flex-col items-center justify-center">
            <div class="relative w-full">
                <div class="absolute top-3 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white text-sm font-semibold px-6 py-1 rounded">
                    MENAMPILKAN VIDEO DARI FOLDER LOKAL
                </div>
                 <img src="{{ asset('img/upacara.png') }}" alt="upacara" class="w-full mt-5 rounded-md border border-gray-300">
                {{-- <video class="w-full mt-10 rounded-md border border-gray-300" controls>
                    <source src="{{ asset('videos/upacara.mp4') }}" type="video/mp4">
                    Browser Anda tidak mendukung pemutar video.
                </video> --}}
            </div>
        </div>

        <!-- SIDEBAR -->
        <aside class="w-full md:w-1/3 flex flex-col gap-4">

            <!-- GALERI PIMPINAN -->
            <div class="bg-yellow-400 border border-black rounded-md text-center p-3">
                <h2 class="bg-yellow-500 border-b border-black text-black font-bold py-1">GALERI PIMPINAN</h2>
                <div class="mt-2 bg-white border border-black flex flex-col items-center py-3">
                    <img src="{{ asset('img/pimpinan.png') }}" alt="Pimpinan" class="w-48 h-auto border border-gray-400 mb-2">
                    <p class="text-xs font-semibold">
                        MAYJEN TNI AGUS WIDDODO, S.IP, M.Si<br>
                        <span class="font-normal">DIRJEN STRAHAN KEMHAN</span><br>
                        <span class="font-normal">Periode: 2024 s.d Sekarang</span>
                    </p>
                </div>
            </div>

            <!-- INFO STRAHAN -->
            <div class="border border-black rounded-md text-center overflow-hidden">
                <h2 class="bg-green-600 text-white font-bold py-1 border-b border-black">INFO STRAHAN</h2>
                
                <div class="bg-green-200 py-3 border-b border-black">
                    <p class="font-bold text-sm text-gray-800">PAKAIAN HARI INI :</p>
                    <p class="text-sm">TNI (PDH)</p>
                    <p class="text-sm">PNS (PSKP)</p>
                </div>

                <div class="bg-orange-300 py-3">
                    <p class="font-bold text-sm text-gray-900 underline">PENGUMUMAN :</p>
                    <p class="text-sm">UPACARA BENDERA JUMAT,<br>17 OKTOBER 2025</p>
                </div>
            </div>

        </aside>
    </main>
@endsection