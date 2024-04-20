<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SellController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuyController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/Sell', [SellController::class, 'Sell'])->name('sellFood');
Route::post('/Store', [SellController::class, 'store'])->name('sellFood.store');
Route::get('/Buy', [BuyController::class, 'Buy'])->name('buyFood');

Route::get('/dashboard', [SellController::class, 'showDashboard'])->name('dashboard');
Route::get('/buyFood', [SellController::class, 'showBuyFood'])->name('buyFood');

Route::delete('/dashboard/{id}', [SellController::class, 'destroyFood'])->name('dashboard.destroyFood');


Route::post('/buyFood/{id}', [BuyController::class, 'purchase'])->name('buyFood.buy');

require __DIR__ . '/auth.php';
