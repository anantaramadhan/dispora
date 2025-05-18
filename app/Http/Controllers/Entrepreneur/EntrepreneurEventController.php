<?php

namespace App\Http\Controllers\Entrepreneur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EntrepreneurEventController extends Controller
{
    public function index()
    {
        return view('pengusaha.eventmu'); // You can return the view from the pengusaha folder
    }
    public function show()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('pengusaha.eventmu.edit');
    }


    public function form()
    {
        return view('pengusaha.eventmu.tambah'); // You can return the view from the pengusaha folder
    }
}
