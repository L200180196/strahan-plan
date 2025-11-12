@extends('layouts.app')

@section('content')
    <!-- MAIN CONTENT -->
    <main class="flex-grow flex flex-col justify-center items-center px-4 py-10 bg-blue-100">
        <h2 class="text-center text-2xl font-bold text-black mb-6">{{ $data->rapat->nama_rupat ?? '' }} LT.{{ $data->rapat->lantai }} DITJEN STRAHAN
        </h2>
        <div class="grid md:grid-cols-3 gap-6 w-full items-center">

            <!-- Gambar 1 -->
            <div class="bg-white rounded-md shadow-md p-3 text-center">
                @if ($data->gambar1)
                    <img src="{{ asset('storage/' . $data->gambar1) }}" alt="Gambar Rapat 2"
                        class="w-full h-auto object-cover rounded-md mb-3 border border-gray-300">
                @else
                    <div
                        class="w-full h-48 text-bold flex items-center justify-center border border-gray-300 rounded-md mb-3">
                        Gambar Kosong
                    </div>
                @endif
            </div>


            <!-- Informasi Tengah -->
            <div class="bg-white rounded-md shadow-md px-6 py-20 text-center">
                <h2 class="text-xl font-bold mb-4">
                    {{ strtoupper(\Carbon\Carbon::parse($data->tanggal)->translatedFormat('l, d F Y')) }}
                </h2>
                <div class="text-left text-lg font-semibold text-black space-y-2 mx-auto w-fit">
                    <p>ACARA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $data->nama_rapat }}</p>
                    <p>PUKUL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                        {{ \Carbon\Carbon::parse($data->jam)->format('H:i') }}</p>
                    <p>PIMPINAN : {{ $data->pimpinan }}</p>
                </div>
            </div>

            <!-- Gambar 2 -->

            <div class="bg-white rounded-md shadow-md p-3 text-center">
                @if ($data->gambar2)
                    <img src="{{ asset('storage/' . $data->gambar2) }}" alt="Gambar Rapat 2"
                        class="w-full h-auto object-cover rounded-md mb-3 border border-gray-300">
                @else
                    <div
                        class="w-full h-48 flex items-center justify-center border border-gray-300 rounded-md mb-3">
                        Gambar Kosong
                    </div>
                @endif
            </div>

        </div>

    </main>
@endsection
