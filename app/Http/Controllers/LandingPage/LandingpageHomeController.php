<?php

namespace App\Http\Controllers\landingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingpageHomeController extends Controller
{
    public function first()
    {
        return view('landingPage.home.index', ['showFirst' => true]);
    }
    public function index()
    {

        return view('landingPage.home.index', ['showFirst' => false]);
    }
}
