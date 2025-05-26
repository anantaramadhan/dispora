<?php

namespace App\Http\Controllers\Entrepreneur;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class EntrepreneurProductController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->input('page', 1);
        $search = $request->input('search');

        try {
            $queryParams = [
                'page' => $page,
            ];

            if ($search) {
                $queryParams['search'] = $search;
            }

            $response = Http::withToken(session('access_token'))
                ->get(config('services.backend_api') . '/api/entrepreneur/product', $queryParams);

            if ($response->successful()) {
                $product = $response->json();

                return view('pengusaha.produkusaha', [
                    'products' => $product['data'] ?? [],
                    'total_produk' => $product['total_event'] ?? 0,
                    'pagination' => $product['data'],
                ]);
            } else {
                return back()->withErrors(['message' => 'Gagal mengambil data produk.']);
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
                ->get(config('services.backend_api') . "/api/entrepreneur/product/$id");

            if ($response->successful()) {
                $product = $response->json();
                // dd($product);
                return view('pengusaha.produk.edit', [
                    'product' => $product['data'],
                ]);
            } else {
                return back()->withErrors(['message' => 'Gagal mengambil data product.']);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['message' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
        // return view('pengusaha.produk.edit'); // You can return the view from the pengusaha folder
    }

    public function form()
    {
        return view('pengusaha.produk.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'detail' => 'required|string',
            'photo' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);


        $token = session('access_token');
        // dd('dadal');
        try {

            $response = Http::withToken($token)->asMultipart()
                ->attach(
                    'photo',
                    file_get_contents($request->file('photo')->getRealPath()),
                    $request->file('photo')->getClientOriginalName()
                )
                ->post(env('BACKEND_URL') . '/api/entrepreneur/product', [
                    ['name' => 'name', 'contents' => $request->input('name')],
                    ['name' => 'price', 'contents' => $request->input('price')],
                    ['name' => 'detail', 'contents' => $request->input('detail')],
                ]);

            // dd('dadal');
            if ($response->successful()) {
                // dd($response->status(), $response->body());

                return redirect()
                    ->route('entrepreneur-product')
                    ->with('success', [
                        "header " => 'Produk berhasil ditambah!',
                        "body" => 'Judul Event : ' . $request->input('name'),
                        "suggestion" => 'Semoga produk usaha anda dapat dikenal masyarakat.',
                    ]);
            } else {
                // dd('gagal', $response);
                return redirect()
                    ->back()
                    ->with('error', [
                        "header " => 'Usaha tambah produk!',
                        "body" => 'Nama Usaha : ' . $request->input('name'),
                        "suggestion" => '.',
                    ]);
            }
        } catch (\Exception $e) {
            // dd('error');
            return redirect()
                ->back()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
        // return view('pengusaha.produk.tambah'); // You can return the view from the pengusaha folder
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'detail' => 'required|string',
            'price' => 'required|string|max:255',
            // 'photo' => 'file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);


        $token = session('access_token');
        // dd('dadal');
        // dd('disini');
        try {
            $multipartData = [
                ['name' => 'name', 'contents' => $request->input('name')],
                ['name' => 'detail', 'contents' => $request->input('detail')],
                ['name' => 'price', 'contents' => $request->input('price')],
            ];

            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $multipartData[] = [
                    'name' => 'photo',
                    'contents' => file_get_contents($file->getRealPath()),
                    'filename' => $file->getClientOriginalName(),
                ];
            }

            $multipartData[] = ['name' => '_method', 'contents' => 'PUT'];

            $response = Http::withToken($token)->asMultipart()
                ->post(env('BACKEND_URL') . "/api/entrepreneur/product/{$id}", $multipartData);


            if ($response->successful()) {
                // dd($response);
                return redirect()
                    ->route('entrepreneur-product')
                    ->with('success', [
                        "header " => 'Produk berhasil di ubah!',
                        "body" => 'Nama produk : ' . $request->input('name'),
                        "suggestion" => 'Kamu bisa menambah atau produk lain.',
                    ]);
            } else {
                // dd('gagal', $response);

                return redirect()
                    ->back()
                    ->with('error', [
                        "header " => 'Event gagal diupdate!',
                        "body" => 'Nama Produk : ' . $request->input('name'),
                        "suggestion" => 'Coba ulangi penambahan produk.',
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
        // dd();
        try {
            $response = Http::withToken(session('access_token'))
                ->delete(config('services.backend_api') . "/api/entrepreneur/product/{$id}");

            Log::info('Delete Event Response:', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);
            // dd($response);
            if ($response->successful()) {
                // dd($response);
                return redirect()
                    ->route('entrepreneur-product')
                    ->with('success', [
                        "header" => 'Produk berhasil dihapus!',
                    ]);
            } else {
                return back()->with(['error' => 'Gagal menghapus data produk.']);
            }
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
