<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCompeletingDataRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function setupPage()
    {
        return view('auth.setup-account');
    }

    public function compeletingData(UserCompeletingDataRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('avatar')) {
            $imageName = time() . '.' . $request->image->getClientOriginalName();
            $uploadedImage = $request->image->move(public_path('avatar'), $imageName);
            $imagePath = 'avatar/' . $imageName;
        } else {
            
        }

        User::where('email', Auth::user()->email)->update([
            'username' => $validated['username'],
            'avatar' => $imagePath,
        ]);

        return redirect()->route('home.page')->withSuccess('The account is ready, let`s explore it');
    }
}
