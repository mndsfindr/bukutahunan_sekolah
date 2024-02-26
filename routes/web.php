<?php

use App\Http\Controllers\SekolahController;
use App\Http\Controllers\JurusanController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(SekolahController::class)->group(function () {
    Route::get('/sekolah', 'index');
    Route::get('/sekolah/welcome', 'store');
    Route::get('/sekolah/tentang', 'create');
});

Route::controller(JurusanController::class)->group(function () {
    Route::get('/multimedia', 'index');
});