<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {

        return view('auth.login');
    }

    public function post_login() {
        if (Auth::attempt([ 'username' => request()->input('username'), 'password' => request('password') ])) {
            return redirect('items');
        }

        return redirect('login');
    }

    public function dashboard() {
        if (Auth::check()) {
            return view('item/items', ['items' => Item::all()]);
        }
        return redirect('/');
    }

    public function logout() {
        session()->flush();
        Auth::logout();
        return redirect('/');
    }
}
