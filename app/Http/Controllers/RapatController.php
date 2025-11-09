<?php

namespace App\Http\Controllers;

use App\Models\Strahan;
use Illuminate\Http\Request;

class RapatController extends Controller
{
    public function aulaTritura(Request $request)
    {
        $data = Strahan::orderBy('tanggal', 'desc')->with('rapat')->where('tempat', 1)->first();
        // return response()->json([
        //     'status' => 200,
        //     'data' => $data
        // ], 200);
        return view('strahan.rupat', [
            'data' => $data
        ]);
    }

    public function rupatwilhan()
    {
        $data = Strahan::orderBy('tanggal', 'desc')->with('rapat')->where('tempat', 2)->first();
        // return response()->json([
        //     'status' => 200,
        //     'data' => $data
        // ], 200);
        return view('strahan.rupat', [
            'data' => $data
        ]);
    }

    public function rupatkersin()
    {
        $data = Strahan::orderBy('tanggal', 'desc')->with('rapat')->first();
        // return response()->json([
        //     'status' => 200,
        //     'data' => $data
        // ], 200);
        return view('strahan.rupat', [
            'data' => $data
        ]);
    }

    public function rupatjakstra()
    {
        $data = Strahan::orderBy('tanggal', 'desc')->with('rapat')->first();
        // return response()->json([
        //     'status' => 200,
        //     'data' => $data
        // ], 200);
        return view('strahan.rupat', [
            'data' => $data
        ]);
    }
}
