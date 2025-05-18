<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HandleGoogleCallback extends Controller
{
    public function handleGoogleCallback(Request $request)
    {
        $token = $request->get('access_token');
        $userJson = $request->get('user');

        if (!$token || !$userJson) {
            return redirect('/login')->with('error', 'Token atau user tidak valid.');
        }

        $user = json_decode($userJson, true);

        // Simpan ke session
        Session::put('access_token', $token);
        Session::put('user', $user);

        return match ($user['role']) {
            'admin' => redirect('/admin/dashboard'),
            'entrepreneur' => redirect('/entrepreneur/home'),
            'visitor_logged' => redirect('/visitor/home'),
            default => redirect('/login')->with('error', 'Role tidak dikenali.'),
        };
    }
}
