<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('strahan.login.index');
    }

    public function create(Request $request)
    {
        return response()->json([
            'status' => 400,
            'message' => "TES"
        ], 400);
    }
}
