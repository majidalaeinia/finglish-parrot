<?php

namespace App\Http\Middleware\V1;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DivarAuthenticationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->header('Authorization') != config('auth.divar_authentication')) {
            return response('Unauthorized.', Response::HTTP_FORBIDDEN);
        }

        return $next($request);
    }
}
