<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user.form');
    }
    public function store(Request $request){
        $request->validate([
            'fullname'=>'required',
            'email'=>'required|unique:user',
            'mobileNo'=>'required',
        ]);
        User::create(($request->all));
        return redirect()->route('show.user')->with('success', 'User add successfully');

    }
    public function showuser($id){
        $user = User::findorfail($id);
        return view('user.show',compact('user'));
    }

}
