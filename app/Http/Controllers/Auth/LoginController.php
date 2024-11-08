<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController
{
    public function login(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->boolean('remember', false);

        if (! Auth::attempt($credentials, $remember)) {
            return back()->withErrors([
                'login' => __('The provided credentials do not match our records.'),
            ]);
        }

        return redirect()->route('dashboard');
    }
}
