<?php

namespace App\Http\Controllers\Entrepreneur;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class EntrepreneurDashboardController extends Controller
{
    public function index()
    {
        $token = Session::get('access_token');

        // Jika tidak ada token, redirect atau tampilkan pesan
        if (!$token) {
            return redirect()->route('login-google')->with('error', [
                'header' => 'Autentikasi diperlukan',
                'body' => 'Silakan login terlebih dahulu.',
                'suggestion' => 'Gunakan akun Google Anda.',
            ]);
        }

        try {

            $responsebusiness = Http::withToken($token)->get(config('services.backend_api') . '/api/entrepreneur/business');

            // dd($responsebusiness->body());

            $responseevent = Http::withToken($token)->get(config('services.backend_api') . '/api/entrepreneur/event');

            if (!$responseevent->successful()) {
                dd('Gagal ambil event', $responseevent->status(), $responseevent->body());
            }

            $responseproduct = Http::withToken($token)->get(config('services.backend_api') . '/api/entrepreneur/product');

            if (!$responseproduct->successful()) {
                dd('Gagal ambil produk', $responseproduct->status(), $responseproduct->body());
            }

            $responseB = $responsebusiness->json();
            $businessId = $responseB['data']['id'] ?? null;

            $responsecomment = Http::withToken($token)->get(config('services.backend_api') . "/api/entrepreneur/comment");

            // dd($responsecomment->json());

            if (!$responsecomment->successful()) {
                dd('Gagal ambil komen', $responsecomment->status(), $responsecomment->body());
            }

            $responsecomplaint = Http::withToken($token)->get(config('services.backend_api') . '/api/entrepreneur/complaint');

            if (!$responsecomplaint->successful()) {
                dd('Gagal ambil komplain', $responsecomplaint->status(), $responsecomplaint->body());
            }

            if (
                $responseevent->successful() &&
                $responseproduct->successful() &&
                $responsecomment->successful()
                // &&$responsecomplaint->successful()
            ) {
                $responseEvent = $responseevent->json();

                $responseProduct = $responseproduct->json();

                $responseComment = $responsecomment->json();

                $responseComplaint = $responsecomplaint->json();

                // dd(
                //     $responseEvent,
                //     $responseProduct,
                //     $responseComment,
                //     $responseComplaint
                // );
                return view('pengusaha.beranda', [
                    'total_event' => $responseEvent['total_event'],
                    'total_product' => $responseProduct['total'],
                    'total_comment' => $responseComment['total'],
                    'total_complaint' => $responseComplaint['total'],
                    'events' => $responseEvent['data']['data'],
                    'comments' => $responseComment['comments'],
                    'complaints' => $responseComplaint['data'],
                    'product' => $responseProduct['data']
                ]);
            }

            return view('pengusaha.beranda', [
                'events' => [],
                'total_event' => 0,
                'totalFiltered' => 0,
            ])->with('error', 'Gagal mengambil data event.');
        } catch (\Exception $e) {
            dd('catch');
            return view('pengusaha.beranda')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
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
