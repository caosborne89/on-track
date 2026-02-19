<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Register extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $email = $request->input('email');

        if (User::where('email', $email)->first()) {
            return back()->withErrors([
                'email' => 'Email already in use.'
            ]);
        }

        $validate = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed']
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $email,
            'password' => Hash::make($request->input('password'))
        ]);

        $user->save();

        $request->session()->regenerate();
        return redirect('/');
    }
}
