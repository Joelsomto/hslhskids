<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HealingStreamsRegistrationController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/about', [UserController::class, 'about'])->name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/healing-streams/register', [HealingStreamsRegistrationController::class, 'showRegistrationForm'])->name('healing-streams.register');
Route::post('/healing-streams/register', [HealingStreamsRegistrationController::class, 'register']);
Route::get('/api/states', [HealingStreamsRegistrationController::class, 'getStates']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
