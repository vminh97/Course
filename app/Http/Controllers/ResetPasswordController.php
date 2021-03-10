<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Model\User;
use App\Model\PasswordReset;
use App\Notifications\ResetPasswordRequest;
class ResetPasswordController extends Controller
{
    const VALID_TOKEN = 60;
    public function sendMail(Request $request)
    {
        try {
            $user = User::where('email', $request->email)->first();
            $passwordReset = PasswordReset::updateOrCreate([
                'email' => $user['email'],
            ], [
                'token' => Str::random(60),
            ]);

            if ($passwordReset) {
                $user->notify(new ResetPasswordRequest($passwordReset->token));
            }

            return response()->json([
                'status' => true,
                'message' => __('We have e - mailed your password reset link!')
            ]);
        } catch (Exception $exception) {
            return [
                'status' => false,
                'message' => __('something went wrong!')
            ];
        }
    }

    public function resetPassword(Request $request, $token)
    {
        $passwordReset = PasswordReset::where('token', $token)->first();

        if (!$passwordReset) {
            return response()->json([
                'message' => __('The token is invalid.')
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        if (Carbon::parse($passwordReset->updated_at)->addMinutes(self::VALID_TOKEN)->isPast()) {
            $passwordReset->delete();
            return response()->json([
                'message' => 'The token is invalid.',
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $user = User::where('email', $passwordReset->email)->firstOrFail();
        $user->password = bcrypt($request->get('new_password'));
        $user->save();
        $passwordReset->delete();

        return response()->json([
            'success' => true,
            'message' => __('change password success, please login!')
        ]);
    }
}
