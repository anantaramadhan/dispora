<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\SektorController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\UsahaController;

// Route login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Route dashboard
Route::get('home', [FrontendController::class, 'index'])->name('home');

// Route Artikel
Route::get('/artikel', [FrontendController::class, 'artikel'])->name('artikel');
Route::get('/artikel/tambah', [ArtikelController::class, 'tambah'])->name('artikel.tambah');
Route::get('/artikel/edit', [ArtikelController::class, 'edit'])->name('artikel.edit');

// Route Terima Event
Route::get('/terimaevent', [FrontendController::class, 'terimaevent'])->name('terimaevent');
Route::get('terimaevent/event/info', [EventController::class, 'info'])->name('event.info');

// Route Data Event
Route::get('/dataevent', [FrontendController::class, 'dataevent'])->name('dataevent');
Route::get('dataevent/event/info', [EventController::class, 'info'])->name('event.info');

// Route Terima Usaha
Route::get('/terimausaha', [FrontendController::class, 'terimausaha'])->name('terimausaha');
Route::get('terimausaha/usaha/info', [UsahaController::class, 'info'])->name('usaha.info');

// Route Data Usaha
Route::get('/datausaha', [FrontendController::class, 'datausaha'])->name('datausaha');
Route::get('datausaha/usaha/info', [UsahaController::class, 'info'])->name('usaha.info');

// Route Data Sektor
Route::get('/datasektor', [FrontendController::class, 'datasektor'])->name('datasektor');
Route::get('/datasektor/sektor/info', [SektorController::class, 'info'])->name('sektor.info');

// Route Profil
Route::get('/profil', [FrontendController::class, 'profil'])->name('profil');




// ROUTE UNTUK PENGUSAHA
use App\Http\Controllers\Pengusaha\InformasiUsahaController;
use App\Http\Controllers\Pengusaha\EventmuController;
use App\Http\Controllers\Pengusaha\ProdukUsahaController;
use App\Http\Controllers\Pengusaha\ProfilController;
use App\Http\Controllers\Pengusaha\BerandaController;
use App\Http\Controllers\Pengusaha\AuthController;




//ROUTE AUTH
Route::get('/pengusaha/masuk', [AuthController::class, 'showmasuk'])->name('masuk');
Route::get('/pengusaha/daftar', [AuthController::class, 'showdaftar'])->name('daftar');

// ROUTE BERANDA
Route::get('/pengusaha/beranda', [BerandaController::class, 'index'])->name('beranda');


// ROUTE EVENTMU
Route::get('/pengusaha/eventmu', [EventmuController::class, 'index'])->name('eventmu');
Route::get('/pengusaha/eventmu/edit', [EventmuController::class, 'edit'])->name('eventmu.edit');
Route::get('/pengusaha/eventmu/tambah', [EventmuController::class, 'tambah'])->name('eventmu.tambah');


// ROUTE INFORMASI USAHA
Route::get('/pengusaha/informasiusaha', [InformasiUsahaController::class, 'index'])->name('informasiusaha');
Route::get('/pengusaha/informasiusaha/edit', [InformasiUsahaController::class, 'edit'])->name('pengusaha.edit');


// ROUTE PRODUK USAHA
Route::get('/pengusaha/produkusaha', [ProdukUsahaController::class, 'index'])->name('produkusaha');
Route::get('/pengusaha/produkusaha/edit', [ProdukUsahaController::class, 'edit'])->name('produk.edit');
Route::get('/pengusaha/produkusaha/tambah', [ProdukUsahaController::class, 'tambah'])->name('produk.tambah');



//ROUTE PROFIL
Route::get('/pengusaha/profil', [ProfilController::class, 'index'])->name('profil');




// Route landing Page
use App\Http\Controllers\LandingPage\HomeController;
use App\Http\Controllers\LandingPage\AboutController;
use App\Http\Controllers\LandingPage\ArticelController;
use App\Http\Controllers\LandingPage\HomeEventController;
use App\Http\Controllers\LandingPage\GraphController;
use App\Http\Controllers\LandingPage\SectorController;

//route home landing oage
Route::get('/landingPage', [HomeController::class, 'index'])->name(name: 'home');
//Route about landing page
Route::get('/landingPage/tentang', [AboutController::class, 'index'])->name('about');
//Route sector landing page
Route::get('/landingPage/sektor', [SectorController::class, 'index'])->name('sector');
//Route articel landing page
Route::get('/landingPage/artikel', [ArticelController::class, 'index'])->name('articel');
Route::get('/landingPage/artikel/detailArticel', [ArticelController::class, 'detailarticel'])->name('detailArticel');
//Route event landing page
Route::get('/landingPage/event', action: [HomeEventController::class, 'index'])->name('event');
Route::get('/landingPage/event/detailEvent', action: [HomeEventController::class, 'detail'])->name(name: 'detailEvent');
//Route infografis landing page
Route::get('/landingPage/infografis', action: [GraphController::class, 'index'])->name('graph');
