<?php

namespace App\Http\Controllers;

use App\Models\Strahan;
use Illuminate\Http\Request;

class StrahanController extends Controller
{
    public function index()
    {
        $todos = Strahan::query();
        return view('strahan.index');
    }
}
