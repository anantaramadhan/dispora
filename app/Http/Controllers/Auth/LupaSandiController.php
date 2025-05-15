<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LupaSandiController extends Controller
{
    // Menampilkan halaman form lupa kata sandi
    public function showLoginForm()
    {
        return view('auth.lupasandi');
    }
}
