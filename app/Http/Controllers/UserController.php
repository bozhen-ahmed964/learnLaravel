<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    // Login --------------------------------------

    public function login()
    {
        return view('login');
    }


    public function loginUser()
    {
        $attributes = request()->validate([

            'email' => ['required', 'exists:users,email'],
            'password' => ['required'],
        ]);

        if (auth()->attempt($attributes)) {
            return redirect('/index')->with('success', 'welcome');
        }
    }


    public function register()
    {
        return view('register');
    }


    public function store()
    {

        $attributes = request()->validate([

            'name' => ['required', 'max:6', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'max:8'],

        ]);

        $user =  User::create($attributes);

        auth()->login($user);
        return redirect('/index')->with('success', 'you account has been created');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login')->with('success', 'goodbye !');
    }
}
