<?php

namespace App\Http\Middleware;

use Closure;

class checkUser
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
        if($request->age==20)
        {
            $data = $request->session()->all();
            echo '<pre>';
            print_r($data);
            echo '</pre>';
            return redirect('/home');
        }
    // echo "Middleware Works";
   

        return $next($request);
    }
}
