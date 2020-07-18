<?php

namespace App\Http\Middleware;

use Closure;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $token = $request->cookie('access_tokenku');
		if(($token == "null") OR ($token != NULL)){
		  
			return $next($request, $token);
		}else{
            $request->cookie('access_tokenku', null);
			abort(404);
			//return $next($request, $token);
		}
    }
	 
}
