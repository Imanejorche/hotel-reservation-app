<?php

namespace App\Http\Controllers;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomsController extends Controller
{
  public function index()
  {
   
      return view('home.addrooms');
  }
  


  
  public function roomPost(Request $request)	{

    $validator = $request->validate([ 
        'username'=>'required',
        'roomtype'=>'required',
        'price_per_night'=>'required',
        'currency'=>'required',
        'hotelname'=>'required',
        'image_url'=> 'required|image|mimes:jpeg,png,jpg',
      ]);

      
    
      $room = new Room();

      $room->username =  $request->username;
      $room->roomtype = $request->roomtype;
      $room->price_per_night = $request->price_per_night;
      $room->currency =  $request->currency;
      $room->hotelname = $request->hotelname;
      $room->image_url = $request->file('image_url')->store('profile', 'public');
      
      $room->save();

      return redirect('/addrooms')->with('success','Add successfuly');
  }
}
