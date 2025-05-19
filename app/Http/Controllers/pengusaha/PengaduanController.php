<?php

namespace App\Http\Controllers\Pengusaha;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
   
    public function index()
    {
        return view('pengusaha.pengaduan'); // You can return the view from the pengusaha folder
    }

}
