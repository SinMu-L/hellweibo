<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create(){
        // view('users.create') 和 view('users/create') 的区别不大，建议写 view('users.create')
        return view('users.create');
    }

    public function show(User $user){
        return view('users.show',compact('user'));
    }
}
