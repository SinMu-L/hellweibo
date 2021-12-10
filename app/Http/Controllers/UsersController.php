<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create(){
        // view('users.create') 和 view('users/create') 的区别不大，建议写 view('users.create')
        return view('users.create');
    }
}
