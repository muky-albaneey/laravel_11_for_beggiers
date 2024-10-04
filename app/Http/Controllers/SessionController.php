<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
       $validateAtrr = request()->validate([
            'email'=>['required', 'email'],
            'password'=>['required']
        ]);

        if(! Auth::attempt($validateAtrr)){
            throw ValidationException::withMessages([
                'email'=>'the credentials does not match',
               
            ]);
        }

        request()->session()->regenerate();

        return redirect('/jobs');
    }


    public function destroy(){
        Auth::logout();
        return redirect('/');
    }
}
