<?php

use App\Http\Controllers\WorkerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('workers', [WorkerController::class, 'index']);
Route::get('workers/{id}', [WorkerController::class, 'show']);
Route::post('workers', [WorkerController::class, 'create']);
Route::put('workers/{id}', [WorkerController::class, 'update']);
Route::delete('workers/{id}', [WorkerController::class, 'destroy']);