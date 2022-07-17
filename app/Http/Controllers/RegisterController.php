<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register');
    }
    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'username' => 'required|max:255|min:3|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);
        $author = User::create($attributes);
        auth()->login($author);
        session()->flash('success', 'Your account has been created');
        return redirect('/');
        
        
    }
}
