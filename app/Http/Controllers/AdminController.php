<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller {

    public function index(){

        $users = User::paginate();

        return view('admin.index', compact('users'));

    }

    public function create(){

    }

    public function show(User $user){

        return view('admin.show', compact('user'));
    }

    public function edit(User $user){
        return view('admin.edit', compact('user'));
    }

    public function update(Request $request,User $user){

        $request->validate([
           'name'=>'required|max:100',
           'email'=>'required|min:6'
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('admin.show', $user);
    }

}
