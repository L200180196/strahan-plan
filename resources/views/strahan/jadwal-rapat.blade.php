@extends('layouts.app')

@section('content')
<!-- MAIN CONTENT -->
    <main class="flex-grow flex flex-col items-center py-10 px-4">

        <!-- Judul -->
        <h2 class="text-3xl font-bold text-black mb-2 text-center">JADWAL RAPAT</h2>

        <!-- Hari/Tanggal -->
        <div class="flex flex-col sm:flex-row items-center gap-3 mb-6">
            <label class="text-xl font-bold text-black">Hari/<span class="text-red-600">Tanggal :</span></label>
            <div class="flex items-center border border-green-600 rounded-md overflow-hidden">
                <button class="bg-green-200 hover:bg-green-300 text-black font-semibold px-4 py-2">
                    PILIH HARI INI
                </button>
                <div class="bg-gray-100 px-2 py-2 border-l border-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-700" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Tabel Jadwal -->
        <div class="overflow-x-auto w-full max-w-5xl">
            <table class="w-full border border-blue-800 text-sm text-left text-black">
                <thead class="bg-blue-700 text-white">
                    <tr>
                        <th class="px-3 py-2 border border-blue-800 text-center w-12">NO</th>
                        <th class="px-3 py-2 border border-blue-800 text-center w-24">JAM</th>
                        <th class="px-3 py-2 border border-blue-800 text-center">NAMA RAPAT</th>
                        <th class="px-3 py-2 border border-blue-800 text-center">TEMPAT</th>
                        <th class="px-3 py-2 border border-blue-800 text-center">PIMPINAN</th>
                        <th class="px-3 py-2 border border-blue-800 text-center">KETERANGAN</th>
                    </tr>
                </thead>
                <tbody class="bg-blue-100">
                    <tr class="odd:bg-blue-50 even:bg-blue-100">
                        <td class="border border-blue-800 text-center">1</td>
                        <td class="border border-blue-800 text-center">09:00</td>
                        <td class="border border-blue-800">RAPAT JAKUM</td>
                        <td class="border border-blue-800">AULA TRITURA Lt.8</td>
                        <td class="border border-blue-800">DIRJAKSTRA</td>
                        <td class="border border-blue-800"></td>
                    </tr>
                    <tr class="odd:bg-blue-50 even:bg-blue-100">
                        <td class="border border-blue-800 text-center">2</td>
                        <td class="border border-blue-800 text-center">09:00</td>
                        <td class="border border-blue-800">RAPAT PRU</td>
                        <td class="border border-blue-800">RUPAT WILHAN Lt.8</td>
                        <td class="border border-blue-800">DIRWILHAN</td>
                        <td class="border border-blue-800"></td>
                    </tr>
                    <tr class="odd:bg-blue-50 even:bg-blue-100">
                        <td class="border border-blue-800 text-center">3</td>
                        <td class="border border-blue-800 text-center">10:00</td>
                        <td class="border border-blue-800">RAPAT KERJASAMA</td>
                        <td class="border border-blue-800">RUPAT KERSIN Lt.6</td>
                        <td class="border border-blue-800">DIRKERSIN</td>
                        <td class="border border-blue-800"></td>
                    </tr>
                    <tr class="odd:bg-blue-50 even:bg-blue-100">
                        <td class="border border-blue-800 text-center">4</td>
                        <td class="border border-blue-800 text-center">10:00</td>
                        <td class="border border-blue-800">RAPAT HANNEG</td>
                        <td class="border border-blue-800">RUPAT JAKSTRA Lt.4</td>
                        <td class="border border-blue-800">DIRWILHAN</td>
                        <td class="border border-blue-800"></td>
                    </tr>
                    <tr class="odd:bg-blue-50 even:bg-blue-100">
                        <td class="border border-blue-800 text-center">5</td>
                        <td class="border border-blue-800 text-center">13:00</td>
                        <td class="border border-blue-800">RAPAT PERPRES</td>
                        <td class="border border-blue-800">RUPAT DITRAH Lt.3</td>
                        <td class="border border-blue-800">DIRJAKSTRA</td>
                        <td class="border border-blue-800"></td>
                    </tr>
                    <tr class="odd:bg-blue-50 even:bg-blue-100">
                        <td class="border border-blue-800 text-center">6</td>
                        <td class="border border-blue-800 text-center">13:00</td>
                        <td class="border border-blue-800">RAPAT NAVIGASI</td>
                        <td class="border border-blue-800">RUPAT DIRJEN Lt.1</td>
                        <td class="border border-blue-800">DIRJEN</td>
                        <td class="border border-blue-800"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection