@extends('layouts.app')

@section('content')
    <!-- MAIN CONTENT -->
    <main class="flex-grow flex flex-col items-center py-10 px-4">
        <div class="bg-blue-100 w-full max-w-3xl rounded-lg shadow-md border border-green-300 p-6">

            <div class="space-y-4">
                <h2 class="text-center text-3xl font-bold text-black mb-6">Pesan Tambah User</h2>
                <div class="text-center text-xl font-bold text-black mx-5">
                    Anda berhasil menambahkan User
                </div>
                <div class="flex justify-center pt-4">
                    <a href="{{ url('/strahan/list-user') }}"
                        class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-8 rounded shadow-md inline-block text-center">
                        OK
                    </a>
                </div>
            </div>
        </div>

    </main>
@endsection
