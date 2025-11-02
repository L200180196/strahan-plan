<?php

namespace App\Http\Controllers;

use App\Models\Strahan;
use App\Models\Rapats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StrahanController extends Controller
{
    public function index()
    {
        return view('strahan.index');
    }

    public function inputJadwal()
    {
        
        return view('strahan.input-jadwal',[
            'data' => Rapats::get()
        ]);
    }

    public function getData()
    {
        $data = Strahan::orderBy('tanggal')->orderBy('jam')->get();
        
        return view('strahan.jadwal-rapat',[
            'jadwals' => $data,
        ]);
    }

    public function findDate(Request $request)
    {
        // Ambil tanggal dari query string (?tanggal=2025-10-19)
        // Jika tidak ada, gunakan tanggal hari ini
        $tanggal = $request->input('tanggal', date('Y-m-d'));

        // Ambil jadwal dari database sesuai tanggal
        $data = Strahan::whereDate('tanggal', $tanggal)
            ->orderBy('jam', 'asc')
            ->with('rapat')->get();


        // Kirim data ke view

        // return response()->json([
        //     'status' => 400,
        //     'jadwals' => $data,
        //     'tanggal' => $tanggal,
        // ], 400);

        return view('strahan.jadwal-rapat', [
            'jadwals' => $data,
            'tanggal' => $tanggal,
        ]);
    }

    public function create(Request $request)
    {
        // return response()->json([
        //     'status' => 400,
        //     'message' => $request->all()
        // ], 400);

        // 🔹 Validasi input
        $validated = $request->validate([
            'nama_rapat' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jam' => 'required|date_format:H:i',
            'tempat' => 'required|string|max:255',
            'pimpinan' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
            'gambar1' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'gambar2' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
// 🔹 Upload Gambar 1 (jika ada)
        if ($request->hasFile('gambar1')) {
            $validated['gambar1'] = $request->file('gambar1')->store('jadwal_images', 'public');
        }

        // 🔹 Upload Gambar 2 (jika ada)
        if ($request->hasFile('gambar2')) {
            $validated['gambar2'] = $request->file('gambar2')->store('jadwal_images', 'public');
        }

        $jadwal = Strahan::create($validated);

        // return response()->json([
        //     'status' => 200,
        //     'message' => $jadwal->get()
        // ], 200);

        return view('strahan.input-success', [
            'status' => 'Success',
            'jadwal' => $jadwal->get()
        ]);
    }
}
