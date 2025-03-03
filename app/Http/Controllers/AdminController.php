<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class AdminController extends Controller
{
    
    public function index(){
        return view('index');
    }

    public function bookStore(Request $request){
       
        $request->validate([
            'title'=>'required',
            'authorName'=>'required',
            'isbn' => 'required',

        ]);
        Book::create(($request->all()));
      
        return redirect()->route('book.show')->with('Success','Book Entry Successfully Done');


    }
    public function show($id){
        $book = Book::findorfail($id);
        return view('book.show',compact('book'));

    }
}
