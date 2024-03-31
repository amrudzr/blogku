<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Services\Auth\RegisterService;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    protected $registerService;

    public function __construct(RegisterService $registerService) {
        $this->registerService = $registerService;
    }

    public function registerPage()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();

        if ($validated['password'] === $validated['confirm_password']) {
            
            $this->registerService->createAccount($validated);

            Auth::attempt([
                'email' => $validated['email'],
                'password' => $validated['password']
            ]);

            return redirect()->route('home.page')->withSuccess('Account registered successfully!');
        } else {
            return back()->withErrors('Failed, Please check your input data!');
        }
    }
}
