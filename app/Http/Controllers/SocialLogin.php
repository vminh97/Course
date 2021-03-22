<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Session;
class SocialLogin extends Controller
{
    public function __invoke()
    {
        return Socialite::driver('facebook')->redirect();
    }
}
