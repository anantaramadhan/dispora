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

        return redirect(config('services.backend_api') . '/api/web/auth/redirect/google');
    }

    public function logout(Request $request)
    {
        $token = Session::get('access_token');

        if ($token) {
            Http::withToken($token)->post(config('services.backend_api') . '/api/logout');
        }

        // Hapus data session spesifik (lebih aman daripada flush semua)
        // Session::forget('access_token');
        // Session::forget('user');

        // Atau kalau kamu memang yakin ingin hapus semua session (termasuk notifikasi):
        Session::flush();

        return redirect()->route('landingpage-home');
    }
}
