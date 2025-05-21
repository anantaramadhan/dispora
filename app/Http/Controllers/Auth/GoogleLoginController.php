<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class GoogleLoginController extends Controller
{

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
        // dd(session('access_token'), session('user'), 'df');
        // Arahkan ke halaman sesuai role
        return match ($user['role']) {
            'admin' => redirect('/admin'),
            'entrepreneur' => redirect('/entrepreneur'),
            'visitor_logged' => redirect('/home'),
            default => redirect('/login')->with('error', 'Role tidak dikenali'),
        };
    }
}
