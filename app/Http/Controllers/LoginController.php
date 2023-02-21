<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.sign-in', [
            'title' => 'Login',
            'active' => 'login',
        ]);
    }
}
