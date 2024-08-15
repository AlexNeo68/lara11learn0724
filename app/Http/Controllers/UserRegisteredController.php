<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;


class UserRegisteredController extends Controller
{
    public function create(Request $request)
    {
        return view("auth.register");
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::default()->min(6), 'confirmed'],
        ]);

        $user = User::create($attributes);

        Auth::login($user);

        return redirect()->route('jobs.index');

    }
}
