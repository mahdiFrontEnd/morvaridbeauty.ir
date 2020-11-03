<?php

namespace App\Http\Middleware;

use Closure;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
     public function handle($request, Closure $next)
    {
//        dd(config('app.available_locales'));
//        $supported_lang = ["fa", "ar", "en"];
        $supported_lang = config('app.available_locales');


        $segment = $request->segment(1);
        if (in_array($segment, $supported_lang)) {
            app('translator')->setLocale($segment);
        }
        else{
//            return redirect(url("fa"));

        }
//        app()->setLocale($segment);
        return $next($request);
    }
}
