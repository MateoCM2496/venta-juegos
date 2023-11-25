<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PsnController;
use App\Http\Controllers\XboxController;
use App\Http\Controllers\NintendoController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\UserController;
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



Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::get('/inicio', [InicioController::class, 'index'])->name('inicio');
Route::get('/psn', [PsnController::class, 'index'])->name('psn');
Route::get('/xbox', [XboxController::class, 'index'])->name('xbox');
Route::get('/nintendo', [NintendoController::class, 'index'])->name('nintendo');
Route::get('/info', [InfoController::class, 'index'])->name('informacion');


Route::middleware('auth')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard')->middleware('checkUserIsOne');
});

Route::group(['middleware' => ['auth', 'verified'], 'as' => 'admin.'], function (){
    Route::resource('users', UserController::class);   
    Route::resource('games', GameController::class);
});


require __DIR__.'/auth.php';
