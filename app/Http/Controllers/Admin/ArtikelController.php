<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ArtikelController extends Controller
{
    public function index()
    {
        try {
            $response = Http::get(config('app.api_url', 'http://localhost:8000') . '/api/articles');
            if ($response->successful()) {
                $articles = $response->json('articles');
                Log::info('Data artikel dari API: ' . json_encode($articles));
            } else {
                $articles = [];
                Log::error('Gagal ambil data artikel: ' . $response->status() . ' - ' . $response->body());
            }
        } catch (\Exception $e) {
            $articles = [];
            Log::error('Error koneksi ke API: ' . $e->getMessage());
        }

        return view('admin.artikel', compact('articles'));
    }

    public function indexLanding()
    {
        try {
            $response = Http::get(config('app.api_url', 'http://localhost:8000') . '/api/articles');
            if ($response->successful()) {
                $articles = $response->json('articles');
                Log::info('Data artikel dari API (landing): ' . json_encode($articles));
            } else {
                $articles = [];
                Log::error('Gagal ambil data artikel (landing): ' . $response->status() . ' - ' . $response->body());
            }
        } catch (\Exception $e) {
            $articles = [];
            Log::error('Error koneksi ke API (landing): ' . $e->getMessage());
        }

        return view('landingPage.articel.index', compact('articles'));
    }

    public function tambah()
    {
        return view('admin.artikel.tambah');
    }

    public function store(Request $request)
    {
        try {
            $token = session('api_token');
            $data = [
                'title' => $request->judul,
                'content' => $request->deskripsi,
                'expires_at' => $request->tanggal,
            ];

            $response = Http::withToken($token);
            if ($request->hasFile('foto')) {
                $response = $response->attach(
                    'thumbnail',
                    file_get_contents($request->file('foto')),
                    $request->file('foto')->getClientOriginalName()
                );
            }

            $response = $response->post(config('app.api_url', 'http://localhost:8000') . '/api/admin/article', $data);

            if ($response->successful()) {
                return redirect()->route('artikel')->with('success', 'Artikel ditambahkan!');
            } else {
                Log::error('Gagal tambah artikel: ' . $response->status() . ' - ' . $response->body());
                return back()->withErrors('Gagal menambah artikel');
            }
        } catch (\Exception $e) {
            Log::error('Error tambah artikel: ' . $e->getMessage());
            return back()->withErrors('Error koneksi ke API');
        }
    }

    public function edit($id)
{
    try {
        $response = Http::get(config('app.api_url', 'http://localhost:8000') . "/api/article/{$id}");
        if ($response->successful()) {
            $article = $response->json('article');
            Log::info('Data artikel ID ' . $id . ': ' . json_encode($article));
            // Debug sebelum ke view
            // dd('Artikel ditemukan:', $article);
        } else {
            $article = null;
            Log::error('Gagal ambil artikel ID ' . $id . ': ' . $response->status() . ' - ' . $response->body());
            return redirect()->route('artikel')->withErrors('Artikel tidak ditemukan. Status: ' . $response->status());
        }
    } catch (\Exception $e) {
        $article = null;
        Log::error('Error koneksi ke API artikel: ' . $e->getMessage());
        return redirect()->route('artikel')->withErrors('Error koneksi ke API: ' . $e->getMessage());
    }

    return view('admin.artikel.edit', compact('article'));
}

public function update(Request $request, $id)
{
    try {
        $token = session('api_token');
        $data = [
            'title' => $request->judul,
            'content' => $request->deskripsi,
            'expires_at' => $request->tanggal,
        ];

        $response = Http::withToken($token);
        if ($request->hasFile('foto')) {
            $response = $response->attach(
                'thumbnail',
                file_get_contents($request->file('foto')),
                $request->file('foto')->getClientOriginalName()
            );
        }

        $response = $response->post(config('app.api_url', 'http://localhost:8000') . "/api/admin/article/{$id}", $data);

        if ($response->successful()) {
            return redirect()->route('artikel')->with('success', 'Artikel diperbarui!');
        } else {
            Log::error('Gagal update artikel: ' . $response->status() . ' - ' . $response->body());
            return back()->withErrors('Gagal memperbarui artikel.');
        }
    } catch (\Exception $e) {
        Log::error('Error update artikel: ' . $e->getMessage());
        return back()->withErrors('Error koneksi ke API.');
    }
}

    public function destroy($id)
{
    try {
        $token = session('api_token');
        $response = Http::withToken($token)->delete(config('app.api_url', 'http://localhost:8000') . "/api/admin/article/{$id}");

        if ($response->successful()) {
            return redirect()->route('artikel')->with('success', 'Artikel dihapus!');
        } else {
            Log::error('Gagal hapus artikel ID ' . $id . ': ' . $response->status() . ' - ' . $response->body());
            return back()->withErrors('Gagal menghapus artikel');
        }
    } catch (\Exception $e) {
        Log::error('Error hapus artikel: ' . $e->getMessage());
        return back()->withErrors('Error koneksi ke API');
    }
}
}
