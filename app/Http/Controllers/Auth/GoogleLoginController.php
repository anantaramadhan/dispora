<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class GoogleLoginController extends Controller
{
    // public function handleGoogleCallback(Request $request)
    // {

    //     $response = Http::withHeaders([
    //         'Accept' => 'application/json',
    //     ])->get(config('services.backend_api') . '/api/auth/callback/google', [
    //         'code' => $request->code,
    //     ]);

    //     if ($response->failed()) {
    //         return redirect('/login')->with('error', 'Gagal login Google.');
    //     }

    //     $data = $response->json();

    //     // Simpan access_token dan user info ke session
    //     Session::put('access_token', $data['access_token']);
    //     Session::put('user', $data['user']);

    //     $role = $data['user']['role'];

    //     return match ($role) {
    //         'admin' => redirect('/'),
    //         'entrepreneur' => redirect('/'),
    //         'visitor_logged' => redirect('/'),
    //         default => redirect('/login')->with('error', 'Role tidak dikenali'),
    //     };
    // }

    public function handleGoogleCallback(Request $request)
    {
        $accessToken = $request->get('access_token');
        $user = json_decode($request->get('user'), true);

        if (!$accessToken || !$user) {
            return redirect('/login')->with('error', 'Gagal login');
        }

        // Simpan ke session
        Session::put('access_token', $accessToken);
        Session::put('user', $user);

        // Arahkan ke halaman sesuai role
        return match ($user['role']) {
            'admin' => redirect('/admin'),
            'entrepreneur' => redirect('/entrepreneur'),
            'visitor_logged' => redirect('/visitor'),
            default => redirect('/login')->with('error', 'Role tidak dikenali'),
        };
    }
}
