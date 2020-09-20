<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->role_id == 1){
            return redirect(route('dashboard'));
        }
        elseif (Auth::user()->role_id == 2) {
            return redirect(route('user_dashboard'));
        }
        else{
            return redirect(abort(404));
        }

        return $next($request);
    }
}
