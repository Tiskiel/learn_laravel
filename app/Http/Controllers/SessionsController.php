<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
            return back()->withErrors(['email' => 'Your provided credentials could not be verified.']);
        }

        return redirect('/')->with(['succes' => 'Welcome back' . auth()->user()->name]);
    }

    public function destroy()
    {
        auth()->logout();

        //with est utilisé pour retourner un flash message.
        return redirect('/')->with('success', 'See you soon');
    }
}
