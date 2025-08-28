<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');

    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'phone' => 'required',
        ]); 

        $member = Member::where('email', $credentials['email'])
            ->where('phone', $credentials['phone'])
            ->first();

        if ($member) {
            $request->session()->put('member_id', $member->id);
            $request->session()->put('member_name', $member->name);

            return redirect()->intended('/main');
        }

        return redirect('/home')->with('loginError', 'Login failed! Please check your email and phone number again.');
    }
}