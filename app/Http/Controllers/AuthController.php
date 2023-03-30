<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function indexRegister()
    {
        return view('auth.register', [
            'title' => 'Register',
        ]);
    }
    public function indexLogin()
    {
        return view('auth.login', [
            'title' => 'Login',
        ]);
    }
    public function storeRegister(Request $request)
    {
        // Show all input from Form Register
        // return $request->all();

        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ], [
            'name.required' => 'tidak boleh kosong',
            'email.required' => 'tidak boleh kosong',
        ]);

        // Password Encryption 
        $validateData['password'] = Hash::make($validateData['password']);
        
        // Save to db
        User::create($validateData);

        return redirect('/login');
    }

    public function storeLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('home');
        }
 
        return back()->with('login-error', 'Email atau Password salah!!');
    }
    
    public function storeLogout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/home');
    }
}
