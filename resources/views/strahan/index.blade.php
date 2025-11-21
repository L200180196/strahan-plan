@extends('layouts.app')

@section('content')
<!-- MAIN CONTENT -->
    <main class="flex flex-col md:flex-row flex-grow p-6 gap-6">

        <!-- VIDEO AREA -->
        <div class="flex-1 bg-white rounded-lg shadow-md p-4 flex flex-col items-center justify-center">
            <div class="relative w-full">
                 {{-- <img src="{{ asset('img/upacara.png') }}" alt="upacara" class="w-full mt-5 rounded-md border border-gray-300"> --}}
                <video class="w-full mt-10 rounded-md border border-gray-300" autoplay muted playsinline loop>
                    <source src="{{ asset('storage/videos/EmCwai0zHmGwqdJFKhxnBWhKtlDiNjsP5LtZ6oFG.mp4') }}" type="video/mp4">
                    Browser Anda tidak mendukung pemutar video.
                </video>
            </div>
        </div>

        <!-- SIDEBAR -->
        <aside class="w-full md:w-1/3 flex flex-col gap-4">

            <!-- GALERI PIMPINAN -->
            <div class="bg-yellow-400 border border-black rounded-md text-center p-3">
                <h2 class="bg-yellow-500 border-b border-black text-black font-bold py-1">PIMPINAN DITJEN STRAHAN</h2>
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
                    <p class="font-bold text-sm text-gray-800">{{ $info->info1 }}</p>
                </div>

                <div class="bg-orange-300 py-3">
                    <p class="font-bold text-sm text-gray-900">{{ $info->info2 }}</p>
                </div>
            </div>

        </aside>
    </main>
@endsection