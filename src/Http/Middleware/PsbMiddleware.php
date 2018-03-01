<?php namespace Bantenprov\Psb\Http\Middleware;

use Closure;

/**
 * The PsbMiddleware class.
 *
 * @package Bantenprov\Psb
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class PsbMiddleware
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
        return $next($request);
    }
}
