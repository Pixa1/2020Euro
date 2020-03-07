<?php

namespace App\Http\Middleware;

use Closure;

class CheckPayment
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
        
        if($request->user() && $request->user()->payment != '1')
        {
            return redirect()->route('payment.notice');
        }
        return $next($request);
    }
}
