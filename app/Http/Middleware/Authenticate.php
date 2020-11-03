<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Factory as Auth;

class Authenticate
{
    /**
     * The authentication guard factory instance.
     *
     * @var \Illuminate\Contracts\Auth\Factory
     */
    protected $auth;

    /**
     * Create a new middleware instance.
     *
     * @param \Illuminate\Contracts\Auth\Factory $auth
     * @return void
     */
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        if ($this->auth->guard($guard)->guest()) {
            if ($request->ajax()) {
                return response()->json(['status' => 403, 'message' => 'Unauthorized.']);

            }

            switch ($guard) {
                case 'admin':
                    return redirect(route('admin.login', ['locate' => app('translator')->getLocale()]));
                    break;

                case 'user':
                    return redirect(route('user.login', ['locate' => app('translator')->getLocale()]));

                    break;
                case 'api':
                    return response()->json(['status' => 403, 'message' => 'Unauthorized.']);

                    break;

            }

        }

        return $next($request);
    }
}
