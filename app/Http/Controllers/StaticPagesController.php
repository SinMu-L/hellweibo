<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home(){
        return view('static_pages/home');
    }

    public function help(){
        return view('static_pages/help');
        // dd(__FUNCTION__);
    }

    public function about(){
        return view('static_pages/about');
    }
}
