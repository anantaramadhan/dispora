<?php

namespace App\Http\Controllers\landingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingpageHomeEventController extends Controller
{
    public function index()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('landingPage.event.index');
    }

    public function detail()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('landingPage.event.detailEvent');
    }
}
