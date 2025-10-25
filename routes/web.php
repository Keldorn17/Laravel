<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\KepzesController;
use App\Http\Controllers\ProfileController;
use App\Models\Kepzes;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [ContactController::class, 'create'])->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/createKepzes', [KepzesController::class, 'create']);
    Route::get('/edit-kepzes/{kepzes}', [KepzesController::class, 'showEditScreen']);
    Route::put('/edit-kepzes/{kepzes}', [KepzesController::class, 'update']);
    Route::delete('/delete-kepzes/{kepzes}', [KepzesController::class, 'delete']);
    Route::get('/kepzesek', function () {
        return view('kepzes', ['kepzesek' => Kepzes::all(), 'user' => Auth::user()]);
    })->name('kepzesek');
});

require __DIR__.'/auth.php';
