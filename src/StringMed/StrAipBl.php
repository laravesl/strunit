<?php

namespace Laravesl\Strunit\StringMed;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Exceptions\HttpResponseException;

class StrAipBl
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      if (!strSplic()) {
        if (Route::has(dbString('bG9naW4='))) {
          return to_route(dbString('bG9naW4='));
        }

        return $next($request)->header('Cache-control', 'no-control, no-store, max-age=0, must-revalidate')->header('Pragma', 'no-cache')->header('Exprires', 'Sat 01 Jan 1990 00:00:00 GMT');
      }


      throw new HttpResponseException(response()->json([
        dbString('bWVzc2FnZQ==') => 'Your license is blocked. Please acquire a new license for continued access.222',
        dbString('c3VjY2Vzcw==') => false
      ], 400));
    }
}
