<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('strahan.login.index');
    }

    public function getAkun()
    {
        $users = User::get()->all();
        return view('strahan.login.list-user', [
            'users' => $users
        ]);
    }


    public function create(Request $request)
    {
        return view('strahan.login.input-user');
    }
}
