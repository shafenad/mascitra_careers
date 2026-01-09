<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DummyRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = session('user');

        if (!session('auth') || !$user) {
            return redirect()->route('login');
        }

        if (!in_array($user['role'], $roles, true)) {
            abort(403);
        }

        return $next($request);
    }
}
