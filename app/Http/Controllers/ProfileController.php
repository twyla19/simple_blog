<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('table-admin');
        
    }

    public function profile()
    {
        return view('profile-admin');
    }

    public function update(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'last_name' => 'nullable|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users,email,' . Auth::user()->id,
        // ]);


        // $user = User::findOrFail(Auth::user()->id);
        // $user->name = $request->input('name');
        // $user->last_name = $request->input('last_name');
        // $user->email = $request->input('email');

        // }

        // $user->save();

        return redirect()->route('profile')->withSuccess('Profile updated successfully.');
    }
}
