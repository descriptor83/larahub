<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Goodbye!');
    }
    public function create()
    {
        return view('login');
    }
    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(auth()->attempt($attributes)){
            return redirect('/')->with('success', 'Welcome Back!');
        }
        throw ValidationException::withMessages(['email' => 'Your credidetioals could not be verified']);
        return back()->withInput()->withErrors(['email' => 'Your credidetioals could not be verified']);
    }
}
