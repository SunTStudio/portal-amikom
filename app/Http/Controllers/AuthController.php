<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login/login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'password' => 'required',
        ]);
        
        if(Auth::attempt(['nim'=> $request->nim,'password' => $request->password])){
            $users = User::where('nim',$request->nim)->first();
            session(['nim' => $users->id]);
            return redirect()->route('portal.dashboard')->with('success','Anda berhasil login!');
        }else{
            return back()->with('error','Periksa Kembali Nim atau Password Anda!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        Session::forget('nim');
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Session::flush();

        return redirect()->route('portal.login')->with('success', 'Anda berhasil logout!');
    }

}
