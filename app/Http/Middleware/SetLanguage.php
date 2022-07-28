<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->segment(1);

        if (!in_array($locale, config('app.locales'))) {
            // redirect to current page with fallback locale
            return redirect(url(getCurrentUrlWithLocale(config('app.fallback_locale'))));
        }

        app()->setLocale($locale);

        return $next($request);
    }
}
