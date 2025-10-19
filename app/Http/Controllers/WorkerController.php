<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use Illuminate\Support\Facades\Validator;

class WorkerController extends Controller
{
    public function index() {
        $workers = Worker::all();
        return response()->json([
            'status' => 'Success',
            'data' => $workers
        ]);
    }

    public function getAll() {
        $workers = Worker::all();
        return view('workers.index', [
            'workers' => $workers
        ]);
    }

    public function show($id) {
        $worker = Worker::find($id);
        if(!$worker) {
            return response()->json([
                'status' => 'Not Found',
                'message' => 'Worker Not Found'
            ], 404);
        }

        return response()->json([
            'status' => 'Success',
            'data' => $worker
        ]);
    }

    public function create(Request $request){
        $rules = [
            'name' => 'required|string',
            'job' => 'required|string',
            'status' => 'required|string'
        ];

        $data = $request->all();

        $validator = Validator::make($data, $rules);

        if($validator->fails()) {
            return response()->json([
                'status' => 'Error Input',
                'message' => $validator->errors()
            ], 400);
        }

        $worker = Worker::create($data);
        return response()->json([
            'status' => 'Success',
            'data' => $worker
        ]);
    }

    public function update(Request $request, $id){
        $worker = Worker::find($id);
        if(!$worker) {
            return response()->json([
                'status' => 'Not Found',
                'message' => 'Worker Not Found'
            ], 404);
        }

        $rules = [
            'name' => 'required|string',
            'job' => 'required|string',
            'status' => 'required|string'
        ];

        $data = $request->all();

        $validator = Validator::make($data, $rules);

        if($validator->fails()) {
            return response()->json([
                'status' => 'Error Input',
                'message' => $validator->errors()
            ], 400);
        }

        $worker->fill($data);
        $worker->save();
        return response()->json([
            'status' => 'Success',
            'data' => $worker
        ]);
    }

    public function destroy($id) {
        $worker = Worker::find($id);

        if(!$worker) {
            return response()->json([
                'status' => 'Not Found',
                'message' => 'Worker Not Found'
            ], 404);
        }

        $worker->delete();
        return response()->json([
            'status' => 'Success',
            'message' => 'Delete Worker Success'
        ]);
    }
}
