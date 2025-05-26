<?php

namespace App\Http\Controllers\Entrepreneur;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class EntrepreneurEventController extends Controller
{
    // $response = Http::withToken(session('access_token'))
    //     ->get(config('services.backend_api') . '/api/entrepreneur/event?');
    public function index(Request $request)
    {
        $page = $request->input('page', 1); // Ambil page dari URL

        try {
            // Ambil data dari API dengan token
            $response = Http::withToken(session('access_token'))
                ->get(config('services.backend_api') . "/api/entrepreneur/event?page={$page}");

            if ($response->successful()) {
                $event = $response->json();
                // dd($event);
                return view('pengusaha.eventmu', [
                    'events' => $event['data']['data'] ?? [], // Data event per halaman
                    'total_event' => $event['total_event'] ?? 0,
                    'pagination' => $event['data'] // Info pagination untuk paginasi manual
                ]);
            } else {
                return back()->withErrors(['message' => 'Gagal mengambil data event.']);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['message' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }


    public function show($id)
    {
        try {
            // Ambil data dari API dengan token
            $response = Http::withToken(session('access_token'))
                ->get(config('services.backend_api') . "/api/entrepreneur/event/$id");

            if ($response->successful()) {
                $event = $response->json();
                // dd($event);
                return view('pengusaha.eventmu.edit', [
                    'event' => $event['data'],
                ]);
            } else {
                return back()->withErrors(['message' => 'Gagal mengambil data event.']);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['message' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }


    public function form()
    {
        return view('pengusaha.eventmu.tambah'); // You can return the view from the pengusaha folder
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_name' => 'required|string|max:255',
            'event_date' => 'required|string|max:255',
            'description_event' => 'required|string',
            'location_name' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'foto_event' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);


        $token = session('access_token');
        // dd('dadal');
        try {
            $response = Http::withToken($token)->asMultipart()
                ->attach(
                    'thumbnail',
                    file_get_contents($request->file('foto_event')->getRealPath()),
                    $request->file('foto_event')->getClientOriginalName()
                )
                ->post(env('BACKEND_URL') . '/api/entrepreneur/event', [
                    ['name' => 'title', 'contents' => $request->input('event_name')],
                    ['name' => 'description', 'contents' => $request->input('description_event')],
                    ['name' => 'event_date', 'contents' => $request->input('event_date')],
                    ['name' => 'location', 'contents' => $request->input('location_name')],
                    ['name' => 'latitude', 'contents' => (string)$request->input('latitude')],
                    ['name' => 'longitude', 'contents' => (string)$request->input('longitude')],
                ]);

            // dd('dadal');
            if ($response->successful()) {
                return redirect()
                    ->route('entrepreneur-event')
                    ->with('success', [
                        "header " => 'Event berhasil diajukan!',
                        "body" => 'Judul Event : ' . $request->input('event_name') .
                            '<br>Alamat : ' . $request->input('location_name'),
                        "suggestion" => 'Tunggu konfirmasi dari tim kami untuk anda mendapatkan akses sebagai pengusaha.',
                    ]);
            } else {
                // dd('gagal', $response);

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
            // dd('error');
            return redirect()
                ->back()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {


        $request->validate([
            'event_name' => 'required|string|max:255',
            'event_date' => 'required|string|max:255',
            'description_event' => 'required|string',
            'location_name' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            // 'foto_event' => 'file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);


        $token = session('access_token');
        // dd('dadal');
        // dd('disini');
        try {
            $multipartData = [
                ['name' => 'title', 'contents' => $request->input('event_name')],
                ['name' => 'description', 'contents' => $request->input('description_event')],
                ['name' => 'event_date', 'contents' => $request->input('event_date')],
                ['name' => 'location', 'contents' => $request->input('location_name')],
                ['name' => 'latitude', 'contents' => (string)$request->input('latitude')],
                ['name' => 'longitude', 'contents' => (string)$request->input('longitude')],
            ];

            if ($request->hasFile('foto_event')) {
                $file = $request->file('foto_event');
                $multipartData[] = [
                    'name' => 'thumbnail',
                    'contents' => file_get_contents($file->getRealPath()),
                    'filename' => $file->getClientOriginalName(),
                ];
            }

            $multipartData[] = ['name' => '_method', 'contents' => 'PUT'];

            $response = Http::withToken($token)->asMultipart()
                ->post(env('BACKEND_URL') . "/api/entrepreneur/event/{$id}", $multipartData);


            if ($response->successful()) {
                // dd($response);
                return redirect()
                    ->route('entrepreneur-event')
                    ->with('success', [
                        "header " => 'Event berhasil diajukan!',
                        "body" => 'Judul Event : ' . $request->input('event_name') .
                            '<br>Alamat : ' . $request->input('location_name'),
                        "suggestion" => 'Tunggu konfirmasi dari tim kami untuk anda mendapatkan akses sebagai pengusaha.',
                    ]);
            } else {
                // dd('gagal', $response);

                return redirect()
                    ->back()
                    ->with('error', [
                        "header " => 'Event gagal diupdate!',
                        "body" => 'Nama Usaha : ' . $request->input('business-name') .
                            '<br>Alamat : ' . $request->input('business-location_name'),
                        "suggestion" => 'Hubungi media sosial atau kontak kami untuk mendapatkan informasi lebih lanjut.',
                    ]);
            }
        } catch (\Exception $e) {
            // dd('error');
            return redirect()
                ->back()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    public function destroy($id)
    {
        try {
            $response = Http::withToken(session('access_token'))
                ->delete(config('services.backend_api') . "/api/entrepreneur/event/{$id}");

            Log::info('Delete Event Response:', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            if ($response->successful()) {
                // dd($response);
                return redirect()
                    ->route('entrepreneur-event')
                    ->with('success', [
                        "header" => 'Event berhasil dihapus!',
                    ]);
            } else {
                return back()->with(['error' => 'Gagal menghapus data event.']);
            }
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
