<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\RommsController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;


class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   

    public function handle(Request $request, Closure $next
    ): Response
    
    {
    
        if (Auth()->user()->user_type == 'hebergent')
         {

            return  $next($request);
        }

        abort(401);

        if (Auth()->user()->user_type == 'client')
         {

            return  $next($request);
        }

        abort(401);
    }

}

