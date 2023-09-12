<?php

namespace App\Http\Middleware;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    
    protected function unauthenticated($request, array $guards)
    {
        if (in_array('admin', $guards))
            throw new AuthenticationException(
                'Unauthenticated.',
                $guards,
                $this->adminRedirectTo($request)
            );
        throw new AuthenticationException(
            'Unauthenticated.',
            $guards,
            $this->redirectTo($request)
        );

        return $request->expectsJson() ? null : route('admin.login');
    }
    
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
          return route(lp() . 'home');
        }
    }
    protected function adminRedirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('admin.login');
        }
    }
}
