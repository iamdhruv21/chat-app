<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegisterController extends Controller
{

    public function showRegistrationForm(): View
    {
        return view('auth.register');
    }

    public function register(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'firstname' => ['required', 'alpha'],
            'lastname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'password' => ['required', 'confirmed'],
        ]);

        User::created([
            'name' => $credentials['firstname'] . $credentials['lastname'],
            'email' => $credentials['email'],
            'password' => Hash::make($credentials['password']),
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
