<?php

namespace App\Http\Controllers\Entrepreneur;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class EntrepreneurSosmedController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'caption' => 'required|string|max:255',
            'uri' => 'required|url|max:255',
            'type' => 'required|string|max:50',
        ]);

        $accessToken = session('access_token');

        $response = Http::withToken($accessToken)
            ->post(config('services.backend_api') . '/api/entrepreneur/sosial-media', $validated);
        // dd($response->json());
        if ($response->successful()) {
            // dd($response);
            return redirect()->back()->with('status', 'Sosial media berhasil ditambahkan!');
        } else {
            return redirect()->back()->withErrors('Gagal menambahkan sosial media.');
        }
    }

    public function destroy($id)
    {
        $accessToken = session('access_token');

        $response = Http::withToken($accessToken)
            ->delete(config('services.backend_api') . "/api/entrepreneur/sosial-media/$id");

        if ($response->successful()) {
            return redirect()->back()->with('status', 'Sosial media berhasil dihapus!');
        } else {
            return redirect()->back()->withErrors('Gagal menghapus sosial media.');
        }
    }
}
