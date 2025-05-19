<?php

namespace App\Http\Controllers\Entrepreneur;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class EntrepreneurEventController extends Controller
{
    public function index()
    {
        // Ganti URL ini sesuai dengan endpoint backend kamu
        $apiUrlGetEvent = redirect(config('services.backend_api') . '/api/entrepreneur/event');
        $apiUrlGetEvent = redirect(config('services.backend_api') . '/api/entrepreneur/event');

        // Kirim request ke backend (bisa pakai token jika diperlukan)
        $dataEvent = Http::withToken(session('access_token'))->get($apiUrl);
        $dataArtikel = Http::withToken(session('access_token'))->get($apiUrl);

        // Ambil data dari dataEvent
        $event = $dataEvent->json();

        // Kirim data ke view
        return view('pengusaha.eventmu', [
            'events' => $event['data']['data'] ?? [], // 'data' dari pagination
            'total_event' => $event['total_event'] ?? 0,
            // 'pagination' => $event['data'] ?? []
        ]);
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
