@extends('layouts.app')

@section('content')
    <!-- MAIN CONTENT -->
    <main class="flex-grow flex flex-col items-center py-10 px-4">

        <!-- Judul -->
        <h2 class="text-3xl font-bold text-black mb-2 text-center">JADWAL RAPAT</h2>

        <!-- Hari/Tanggal -->
        <form method="GET" action="{{ url('/strahan/jadwal-rapat') }}"
            class="flex flex-col sm:flex-row items-center gap-3 mb-6 justify-center">
            <label for="tanggal" class="text-xl font-bold text-black">Hari/<span class="text-red-600">Tanggal :</span></label>

            <input type="date" id="tanggal" name="tanggal" value="{{ request('tanggal', date('Y-m-d')) }}"
                class="border border-green-600 rounded-md px-3 py-2 text-black focus:outline-none focus:ring-2 focus:ring-green-500">

            <button type="submit"
                class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded-md shadow-md">
                Tampilkan
            </button>
        </form>

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
                    @forelse ($jadwals as $jadwal)
                        <tr class="odd:bg-blue-50 even:bg-blue-100">
                            <td class="border border-blue-800 text-center">{{ $loop->iteration }}</td>
                            <td class="border border-blue-800 text-center">
                                {{ \Carbon\Carbon::parse($jadwal->jam)->format('H:i') }}
                            </td>
                            <td class="border border-blue-800">{{ strtoupper($jadwal->nama_rapat) }}</td>
                            <td class="border border-blue-800">{{ $jadwal->tempat }}</td>
                            <td class="border border-blue-800">{{ $jadwal->pimpinan }}</td>
                            <td class="border border-blue-800">{{ $jadwal->keterangan }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="border border-blue-800 text-center py-4 text-gray-500">
                                Belum ada data jadwal rapat.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>
@endsection
