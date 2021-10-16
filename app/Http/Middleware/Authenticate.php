<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Route;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {

        if (!$request->expectsJson()) {
            //if current url == createbook route name,"donate url";
            // $current_route_name = Route::currentRouteName();
            if ($request->route()->named('createbook')) {
                session()->flash('messageType', 'danger');
                session()->flash('message', 'You Must Login/Signup To Donate Book.');
            }
            return route('login');
        }
    }
}
