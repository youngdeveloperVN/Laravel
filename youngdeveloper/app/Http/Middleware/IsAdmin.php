<?php
namespace App\Http\Middleware;
use Closure;
use Auth;
use App\User;
use Log;

class IsAdmin {

	/**
	 * Handle an incoming request.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \Closure $next
	 * @return mixed
	 */
	public function handle($request, Closure $next) {
		if (Auth::user()) {
			if (Auth::user() -> role == 'admin' || Auth::user() -> role == 'author') {
				return $next($request);
			}
		}
		return redirect('/');
	}
}