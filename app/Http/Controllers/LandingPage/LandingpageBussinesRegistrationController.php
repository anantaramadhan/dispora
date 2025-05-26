<?php

namespace App\Http\Controllers\landingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LandingpageBussinesRegistrationController extends Controller
{
    public function form()
    {
        return view('landingPage.businessRegistration.index');
    }

    public function index()
    {
        return view('landingPage.businessRegistration.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'business-name' => 'required|string|max:255',
            'owner-name' => 'required|string|max:255',
            'business-description' => 'required|string',
            'sector_id' => 'required|string',
            'business-location_name' => 'required|string',
            'business-latitude' => 'required|numeric',
            'business-longitude' => 'required|numeric',
            'business-proof' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $token = session('access_token');

        try {
            $response = Http::withToken($token)->asMultipart()
                ->attach(
                    'proof',
                    file_get_contents($request->file('business-proof')->getRealPath()),
                    $request->file('business-proof')->getClientOriginalName()
                )
                ->post(env('BACKEND_URL') . '/api/visitor/business-submission', [
                    ['name' => 'business_name', 'contents' => $request->input('business-name')],
                    ['name' => 'owner_name', 'contents' => $request->input('owner-name')],
                    ['name' => 'description', 'contents' => $request->input('business-description')],
                    ['name' => 'sector_id', 'contents' => $request->input('sector_id')],
                    ['name' => 'location', 'contents' => $request->input('business-location_name')],
                    ['name' => 'latitude', 'contents' => (string)$request->input('business-latitude')],
                    ['name' => 'longitude', 'contents' => (string)$request->input('business-longitude')],
                ]);

            if ($response->successful()) {
                return redirect()
                    ->route('landingpage-home')
                    ->with('success', [
                        "header " => 'Usaha berhasil diajukan!',
                        "body" => 'Nama Usaha : ' . $request->input('business-name') .
                            '<br>Alamat : ' . $request->input('business-location_name'),
                        "suggestion" => 'Tunggu konfirmasi dari tim kami untuk anda mendapatkan akses sebagai pengusaha.',
                    ]);
            } else {
                return redirect()
                    ->back()
                    ->with('error', [
                        "header " => 'Usaha gagal diajukan!',
                        "body" => 'Nama Usaha : ' . $request->input('business-name') .
                            '<br>Alamat : ' . $request->input('business-location_name'),
                        "suggestion" => 'Hubungi media sosial atau kontak kami untuk mendapatkan informasi lebih lanjut.',
                    ]);
            }
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
