<?php

namespace App\Http\Middleware;

use Closure;

class Age
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
        if(!empty($request->input('age')))
        {
             if($request->input('age') >= 20 )
             {
                echo 'Valid Age'; 
             }
             else
             {
                return redirect('/'); 
             }
        }
        else
        {
            echo 'Input  Not Avilable as  Query  String :  to  test the  age '; 
        }
        echo '<br/>';
        return $next($request); 
    }
}
