<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class testUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,$name)
    {
           $q =   $request->query();
           if($q['name'] === $name){
              return redirect('login');
            }
        return $next($request);
    }
}
