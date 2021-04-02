<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login_handler(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        
        if(Auth::guard('petugas')->attempt($request->only('username', 'password'))) {
            $user = Auth::guard('petugas')->user();
            if ($user->level == "admin") {
                //dd(auth()->guard('petugas')->user());
                return redirect('/dashboard');
            } elseif ($user->level == "petugas") {
                return redirect('/petugas');
            }
        } elseif (Auth::guard('warga')->attempt($request->only('username', 'password'))) {
                 //dd(auth()->guard('warga')->user());
                 return redirect('/');
        } else return redirect('/login')->with('danger', 'Email atau Password anda salah');
    }

    public function logout()
    {
        if(Auth::guard('petugas')->check()) {
            Auth::guard('petugas')->logout();
            return redirect('/login')->with('danger', 'Anda berhasil logout');
        } else if(Auth::guard('warga')->check()) {
            Auth::guard('warga')->logout();
            return redirect('/login')->with('danger', 'Anda berhasil logout');
        }
    }
}
