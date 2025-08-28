<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AccController;

Route::get('/', [HomeController::class, 'index']);


Route::resource('/home', HomeController::class);

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'authenticate']);

Route::resource('/main', MainController::class);

Route::get('/account', [AccController::class, 'index'])->name('account.index');
Route::get('/account/{id}/edit', [AccController::class, 'edit'])->name('account.edit');
Route::put('/account/{id}', [AccController::class, 'update'])->name('account.update');
Route::delete('/account/{id}', [AccController::class, 'destroy'])->name('account.destroy');
Route::post('/account', function () {
    session()->flush();
    return redirect('/');
})->name('account.logout');

// route::resource('/main', AuthController::class)->only(['index', 'login']);
// route::post('/main', AuthController::class);