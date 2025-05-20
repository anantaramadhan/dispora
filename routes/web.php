<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\UsahaController;
use App\Http\Controllers\Popup\ErrorController;
use App\Http\Controllers\Popup\PopUpController;
use App\Http\Controllers\Admin\SektorController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LupaSandiController;
use App\Http\Controllers\Admin\DataEventController;
use App\Http\Controllers\Admin\DataUsahaController;
use App\Http\Controllers\Admin\DataSektorController;
use App\Http\Controllers\Auth\GoogleLoginController;
use App\Http\Controllers\LandingPage\HomeController;
use App\Http\Controllers\Pengusaha\ProfilController;
use App\Http\Controllers\Admin\ProfilAdminController;
use App\Http\Controllers\Admin\TerimaEventController;
use App\Http\Controllers\Admin\TerimaUsahaController;
use App\Http\Controllers\LandingPage\AboutController;
use App\Http\Controllers\LandingPage\GraphController;
use App\Http\Controllers\Pengusaha\BerandaController;
use App\Http\Controllers\Admin\BerandaAdminController;
use App\Http\Controllers\LandingPage\SectorController;
use App\Http\Controllers\LandingPage\ArticelController;
use App\Http\Controllers\LandingPage\HomeEventController;
use App\Http\Controllers\Pengusaha\ProdukUsahaController;
use App\Http\Controllers\Pengusaha\InformasiUsahaController;
use App\Http\Controllers\Entrepreneur\EntrepreneurEventController;
use App\Http\Controllers\Entrepreneur\EntrepreneurGaleryController;
use App\Http\Controllers\Entrepreneur\EntrepreneurProductController;
use App\Http\Controllers\landingPage\BussinesRegistrationController;
use App\Http\Controllers\Entrepreneur\EntrepreneurBusinessController;

Route::get('/login/google', [AuthController::class, 'redirectToGoogle'])->name('login-google');
Route::get('/auth/callback/google', [GoogleLoginController::class, 'handleGoogleCallback']);
Route::post('/logout', [AuthController::class, 'logout']);

// Route login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Route daftar
Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('register');

// Route lupa sandi
Route::get('lupasandi', [LupaSandiController::class, 'showLoginForm'])->name('lupasandi');

// Route Beranda
Route::get('admin/beranda', [BerandaAdminController::class, 'index'])->name('admin.beranda');

// Route Artikel
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
Route::get('/artikel/tambah', [ArtikelController::class, 'tambah'])->name('artikel.tambah');
Route::get('/artikel/edit/{id}', [ArtikelController::class, 'edit'])->name('artikel.edit');
Route::post('/artikel/{id}', [ArtikelController::class, 'update'])->name('artikel.update');
Route::delete('/artikel/{id}', [ArtikelController::class, 'destroy'])->name('artikel.destroy');

// Route Terima Event
Route::get('admin/terimaevent', [TerimaEventController::class, 'index'])->name('terimaevent');
Route::get('admin/terimaevent/info', [TerimaEventController::class, 'info'])->name('event.info');

// Route Data Event
Route::get('admin/dataevent', [DataEventController::class, 'index'])->name('dataevent');
Route::get('admin/dataevent/info', [DataEventController::class, 'info'])->name('event.info');

// Route Terima Usaha
Route::get('admin/terimausaha', [TerimaUsahaController::class, 'index'])->name('terimausaha');
Route::get('admin/terimausaha/info', [TerimaUsahaController::class, 'info'])->name('usaha.info');

// Route Data Usaha
Route::get('admin/datausaha', [DataUsahaController::class, 'index'])->name('datausaha');
Route::get('admin/datausaha/info', [DataUsahaController::class, 'info'])->name('usaha.info');

// Route Data Sektor
Route::get('admin/datasektor', [DataSektorController::class, 'index'])->name('datasektor');
Route::get('admin/datasektor/tambah', [DataSektorController::class, 'tambah'])->name('sektor.tambah');
Route::get('admin/datasektor/edit', [DataSektorController::class, 'edit'])->name('sektor.edit');
Route::get('admin/datasektor/info', [DataSektorController::class, 'info'])->name('sektor.info');

// Route Profil
Route::get('admin/profil', [ProfilAdminController::class, 'index'])->name('admin.profil');

// Route Pop Up
Route::get('admin/error', [PopUpController::class, 'error'])->name('popup.404');

// ROUTE UNTUK PENGUSAHA
Route::get('/entrepreneur', [BerandaController::class, 'index'])->name('entrepreneur');

// Route for other entrepreneur routes (events, business, products, etc.)

// Route landing Page
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [AboutController::class, 'index'])->name('about');
Route::get('/sektor', [SectorController::class, 'index'])->name('sector');
Route::get('/sektor/product/detailProduk', [SectorController::class, 'detailProduct'])->name('detailProduct');
Route::get('/sektor/product/detailbussines', [SectorController::class, 'detailBussines'])->name('detailbussines');
Route::get('/sektor/product/aduanbussines', [SectorController::class, 'businessComplaints'])->name('businessComplaints');
Route::get('/artikel', [ArticelController::class, 'index'])->name('articel');
Route::get('/artikel/detailArticel', [ArticelController::class, 'detailarticel'])->name('detailArticel');
Route::get('/event', [HomeEventController::class, 'index'])->name('event');
Route::get('/event/detailEvent', [HomeEventController::class, 'detail'])->name('detailEvent');
Route::get('/infografis', [GraphController::class, 'index'])->name('graph');


Route::get('/infografissfd', [BussinesRegistrationController::class, 'index'])->name('bussinesRegistration');






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

Route::get('/sektor/product/aduanbussines', [SectorController::class, 'businessComplaints'])->name('entrepreneur-complaint');

Route::get('/entrepreneur/profile', [ProfilController::class, 'index'])->name('entrepreneur-profile');
Route::get('/entrepreneur/logout', [ProfilController::class, 'index'])->name('entrepreneur-logout');
