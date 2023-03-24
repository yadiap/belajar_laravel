<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
