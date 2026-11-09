<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Detail Siswa
Route::get('/siswadetail', [App\Http\Controllers\SiswaController::class, 'detail'])->name('siswa.detail');

//Siswa
Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [App\Http\Controllers\SiswaController::class, 'create'])->name('siswa.create');
ROute::get('/siswa/{id}/edit', [App\Http\Controllers\SiswaController::class, 'edit'])->name('siswa.edit');
Route::post('/siswa', [App\Http\Controllers\SiswaController::class, 'store'])->name('siswa.store');
Route::put('/siswa/{id}', [App\Http\Controllers\SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{id}', [App\Http\Controllers\SiswaController::class, 'destroy'])->name('siswa.destroy');

//Kelas
Route::get('/kelas', [App\Http\Controllers\KelasController::class, 'index'])->name('kelas.index');
Route::get('/kelas/create', [App\Http\Controllers\KelasController::class, 'create'])->name('kelas.create');
Route::get('/kelas/{id}/edit', [App\Http\Controllers\KelasController::class, 'edit'])->name('kelas.edit');
Route::post('/kelas', [App\Http\Controllers\KelasController::class, 'store'])->name('kelas.store');
Route::put('/kelas/{id}', [App\Http\Controllers\KelasController::class, 'update'])->name('kelas.update');
Route::delete('/kelas/{id}', [App\Http\Controllers\KelasController::class, 'destroy'])->name('kelas.destroy');