@extends('layouts.app')

@section('content')
    <!-- MAIN CONTENT -->
    <main class="flex-grow flex flex-col items-center py-10 px-4">
        <div class="bg-white/90 rounded-lg shadow-lg p-8 w-full max-w-md border-t-4 border-blue-700">
            <h3 class="text-xl font-semibold text-center text-blue-700 mb-4">Video Halaman Utama</h3>

            <form action="/strahan/input-video" method="POST" class="space-y-5">
                @csrf
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-3">
                    <label class="font-bold text-black">Upload Video</label>
                    <input name="video" type="file" class="border border-green-400 rounded-md px-2 py-1 w-full">
                </div>
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
