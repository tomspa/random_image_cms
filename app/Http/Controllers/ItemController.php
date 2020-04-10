<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class itemController extends Controller
{
    public function update($id) {
        if (Auth::check()) {
            return view('item.update', ['item' => Item::find($id)]);
        }

        return redirect('login');
    }

    public function post_update() {
        if (Auth::check()) {
            Item::where('id', request()->input('id'))
                ->update(['url' => request()->input('url')]);

            return redirect('items');
        }

        return redirect('login');
    }

    public function new() {
        if (Auth::check()) {
            return view('item.new');
        }

        return redirect('login');
    }

    public function post_new() {
        if (Auth::check()) {
            Item::create(['url' => request()->input('url')]);
            return redirect('items');
        }

        return redirect('login');
    }

    public function delete($id) {
        if (Auth::check()) {
            Item::where('id', $id)->delete();
            return redirect('items');
        }

        return redirect('login');
    }

}
