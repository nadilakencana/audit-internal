<?php

namespace App\Http\Middleware;

use Closure;
// use Illuminate\Support\Facades\Artisan;
// use Symfony\Component\Process\Exception\ProcessTimedOutException;
// use Symfony\Component\Process\Process;

class ExecutionTimeLimitMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        set_time_limit(120); // Mengatur batas waktu eksekusi menjadi 120 detik (2 menit)

        return $next($request);
    }
}
