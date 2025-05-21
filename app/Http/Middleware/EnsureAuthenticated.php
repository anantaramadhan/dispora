<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Support\Facades\Session;

class EnsureAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('access_token')) {
            return redirect()->route('login-google');
        }

        // if (!session()->has('access_token')) {
        //     return redirect()
        //         ->route('login-google')
        //         ->with('error', [
        //             'header' => 'Autentikasi diperlukan',
        //             'body' => 'Silakan login untuk mengakses formulir pengajuan usaha.',
        //             'suggestion' => 'Gunakan akun Google yang valid.',
        //         ]);

        //         return redirect()->back();
        // }

        return $next($request);
    }
}
