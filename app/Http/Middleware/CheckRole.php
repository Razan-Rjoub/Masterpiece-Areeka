<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
  // CheckRole.php

public function handle($request, Closure $next, ...$roles)
{
    $user = $request->user();

    if ($user && in_array($user->Role, $roles)) {
        return $next($request);
    }

    return redirect('/'); 
}

}
