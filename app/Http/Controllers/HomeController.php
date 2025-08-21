<?php

namespace App\Http\Controllers;

use App\Models\Bundle;

class HomeController extends Controller
{
    public function index()
    {
        $bundles = Bundle::all();
        return view('home', compact('bundles'));
    }
}
