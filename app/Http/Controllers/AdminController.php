<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    
    public function index(){
        
        return view('index');
    }

    public function create(){
        return view('book-form');
    }

    public function bookStore(Request $request){
       
        $request->validate([
            'title'=>'required',
            'authorName'=>'required',
            'isbn' => 'required',

        ]);
        Book::create(($request->all()));
      
        return redirect()->route('show')->with('Success','Book Entry Successfully Done');


    }
    public function show(){
        $book = DB::table('book')->get();
        return view('show',compact('book'));
    }
    public function deleteBook($id){
        DB::table('book')->where('id', $id)->delete();
        return response()->json(['message' => 'Book deleted successfully']);   
    }
}
