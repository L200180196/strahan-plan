@extends('layouts.app')

@section('content')
    <!-- MAIN CONTENT -->
    <main class="flex-grow flex flex-col items-center py-10">

        <!-- Judul + Tombol -->
        <div class="w-full flex items-center justify-between px-5 mb-6">
            <h2 class="text-3xl font-bold text-black text-center flex-1">List User</h2>
            <a href="/strahan/register" 
               class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md shadow">
                Daftar
            </a>
        </div>

        <!-- Tabel user -->
        <div class="w-full px-5">
            <table class="min-w-full border border-blue-800 text-base text-left text-black table-auto">
                <thead class="bg-blue-700 text-white">
                    <tr>
                        <th class="px-4 py-3 border border-blue-800 text-center w-12">NO</th>
                        <th class="px-4 py-3 border border-blue-800 text-center w-32">NAMA</th>
                        <th class="px-4 py-3 border border-blue-800 text-center">USERNAME</th>
                        <th class="px-4 py-3 border border-blue-800 text-center w-48">EMAIL</th>
                        <th class="px-4 py-3 border border-blue-800 text-center w-48">PASSWORD</th>
                    </tr>
                </thead>

                <tbody class="bg-blue-100">
                    @forelse ($users as $user)
                        <tr class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200 transition">
                            <td class="border border-blue-800 text-center font-semibold py-3 px-3">
                                {{ $loop->iteration }}
                            </td>
                            <td class="border border-blue-800 text-center py-3 px-3">
                                {{ \Carbon\Carbon::parse($user->jam)->format('H:i') }}
                            </td>
                            <td class="border border-blue-800 font-medium py-3 px-3">
                                {{ strtoupper($user->nama_rapat) }}
                            </td>
                            <td class="border border-blue-800 py-3 px-3">
                                {{ $user->rapat->nama_rupat }}
                            </td>
                            <td class="border border-blue-800 py-3 px-3">
                                {{ $user->pimpinan }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="border border-blue-800 text-center py-6 text-gray-500 text-lg">
                                Belum ada data user.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>
@endsection
