@extends('layouts.app')

@section('content')
    <!-- MAIN CONTENT -->
    <main class="flex-grow flex flex-col items-center py-10 px-4">
        {{-- REGISTER SECTION --}}
        <div class="bg-white/90 rounded-lg shadow-lg p-8 w-full max-w-md border-t-4 border-blue-700">
            {{-- LOGIN SECTION --}}
                <h3 class="text-xl font-semibold text-center text-blue-700 mb-4">REGISTER</h3>

                <form action="/strahan/register" method="POST" class="space-y-5">
                    @csrf
                    <div>
                        <label class="block text-gray-700 text-sm font-medium mb-2">Nama Lengkap</label>
                        <input type="text" name="name" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>

                    <div>
                        <label class="block text-gray-700 text-sm font-medium mb-2">Email</label>
                        <input type="email" name="email" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>

                    <div>
                        <label class="block text-gray-700 text-sm font-medium mb-2">Password</label>
                        <input type="password" name="password" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>

                    <div>
                        <label class="block text-gray-700 text-sm font-medium mb-2">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>

                    <button type="submit"
                        class="w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded-md font-semibold transition">
                        Daftar
                    </button>
                </form>
            </div>
        </div>
    </main>
@endsection
