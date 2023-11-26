<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_confirm' => 'required|same:password'
        ]);

        $nameWithoutSpaces = Str::lower(Str::replace(' ', '', $request->name));
        $randomNumber = mt_rand(100000, 999999);
        $convertedName = $nameWithoutSpaces . $randomNumber;

        // dd($convertedName);
        
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $convertedName,
            'password' => Hash::make($request->password),
        ]);
        
        $user->save();

        return redirect()->route('login')->with('success', 'Registration success. Please login!');;
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        };

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }
}
