<?php

namespace App\Http\Controllers\landingPage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class LandingpageHomeController extends Controller
{
    public function first()
    {
        try {
            $responseEvent = Http::get(config('services.backend_api') . '/api/events');

            $responseArticle = Http::get(config('services.backend_api') . '/api/articles');

            $responseTotalBusiness = Http::get(config('services.backend_api') . '/api/business');

            // dd($responseEvent->json()['data'], $responseArticle->json()['articles']);
            return view('landingPage.home.index', [
                'showFirst' => true,
                'Events' => $responseEvent->json()['data']['data'],
                'Articles' => $responseArticle->json()['articles'],
                'TotalBusiness' => $responseTotalBusiness->json()
            ]);
        } catch (\Exception $e) {
            dd('catch');
            return view('landingPage.home.index')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
        // return view('landingPage.home.index', ['showFirst' => true]);
    }
    public function index()
    {
        try {
            $responseEvent = Http::get(config('services.backend_api') . '/api/events');

            $responseArticle = Http::get(config('services.backend_api') . '/api/articles');

            $responseTotalBusiness = Http::get(config('services.backend_api') . '/api/business');

            // dd($responseEvent->json()['data'], $responseArticle->json()['articles'], $responseTotalBusiness->json());
            return view('landingPage.home.index', [
                'showFirst' => false,
                'Events' => $responseEvent->json()['data']['data'],
                'Articles' => $responseArticle->json()['articles'],
                'TotalBusiness' => $responseTotalBusiness->json()
            ]);
        } catch (\Exception $e) {
            dd('catch');
            return view('landingPage.home.index')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        // return view('landingPage.home.index', ['showFirst' => false]);
    }
}
