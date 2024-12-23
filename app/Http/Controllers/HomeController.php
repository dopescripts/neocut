<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('web.pages.home');
    }
    public function login(){
        return view('auth.login');
    }
}
