<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CMSController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/jumbotron-upload', [CMSController::class, 'set_jumbotron'])->name('jumbotron.upload');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [CMSController::class, 'index'])->name('homepage');

require __DIR__.'/auth.php';
