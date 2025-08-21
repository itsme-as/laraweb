<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('landing');
});


Route::get('/home', [HomeController::class, 'index']);

route::get('/main', function () {
    return view('main');
});