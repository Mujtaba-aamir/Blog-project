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

    public function loginUser(Request $req)
    {
        $user = $req->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if (Auth::attempt($user)) {
            return redirect()->route("dashboardPage");
        }

        else
            return back()->withErrors(["message" => "Invalid email or password"]);
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function registerUser(Request $req)
    {
        $user = $req->validate([
            "name" => 'required|max:30|string',
            "email" => 'required|email|unique:users,email',
            "password" => 'required|confirmed|min:8'
        ]);
        $Register = User::create($user);
        return redirect()->back()->with('success', 'Registered Successfully, Please Log in');
    }

    public function showDashboardPage()
    {
        return view('admin.dashboard');
    }
}
