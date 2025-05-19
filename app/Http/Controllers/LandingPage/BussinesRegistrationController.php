<?php

namespace App\Http\Controllers\landingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BussinesRegistrationController extends Controller
{
    public function index()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('landingPage.businessRegistration.index');
    }

}
