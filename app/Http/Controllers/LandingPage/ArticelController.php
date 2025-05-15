<?php

namespace App\Http\Controllers\landingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticelController extends Controller
{
    public function index()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('landingPage.articel.index');
    }

    public function detailarticel()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('landingPage.articel.detailArticel');
    }

}
