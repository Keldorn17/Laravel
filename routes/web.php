<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\JelentkezesController;
use App\Http\Controllers\KepzesController;
use App\Http\Controllers\ProfileController;
use App\Models\Kepzes;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [ContactController::class, 'create'])->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/dashboard/contact-list', [ContactController::class, 'list'])
    ->middleware(['auth', 'verified', 'admin'])->name('contact.list');

Route::get('/dashboard/kepzesek-charts', [KepzesController::class, 'showCharts'])
    ->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/jelentkezesek', [JelentkezesController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('jelentkezesek');

Route::get('/run-migrations', function () {
    return Artisan::call('migrate:fresh', ["--seed" => true, "--force" => true]);
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::post('/createKepzes', [KepzesController::class, 'create']);
    Route::get('/dashboard/edit-kepzes/{kepzes}', [KepzesController::class, 'showEditScreen']);
    Route::put('/edit-kepzes/{kepzes}', [KepzesController::class, 'update']);
    Route::delete('/delete-kepzes/{kepzes}', [KepzesController::class, 'delete']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard/kepzesek', function () {
        return view('kepzes', ['kepzesek' => Kepzes::all(), 'user' => Auth::user()]);
    })->name('kepzesek');
});

require __DIR__.'/auth.php';
