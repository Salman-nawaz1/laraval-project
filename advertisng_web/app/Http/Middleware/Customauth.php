<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Customauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       $path=$request->path();
      if(($path=="adminpanel" || $path=="register") && Session::get('user')){
        return redirect('/index');
      }else if($path !="adminpanel" && !Session::get('user')){
        return redirect('/adminpanel');
      }
        return $next($request);
    }
}
