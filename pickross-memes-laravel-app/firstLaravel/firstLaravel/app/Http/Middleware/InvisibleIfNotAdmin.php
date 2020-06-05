<?php namespace App\Http\Middleware;

use Closure;

class InvisibleIfNotAdmin {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if(!$this->user()->isAnAdmin())
		{
			return false;
		}
		
		
		return $next($request);
	}

}
