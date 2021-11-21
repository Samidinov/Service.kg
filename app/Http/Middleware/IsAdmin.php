<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $isAdmin = DB::table('users_roles')->where('user_id', Auth::id())->first();
        if ($isAdmin != null && ($isAdmin->role =='admin' || $isAdmin->role == 'super-admin')) {
            return $next($request);
        } else {
            return  redirect(route('work.index'));
            return view('inc.error.page-not-found-404');
        }
    }
}
