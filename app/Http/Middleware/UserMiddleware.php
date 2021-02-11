<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class UserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->role != "user"){
            /* 
            silahkan modifikasi pada bagian ini
            apa yang ingin kamu lakukan jika rolenya tidak sesuai
            */
            return redirect()->to('logout');
        }
        return $next($request);
    }
}
