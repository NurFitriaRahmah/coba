<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()//menampilkan form login
    {
        return view('auth.login');
    }

    public function auth(Request $r)//menyesuaikan data login dengan data di database
    {
        //$r->only('email', 'password');

        Auth::attempt([
            'email' => $r->email,
            'password' => $r->password
        ]);


        return redirect('home');

    }

    public function logout()//untuk logout
    {
        Auth::logout();

        return redirect('login');

    }

    public function home()//menampilakan home jika berhasil login
    {
        return view('auth.home');
    }
}
