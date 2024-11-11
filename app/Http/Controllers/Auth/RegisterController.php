<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\RedirectResponse;


class RegisterController
{
    public function register(RegisterRequest $request): RedirectResponse
    {
        $credentials = $request->only(['name', 'email', 'password', 'password_confirmation']);

        User::create([
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'password' => bcrypt($credentials['password']),
        ]);

        return redirect()->route('login');
    }
}
