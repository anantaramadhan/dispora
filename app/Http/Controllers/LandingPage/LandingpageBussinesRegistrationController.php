<?php

namespace App\Http\Controllers\landingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingpageBussinesRegistrationController extends Controller
{
    public function form()
    {
        return view('landingPage.businessRegistration.index');
    }

    public function index()
    {
        return view('landingPage.businessRegistration.index');
    }
}
