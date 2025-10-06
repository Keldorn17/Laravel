<?php

use App\Http\Controllers\KepzesController;
use App\Http\Controllers\UserController;
use App\Models\Kepzes;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['user' => Auth::user()]);
});

Route::post('/register', [UserController::class, 'register']);

Route::post('/logout', [UserController::class, 'logout']);

Route::post('/login', [UserController::class, 'login']);

Route::post('/createKepzes', [KepzesController::class, 'create']);

Route::get('/edit-kepzes/{kepzes}', [KepzesController::class, 'showEditScreen']);

Route::put('/edit-kepzes/{kepzes}', [KepzesController::class, 'update']);

Route::delete('/delete-kepzes/{kepzes}', [KepzesController::class, 'delete']);

Route::get('/kepzesek', function () {
    return view('kepzes', ['kepzesek' => Kepzes::all(), 'user' => Auth::user()]);
});
