<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use http\Env\Response;

class Admin
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
        /** @var User $user */
        $user = \Auth::user();
        if ($user->isAdmin())
            return $next($request);
        else {
            return Response('forbiden', 403);
        }
    }
}
