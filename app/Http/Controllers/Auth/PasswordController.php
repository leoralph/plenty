<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Models\User;
use Password;
use Str;

class PasswordController extends Controller
{
    public function forgotPassword(ForgotPasswordRequest $request)
    {

        $status = Password::sendResetLink(
            $request->only(['email'])
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function resetPassword(ResetPasswordRequest $request)
    {
        $credentials = $request->only('email', 'password', 'token');

        $status = Password::reset($credentials, function (User $user, string $password) {
            $user->password = bcrypt($password);
            $user->setRememberToken(Str::random(60));

            $user->save();
        });

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(
                ['email' => [__($status)]]
            );
    }
}
