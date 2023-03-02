<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function dashboard() {
        // 1st method "Jika ingin menggunakan where dengan kondisional yang lain (ganti 'user_id')"
        // $checkout = Checkout::wih('Camp')->where('user_id', Auth::id())->get();

        // 2nd method "Jika ingin menggunakan whereUserId"
        // $checkouts = Checkout::with('Camp')->whereUserId(Auth::id())->get();
        // return view('user.dashboard', [
        //     'checkouts' => $checkouts
        // ]);

        switch (Auth::user()->is_admin) {
            case true:
                return redirect()->route('admin.dashboard');
                break;

            default:
                return redirect()->route('user.dashboard');
                break;
        }
    }
}
