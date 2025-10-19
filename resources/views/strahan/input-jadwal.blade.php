@extends('layouts.app')

@section('content')
    <!-- MAIN CONTENT -->
    <main class="flex-grow flex flex-col items-center py-10 px-4">
        <div class="bg-blue-100 w-full max-w-3xl rounded-lg shadow-md border border-green-300 p-6">
            <h2 class="text-center text-2xl font-bold text-black mb-6">INPUT JADWAL</h2>

            <form class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-3">
                    <label class="font-bold text-black">Nama Rapat :</label>
                    <input type="text" class="border border-green-400 rounded-md px-2 py-1 w-full">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-3">
                    <label class="font-bold text-black">Tanggal :</label>
                    <input type="date" class="border border-green-400 rounded-md px-2 py-1 w-full">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-3">
                    <label class="font-bold text-black">Jam :</label>
                    <input type="time" class="border border-green-400 rounded-md px-2 py-1 w-full">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-3">
                    <label class="font-bold text-black">Tempat :</label>
                    <input type="text" class="border border-green-400 rounded-md px-2 py-1 w-full">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-3">
                    <label class="font-bold text-black">Pimpinan :</label>
                    <input type="text" class="border border-green-400 rounded-md px-2 py-1 w-full">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-3">
                    <label class="font-bold text-black">Keterangan :</label>
                    <textarea class="border border-green-400 rounded-md px-2 py-1 w-full"></textarea>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-3">
                    <label class="font-bold text-black">Upload Gambar 1 :</label>
                    <input type="file" class="border border-green-400 rounded-md px-2 py-1 w-full">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-3">
                    <label class="font-bold text-black">Upload Gambar 2 :</label>
                    <input type="file" class="border border-green-400 rounded-md px-2 py-1 w-full">
                </div>

                <div class="flex justify-center gap-6 pt-4">
                    <button type="reset" class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-8 rounded shadow-md">
                        BATAL
                    </button>
                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-8 rounded shadow-md">
                        SUBMIT
                    </button>
                </div>
            </form>
        </div>

    </main>
@endsection
