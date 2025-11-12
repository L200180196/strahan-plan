@extends('layouts.app')

@section('content')
    <main class="flex-grow flex items-center justify-center">
        <div class="bg-white/90 rounded-lg shadow-lg p-8 w-full max-w-md border-t-4 border-blue-700">
            <h2 class="text-2xl font-semibold text-center text-blue-700 mb-6 w-100">LOGIN</h2>

            <form action="/strahan/jadwal" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-2">Username</label>
                    <input type="text" name="username" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-2">Password</label>
                    <input type="password" name="password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <button type="submit"
                    class="w-full bg-blue-700 hover:bg-blue-800 text-white py-2 rounded-md font-semibold transition">
                    Masuk
                </button>
            </form>
        </div>
    </main>
@endsection
