<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        try {
            $user = Socialite::driver('google')->user();
            $findUser = User::where('google_id', $user->getId())->first();

            if($findUser)
            {
                Auth::login($findUser);
                return redirect()->intended('reservasi');
            } else {
                $newUser = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'google_id' => $user->getId(),
                    'password' => bcrypt('12345678')
                ]);
                Auth::login($newUser);
                return redirect()->intended('reservasi');
            }
        } catch (\Throwable $th) {
            dd('Something went wrong! ' . $th->getMessage());
        }
    }
}
