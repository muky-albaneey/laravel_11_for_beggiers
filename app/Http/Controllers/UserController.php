<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
       $validationAtrr = request()->validate([
            'first_name' => ['required', 'min:2', 'max:25', ],
            'last_name'=>['required'],
            'email'=>['required', 'email'],
            'password' => ['required', Password::min(4)->max(12)->letters()->numbers(),'confirmed']
        ]);

        $user = User::create($validationAtrr);

        Auth::login($user);

        return redirect('/jobs');
    }
}
