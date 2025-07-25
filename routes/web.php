<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MbtiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MbtiController::class, 'index'])->name('home');

// MBTI Routes
Route::resource('mbti', MbtiController::class);
Route::get('/mbti-types', [MbtiController::class, 'types'])->name('mbti.types');
Route::get('/mbti-type/{type}', [MbtiController::class, 'type'])->name('mbti.type');
Route::get('/history', [MbtiController::class, 'history'])->name('mbti.history')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

