<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class ProfileController extends Controller
{
    public function profilePage(User $username)
    {
        return view('user.profile', compact('username'));
    }
}
