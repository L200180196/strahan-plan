@extends('layouts.app')

@section('content')
    <!-- MAIN CONTENT -->
    <main class="flex-grow flex flex-col items-center py-10 px-4">
        {{-- REGISTER SECTION --}}
        <div class="bg-white/90 rounded-lg shadow-lg p-8 w-full max-w-md border-t-4 border-blue-700">
            {{-- LOGIN SECTION --}}
            <h3 class="text-xl font-semibold text-center text-blue-700 mb-4">Input Informasi Strahan</h3>

            <form action="/strahan/input-info" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-2">Info Pertama</label>
                    <textarea name="info1" class="border border-green-400 rounded-md px-2 py-1 w-full" required></textarea>
                </div>

                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-2">Info Kedua</label>
                    <textarea name="info2" class="border border-green-400 rounded-md px-2 py-1 w-full" required></textarea>
                </div>
                <div class="flex justify-center gap-6 pt-4">
                    <button type="reset"
                        class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-8 rounded shadow-md">
                        Batal
                    </button>
                    <button type="submit"
                        class="w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded-md font-semibold transition">
                        Submit
                    </button>
                </div>

            </form>
        </div>
        </div>
    </main>
@endsection
