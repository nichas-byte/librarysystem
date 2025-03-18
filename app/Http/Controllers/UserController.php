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
        $request->validate([
            'fullname'  => 'required|string|max:255',
            'email'     => 'required|email|unique:users,email',
            'mobileNo'  => 'required|unique:user,mobileNo',
            'membertype'=> 'nullable|string'
        ]);
    
        $user = new User();
        $user->fullname   = $request->fullname;
        $user->email      = $request->email;
        $user->mobileNo   = $request->mobileNo;
        $user->membertype = $request->membertype ?? 'regular'; // Default value if null
        $user->save();
        return redirect()->route('user.show')->with('success', 'User add successfully');

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
