<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }

    public function store(StoreUser $user){

        $user = User::create(request(['name', 'email', 'password']));
        auth()->login($user);
        return redirect()->to('/');

    }

}

