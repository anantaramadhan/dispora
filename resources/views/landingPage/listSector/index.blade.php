<!DOCTYPE html>
<html lang="en">

@include('components.head2')

<style>
    body {
        padding-top: 73px;
        background-color: white
    }
</style>

<body>

    @include('landingPage.layouts.header')

    {{-- HEADER USAHA --}}
    <section class="container-xxl py-5 bg-gradients px-3 px-md-5 rounded-bottom-4">
        {{-- SEARCH DAN SORTING KECAMATAN ATAU USAHA PRODUK --}}
        <div class="d-flex flex-column flex-md-row w-100 gap-4 mb-4">

            {{-- SEARCH --}}
            <div class="input-group mb-2 mb-md-0 d-flex flex-row rounded-pill overflow-hidden py-1 px-4"
                style="border: 1px solid #ced4da;">
                <span class="input-group-text bg-transparent border-0 ps-3 w-auto">
                    <svg class="w-100 h-auto text-white dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                    </svg>
                </span>
                <input type="text" class="form-control border-0 ps-2 bg-transparent text-white "
                    style="outline: none; " placeholder="Cari Artikel Berdasarkan Judul">
            </div>

            <div class="d-flex flex-row gap-4 justify-content-between">

                {{-- BUTTON USAHA/PRODUK --}}
                <div class="dropdown">
                    <button id="dropdown-usaha-produk"
                        class="btn btn-light border-0 rounded-5 shadow-lg h-100 px-4 d-flex flex-row align-items-center gap-2"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <p class="m-0">Produk</p>
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 9-7 7-7-7" />
                        </svg>
                    </button>

                    <ul class="dropdown-menu dropdown-menu-end rounded-2 overflow-hidden py-0">
                        <li><a class="dropdown-item active switch-section" href="#" data-target="Product"
                                aria-current="true">Produk</a></li>
                        <li><a class="dropdown-item switch-section" href="#" data-target="Bussines">Usaha</a></li>
                    </ul>
                </div>

                {{-- BUTTON KECAMATAN --}}
                {{-- <div class="dropdown-center">
                    <button
                        class="btn btn-light border-0 rounded-5 shadow-lg h-100 px-4 d-flex flex-row align-items-center gap-2"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <p class="m-0">Kecamatan</p>
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 9-7 7-7-7" />
                        </svg>
                    </button>

                    <ul class="dropdown-menu rounded-2 overflow-hidden py-0">
                        <li><a class="dropdown-item active" href="#" aria-current="true">Semua</a></li>
                        <li><a class="dropdown-item" href="#">Bagor</a></li>
                        <li><a class="dropdown-item" href="#">Baron</a></li>
                        <li><a class="dropdown-item" href="#">Berbek</a></li>
                        <li><a class="dropdown-item" href="#">Gondang</a></li>
                        <li><a class="dropdown-item" href="#">Jatikalen</a></li>
                        <li><a class="dropdown-item" href="#">Kertosono</a></li>
                        <li><a class="dropdown-item" href="#">Lengkong</a></li>
                        <li><a class="dropdown-item" href="#">Loceret</a></li>
                        <li><a class="dropdown-item" href="#">Nganjuk</a></li>
                        <li><a class="dropdown-item" href="#">Ngetos</a></li>
                        <li><a class="dropdown-item" href="#">Ngluyu</a></li>
                        <li><a class="dropdown-item" href="#">Ngronggot</a></li>
                        <li><a class="dropdown-item" href="#">Pace</a></li>
                        <li><a class="dropdown-item" href="#">Patianrowo</a></li>
                        <li><a class="dropdown-item" href="#">Prambon</a></li>
                        <li><a class="dropdown-item" href="#">Rejoso</a></li>
                        <li><a class="dropdown-item" href="#">Sawahan</a></li>
                        <li><a class="dropdown-item" href="#">Sekomoro</a></li>
                        <li><a class="dropdown-item" href="#">Tanjunganom</a></li>
                        <li><a class="dropdown-item" href="#">Wilangan</a></li>
                    </ul>
                </div> --}}

            </div>
        </div>

        {{-- SORTING KATEGORI --}}
        <div class="d-flex overflows flex-row gap-4">
            <button class="btn btn-primary bg-black rounded-5 px-4 py-2 d-flex flex-row">Semua</button>

            <button class="btn btn-light rounded-5 px-4 py-2 d-flex flex-row">
                <p class="d-flex flex-row m-0">Kuliner</p>
            </button>

            <button class="btn btn-light rounded-5 px-4 py-2 d-flex flex-row">
                <p class="d-flex flex-row m-0 text-nowrap">Pengembangan Game</p>
            </button>

            <button class="btn btn-light rounded-5 px-4 py-2 d-flex flex-row">
                <p class="d-flex flex-row m-0 text-nowrap">Aplikasi</p>
            </button>

            <button class="btn btn-light rounded-5 px-4 py-2 d-flex flex-row">
                <p class="d-flex flex-row m-0 text-nowrap">Fashion</p>
            </button>

            <button class="btn btn-light rounded-5 px-4 py-2 d-flex flex-row">
                <p class="d-flex flex-row m-0 text-nowrap">Desain Komunikasi Visual</p>
            </button>
            <button class="btn btn-light rounded-5 px-4 py-2 d-flex flex-row">
                <p class="d-flex flex-row m-0 text-nowrap">Desain Interior</p>
            </button>

            <button class="btn btn-light rounded-5 px-4 py-2 d-flex flex-row">
                <p class="d-flex flex-row m-0 text-nowrap">Desain Produk</p>
            </button>

            <button class="btn btn-light rounded-5 px-4 py-2 d-flex flex-row">
                <p class="d-flex flex-row m-0 text-nowrap">Periklanan</p>
            </button>

            <button class="btn btn-light rounded-5 px-4 py-2 d-flex flex-row">
                <p class="d-flex flex-row m-0 text-nowrap">TV dan Radio</p>
            </button>

            <button class="btn btn-light rounded-5 px-4 py-2 d-flex flex-row">
                <p class="d-flex flex-row m-0 text-nowrap">Penerbitan</p>
            </button>

            <button class="btn btn-light rounded-5 px-4 py-2 d-flex flex-row">
                <p class="d-flex flex-row m-0 text-nowrap">Film, Animasi, dan Vidio</p>
            </button>

            <button class="btn btn-light rounded-5 px-4 py-2 d-flex flex-row">
                <p class="d-flex flex-row m-0 text-nowrap">Fotografi</p>
            </button>

            <button class="btn btn-light rounded-5 px-4 py-2 d-flex flex-row">
                <p class="d-flex flex-row m-0 text-nowrap">Musik</p>
            </button>

            <button class="btn btn-light rounded-5 px-4 py-2 d-flex flex-row">
                <p class="d-flex flex-row m-0 text-nowrap">Seni Pertunjukan</p>
            </button>

            <button class="btn btn-light rounded-5 px-4 py-2 d-flex flex-row">
                <p class="d-flex flex-row m-0 text-nowrap">Seni Rupa</p>
            </button>

            <button class="btn btn-light rounded-5 px-4 py-2 d-flex flex-row">
                <p class="d-flex flex-row m-0 text-nowrap">Kriya</p>
            </button>

            <button class="btn btn-light rounded-5 px-4 py-2 d-flex flex-row">
                <p class="d-flex flex-row m-0 text-nowrap">Arsitektur</p>
            </button>
        </div>
    </section>

    {{-- MAP JOURNEY EKRAF --}}
    <section class="container-xxl py-4 px-0">
        <h2 class="fw-bold text-black">Map Journey Ekonomi Kreatif Nganjuk</h2>

        {{-- <iframe class="rounded-4"
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d126532.05170830055!2d111.95881104562073!3d-7.669534441989568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1746757266520!5m2!1sid!2sid"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe> --}}

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.7729056515423!2d111.9043798308188!3d-7.5996760156285355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e784ba9d9447a99%3A0x1e4f0169e2940678!2sGedung%20Balai%20Budaya%20Mpu%20Sendok!5e0!3m2!1sid!2sid!4v1747469586066!5m2!1sid!2sid"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    {{-- SECTION USAHA --}}
    <div id="section-bussines" class="fade-section">
        @include('landingPage.listSector.businessSector.businnes')
    </div>

    {{-- SECTON PRODUK --}}
    <div id="section-product" class="fade-section show">
        @include('landingPage.listSector.productSector.product')
    </div>

    @include('landingPage.layouts.footer')
</body>


<script src="{{ asset('assets/js/sector.js') }}"></script>

</html>
