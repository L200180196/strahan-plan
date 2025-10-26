<?php

use App\Http\Controllers\StrahanController;
use App\Http\Controllers\TesController;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\WorkerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TesController::class, 'index'] );

Route::get('/to-do', [ToDoController::class, 'index'] );
Route::post('/to-do', [ToDoController::class, 'create'] );

Route::get('/workers', [WorkerController::class, 'getAll'] );

Route::get('/strahan', [StrahanController::class, 'index'] );
Route::get('/strahan/jadwal', function () {
    return view('strahan.input-jadwal');
});
Route::post('/strahan/jadwal', [StrahanController::class, 'create'])->name('strahan.jadwal.store');

Route::get('/strahan/input-success', function () {
    return view('strahan.input-success');
});
Route::get('/strahan/jadwal-rapat', [StrahanController::class, 'findDate'])->name('strahan.jadwal_rapat.store');

Route::get('/strahan/rupat1', function () {
    return view('strahan.rupat1');
});