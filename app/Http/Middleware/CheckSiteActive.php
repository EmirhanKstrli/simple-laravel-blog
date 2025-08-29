<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Config;

class CheckSiteActive
{
    public function handle(Request $request, Closure $next)
    {
        $config = Config::find(1);

        if ($config && $config->active == 0) {
            // Site kapalıysa offline sayfasına yönlendir
            return response()->view('front.offline');
        }

        return $next($request);
    }
}
