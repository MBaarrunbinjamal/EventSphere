<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class OrganizerMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
       if (Auth::check()) {
          
            if (Auth::user()->role === 'organizer') {
                return $next($request);
            }

           
            return redirect('/'); 
        }

    
        return redirect('/login');
    }
}
