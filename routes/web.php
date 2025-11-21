<?php

use App\Http\Controllers\EditController;
use App\Http\Controllers\StrahanController;
use App\Http\Controllers\RapatController;
use App\Http\Controllers\LoginController;
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
Route::get('/strahan/jadwal', [StrahanController::class, 'inputJadwal'] );
Route::post('/strahan/jadwal', [StrahanController::class, 'create'])->name('strahan.jadwal.store');

Route::get('/strahan/input-success', function () {
    return view('strahan.input-success');
});
Route::get('/strahan/jadwal-rapat', [StrahanController::class, 'findDate'])->name('strahan.jadwal_rapat.store');

Route::get('/strahan/aula-tritura', [RapatController::class, 'aulaTritura']);
Route::get('/strahan/rupat-wilhan', [RapatController::class, 'rupatwilhan']);
Route::get('/strahan/rupat-kersin', [RapatController::class, 'rupatkersin']);
Route::get('/strahan/rupat-jakstra', [RapatController::class, 'rupatjakstra']);
Route::get('/strahan/rupat-rahkomhan', [RapatController::class, 'rupatrahkomhan']);

Route::get('/strahan/login', [LoginController::class, 'index'] );
Route::get('/strahan/akun', [LoginController::class, 'getAkun'] );
Route::get('/strahan/register', [LoginController::class, 'create'] );

Route::get('/strahan/input-info', [EditController::class, 'info'] );
Route::post('/strahan/input-info', [EditController::class, 'editInfo'] );
Route::get('/strahan/input-video', [EditController::class, 'video'] );
Route::post('/strahan/input-video', [EditController::class, 'editVideo'] );
Route::get('/strahan/input-pimpinan', [EditController::class, 'pimpinan'] );