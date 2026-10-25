<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function registerPost(Request $request)
{
    $validator = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8',
        'confirm_password' => 'required|string|min:8|same:password',
        'user_type' => 'required',
            
    ]);
    
    $user = new User();

    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->user_type = $request->user_type;

    $user->save();

    return back()->with('success', 'Registration successful');
}

    public function login(){

        return view('login');

    }

    public function loginPost(Request $request)
    {
         $credetials =[
         'email' => $request->email,
         'password'=> $request->password,
         ];

         if (Auth::attempt($credetials)) {
            if (Auth()->user()->user_type == 'hebergent')
            {
   
                return redirect('/addrooms');
           }
           elseif (Auth()->user()->user_type == 'client'){

            return redirect('/comment');
           }
           else{
               abort(401);
           }
   
          
            
        }
 
        return back()->with('error', 'Error Email or Password');
    }
 
    public function logout()
    {
        Auth::logout();
 
        return redirect()->route('login');
    }

    }



