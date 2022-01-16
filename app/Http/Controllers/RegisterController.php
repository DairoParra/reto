<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUser;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(UpdateUser $request){

        $user = User::create(request(['name', 'email', 'password']));
        auth()->login($user);
        return redirect()->to('/');

    }

}
