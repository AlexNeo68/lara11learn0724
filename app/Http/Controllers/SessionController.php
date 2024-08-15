<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view("auth.login");
    }


    public function store(Request $request)
    {
        $attributes = $request->validate([
            "email" => ['required', 'email'],
            "password" => ['required'],
        ]);

        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages(['email' => trans('Credentials is not match!')]);
        }

        request()->session()->regenerate();
        return redirect()->route('jobs.index');

    }


    public function destroy(Request $request)
    {
        Auth::logout();
        return redirect("/");
    }
}
