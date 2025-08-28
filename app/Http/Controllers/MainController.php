<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $member_name = null;
        if(session()->has('member_id')) {
            $member_name = \App\Models\Member::where('id', session('member_id'))->value('name');
        }

        return view('main', compact('member_name'));
    
    }
}