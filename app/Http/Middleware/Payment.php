<?php

namespace App\Http\Middleware;

use Closure;

class Payment
{

    public function handle($request, Closure $next)
    {
        if ($request->pay ='yes' )
            return redirect('/success');
         else if($request->pay ='no')  
             return redirect('/fail');
         
             return $next($request);
}
    }

