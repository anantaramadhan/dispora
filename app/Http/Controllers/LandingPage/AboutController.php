<?php

namespace App\Http\Controllers\landingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('landingPage.about.index');
    }


}
