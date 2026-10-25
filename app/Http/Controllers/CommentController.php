<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index(){

        return view('home.comment');

    }

    public function post(Request $request)
    {  
        $request->validate([ 
         
          'fullname'=>'required',
          'country'=>'required',
          'comment'=>'required',
          
        ]);
      
        $com = new Comment();
  
        $com->fullname = $request->fullname;
        $com->country =  $request->country;
        $com->comment =  $request->comment;
       
        
        $com->save();
  
        return redirect('/comment')->with('success',' Publish successfuly');
      
    }
    
   




}
