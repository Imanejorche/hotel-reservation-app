<?php

namespace App\Http\Controllers;
use App\Models\Reservation;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function bookPost(){

        return view('home.formbook');
    }

    public function ResPost(Request $request)
    {  
        $request->validate([ 
         
          'full_name'=>'required',
          'phone_number'=>'required',
          'country'=>'required',
          'rooms'=>'required',
          'check_in'=>'required',
          'check_out'=>'required',
          'adults'=>'required',
          'children'=>'required',
        ]);
      
        $res = new Reservation();
  
        $res->full_name =  $request->full_name;
        $res->phone_number = $request->phone_number;
        $res->country = $request->country;
        $res->rooms =  $request->rooms;
        $res->check_in = $request->check_in;
        $res->check_out = $request->check_out;
        $res->adults = $request->adults;
        $res->children = $request->children;
        
        $res->save();
  
        return redirect('/room')->with('success','Reservation successfuly');
    }
   
  }

