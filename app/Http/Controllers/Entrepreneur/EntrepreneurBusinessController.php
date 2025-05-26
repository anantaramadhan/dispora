<?php

namespace App\Http\Controllers\Entrepreneur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EntrepreneurBusinessController extends Controller
{
    public function index()
    {
        try {
            // Ambil data dari API dengan token
            $businesses = Http::withToken(session('access_token'))
                ->get(config('services.backend_api') . "/api/entrepreneur/business");

            $sosial = Http::withToken(session('access_token'))
                ->get(config('services.backend_api') . "/api/entrepreneur/sosial-media");

            $galerys = Http::withToken(session('access_token'))
                ->get(config('services.backend_api') . "/api/entrepreneur/galery");

            if ($businesses->successful()) {
                $business = $businesses->json();

                $sectorId = $business['data']['sector_id'];
                // dd($sectorId);
                $sectors = Http::withToken(session('access_token'))
                    ->get(config('services.backend_api') . "/api/sector/{$sectorId}");

                if ($sectors->successful()) {
                    $sector = $sectors->json();
                    $sosialmedias = $sosial->json();
                    $galery = $galerys->json();
                    // dd();

                    // dd($sosial->json());

                    // dd($sosialmedias, $business, $galery, $sector);

                    if ($sosial->json() != null) {
                        return view('pengusaha.informasiusaha', [
                            // dd('sini'),
                            'business' => $business['data'],
                            'sector' => $sector['sector'],
                            'sosiamedias' => $sosialmedias['data'],
                            'galerys' => $galery['data']
                        ]);
                    }
                    return view('pengusaha.informasiusaha', [
                        // dd('sini'),
                        'business' => $business['data'],
                        'sector' => $sector['sector'],
                        'sosiamedias' => $sosialmedias,
                        'galerys' => $galery['data']
                    ]);
                } else {
                    dd("sektor");
                    return back()->withErrors(['message' => 'Gagal mengambil data event.']);
                }
            } else {
                dd("bisnis");
                return back()->withErrors(['message' => 'Gagal mengambil data event.']);
            }
        } catch (\Exception $e) {
            dd('error');
            return back()->withErrors(['message' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
        // return view('pengusaha.informasiusaha');
    }

    public function update(Request $request)
    {
        $request->validate([
            'business_name' => 'required|string|max:255',
            'owner_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'nullable|string|max:255',
            'latitude' => 'nullable|string|max:255',
            'longitude' => 'nullable|string|max:255',
            // 'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $token = session('access_token');

        try {
            $multipartData = [
                ['name' => 'business_name', 'contents' => $request->input('business_name')],
                ['name' => 'owner_name', 'contents' => $request->input('owner_name')],
                ['name' => 'description', 'contents' => $request->input('description', '')],
                ['name' => 'location', 'contents' => $request->input('location', '')],
                ['name' => 'latitude', 'contents' => (string) $request->input('latitude', '')],
                ['name' => 'longitude', 'contents' => (string) $request->input('longitude', '')],
                ['name' => '_method', 'contents' => 'PUT'], // jika backend pakai PUT method
            ];

            if ($request->hasFile('profile')) {
                $file = $request->file('profile');
                $multipartData[] = [
                    'name' => 'profile',
                    'contents' => file_get_contents($file->getRealPath()),
                    'filename' => $file->getClientOriginalName(),
                ];
                // dd($file->getClientOriginalName());
            }


            $response = Http::withToken($token)
                ->asMultipart()
                ->post(config('services.backend_api') . "/api/entrepreneur/business/update", $multipartData);

            if ($response->successful()) {
                return redirect()
                    ->back()
                    ->with('success', [
                        "header" => 'Usaha berhasil diperbarui!',
                        "body" => 'Nama Usaha: ' . $request->input('business_name') .
                            '<br>Pemilik: ' . $request->input('owner_name'),
                        "suggestion" => 'Pastikan data usaha Anda selalu terbarui untuk menarik lebih banyak pelanggan.',
                    ]);
            } else {
                return redirect()
                    ->back()
                    ->with('error', [
                        "header" => 'Gagal memperbarui usaha!',
                        "body" => 'Nama Usaha: ' . $request->input('business_name'),
                        "suggestion" => 'Silakan coba lagi atau hubungi tim dukungan kami.',
                    ]);
            }
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }




    public function show()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('pengusaha.pengusaha.edit');
    }
}
