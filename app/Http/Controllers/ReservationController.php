<?php

namespace App\Http\Controllers;
use App\Models\Room;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $rooms = Room::take(6)->get();

        return view('home.makereservation',['rooms' => $rooms]);
    }

    public function searchT(Request $request)
    {
        $hotelName = $request->input('query');
        

       
            $res = Room::where('hotelname', 'like', '%' . $hotelName . '%')->get();

        return view('home.Search',compact('res'));
    }
}






