<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; 

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'purpose' => 'nullable|string',
        ]);

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'purpose' => $request->purpose,
            ]);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Failed to create user: ' . $e->getMessage()]);
        }

        Auth::login($user);

        if (!Auth::check()) {
            return redirect('/login')->withErrors(['error' => 'Login failed after signup.']);
        }

        return redirect('/card')->with('success', 'Account created successfully!');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/card')->with('success', 'Logged in successfully!');
        }

        return back()->withErrors(['email' => 'Invalid email or password']);
    }
}