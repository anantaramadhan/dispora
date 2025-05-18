<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\UsahaController;
use App\Http\Controllers\Admin\SektorController;
use App\Http\Controllers\Admin\ArtikelController;

use App\Http\Controllers\Auth\LupaSandiController;
use App\Http\Controllers\Auth\GoogleLoginController;
use App\Http\Controllers\LandingPage\HomeController;
use App\Http\Controllers\Pengusaha\ProfilController;
use App\Http\Controllers\LandingPage\AboutController;
use App\Http\Controllers\LandingPage\GraphController;
use App\Http\Controllers\Pengusaha\BerandaController;

use App\Http\Controllers\LandingPage\SectorController;
use App\Http\Controllers\LandingPage\ArticelController;
use App\Http\Controllers\LandingPage\HomeEventController;
use App\Http\Controllers\Pengusaha\ProdukUsahaController;
use App\Http\Controllers\Pengusaha\InformasiUsahaController;
// use App\Http\Controllers\Pengusaha\EntrepreneurEventController;
use App\Http\Controllers\Entrepreneur\EntrepreneurEventController;
use App\Http\Controllers\Entrepreneur\EntrepreneurGaleryController;
use App\Http\Controllers\Entrepreneur\EntrepreneurProductController;
use App\Http\Controllers\Entrepreneur\EntrepreneurBusinessController;

Route::get('/login/google', [AuthController::class, 'redirectToGoogle'])->name('login-google');
Route::get('/auth/callback/google', [GoogleLoginController::class, 'handleGoogleCallback']);
Route::post('/logout', [AuthController::class, 'logout']);









// Route login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

//route lupa sandi
Route::get('lupasandi', [LupaSandiController::class, 'showLoginForm'])->name('lupasandi');


// Route Beranda
Route::get('home', [FrontendController::class, 'index'])->name('home');

// Route Artikel
Route::get('/artikel', [App\Http\Controllers\Admin\ArtikelController::class, 'index'])->name('artikel');
// Route lain (tambah, edit, dll.) tetep sama
Route::get('/artikel/tambah', [ArtikelController::class, 'tambah'])->name('artikel.tambah');
// Route::get('/artikel/edit', [ArtikelController::class, 'edit'])->name('artikel.edit');
Route::get('/artikel/edit/{id}', [App\Http\Controllers\Admin\ArtikelController::class, 'edit'])->name('artikel.edit'); // Tambah {id}
Route::post('/artikel/{id}', [App\Http\Controllers\Admin\ArtikelController::class, 'update'])->name('artikel.update'); // Tambah route update
Route::delete('/artikel/{id}', [App\Http\Controllers\Admin\ArtikelController::class, 'destroy'])->name('artikel.destroy');


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
Route::get('admin/profil', [FrontendController::class, 'profil'])->name('admin.profil');




// ROUTE UNTUK PENGUSAHA





//ROUTE AUTH
// Route::get('/pengusaha/masuk', [AuthController::class, 'showmasuk'])->name('masuk');
// Route::get('/pengusaha/daftar', [AuthController::class, 'showdaftar'])->name('daftar');

// ROUTE BERANDA
Route::get('/entrepreneur', [BerandaController::class, 'index'])->name('entrepreneur');

Route::get('/entrepreneur/event', [EntrepreneurEventController::class, 'index'])->name('entrepreneur-event');
Route::get('/entrepreneur/event/form', [EntrepreneurEventController::class, 'form'])->name('entrepreneur-event-form');
Route::get('/entrepreneur/event/edit/{id}', [EntrepreneurEventController::class, 'show'])->name('entrepreneur-event-show');
Route::post('/entrepreneur/event/edit', [EntrepreneurEventController::class, 'store'])->name('entrepreneur-event-post');
Route::put('/entrepreneur/event/edit/{id}', [EntrepreneurEventController::class, 'update'])->name('entrepreneur-event-put');
Route::delete('/entrepreneur/event/edit/{id}', [EntrepreneurEventController::class, 'destroy'])->name('entrepreneur-event-destroy');

Route::get('/entrepreneur/business', [EntrepreneurBusinessController::class, 'index'])->name('entrepreneur-business');
Route::get('/entrepreneur/business/show', [EntrepreneurBusinessController::class, 'show'])->name('entrepreneur-business-show');
Route::put('/entrepreneur/event/edit/{id}', [EntrepreneurBusinessController::class, 'update'])->name('entrepreneur-event-put');
Route::delete('/entrepreneur/event/edit/{id}', [EntrepreneurEventController::class, 'destroy'])->name('entrepreneur-event-destroy');

Route::get('/entrepreneur/product', [EntrepreneurProductController::class, 'index'])->name('entrepreneur-product');
Route::get('/entrepreneur/product/show/{id}', [EntrepreneurProductController::class, 'show'])->name('entrepreneur-product-show');
Route::post('/entrepreneur/product', [EntrepreneurProductController::class, 'store'])->name('entrepreneur-product-store');
Route::put('/entrepreneur/product/{id}', [EntrepreneurProductController::class, 'update'])->name('entrepreneur-product-update');
Route::delete('/entrepreneur/product/{id}', [EntrepreneurProductController::class, 'destroy'])->name('entrepreneur-product-destroy');

Route::get('/entrepreneur/galery', [EntrepreneurGaleryController::class, 'index'])->name('entrepreneur-galery');
Route::get('/entrepreneur/galery/show/{id}', [EntrepreneurGaleryController::class, 'show'])->name('entrepreneur-galery-show');
Route::post('/entrepreneur/galery', [EntrepreneurGaleryController::class, 'store'])->name('entrepreneur-galery-store');
Route::put('/entrepreneur/galery/{id}', [EntrepreneurGaleryController::class, 'update'])->name('entrepreneur-galery-update');
Route::delete('/entrepreneur/galery/{id}', [EntrepreneurGaleryController::class, 'destroy'])->name('entrepreneur-galery-destroy');



Route::get('/entrepreneur/profile', [ProfilController::class, 'index'])->name('entrepreneur-profile');


// ROUTE EVENTMU

Route::get('/pengusaha/eventmu/edit', [EntrepreneurEventController::class, 'edit'])->name('eventmu.edit');
Route::get('/pengusaha/eventmu/tambah', [EntrepreneurEventController::class, 'tambah'])->name('eventmu.tambah');


// ROUTE INFORMASI USAHA

Route::get('/pengusaha/informasiusaha/edit', [InformasiUsahaController::class, 'edit'])->name('pengusaha.edit');


// ROUTE PRODUK USAHA

Route::get('/pengusaha/produkusaha/edit', [ProdukUsahaController::class, 'edit'])->name('produk.edit');
Route::get('/pengusaha/produkusaha/tambah', [ProdukUsahaController::class, 'tambah'])->name('produk.tambah');



//ROUTE PROFIL





// Route landing Page


//route home landing oage
Route::get('/', [HomeController::class, 'index'])->name(name: 'home');
//Route about landing page
Route::get('/tentang', [AboutController::class, 'index'])->name('about');
//Route sector landing page
Route::get('/sektor', [SectorController::class, 'index'])->name('sector');
Route::get('/sektor/product/detailProduk', [SectorController::class, 'detailProduct'])->name('detailProduct');
Route::get('/sektor/product/detailbussines', [SectorController::class, 'detailBussines'])->name('detailbussines');
Route::get('/sektor/product/aduanbussines', [SectorController::class, 'businessComplaints'])->name('businessComplaints');
//Route articel landing page
Route::get('/artikel', [ArticelController::class, 'index'])->name('articel');
Route::get('/artikel/detailArticel', [ArticelController::class, 'detailarticel'])->name('detailArticel');
//Route event landing page
Route::get('/event', action: [HomeEventController::class, 'index'])->name('event');
Route::get('/event/detailEvent', action: [HomeEventController::class, 'detail'])->name(name: 'detailEvent');
//Route infografis landing page
Route::get('/infografis', action: [GraphController::class, 'index'])->name('graph');
