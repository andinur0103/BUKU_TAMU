<?php

use App\http\controller\DashboardController;
use App\http\controller\User\TamuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('simpan-bukutamu',[TamuController::class, 'SimpanTamu'])->name('simpan-bukutamu');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
