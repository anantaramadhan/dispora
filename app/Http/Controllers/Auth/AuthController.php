<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function redirectToGoogle()
    {

        // 
        // Arahkan user ke backend
        return redirect(config('services.backend_api') . '/api/web/auth/redirect/google');
    }

    // public function handleGoogleCallback(Request $request)
    // {
    //     $response = Http::get(config('services.backend_api') . '/api/auth/callback/google', $request->all());

    //     if ($response->successful()) {
    //         $data = $response->json();

    //         Session::put('access_token', $data['access_token']);
    //         Session::put('user', $data['user']);

    //         return redirect('/dashboard');
    //     }

    //     return redirect('/login')->withErrors('Login gagal.');
    // }

    public function logout(Request $request)
    {
        $token = Session::get('access_token');

        if ($token) {
            Http::withToken($token)->post(config('services.backend_api') . '/api/logout');
        }

        Session::flush();

        return redirect('/login');
    }
}
