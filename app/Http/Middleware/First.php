<?php

namespace App\Http\Middleware;

use Closure;

class First
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
echo 'first';        return $next($request);
    }
	
	 public function terminate($request, $response) {
      echo "<br>Executing statements of terminate method of first.";
   }
}
