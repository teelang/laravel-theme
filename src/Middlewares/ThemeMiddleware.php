<?php

namespace TeeLaravel\Theme\Middlewares;

use Closure;
use TeeLaravel\Theme\Facades\Theme;

class ThemeMiddleware
{
    public function handle($request, Closure $next, $theme)
    {
        Theme::setActive($theme);
        return $next($request);
    }
}
