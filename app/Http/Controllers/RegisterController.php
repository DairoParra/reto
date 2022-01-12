<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(){

        $this->validate(request(),[
           'name' => 'required|max:10',
           'email' => 'required|email|max:300',
           'password' => 'required|confirmed|min:6',
        ]);

        $user = User::create(request(['name', 'email', 'password']));
        auth()->login($user);
        return redirect()->to('/');
    }

}
