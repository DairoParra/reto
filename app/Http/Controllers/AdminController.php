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

        return view('admin.create');

    }

    public function show($id){

        $user = User::find($id);

        return view('admin.show', compact('user'));
    }

}
