<?php

namespace App\Http\Controllers\Admin; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformasiAduanController extends Controller
{
    public function index()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('admin.informasiaduan');
    }

    public function error()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('error.404');
    }


}
