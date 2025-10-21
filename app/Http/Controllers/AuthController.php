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
        'name' => 'required|string|max:255',
        'password' => 'required',
        'email' => 'required|email',
    ]);

    // Create the user
    $user = User::create([
        'name' => $credentials['name'],
        'email' => $credentials['email'],
        'password'=>Hash::make($credentials['password']),
    ]);



    // Redirect to a desired location, e.g., home page
    return redirect()->intended('/')->with('success', 'Lietotajs bija veiksmīgi registrēts!');
}
public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/');
    }

    return back()->withErrors(['email' => 'Nepareiza parole vai email!'])->withInput();
}
}