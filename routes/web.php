<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScoreController; // 追加
use App\Http\Controllers\LevelController;
use App\Models\Score;

Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
// Levelコントローラーのルーティング
Route::controller(LevelController::class)->group(function () {
    Route::get('/top', 'selectAllLevels');
});

// Scoreコントローラーのルーティング
//Route::middleware('auth')を前に付けることでログインしていない状態でアクセスするとログイン画面にリダイレクトするようになる
Route::middleware('auth')->controller(ScoreController::class)->group(function () {
    Route::get('/ranking', 'ranking')->name('scores.ranking');
    Route::get('/ranking/level/{levelId}', 'rankingByLevel')->name('scores.ranking.level');
});

Route::controller(ScoreController::class)->group(function () {
    Route::get('/score/{levelId}', 'getLatestUserScore')->name('scores.latest');
});
