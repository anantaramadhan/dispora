<?php

namespace App\Http\Controllers\Entrepreneur;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class EntrepreneurGaleryController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|max:2048',
        ]);

        $accessToken = session('access_token');

        if (!$accessToken) {
            return redirect()->back()->with('error', 'Token akses tidak tersedia.');
        }

        try {
            // dd('sini');
            $response = Http::attach(
                'photo',
                file_get_contents($request->file('photo')),
                $request->file('photo')->getClientOriginalName()
            )->withToken($accessToken)
                ->post(config('services.backend_api') . '/api/entrepreneur/galery');

            if ($response->successful()) {
                return redirect()->back()->with('success', 'Galeri berhasil diunggah.');
            } else {
                return redirect()->back()->with('error', 'Gagal mengunggah: ' . $response->json('message'));
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {

        try {
            // dd(session('access_token'));

            $response = Http::withToken(session('access_token'))
                ->delete(config('services.backend_api') . "/api/entrepreneur/galery/{$id}");


            // dd($response->json());
            if ($response->successful()) {
                // dd($response->status(), $response->json());
                return redirect()->back()->with('success', 'Data berhasil dihapus.');
            } else {
                dd($response->status(), $response->json());
                return redirect()->back()->with('error', 'Gagal menghapus data: ' . $response->json('message'));
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
