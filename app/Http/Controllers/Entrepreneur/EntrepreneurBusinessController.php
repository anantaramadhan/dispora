<?php

namespace App\Http\Controllers\Entrepreneur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EntrepreneurBusinessController extends Controller
{
    public function index()
    {
        return view('pengusaha.informasiusaha');
    }

    public function show()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('pengusaha.pengusaha.edit');
    }
}
