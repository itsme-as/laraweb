<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class AccController extends Controller
{
    public function index()
    {
        $member_name = null;
        if(session()->has('member_id')) {
            $member_name = \App\Models\Member::where('id', session('member_id'))->value('name');
        }
        $member_email = null;
        if(session()->has('member_id')) {
            $member_email = \App\Models\Member::where('id', session('member_id'))->value('email');
        }
        $member_phone = null;
        if(session()->has('member_id')) {
            $member_phone = \App\Models\Member::where('id', session('member_id'))->value('phone');
        }
        $member_address = null;
        if(session()->has('member_id')) {
            $member_address = \App\Models\Member::where('id', session('member_id'))->value('address');
        }

        return view('account', compact('member_name', 'member_email', 'member_phone', 'member_address'));
    
    }

    public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view('edit', compact('member'));
    }

    public function update(Request $request, $id)
    {
        $member = Member::findOrFail($id);
        $member->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        return redirect('/account')->with('success', 'Account updated!');
    }

    public function destroy($id)
    {
        Member::where('id',$id)->delete();

        return redirect('/');
    }
}