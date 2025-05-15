<?php
namespace App\Http\Controllers\Admin; // Pastikan namespace sesuai dengan folder

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function info()
    {
        // Kembalikan tampilan untuk form tambah artikel
        return view('admin.event.info');
    }


    public function tambah()
    {
        // Kembalikan tampilan untuk form tambah artikel
        return view('admin.event.tambah');
    }


}
