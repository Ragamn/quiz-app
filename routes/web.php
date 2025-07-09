<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;

Route::get('/', function () {
    return view('welcome');
});

// Levelコントローラーのルーティング
Route::controller(LevelController::class)->group(function () {
    Route::get('/top', 'selectAllLevels');
});
