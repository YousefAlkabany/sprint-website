<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class RegisterdUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(){
        $validated_data=request()->validate([
            'name'=>['required'],
            'email'=>['required','email'],
            'password'=>['required','confirmed']
        ]);

        $user=User::create($validated_data);

        Auth::login($user);
        return redirect('home');

    }
}
