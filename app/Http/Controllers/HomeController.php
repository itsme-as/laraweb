<?php

namespace App\Http\Controllers;

use App\Models\Bundle;
use App\Models\Member;
// use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function store(Request $request)
    {
        Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'class' => $request->class // Store the selected class
        ]);

        
        return redirect()->back();
    }

    public function index()
    {
        $bundles = Bundle::all();

        $members = Member::select(['name', 'email'])->get();

        $members = Member::latest()->take(5)->get();

        return view('home', compact('bundles','members'));
    }
}