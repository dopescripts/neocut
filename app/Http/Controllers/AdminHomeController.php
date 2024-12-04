<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;

class AdminHomeController extends Controller
{
    public function index(){
        return view('admin.pages.home');
    }
    public function create(){
        return view('admin.pages.create');
    }
    public function table(){
        $register = register::all();
        return view('admin.pages.table', compact('register'));
    }
    public function register_store(Request $request){
        $register = new register;
        $register->name = $request->name;
        $register->email = $request->email;
        $register->handle = $request->handle;
        $register->password = $request->password;
        $register->save();
        return redirect()->back();
    }
    // public function register_edit($id){
    //     $register = register::findorfail($id);
    // }
}
