<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class RegisterController
{
    public function register(RegisterRequest $request): RedirectResponse
    {
        $credentials = $request->only(['name', 'email', 'password']);

        User::create([
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'password' => bcrypt($credentials['password']),
        ]);

        return redirect()->route('login')->with('status', __('User succesfully registered'));
    }
}
