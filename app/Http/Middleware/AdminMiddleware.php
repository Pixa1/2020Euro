<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        if($request->user() && $request->user()->id != '5')
        {
            return redirect('/matches')->with([
                'message' => 'Samo za administratore',
                'alert-type' => 'error'
                ]);;
        }
        return $next($request);
    }
}

