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
        return view('strahan.login.input-user');
    }
}
