<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function auth()
    {
        return view("auth.social");
    }

    public function redirect(string $provider)
    {
        return Socialite::driver($provider)->redirect();
        // return Socialite::driver($provider)->redirect;
    }

    public function callback(string $provider)
    {
    }
}
