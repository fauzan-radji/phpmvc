<?php

Route::add('/', [HomeController::class, 'index']);
Route::add('/about', [AboutController::class, 'index']);
Route::add('/mahasiswa', [MahasiswaController::class, 'index']);
Route::add('/mahasiswa/tambah', [MahasiswaController::class, 'tambah']);
Route::add('/mahasiswa/detail/{id}/jurusan/{x}', [MahasiswaController::class, 'detail']);
Route::add('/mahasiswa/detail/{id}', [MahasiswaController::class, 'detail']);
