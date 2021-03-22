<?php

namespace App\Http\Controllers;

use App\Model\UserSocial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Session;
class SocialLoginCallback extends Controller
{
    public function __invoke(Request $request)
    {
        $socialiteProfile = Socialite::driver('facebook')->user();
        $user = UserSocial::where('email', $socialiteProfile->email)->first();
        //lấy thông tin username, email, avatar, social_id để lưu vào bảng users (nếu bạn cần thêm thông tin gì thì có thể lấy thêm)
        $data = [
            'name' => $socialiteProfile->name,
            'email' => $socialiteProfile->email,
            'avatar_url' => optional($user)->avatar_url ? $user->avatar_url : $socialiteProfile->avatar,
            'social_id' => $socialiteProfile->id,
            'social_provider'=>'facebook',
        ];
        $user = UserSocial::updateOrCreate(['email' => $socialiteProfile->email], $data);
        Auth::login($user, true);

        return redirect();
    }
}
