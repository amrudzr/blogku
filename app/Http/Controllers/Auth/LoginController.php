<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');    
    }

    public function login(LoginRequest $request) 
    {
        if (Auth::attempt($request->validated())) {
            return redirect()->route('home.page')->withSuccess('Login successfully!');
        } else {
            return back()->withError('Login failed, Please check your input data!');
        }
    }
}
