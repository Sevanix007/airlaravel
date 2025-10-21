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
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $username = $request->input('login_email');
        $password = $request->input('login_password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/'); // Redirect to intended page or home
        }

return back()->with('successno', 'Nepareiza parole vai email!'); 
    }


}
