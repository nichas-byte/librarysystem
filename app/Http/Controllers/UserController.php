<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('showuser');
    }
    public function store(Request $request){
        // dd($request);
        $request->validate([
            'fullname'=>'required',
            'email'=>'required|unique:user',
            'mobileNo'=>'required',
        ]); 
        $user = new User();
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->mobileNo = $request->mobileNo;
        $user->save();
        // User::create(($request->all()));
       

        return redirect()->route('show.user')->with('success', 'User add successfully');

    }
    public function showuser(){

        $user = User::get();
        return view('show-user',compact('user'));
    }

    public function create(){
        // dd('fvjkhdkvjhdkjv');
        return view('add-user');
    }

}
