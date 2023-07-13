<?php

namespace Laravesl\Strunit\StringMed;

use Closure;
use Illuminate\Http\Request;

class StrVer
{
  /**
   * Handle an incoming request.
   *
   * @return mixed
    */

    public function handle(Request $request, Closure $next)
    {
      if (schSync()) {
        return to_route(dbString('aW5zdGFsbC52ZXJpZnkuc2V0dXA='));
      }

      return $next($request)->header('Cache-control', 'no-control, no-store, max-age=0, must-revalidate')->header('Pragma', 'no-cache')->header('Exprires', 'Sat 01 Jan 1990 00:00:00 GMT');
    }
}
