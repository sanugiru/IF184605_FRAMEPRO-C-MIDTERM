<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create', [
            'title' => 'Sign Up'
        ]);
    }

    public function store(Request $request)
    {
        // return $request->all();
        $validatedData = $request->validate([
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8',
            'name' => 'required|max:50',
            'phone_number' => 'required|max:12',
            'address' => 'required|max:250'
        ]);
        
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::insert($validatedData);
        session()->flash('success', 'Sign up successful! Login to continue');

        return redirect('/login');
    }
}
