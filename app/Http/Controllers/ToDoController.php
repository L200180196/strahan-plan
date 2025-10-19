<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ToDo;
use Illuminate\Support\Facades\Validator;

class ToDoController extends Controller
{
    public function index()
    {
        $todos = ToDo::query();
        return view('ToDo.index',[
            'toDos' => $todos->get(),
        ]);
    }

    public function create(Request $request)
    {
        $rules = [
            'title' => 'required|string',
            'description' => 'required|string',
            'deadline' => 'required|date'
        ];

        $data = $request->all();

        $validator = Validator::make($data, $rules);

        if($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => $validator->errors()
            ], 400);
        }

        $todo = Todo::create($data);

        return view('ToDo.index',[
            'toDos' => $todo->get(),
            'status' => 'Success'
        ]);
    }
}
