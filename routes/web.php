<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PsnController;
use App\Http\Controllers\XboxController;
use App\Http\Controllers\NintendoController;
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

Route::get('/', function () {
    return view('inicio');
});

Route::get('/inicio', function () {
    return view('inicio');
})->middleware(['auth', 'verified'])->name('inicio');


Route::get('/psn', [PsnController::class, 'index'])->name('psn');
Route::get('/xbox', [XboxController::class, 'index'])->name('xbox');
Route::get('/nintendo', [NintendoController::class, 'index'])->name('nintendo');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
  //  Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard')->middleware('checkUserIsOne');
    
});

require __DIR__.'/auth.php';
