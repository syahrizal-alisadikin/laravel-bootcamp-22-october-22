<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('chirps', ChirpController::class)
    ->only(['index', 'store',  'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

// Route::get('chirps', [ChirpController::class, 'index'])
//     ->name('chirps.index')
//     ->middleware(['auth', 'verified']);

// Route::post('chirps', [ChirpController::class, 'store'])
//     ->name('chirps.store')
//     ->middleware(['auth', 'verified']);

// Route::get('chirps/{chirp}/edit', [ChirpController::class, 'edit'])
//     ->name('chirps.edit')
//     ->middleware(['auth', 'verified']);

// Route::put('chirps/{id}', [ChirpController::class, 'update'])
//     ->name('chirps.update')
//     ->middleware(['auth', 'verified']);

// Route::delete('chirps/{id}', [ChirpController::class, 'destroy'])
//     ->name('chirps.destroy')
//     ->middleware(['auth', 'verified']);


require __DIR__ . '/auth.php';
