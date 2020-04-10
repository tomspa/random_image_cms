<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {

        return view('auth.login');
    }

    public function post_login() {
        dd('hoi');
        return redirect('dashboard');
    }

    public function dashboard() {
        if (Auth::check()) {
            return view('dashboard');
        }
    }

    public function logout() {
        session()->flush();
        Auth::logout();
        return redirect('/');
    }
}
