<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

// class Admin
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \Closure  $next
//      * @return mixed
//      */
//     public function handle($request, Closure $next)
//     {
//        if (Auth::guard()->guest()) {
//             if ($request->ajax() || $request->wantsJson()) {
//                 return response('Unauthorized.', 401);
//             } else {
//                 return redirect()->guest('admin_login');
//             }
//         }

//         return $next($request);

    

//     }
// }

class Admin {

    public function handle($request, Closure $next)
    {

        if ( Auth::check() && Auth::user()->isAdmin() )
        {
            return $next($request);
        }

        return redirect('login');

    }

}







