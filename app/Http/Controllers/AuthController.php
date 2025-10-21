<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class AuthController extends Controller
{
    //

    public function register(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|string|max:40',
            'password' => 'required',
            'email' => 'required',
        ]);

        // Create the user
        $user = User::create([
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'password'=>Hash::make($credentials['password']),
        ]);

        // Log the user in
        

        // Redirect to a desired location, e.g., home page
        return back()->with('success', 'Registration successful!'); 
    }


    // Redirect to a desired location, e.g., home page
    return redirect()->intended('/')->with('success', 'Lietotajs bija veiksmīgi registrēts!');
}
    public function login(Request $request)
    {
        // If your login form uses 'login_email' and 'login_password' as input names,
        // validate those and map to the credentials array used by Auth::attempt.
        $request->validate([
            'login_email' => 'required|email',
            'login_password' => 'required',
        ]);

        $credentials = [
            'email' => $request->input('login_email'),
            'password' => $request->input('login_password'),
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/'); // Redirect to intended page or home
        }

        return back()->withErrors([
            'login_email' => 'Nepareize parole vai email!',
        ])->onlyInput('login_email');
    }
}