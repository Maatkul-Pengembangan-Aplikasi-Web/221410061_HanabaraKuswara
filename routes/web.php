<?php

<<<<<<< HEAD
=======
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdiController;
>>>>>>> a926005 (+halaman program studi)
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});
=======
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/prodi', [ProdiController::class, 'index'])->name('/prodi');
});

require __DIR__.'/auth.php';
>>>>>>> a926005 (+halaman program studi)
