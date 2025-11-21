<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EditController extends Controller
{
    public function info()
    {
        $data = Info::get()->first();
        return view('strahan.login.input-info', [
            'data' => $data
        ]);
    }

    public function editInfo(Request $request) {
        $info = Info::find($request->id);
        if(!$info) {
            return response()->json([
                'status' => "Error 404",
                'message' => 'Info not Found'
            ], 404);
        }

        $data = $request->all();

        $rules = [
            'info1' => 'required|string',
            'info2' => 'required|string'
        ];

        $validator = Validator::make($data, $rules);

        if($validator->fails()) {
            return response()->json([
                'status' => 'Error 400',
                'message' => $validator->errors()
            ], 400);
        }

        $info->fill($data);
        $info->save();
        $data_baru = Info::get()->first();
        return view('strahan.login.input-info', [
            'data' => $data_baru
        ]);
    }

    public function video()
    {
        return view('strahan.edit.video');
    }

    function editVideo(Request $request) {
        $validated = $request->validate([
            'video' => 'nullable'
        ]);

        if ($request->hasFile('video')) {
            $validated['video'] = $request->file('video')->store('videos', 'public');
        }

        $data_video = Video::create($validated);

        return response()->json([
            'status' => 200,
            'videos' => $data_video->get()
        ], 200);

        // return view('strahan.input-success', [
        //     'status' => 'Success',
        //     'videos' => $data_video->get()
        // ]);
    }

    public function pimpinan()
    {
        return view('strahan.edit.pimpinan');
    }
}
