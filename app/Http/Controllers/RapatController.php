<?php

namespace App\Http\Controllers;

use App\Models\Strahan;
use Illuminate\Http\Request;

class RapatController extends Controller
{
    public function aulaTritura(Request $request)
    {
        $data = Strahan::with('rapat')->first();
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
        return view('strahan.index');
    }

    public function rupatkersin()
    {
        return view('strahan.index');
    }

    public function rupatjakstra()
    {
        return view('strahan.index');
    }
}
