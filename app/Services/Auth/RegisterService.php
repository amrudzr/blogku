<?php

namespace App\Services\Auth;

use App\Models\User;

class RegisterService
{
    public function createAccount($validated)
    {
        return User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
        ]);
    }
}
