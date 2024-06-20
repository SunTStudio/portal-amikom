<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function callback(){
        $socialUser = Socialite::driver('google')->user();
        
        // Find the user by email instead of id
        $registeredUser = User::where('email', $socialUser->email)->first();

        if (!$registeredUser) {
            // Create a new user if not found
            $registeredUser = User::create([
                'email' => $socialUser->email,
                'password' => Hash::make('12345678'),
                'google_token' => $socialUser->token,
                'google_refresh_token' => $socialUser->refreshToken,
            ]);
            Auth::login($registeredUser);

            return redirect()->route('portal.dashboard')->with('success', 'Anda berhasil login!');
        }

        // Log in the user
        Auth::login($registeredUser);

        return redirect()->route('portal.dashboard')->with('success', 'Anda berhasil login!');
    }
}
