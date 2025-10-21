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
        return back()->with('success', 'Lietotajs bija veiksmīgi registrēts!'); 
    }

public function login(Request $request)
{
    $data = $request->validate([
        'login_email' => 'required|email',
        'login_password' => 'required',
    ]);

    $credentials = [
        'email' => $data['login_email'],
        'password' => $data['login_password'],
    ];

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/');
    }

    return back()->with('successno', 'Nepareiza parole vai email!');}
