<?php

namespace App\Http\Controllers\Entrepreneur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EntrepreneurProductController extends Controller
{
    public function index()
    {
        return view('pengusaha.produkusaha'); // You can return the view from the pengusaha folder
    }

    public function show($id)
    {
        return view('pengusaha.produk.edit'); // You can return the view from the pengusaha folder
    }

    public function form()
    {
        return view('pengusaha.produk.tambah');
    }

    public function store()
    {
        return view('pengusaha.produk.tambah'); // You can return the view from the pengusaha folder
    }

    public function destroy()
    {
        return view('pengusaha.produkusaha'); // You can return the view from the pengusaha folder
    }


    public function edit()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('pengusaha.produk.edit');
    }
}
