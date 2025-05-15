<!DOCTYPE html>
<html lang="en">

@include('components.head')

<style>
    body {
        padding-top: 73px;
        background-color: white
    }
</style>

<body>

    @include('landingPage.layouts.header')

    <div>

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

                    {{-- BUTTON USAHA --}}
                    <button class="btn btn-primary rounded-5 px-4 d-flex flex-row align-items-center gap-2">
                        <p class="m-0">Usaha</p>
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 9-7 7-7-7" />
                        </svg>
                    </button>

                    {{-- BUTTON KECAMATAN --}}
                    <button class="btn btn-primary rounded-5 px-4 d-flex flex-row align-items-center gap-2">
                        <p class="m-0">Kecamatan</p>
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 9-7 7-7-7" />
                        </svg>
                    </button>
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

            <iframe class="rounded-4"
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d126532.05170830055!2d111.95881104562073!3d-7.669534441989568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1746757266520!5m2!1sid!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

        {{-- LIST USAHA --}}
        <section class="container-xxl">
            {{-- LIST USAHA POPULER --}}
            <div class="w-100">
                <h2 class="fw-bold text-black">Usaha Populer</h2>

                <?php
                // data card bawah
                $dataUsahaPopuler = [
                    [
                        'gambar' => 'assets/img/logoekraf.png',
                        'title' => 'CV. Merdeka Utama',
                        'location' => 'Jl. Payaman No.76 Kelurahan Kramat, Nganjuk',
                        'contact' => '089635650887',
                        'category' => 'Kategori Sektor',
                    ],
                    [
                        'gambar' => 'assets/img/logoekraf.png',
                        'title' => 'CV. Merdeka Utama',
                        'location' => 'Jl. Payaman No.76 Kelurahan Kramat, Nganjuk',
                        'contact' => '089635650887',
                        'category' => 'Kategori Sektor',
                    ],
                    [
                        'gambar' => 'assets/img/logoekraf.png',
                        'title' => 'CV. Merdeka Utama',
                        'location' => 'Jl. Payaman No.76 Kelurahan Kramat, Nganjuk',
                        'contact' => '089635650887',
                        'category' => 'Kategori Sektor',
                    ],
                    [
                        'gambar' => 'assets/img/logoekraf.png',
                        'title' => 'CV. Merdeka Utama',
                        'location' => 'Jl. Payaman No.76 Kelurahan Kramat, Nganjuk',
                        'contact' => '089635650887',
                        'category' => 'Kategori Sektor',
                    ],
                    [
                        'gambar' => 'assets/img/logoekraf.png',
                        'title' => 'CV. Merdeka Utama',
                        'location' => 'Jl. Payaman No.76 Kelurahan Kramat, Nganjuk',
                        'contact' => '089635650887',
                        'category' => 'Kategori Sektor',
                    ],
                    [
                        'gambar' => 'assets/img/logoekraf.png',
                        'title' => 'CV. Merdeka Utama',
                        'location' => 'Jl. Payaman No.76 Kelurahan Kramat, Nganjuk',
                        'contact' => '089635650887',
                        'category' => 'Kategori Sektor',
                    ],
                    [
                        'gambar' => 'assets/img/logoekraf.png',
                        'title' => 'CV. Merdeka Utama',
                        'location' => 'Jl. Payaman No.76 Kelurahan Kramat, Nganjuk',
                        'contact' => '089635650887',
                        'category' => 'Kategori Sektor',
                    ],
                    [
                        'gambar' => 'assets/img/logoekraf.png',
                        'title' => 'CV. Merdeka Utama',
                        'location' => 'Jl. Payaman No.76 Kelurahan Kramat, Nganjuk',
                        'contact' => '089635650887',
                        'category' => 'Kategori Sektor',
                    ],
                    [
                        'gambar' => 'assets/img/logoekraf.png',
                        'title' => 'CV. Merdeka Utama',
                        'location' => 'Jl. Payaman No.76 Kelurahan Kramat, Nganjuk',
                        'contact' => '089635650887',
                        'category' => 'Kategori Sektor',
                    ],
                    [
                        'gambar' => 'assets/img/logoekraf.png',
                        'title' => 'CV. Merdeka Utama',
                        'location' => 'Jl. Payaman No.76 Kelurahan Kramat, Nganjuk',
                        'contact' => '089635650887',
                        'category' => 'Kategori Sektor',
                    ],
                    [
                        'gambar' => 'assets/img/logoekraf.png',
                        'title' => 'CV. Merdeka Utama',
                        'location' => 'Jl. Payaman No.76 Kelurahan Kramat, Nganjuk',
                        'contact' => '089635650887',
                        'category' => 'Kategori Sektor',
                    ],
                    [
                        'gambar' => 'assets/img/logoekraf.png',
                        'title' => 'CV. Merdeka Utama',
                        'location' => 'Jl. Payaman No.76 Kelurahan Kramat, Nganjuk',
                        'contact' => '089635650887',
                        'category' => 'Kategori Sektor',
                    ],
                    [
                        'gambar' => 'assets/img/logoekraf.png',
                        'title' => 'CV. Merdeka Utama',
                        'location' => 'Jl. Payaman No.76 Kelurahan Kramat, Nganjuk',
                        'contact' => '089635650887',
                        'category' => 'Kategori Sektor',
                    ],
                ];
                
                // fungsi sort kata
                // function potong_kata($teks, $jumlahKata = 20)
                // {
                //     $kataArray = explode(' ', $teks); // Pecah teks jadi array kata
                //     if (count($kataArray) > $jumlahKata) {
                //         $kataPotong = array_slice($kataArray, 0, $jumlahKata);
                //         return implode(' ', $kataPotong) . '...';
                //     } else {
                //         return $teks;
                //     }
                // }
                
                ?>

                <div class="overflows d-flex flex-row gap-4 py-4">
                    {{-- CARD USAHA --}}
                    <?php foreach ($dataUsahaPopuler as $item): ?>
                    <div class="shadow rounded-4">
                        <div class="overflow-hidden rounded-2" style="width: 324px;">
                            <img src="{{ asset($item['gambar']) }}" alt="" class="w-100">
                        </div>

                        <div class="p-3">
                            <h4><?= $item['title'] ?></h4>
                            {{-- LOKASI --}}
                            <div class="d-flex flex-row">
                                <svg class="w-6 h-6 text-danger dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p><?= $item['location'] ?></p>
                            </div>

                            {{-- NOMER --}}
                            <div class="d-flex flex-row">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z" />
                                </svg>
                                <p><?= $item['contact'] ?></p>
                            </div>

                            {{-- KATEGORI SEKTOR --}}
                            <div class="d-flex flex-row w-100 justify-content-end">
                                <div class="bg-black px-4 py-2 rounded-2">
                                    <p class="m-0 text-white"><?= $item['category'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>

                </div>
            </div>

            {{-- LIST USAHA TERBARU --}}
            <div>
                <?php
                // data card bawah
                $dataUsahaTerbaru = [
                    [
                        'gambar' => 'assets/img/logoekraf.png',
                        'title' => 'CV. Merdeka Utama',
                        'location' => 'Jl. Payaman No.76 Kelurahan Kramat, Nganjuk',
                        'contact' => '089635650887',
                        'category' => 'Kategori Sektor',
                    ],
                    [
                        'gambar' => 'assets/img/logoekraf.png',
                        'title' => 'CV. Merdeka Utama',
                        'location' => 'Jl. Payaman No.76 Kelurahan Kramat, Nganjuk',
                        'contact' => '089635650887',
                        'category' => 'Kategori Sektor',
                    ],
                    [
                        'gambar' => 'assets/img/logoekraf.png',
                        'title' => 'CV. Merdeka Utama',
                        'location' => 'Jl. Payaman No.76 Kelurahan Kramat, Nganjuk',
                        'contact' => '089635650887',
                        'category' => 'Kategori Sektor',
                    ],
                    [
                        'gambar' => 'assets/img/logoekraf.png',
                        'title' => 'CV. Merdeka Utama',
                        'location' => 'Jl. Payaman No.76 Kelurahan Kramat, Nganjuk',
                        'contact' => '089635650887',
                        'category' => 'Kategori Sektor',
                    ],
                    [
                        'gambar' => 'assets/img/logoekraf.png',
                        'title' => 'CV. Merdeka Utama',
                        'location' => 'Jl. Payaman No.76 Kelurahan Kramat, Nganjuk',
                        'contact' => '089635650887',
                        'category' => 'Kategori Sektor',
                    ],
                    [
                        'gambar' => 'assets/img/logoekraf.png',
                        'title' => 'CV. Merdeka Utama',
                        'location' => 'Jl. Payaman No.76 Kelurahan Kramat, Nganjuk',
                        'contact' => '089635650887',
                        'category' => 'Kategori Sektor',
                    ],
                    [
                        'gambar' => 'assets/img/logoekraf.png',
                        'title' => 'CV. Merdeka Utama',
                        'location' => 'Jl. Payaman No.76 Kelurahan Kramat, Nganjuk',
                        'contact' => '089635650887',
                        'category' => 'Kategori Sektor',
                    ],
                    [
                        'gambar' => 'assets/img/logoekraf.png',
                        'title' => 'CV. Merdeka Utama',
                        'location' => 'Jl. Payaman No.76 Kelurahan Kramat, Nganjuk',
                        'contact' => '089635650887',
                        'category' => 'Kategori Sektor',
                    ],
                    [
                        'gambar' => 'assets/img/logoekraf.png',
                        'title' => 'CV. Merdeka Utama',
                        'location' => 'Jl. Payaman No.76 Kelurahan Kramat, Nganjuk',
                        'contact' => '089635650887',
                        'category' => 'Kategori Sektor',
                    ],
                    [
                        'gambar' => 'assets/img/logoekraf.png',
                        'title' => 'CV. Merdeka Utama',
                        'location' => 'Jl. Payaman No.76 Kelurahan Kramat, Nganjuk',
                        'contact' => '089635650887',
                        'category' => 'Kategori Sektor',
                    ],
                    [
                        'gambar' => 'assets/img/logoekraf.png',
                        'title' => 'CV. Merdeka Utama',
                        'location' => 'Jl. Payaman No.76 Kelurahan Kramat, Nganjuk',
                        'contact' => '089635650887',
                        'category' => 'Kategori Sektor',
                    ],
                    [
                        'gambar' => 'assets/img/logoekraf.png',
                        'title' => 'CV. Merdeka Utama',
                        'location' => 'Jl. Payaman No.76 Kelurahan Kramat, Nganjuk',
                        'contact' => '089635650887',
                        'category' => 'Kategori Sektor',
                    ],
                    [
                        'gambar' => 'assets/img/logoekraf.png',
                        'title' => 'CV. Merdeka Utama',
                        'location' => 'Jl. Payaman No.76 Kelurahan Kramat, Nganjuk',
                        'contact' => '089635650887',
                        'category' => 'Kategori Sektor',
                    ],
                ];
                
                // fungsi sort kata
                // function potong_kata($teks, $jumlahKata = 20)
                // {
                //     $kataArray = explode(' ', $teks); // Pecah teks jadi array kata
                //     if (count($kataArray) > $jumlahKata) {
                //         $kataPotong = array_slice($kataArray, 0, $jumlahKata);
                //         return implode(' ', $kataPotong) . '...';
                //     } else {
                //         return $teks;
                //     }
                // }
                
                ?>

                <h2 class="fw-bold text-black">Usaha Terbaru</h2>
                <div class="overflows d-flex flex-row gap-4 py-4">
                    {{-- CARD USAHA --}}
                    <?php foreach ($dataUsahaTerbaru as $item): ?>
                    <div class="shadow rounded-4">
                        <div class="overflow-hidden rounded-2" style="width: 324px;">
                            <img src="{{ asset($item['gambar']) }}" alt="" class="w-100">
                        </div>

                        <div class="p-3">
                            <h4><?= $item['title'] ?></h4>
                            {{-- LOKASI --}}
                            <div class="d-flex flex-row">
                                <svg class="w-6 h-6 text-danger dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p><?= $item['location'] ?></p>
                            </div>

                            {{-- NOMER --}}
                            <div class="d-flex flex-row">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z" />
                                </svg>
                                <p><?= $item['contact'] ?></p>
                            </div>

                            {{-- KATEGORI SEKTOR --}}
                            <div class="d-flex flex-row w-100 justify-content-end">
                                <div class="bg-black px-4 py-2 rounded-2">
                                    <p class="m-0 text-white"><?= $item['category'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>

                </div>
            </div>
        </section>

    </div>

    @include('landingPage.layouts.footer')
</body>

</html>
