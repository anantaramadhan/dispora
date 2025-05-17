<?php

namespace App\Http\Controllers\landingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class   SectorController extends Controller
{
    public function index()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('landingPage.listSector.index');
    }

    public function detailProduct()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('landingPage.listSector.productSector.detailProduct');
    }

    public function detailBussines()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('landingPage.listSector.businessSector.detailbussines');
    }

    public function businessComplaints()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('landingPage.listSector.businessSector.businessComplaints');
    }

}
