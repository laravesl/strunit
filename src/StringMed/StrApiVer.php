<?php

namespace Laravesl\Strunit\StringMed;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Exceptions\HttpResponseException;

class StrApiVer
{
  /**
   * Handle an incoming request.
   *
   * @return mixed
    */

    public function handle(Request $request, Closure $next)
    {
      if (schSync()) {

        throw new HttpResponseException(response()->json([
          dbString('bWVzc2FnZQ==') => dbString('UGxlYXNlIHZlcmlmeSB0aGUgcHVyY2hhc2UgbGljZW5zZSBjb2RlIGJlZm9yZSBleGVjdXRpbmcgdGhlIEFQSS4='),
          dbString('c3VjY2Vzcw==') => false
        ], 400));
      }

      return $next($request)->header('Cache-control', 'no-control, no-store, max-age=0, must-revalidate')->header('Pragma', 'no-cache')->header('Exprires', 'Sat 01 Jan 1990 00:00:00 GMT');
    }
}
