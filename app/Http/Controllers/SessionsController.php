<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', Rule::exists('users', 'email')],
            'password' => ['required']
        ]);

        if(!auth()->attempt($attributes)) {
            throw ValidationException::withMessages(['email' => 'Your provided credentials could not be verified.']);
        }

        session()->regenerate();

        return redirect('/')->with('success', 'Welcome back');
    }

    public function destroy()
    {
        auth()->logout();

        //with est utilisé pour retourner un flash message.
        return redirect('/')->with('success', 'See you soon');
    }
}
