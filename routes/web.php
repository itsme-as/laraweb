<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('landing');
});


Route::resource('/home', HomeController::class);

route::get('/main', function () {
    return view('main');
});