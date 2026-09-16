<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BadanPublik\SaqController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/saq', [SaqController::class, 'index'])->name('badan-publik.saq.index');
    Route::post('/saq', [SaqController::class, 'store'])->name('badan-publik.saq.store');
});
