<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AuthenticationController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function loginUser(Request $req) {}

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function registerUser(Request $req)
    {
        $user = $req->validate([
            "name" => 'required|max:30|string',
            "email" => 'required|unique:users,email',
            "password" => 'required|confirmed|min:8'
        ]);
    }
}
