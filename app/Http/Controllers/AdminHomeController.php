<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index(){
        return view('admin.pages.home');
    }
    public function create(){
        return view('admin.pages.create');
    }
    public function table(){
        return view('admin.pages.table');
    }
}
