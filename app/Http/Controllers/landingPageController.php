<?php
// app/Http/Controllers/FrontendController.php

namespace App\Http\Controllers;

// use view;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class LandingPageController extends Controller
{
    public function index()
    {
        return view('landingPage.home.index'); // Menampilkan file home.blade.php dari folder frontend
    }

    public function articel()
    {
        // return view('landingPage.articel.index', compact('articles'));

    }

    public function event()
    {

    }

    public function businessSector()
    {

    }

    public function productSector()
    {

    }

    public function graphicEkraf()
    {

    }

    public function about()
    {

    }

}
