<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('/index');
});
Route::resource('/admin', JurusanController::class);
// Route::resource('jurusan', JurusanController::class);

Route::resource('/daftar', SiswaController::class);
// Route::resource('siswa', SiswaController::class);