<!DOCTYPE html>
<html lang="en">

@include('components.head2')

<style>
    body {
        padding-top: 73px;
        background-color: white;
    }

    textarea {
        overflow: hidden;
        /* sembunyikan scrollbar */
        resize: none;
        /* cegah drag sudut untuk resize */
    }


    .fade-section {
        display: none;
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .fade-section.show {
        display: block;
        opacity: 1;
    }
</style>

<body>

    @include('landingPage.layouts.header')

    {{-- SECTION DETAIL PRODUK --}}
    <section id="detailUsahaHead" class="container-xxl d-flex px-4">

        <div class="w-100 d-flex flex-column rounded-2 gap-4 overflow-hidden mt-lg-4 mt-0 p-4"
            style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),  /* lapisan hitam 50% */ url('{{ asset('assets/img/fotousaha2.jpg') }}'); background-size: cover;">
            {{-- SEARCH --}}
            {{-- <div class="input-group mb-2 mb-md-0 d-flex flex-row rounded-pill overflow-hidden py-1 px-4"
            style="border: 1px solid #ced4da;">
            <span class="input-group-text bg-transparent border-0 ps-3 w-auto">
                <svg class="w-100 h-auto text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                        d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                </svg>
            </span>
            <input type="text" class="form-control border-0 ps-2 bg-transparent text-white " style="outline: none; "
                placeholder="Cari Artikel Berdasarkan Judul">
        </div> --}}

            {{-- PROFIL USAHA --}}
            <div class="d-flex flex-md-row flex-column justify-content-between ">
                <div class="d-flex flex-md-row flex-column gap-4 align-items-center mb-md-0 mb-4">
                    {{-- LOGO USAHA --}}
                    <div><img src="{{ asset('assets/img/logoekraf.png') }}" alt=""
                            class="rounded-pill object-fit-cover" style="width: 120px; height: 120px;"></div>

                    <div class="d-flex gap-2 flex-column ">
                        {{-- NAMA USAHA --}}
                        <p class="mb-0 fw-bold fs-5 text-white">NAMA USAHA</p>

                        {{-- ULASAN USAHA --}}
                        <p class="mb-0 text-white">Pemilik: FUFU FAFA</p>
                    </div>
                </div>
                {{-- TOMBOL LIHAT USAHA --}}
                <div class="d-flex flex-column gap-2 align-items-center justify-content-center">
                    {{-- ULASAN USAHA --}}
                    <p class="mb-0 text-white">120 Ulasan Usaha</p>

                    {{-- BUTTON TAMBAH ADUAN USAHA --}}
                    <a href="{{ route('landingpage-businessComplaints') }}"
                        class="btn btn-danger rounded-5 px-4 d-flex align-items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                            class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                            <path
                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                        </svg>

                        Adukan Usaha</a>
                </div>
            </div>
        </div>


    </section>

    {{-- LOKASI, KONTAK, DWSKRIPSI --}}
    <section id="contactLocation" class="container-xxl d-flex flex-column mt-4 gap-4 px-4 text-black">
        <div class="d-flex flex-md-row flex-column justify-content-between mb-md-0 mb-4">
            {{-- Lokasi --}}
            <div class="d-flex flex-row gap-2" style="max-width: 500px">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="red"
                    class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                </svg>
                <p>Jl. Dermojoso no.123 Ds. Loughtown Kec. GrandLane Kab. East Blue</p>
            </div>

            {{-- Nomer --}}
            <div class="d-flex flex-row gap-2 mb-md-0 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                </svg>

                <p class="mb-0">089635650887</p>
            </div>

            <div class="d-flex flex-column gap-4">
                {{-- Instagram --}}
                <div class="d-flex flex-row gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-instagram" viewBox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                    </svg>

                    <p class="mb-0">Username Instagram</p>
                </div>

                {{-- Tiktok --}}
                <div class="d-flex flex-row gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-tiktok" viewBox="0 0 16 16">
                        <path
                            d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                    </svg>
                    <p class="mb-0">username tiktok</p>
                </div>

                {{-- Facebook --}}
                <div class="d-flex flex-row gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-facebook" viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                    </svg>
                    <p class="mb-0">usernam Facebook</p>
                </div>
            </div>
        </div>

        <div>
            <h2 class="fw-bold">Deskripsi Usaha</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget viverra libero. Quisque porttitor
                metus vitae ligula pharetra tincidunt. Nullam ultrices vulputate porttitor. Vivamus lectus elit, euismod
                sed leo ut, commodo sodales dui. Suspendisse in dolor dolor. Donec molestie sapien vitae enim venenatis
                ultrices. Nullam ac risus in risus auctor blandit. Curabitur a posuere dui. Pellentesque molestie
                sollicitudin velit, ac molestie est faucibus ac. Mauris tincidunt eu ipsum nec dignissim. Morbi lacinia
                bibendum quam finibus pulvinar. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </section>

    {{-- PRODUK TERBARU --}}
    <section class="container-xxl py-5 px-4">
        <div class="w-100">
            <h2 class="fw-bold text-black mb-0">Produk Terbaru</h2>

            <?php
            // data card bawah
            $dataProdukTerbaru = [
                [
                    'gambar' => 'assets/img/logoekraf.png',
                    'title' => 'Kursi Gaming Murah',
                    'price' => 'Rp. 75.000,00',
                    'titleBussines' => 'CV. Merdika Utama',
                    'contact' => '089635650887',
                    'category' => 'Desain Komunikasi Visual',
                ],
                [
                    'gambar' => 'assets/img/logoekraf.png',
                    'title' => 'Kursi Gaming Murah',
                    'price' => 'Rp. 75.000,00',
                    'titleBussines' => 'CV. Merdika Utama',
                    'contact' => '089635650887',
                    'category' => 'Desain Komunikasi Visual',
                ],
                [
                    'gambar' => 'assets/img/logoekraf.png',
                    'title' => 'Kursi Gaming Murah',
                    'price' => 'Rp. 75.000,00',
                    'titleBussines' => 'CV. Merdika Utama',
                    'contact' => '089635650887',
                    'category' => 'Desain Komunikasi Visual',
                ],
                [
                    'gambar' => 'assets/img/logoekraf.png',
                    'title' => 'Kursi Gaming Murah',
                    'price' => 'Rp. 75.000,00',
                    'titleBussines' => 'CV. Merdika Utama',
                    'contact' => '089635650887',
                    'category' => 'Desain Komunikasi Visual',
                ],
                [
                    'gambar' => 'assets/img/logoekraf.png',
                    'title' => 'Kursi Gaming Murah',
                    'price' => 'Rp. 75.000,00',
                    'titleBussines' => 'CV. Merdika Utama',
                    'contact' => '089635650887',
                    'category' => 'Desain Komunikasi Visual',
                ],
                [
                    'gambar' => 'assets/img/logoekraf.png',
                    'title' => 'Kursi Gaming Murah',
                    'price' => 'Rp. 75.000,00',
                    'titleBussines' => 'CV. Merdika Utama',
                    'contact' => '089635650887',
                    'category' => 'Desain Komunikasi Visual',
                ],
                [
                    'gambar' => 'assets/img/logoekraf.png',
                    'title' => 'Kursi Gaming Murah',
                    'price' => 'Rp. 75.000,00',
                    'titleBussines' => 'CV. Merdika Utama',
                    'contact' => '089635650887',
                    'category' => 'Desain Komunikasi Visual',
                ],
                [
                    'gambar' => 'assets/img/logoekraf.png',
                    'title' => 'Kursi Gaming Murah',
                    'price' => 'Rp. 75.000,00',
                    'titleBussines' => 'CV. Merdika Utama',
                    'contact' => '089635650887',
                    'category' => 'Desain Komunikasi Visual',
                ],
                [
                    'gambar' => 'assets/img/logoekraf.png',
                    'title' => 'Kursi Gaming Murah',
                    'price' => 'Rp. 75.000,00',
                    'titleBussines' => 'CV. Merdika Utama',
                    'contact' => '089635650887',
                    'category' => 'Desain Komunikasi Visual',
                ],
                [
                    'gambar' => 'assets/img/logoekraf.png',
                    'title' => 'Kursi Gaming Murah',
                    'price' => 'Rp. 75.000,00',
                    'titleBussines' => 'CV. Merdika Utama',
                    'contact' => '089635650887',
                    'category' => 'Desain Komunikasi Visual',
                ],
                [
                    'gambar' => 'assets/img/logoekraf.png',
                    'title' => 'Kursi Gaming Murah',
                    'price' => 'Rp. 75.000,00',
                    'titleBussines' => 'CV. Merdika Utama',
                    'contact' => '089635650887',
                    'category' => 'Desain Komunikasi Visual',
                ],
                [
                    'gambar' => 'assets/img/logoekraf.png',
                    'title' => 'Kursi Gaming Murah',
                    'price' => 'Rp. 75.000,00',
                    'titleBussines' => 'CV. Merdika Utama',
                    'contact' => '089635650887',
                    'category' => 'Desain Komunikasi Visual',
                ],
                [
                    'gambar' => 'assets/img/logoekraf.png',
                    'title' => 'Kursi Gaming Murah',
                    'price' => 'Rp. 75.000,00',
                    'titleBussines' => 'CV. Merdika Utama',
                    'contact' => '089635650887',
                    'category' => 'Desain Komunikasi Visual',
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

            <div class="overflows d-flex flex-row gap-4 py-5 px-2">
                {{-- CARD USAHA --}}
                <?php foreach ($dataProdukTerbaru as $item): ?>
                <div class="shadow rounded-4 zoom-card boxSector">
                    <div class="overflow-hidden rounded-2" style="width: 324px;">
                        <img src="{{ asset($item['gambar']) }}" alt="" class="w-100">
                    </div>

                    <div class="p-3 text-black">
                        {{-- TITLE --}}
                        <a href="{{ route('landingpage-detailProduct') }}" class="text-black">
                            <h4 class="fw-bold mb-0"><?= $item['title'] ?></h4>
                        </a>


                        {{-- HARGA --}}
                        <p class="fs-5 fw-bold"><?= $item['price'] ?></p>

                        {{-- TITLE BUSSINES --}}
                        <p><?= $item['titleBussines'] ?></p>

                        {{-- NOMER --}}
                        <div class="d-flex flex-row">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
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

    {{-- DAFTAR PRODUK  --}}
    <section class="container-xxl py-5 px-4">
        <div class="w-100">
            <h2 class="fw-bold text-black mb-0">Daftar Produk</h2>

            <?php
            // data card bawah
            $dataDaftarProduk = [
                [
                    'gambar' => 'assets/img/logoekraf.png',
                    'title' => 'Kursi Gaming Murah',
                    'price' => 'Rp. 75.000,00',
                    'titleBussines' => 'CV. Merdika Utama',
                    'contact' => '089635650887',
                    'category' => 'Desain Komunikasi Visual',
                ],
                [
                    'gambar' => 'assets/img/logoekraf.png',
                    'title' => 'Kursi Gaming Murah',
                    'price' => 'Rp. 75.000,00',
                    'titleBussines' => 'CV. Merdika Utama',
                    'contact' => '089635650887',
                    'category' => 'Desain Komunikasi Visual',
                ],
                [
                    'gambar' => 'assets/img/logoekraf.png',
                    'title' => 'Kursi Gaming Murah',
                    'price' => 'Rp. 75.000,00',
                    'titleBussines' => 'CV. Merdika Utama',
                    'contact' => '089635650887',
                    'category' => 'Desain Komunikasi Visual',
                ],
                [
                    'gambar' => 'assets/img/logoekraf.png',
                    'title' => 'Kursi Gaming Murah',
                    'price' => 'Rp. 75.000,00',
                    'titleBussines' => 'CV. Merdika Utama',
                    'contact' => '089635650887',
                    'category' => 'Desain Komunikasi Visual',
                ],
                [
                    'gambar' => 'assets/img/logoekraf.png',
                    'title' => 'Kursi Gaming Murah',
                    'price' => 'Rp. 75.000,00',
                    'titleBussines' => 'CV. Merdika Utama',
                    'contact' => '089635650887',
                    'category' => 'Desain Komunikasi Visual',
                ],
                [
                    'gambar' => 'assets/img/logoekraf.png',
                    'title' => 'Kursi Gaming Murah',
                    'price' => 'Rp. 75.000,00',
                    'titleBussines' => 'CV. Merdika Utama',
                    'contact' => '089635650887',
                    'category' => 'Desain Komunikasi Visual',
                ],
                [
                    'gambar' => 'assets/img/logoekraf.png',
                    'title' => 'Kursi Gaming Murah',
                    'price' => 'Rp. 75.000,00',
                    'titleBussines' => 'CV. Merdika Utama',
                    'contact' => '089635650887',
                    'category' => 'Desain Komunikasi Visual',
                ],
                [
                    'gambar' => 'assets/img/logoekraf.png',
                    'title' => 'Kursi Gaming Murah',
                    'price' => 'Rp. 75.000,00',
                    'titleBussines' => 'CV. Merdika Utama',
                    'contact' => '089635650887',
                    'category' => 'Desain Komunikasi Visual',
                ],
                [
                    'gambar' => 'assets/img/logoekraf.png',
                    'title' => 'Kursi Gaming Murah',
                    'price' => 'Rp. 75.000,00',
                    'titleBussines' => 'CV. Merdika Utama',
                    'contact' => '089635650887',
                    'category' => 'Desain Komunikasi Visual',
                ],
                [
                    'gambar' => 'assets/img/logoekraf.png',
                    'title' => 'Kursi Gaming Murah',
                    'price' => 'Rp. 75.000,00',
                    'titleBussines' => 'CV. Merdika Utama',
                    'contact' => '089635650887',
                    'category' => 'Desain Komunikasi Visual',
                ],
                [
                    'gambar' => 'assets/img/logoekraf.png',
                    'title' => 'Kursi Gaming Murah',
                    'price' => 'Rp. 75.000,00',
                    'titleBussines' => 'CV. Merdika Utama',
                    'contact' => '089635650887',
                    'category' => 'Desain Komunikasi Visual',
                ],
                [
                    'gambar' => 'assets/img/logoekraf.png',
                    'title' => 'Kursi Gaming Murah',
                    'price' => 'Rp. 75.000,00',
                    'titleBussines' => 'CV. Merdika Utama',
                    'contact' => '089635650887',
                    'category' => 'Desain Komunikasi Visual',
                ],
                [
                    'gambar' => 'assets/img/logoekraf.png',
                    'title' => 'Kursi Gaming Murah',
                    'price' => 'Rp. 75.000,00',
                    'titleBussines' => 'CV. Merdika Utama',
                    'contact' => '089635650887',
                    'category' => 'Desain Komunikasi Visual',
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

            <div class="overflows d-flex flex-row gap-4 py-5 px-2">
                {{-- CARD USAHA --}}
                <?php foreach ($dataDaftarProduk as $item): ?>
                <div class="shadow rounded-4 zoom-card boxSector">
                    <div class="overflow-hidden rounded-2" style="width: 324px;">
                        <img src="{{ asset($item['gambar']) }}" alt="" class="w-100">
                    </div>

                    <div class="p-3 text-black">
                        {{-- TITLE --}}
                        <a href="{{ route('landingpage-detailProduct') }}" class="text-black">
                            <h4 class="fw-bold mb-0"><?= $item['title'] ?></h4>
                        </a>


                        {{-- HARGA --}}
                        <p class="fs-5 fw-bold"><?= $item['price'] ?></p>

                        {{-- TITLE BUSSINES --}}
                        <p><?= $item['titleBussines'] ?></p>

                        {{-- NOMER --}}
                        <div class="d-flex flex-row">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
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

    <section class="py-5 px-4 boxSectorUp" style="background-color: #D2DAF1">
        <div class="container-xxl d-flex flex-row justify-content-between">
            <form action="" class="d-flex flex-column gap-4 w-100">
                <h1 class="fw-bold mb-4">Tambahkan </br> Ulasanmu!!</h1>
                <div class="d-flex flex-column gap-4">
                    <textarea id="nama" class="rounded-4 bg-transparent text-black p-3" style="height: 140px" rows="4"
                        maxlength="500" placeholder="Isi disini ulasanmu...." type="text"></textarea>
                    <div class="d-flex flex-column gap-2">
                        <a class="btn btn-primary text-white rounded-pill" href="">Tambah Ulasan</a>
                        <a class="btn btn-outline-dark rounded-pill" onclick="hapusInput('nama')">Batal</a>
                    </div>
                </div>
            </form>

            <svg class="w-100 max-w-[16rem] h-40 text-gray-800 dark:text-white d-md-flex d-none" aria-hidden="true"
                width="556" height="421" viewBox="0 0 556 421" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M517 189C517 293.382 432.382 378 328 378C223.618 378 139 293.382 139 189C139 84.6182 223.618 0 328 0C432.382 0 517 84.6182 517 189Z"
                    fill="url(#paint0_linear_344_2214)" />
                <path
                    d="M26.8808 402L72.986 400.491L62.1079 375.878C52.8414 373.828 47.462 371.977 41.3808 358.879C34.8808 344.879 32.4995 342 27.9995 340L26.8808 402Z"
                    fill="#111928" />
                <path
                    d="M28 340L28 402L22.2481 402.719C21.0544 402.868 20 401.937 20 400.734L20 342C20 340.895 20.8954 340 22 340L28 340Z"
                    fill="#9ab7f6" />
                <path
                    d="M213.135 331.449L61.8143 358.18C60.7892 358.361 60.0744 359.298 60.1708 360.334L63.8089 399.444C63.9135 400.569 64.9283 401.384 66.0491 401.243L227.5 381L374 402.5L295 333L241.056 329.827C231.717 329.278 222.347 329.822 213.135 331.449Z"
                    fill="#2563eb" />
                <path
                    d="M213.135 331.449L61.8143 358.18C60.7892 358.361 60.0744 359.298 60.1708 360.334L63.8089 399.444C63.9135 400.569 64.9283 401.384 66.0491 401.243L227.5 381L374 402.5L295 333L241.056 329.827C231.717 329.278 222.347 329.822 213.135 331.449Z"
                    fill="url(#paint1_linear_344_2214)" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M76.3644 399.95L72.4611 356.299L70.4844 356.648L74.3787 400.199L76.3644 399.95Z"
                    fill="#c8d8fa" />
                <path d="M319 215L370.5 175.5L361.5 238.5L320.5 255L319 215Z" fill="#F9FAFB" />
                <path d="M319 215L370.5 175.5L361.5 238.5L320.5 255L319 215Z" fill="url(#paint2_linear_344_2214)" />
                <path
                    d="M357.383 101.209C358.047 94.6136 363.992 81.4668 383.598 83.0129C386.732 83.6479 394 88.1762 398 101.209C403 117.5 420 108 426.5 122.5C433 137 418.5 144 422.5 153.5C426.5 163 427.5 173 424 178C420.333 171.833 410.6 156.2 397 151L380 132L359 105.5L357.383 101.209Z"
                    fill="#111928" />
                <path
                    d="M407.79 80.3947C400.683 89.3211 388.671 91.5807 380.96 85.4416C373.25 79.3025 372.76 67.0894 379.868 58.163C386.975 49.2366 398.987 46.977 406.698 53.1161C414.408 59.2552 414.897 71.4682 407.79 80.3947Z"
                    fill="#111928" />
                <path
                    d="M381.4 161.329L373.235 138.538L383.314 125.911L397.446 151.154C394.774 155.78 385.16 160.02 381.4 161.329Z"
                    fill="#FDBA8C" />
                <path
                    d="M381.4 161.329L373.235 138.538L383.314 125.911L397.446 151.154C394.774 155.78 385.16 160.02 381.4 161.329Z"
                    fill="url(#paint3_linear_344_2214)" />
                <path
                    d="M389.135 112.782C392.356 114.701 387.023 140.27 370.538 140.776C364.841 140.95 361.404 136.082 359.426 129.418C359.279 128.921 358.903 129.604 358.772 129.089C358.644 128.587 358.76 126.888 358.646 126.371C356.82 118.056 356.822 107.946 357.382 101.209C360.11 102.408 366.238 106.251 368.929 112.028C372.293 119.249 378.414 120.767 380.914 117.466C383.606 113.91 385.913 110.862 389.135 112.782Z"
                    fill="#FDBA8C" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M358.301 118.572C358.675 118.576 358.975 118.883 358.971 119.257L358.867 128.576C358.865 128.742 359.017 128.868 359.18 128.836L363.095 128.051C363.462 127.978 363.819 128.215 363.892 128.582C363.966 128.949 363.728 129.306 363.361 129.379L359.446 130.164C358.439 130.366 357.501 129.589 357.512 128.561L357.616 119.242C357.62 118.868 357.927 118.568 358.301 118.572Z"
                    fill="#111928" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M365.249 133.273C366.053 132.961 366.864 132.49 368.092 131.736C368.411 131.54 368.828 131.64 369.023 131.959C369.219 132.278 369.119 132.695 368.801 132.891C367.583 133.638 366.674 134.173 365.74 134.536C364.788 134.906 363.837 135.087 362.533 135.178C362.16 135.204 361.837 134.922 361.811 134.549C361.785 134.176 362.066 133.852 362.439 133.826C363.656 133.742 364.462 133.579 365.249 133.273Z"
                    fill="#111928" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M386.616 119.564C386.874 118.602 386.688 117.709 386.325 116.813C386.184 116.466 386.352 116.071 386.698 115.931C387.045 115.79 387.44 115.957 387.581 116.304C388 117.34 388.289 118.554 387.925 119.914C387.563 121.267 386.584 122.65 384.712 124.101C384.417 124.33 383.991 124.276 383.762 123.981C383.533 123.685 383.587 123.259 383.882 123.03C385.616 121.687 386.357 120.533 386.616 119.564Z"
                    fill="#111928" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M366.941 125.1C367.301 123.712 367.361 121.77 366.959 119.631C366.557 117.491 365.795 115.704 364.955 114.542C364.039 113.274 363.387 113.18 363.208 113.213C363.029 113.247 362.456 113.572 362.063 115.086C361.703 116.473 361.643 118.415 362.045 120.555C362.447 122.694 363.209 124.482 364.049 125.644C364.965 126.911 365.616 127.006 365.796 126.972C365.975 126.939 366.548 126.614 366.941 125.1ZM366.073 128.446C368.244 128.038 369.301 123.967 368.433 119.354C367.565 114.74 365.102 111.331 362.931 111.739C360.76 112.148 359.703 116.219 360.571 120.832C361.438 125.446 363.902 128.855 366.073 128.446Z"
                    fill="#111928" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M356.941 125.1C357.301 123.712 357.361 121.77 356.959 119.631C356.557 117.491 355.795 115.704 354.955 114.542C354.039 113.274 353.387 113.18 353.208 113.213C353.029 113.247 352.456 113.572 352.063 115.086C351.703 116.473 351.643 118.415 352.045 120.555C352.447 122.694 353.209 124.482 354.049 125.644C354.965 126.911 355.616 127.006 355.796 126.972C355.975 126.939 356.548 126.614 356.941 125.1ZM356.073 128.446C358.244 128.038 359.301 123.967 358.433 119.354C357.565 114.74 355.102 111.331 352.931 111.739C350.76 112.148 349.703 116.219 350.571 120.832C351.438 125.446 353.902 128.855 356.073 128.446Z"
                    fill="#111928" />
                <path
                    d="M180 396L202 359L173.5 359C167.091 366 157.476 380.7 143.31 383.5C129.143 386.3 119.867 393 117 396H180Z"
                    fill="#111928" />
                <path
                    d="M117 396H180L176.576 401.992C176.22 402.615 175.557 403 174.839 403H116.446C114.911 403 113.948 401.341 114.71 400.008L117 396Z"
                    fill="#9ab7f6" />
                <path
                    d="M377.5 403C426.3 402.6 428.167 335 423 301.5L371.5 294.5C348.834 279.667 299.7 247.3 284.5 236.5C265.5 223 246.5 222 229.5 240.5C216.294 254.871 170.903 323.523 147.989 358.924C147.128 360.254 148.088 362 149.672 362H205.408C206.089 362 206.723 361.654 207.091 361.081L255 286.5C275.5 325.333 328.7 403.4 377.5 403Z"
                    fill="#2563eb" />
                <path
                    d="M377.5 403C426.3 402.6 428.167 335 423 301.5L371.5 294.5C348.834 279.667 299.7 247.3 284.5 236.5C265.5 223 246.5 222 229.5 240.5C216.294 254.871 170.903 323.523 147.989 358.924C147.128 360.254 148.088 362 149.672 362H205.408C206.089 362 206.723 361.654 207.091 361.081L255 286.5C275.5 325.333 328.7 403.4 377.5 403Z"
                    fill="url(#paint4_linear_344_2214)" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M214.209 350H153.784C153.345 350.674 152.911 351.341 152.482 352H212.925L214.209 350Z"
                    fill="#c8d8fa" />
                <path d="M428.5 304.5L403 303L426.5 251.5L428.5 304.5Z" fill="#F9FAFB" />
                <path d="M428.5 304.5L403 303L426.5 251.5L428.5 304.5Z" fill="url(#paint5_linear_344_2214)" />
                <path
                    d="M394.999 312.5C381.629 315.842 366.938 310.536 359.969 306.825C359.107 306.366 358.757 305.333 359.109 304.423L364.499 290.5L355.499 284C354.666 262.833 353.499 219.8 355.499 203C357.499 186.2 372.665 170 379.999 164L403.499 154C411.165 155 427.299 167.2 430.499 208C434.499 259 412.999 308 394.999 312.5Z"
                    fill="#F9FAFB" />
                <path
                    d="M374.986 270.317L373 268L354.5 254L365.5 219.5L391 239L376.653 270.085C376.348 270.747 375.46 270.87 374.986 270.317Z"
                    fill="url(#paint6_linear_344_2214)" />
                <path
                    d="M379.998 165.5C379.598 162.7 380.498 160.667 380.998 160C388.198 158.8 394.998 153.5 397.498 151C400.298 151.8 402.665 153.333 403.498 154C402.998 155 400.598 157.8 394.998 161C389.398 164.2 382.665 165.333 379.998 165.5Z"
                    fill="#F9FAFB" />
                <path
                    d="M379.998 165.5C379.598 162.7 380.498 160.667 380.998 160C388.198 158.8 394.998 153.5 397.498 151C400.298 151.8 402.665 153.333 403.498 154C402.998 155 400.598 157.8 394.998 161C389.398 164.2 382.665 165.333 379.998 165.5Z"
                    fill="url(#paint7_linear_344_2214)" />
                <path
                    d="M333.5 156.443C330 125 292.667 125.499 284 125C274.4 125 268.667 129.658 267 131.987C281.5 138.975 287.5 158.939 281 193.876C274.5 228.813 281 283.215 314 321.646C347 360.077 432 338.616 453.5 366.066C469.341 386.292 488.943 397.91 498.712 402.088C500.217 402.732 501.837 403 503.473 403H556C533.5 403 510 373.553 493 357.582C476 341.61 431.5 346.102 404 341.61C376.5 337.118 349 308.67 336 271.237C323 233.804 336.85 186.54 333.5 156.443Z"
                    fill="#c8d8fa" />
                <path
                    d="M333.5 156.443C330 125 292.667 125.499 284 125C274.4 125 268.667 129.658 267 131.987C281.5 138.975 287.5 158.939 281 193.876C274.5 228.813 281 283.215 314 321.646C347 360.077 432 338.616 453.5 366.066C469.341 386.292 488.943 397.91 498.712 402.088C500.217 402.732 501.837 403 503.473 403H556C533.5 403 510 373.553 493 357.582C476 341.61 431.5 346.102 404 341.61C376.5 337.118 349 308.67 336 271.237C323 233.804 336.85 186.54 333.5 156.443Z"
                    fill="url(#paint8_linear_344_2214)" />
                <path
                    d="M333.5 156.443C330 125 292.667 125.499 284 125C274.4 125 268.667 129.658 267 131.987C281.5 138.975 287.5 158.939 281 193.876C274.5 228.813 281 283.215 314 321.646C347 360.077 432 338.616 453.5 366.066C469.341 386.292 488.943 397.91 498.712 402.088C500.217 402.732 501.837 403 503.473 403H556C533.5 403 510 373.553 493 357.582C476 341.61 431.5 346.102 404 341.61C376.5 337.118 349 308.67 336 271.237C323 233.804 336.85 186.54 333.5 156.443Z"
                    fill="url(#paint9_linear_344_2214)" />
                <path
                    d="M308.5 199C311 212 336 240 364.5 291L373 268C360.667 251.666 335.3 217.6 332.5 212C329.99 206.981 326.758 201.319 324.674 198.398C324.286 197.854 323.575 197.669 322.955 197.918C322.159 198.236 321.784 199.15 322.128 199.935L325 206.5C319.333 199.666 306.535 188.779 308.5 199Z"
                    fill="#FDBA8C" />
                <path
                    d="M308.5 199C311 212 336 240 364.5 291L373 268C360.667 251.666 335.3 217.6 332.5 212C329.99 206.981 326.758 201.319 324.674 198.398C324.286 197.854 323.575 197.669 322.955 197.918C322.159 198.236 321.784 199.15 322.128 199.935L325 206.5C319.333 199.666 306.535 188.779 308.5 199Z"
                    fill="url(#paint10_linear_344_2214)" />
                <path
                    d="M296.5 154C296.1 157.2 287.667 166.667 283.5 171C283 186 281 195.167 279.5 205C277.167 194.333 273.2 171.2 276 164C279.5 155 289 150.5 291.5 150C294 149.5 297 150 296.5 154Z"
                    fill="#FDBA8C" />
                <path
                    d="M296.5 154C296.1 157.2 287.667 166.667 283.5 171C283 186 281 195.167 279.5 205C277.167 194.333 273.2 171.2 276 164C279.5 155 289 150.5 291.5 150C294 149.5 297 150 296.5 154Z"
                    fill="url(#paint11_linear_344_2214)" />
                <path
                    d="M133 65C133 63.8954 133.895 63 135 63H216.012C217.117 63 218.012 63.8954 218.012 65V95.3319C218.012 96.4365 217.117 97.332 216.012 97.332H135C133.895 97.332 133 96.4365 133 95.332V65Z"
                    fill="#c8d8fa" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M157.356 73.6349C157.775 73.9943 157.824 74.6256 157.464 75.045L148.486 85.5196C147.641 86.5056 146.095 86.4372 145.34 85.3805L141.995 80.6974C141.674 80.248 141.778 79.6235 142.227 79.3024C142.677 78.9814 143.301 79.0855 143.622 79.5349L146.967 84.218L155.946 73.7434C156.305 73.3241 156.936 73.2755 157.356 73.6349Z"
                    fill="#F9FAFB" />
                <path
                    d="M164.062 80.0001C164.062 79.4478 164.51 79.0001 165.062 79.0001H208.838C209.391 79.0001 209.838 79.4478 209.838 80.0001C209.838 80.5524 209.391 81.0001 208.838 81.0001H165.063C164.51 81.0001 164.062 80.5524 164.062 80.0001Z"
                    fill="#F9FAFB" />
                <path
                    d="M441.988 65C441.988 63.8954 442.884 63 443.988 63H525.001C526.105 63 527.001 63.8954 527.001 65V95.3319C527.001 96.4365 526.105 97.332 525.001 97.332H443.988C442.884 97.332 441.988 96.4365 441.988 95.332V65Z"
                    fill="#c8d8fa" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M466.344 73.6349C466.763 73.9943 466.812 74.6256 466.452 75.045L457.474 85.5196C456.629 86.5056 455.083 86.4372 454.328 85.3805L450.983 80.6974C450.662 80.248 450.766 79.6235 451.216 79.3024C451.665 78.9814 452.29 79.0855 452.611 79.5349L455.956 84.218L464.934 73.7434C465.293 73.3241 465.925 73.2755 466.344 73.6349Z"
                    fill="#F9FAFB" />
                <path
                    d="M473.051 80.0001C473.051 79.4478 473.498 79.0001 474.051 79.0001H517.827C518.379 79.0001 518.827 79.4478 518.827 80.0001C518.827 80.5524 518.379 81.0001 517.827 81.0001H474.051C473.498 81.0001 473.051 80.5524 473.051 80.0001Z"
                    fill="#F9FAFB" />
                <path
                    d="M175.506 10.6073C175.506 9.71959 176.225 9 177.113 9H242.217C243.105 9 243.824 9.71959 243.824 10.6073V34.9828C243.824 35.8705 243.105 36.5901 242.217 36.5901H177.113C176.225 36.5901 175.506 35.8705 175.506 34.9828V10.6073Z"
                    fill="#c8d8fa" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M195.207 17.4375C195.626 17.797 195.675 18.4283 195.315 18.8476L188.1 27.2653C187.338 28.1544 185.944 28.0928 185.263 27.1398L182.575 23.3764C182.254 22.927 182.358 22.3024 182.808 21.9814C183.257 21.6604 183.881 21.7645 184.202 22.2139L186.745 25.7733L193.797 17.546C194.156 17.1267 194.788 17.0781 195.207 17.4375Z"
                    fill="#F9FAFB" />
                <path
                    d="M200.469 22.9998C200.469 22.4475 200.916 21.9998 201.469 21.9998H236.255C236.808 21.9998 237.255 22.4475 237.255 22.9998C237.255 23.552 236.808 23.9998 236.255 23.9998H201.469C200.916 23.9998 200.469 23.552 200.469 22.9998Z"
                    fill="#F9FAFB" />
                <path
                    d="M240.501 223.177C216.483 339.537 148.832 390.702 116.516 402.468C115.495 402.84 114.446 403 113.359 403H76.6508C75.6336 403 75.2329 401.646 76.092 401.102C96.6434 388.075 138.312 354.13 163.001 307.328C195.501 245.717 195.001 196.629 206.001 161.566C214.801 133.515 232.667 125.501 240.501 125H284.001C255.601 125 245.256 200.135 240.501 223.177Z"
                    fill="#d6e2fb" />
                <path
                    d="M240.501 223.177C216.483 339.537 148.832 390.702 116.516 402.468C115.495 402.84 114.446 403 113.359 403H76.6508C75.6336 403 75.2329 401.646 76.092 401.102C96.6434 388.075 138.312 354.13 163.001 307.328C195.501 245.717 195.001 196.629 206.001 161.566C214.801 133.515 232.667 125.501 240.501 125H284.001C255.601 125 245.256 200.135 240.501 223.177Z"
                    fill="url(#paint12_linear_344_2214)" fill-opacity="0.5" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M246.217 149.066C245.945 148.834 245.914 148.425 246.147 148.154L250.817 142.705C251.31 142.13 252.212 142.169 252.653 142.786L254.393 145.222C254.601 145.513 254.533 145.917 254.243 146.125C253.952 146.333 253.547 146.266 253.34 145.975L251.694 143.671L247.129 148.996C246.897 149.268 246.488 149.299 246.217 149.066Z"
                    fill="#9ab7f6" />
                <path
                    d="M242.811 145.466C242.811 145.823 242.521 146.113 242.163 146.113L219.647 146.113C219.289 146.113 218.999 145.823 218.999 145.466C218.999 145.109 219.289 144.819 219.647 144.819L242.163 144.819C242.521 144.819 242.811 145.109 242.811 145.466Z"
                    fill="#9ab7f6" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M239.217 169.066C238.945 168.834 238.914 168.425 239.147 168.154L243.817 162.705C244.31 162.13 245.212 162.169 245.653 162.786L247.393 165.222C247.601 165.513 247.533 165.917 247.243 166.125C246.952 166.333 246.547 166.266 246.34 165.975L244.694 163.671L240.129 168.996C239.897 169.268 239.488 169.299 239.217 169.066Z"
                    fill="#9ab7f6" />
                <path
                    d="M235.811 165.466C235.811 165.823 235.521 166.113 235.163 166.113L212.647 166.113C212.289 166.113 211.999 165.823 211.999 165.466C211.999 165.109 212.289 164.819 212.647 164.819L235.163 164.819C235.521 164.819 235.811 165.109 235.811 165.466Z"
                    fill="#9ab7f6" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M234.217 189.066C233.945 188.834 233.914 188.425 234.147 188.154L238.817 182.705C239.31 182.13 240.212 182.169 240.653 182.786L242.393 185.222C242.601 185.513 242.533 185.917 242.243 186.125C241.952 186.333 241.547 186.266 241.34 185.975L239.694 183.671L235.129 188.996C234.897 189.268 234.488 189.299 234.217 189.066Z"
                    fill="#9ab7f6" />
                <path
                    d="M230.811 185.466C230.811 185.823 230.521 186.113 230.163 186.113L207.647 186.113C207.289 186.113 206.999 185.823 206.999 185.466C206.999 185.109 207.289 184.819 207.647 184.819L230.163 184.819C230.521 184.819 230.811 185.109 230.811 185.466Z"
                    fill="#9ab7f6" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M226.217 229.066C225.945 228.834 225.914 228.425 226.147 228.154L230.817 222.705C231.31 222.13 232.212 222.169 232.653 222.786L234.393 225.222C234.601 225.513 234.533 225.917 234.243 226.125C233.952 226.333 233.547 226.266 233.34 225.975L231.694 223.671L227.129 228.996C226.897 229.268 226.488 229.299 226.217 229.066Z"
                    fill="#9ab7f6" />
                <path
                    d="M222.811 225.466C222.811 225.823 222.521 226.113 222.163 226.113L199.647 226.113C199.289 226.113 198.999 225.823 198.999 225.466C198.999 225.109 199.289 224.819 199.647 224.819L222.163 224.819C222.521 224.819 222.811 225.109 222.811 225.466Z"
                    fill="#9ab7f6" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M222.217 249.066C221.945 248.834 221.914 248.425 222.147 248.154L226.817 242.705C227.31 242.13 228.212 242.169 228.653 242.786L230.393 245.222C230.601 245.513 230.533 245.917 230.243 246.125C229.952 246.333 229.547 246.266 229.34 245.975L227.694 243.671L223.129 248.996C222.897 249.268 222.488 249.299 222.217 249.066Z"
                    fill="#9ab7f6" />
                <path
                    d="M218.811 245.466C218.811 245.823 218.521 246.113 218.163 246.113L195.647 246.113C195.289 246.113 194.999 245.823 194.999 245.466C194.999 245.109 195.289 244.819 195.647 244.819L218.163 244.819C218.521 244.819 218.811 245.109 218.811 245.466Z"
                    fill="#9ab7f6" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M215.217 269.066C214.945 268.834 214.914 268.425 215.147 268.154L219.817 262.705C220.31 262.13 221.212 262.169 221.653 262.786L223.393 265.222C223.601 265.513 223.533 265.917 223.243 266.125C222.952 266.333 222.547 266.266 222.34 265.975L220.694 263.671L216.129 268.996C215.897 269.268 215.488 269.299 215.217 269.066Z"
                    fill="#9ab7f6" />
                <path
                    d="M211.811 265.466C211.811 265.823 211.521 266.113 211.163 266.113L188.647 266.113C188.289 266.113 187.999 265.823 187.999 265.466C187.999 265.109 188.289 264.819 188.647 264.819L211.163 264.819C211.521 264.819 211.811 265.109 211.811 265.466Z"
                    fill="#9ab7f6" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M197.217 309.066C196.945 308.834 196.914 308.425 197.147 308.154L201.817 302.705C202.31 302.13 203.212 302.169 203.653 302.786L205.393 305.222C205.601 305.513 205.533 305.917 205.243 306.125C204.952 306.333 204.547 306.266 204.34 305.975L202.694 303.671L198.129 308.996C197.897 309.268 197.488 309.299 197.217 309.066Z"
                    fill="#9ab7f6" />
                <path
                    d="M193.811 305.466C193.811 305.823 193.521 306.113 193.163 306.113L170.647 306.113C170.289 306.113 169.999 305.823 169.999 305.466C169.999 305.109 170.289 304.819 170.647 304.819L193.163 304.819C193.521 304.819 193.811 305.109 193.811 305.466Z"
                    fill="#9ab7f6" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M187.217 329.066C186.945 328.834 186.914 328.425 187.147 328.154L191.817 322.705C192.31 322.13 193.212 322.169 193.653 322.786L195.393 325.222C195.601 325.513 195.533 325.917 195.243 326.125C194.952 326.333 194.547 326.266 194.34 325.975L192.694 323.671L188.129 328.996C187.897 329.268 187.488 329.299 187.217 329.066Z"
                    fill="#9ab7f6" />
                <path
                    d="M183.811 325.466C183.811 325.823 183.521 326.113 183.163 326.113L160.647 326.113C160.289 326.113 159.999 325.823 159.999 325.466C159.999 325.109 160.289 324.819 160.647 324.819L183.163 324.819C183.521 324.819 183.811 325.109 183.811 325.466Z"
                    fill="#9ab7f6" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M173.217 349.066C172.945 348.834 172.914 348.425 173.147 348.154L177.817 342.705C178.31 342.13 179.212 342.169 179.653 342.786L181.393 345.222C181.601 345.513 181.533 345.917 181.243 346.125C180.952 346.333 180.547 346.266 180.34 345.975L178.694 343.671L174.129 348.996C173.897 349.268 173.488 349.299 173.217 349.066Z"
                    fill="#9ab7f6" />
                <path
                    d="M169.811 345.466C169.811 345.823 169.521 346.113 169.163 346.113L146.647 346.113C146.289 346.113 145.999 345.823 145.999 345.466C145.999 345.109 146.289 344.819 146.647 344.819L169.163 344.819C169.521 344.819 169.811 345.109 169.811 345.466Z"
                    fill="#9ab7f6" />
                <defs>
                    <linearGradient id="paint0_linear_344_2214" x1="328" y1="0" x2="328"
                        y2="378" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#d6e2fb" />
                        <stop offset="1" stop-color="#d6e2fb" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_344_2214" x1="598" y1="-82.4999" x2="333.419"
                        y2="-166.998" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#111928" />
                        <stop offset="1" stop-color="#111928" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="paint2_linear_344_2214" x1="385" y1="255" x2="330.615"
                        y2="169.856" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#c8d8fa" />
                        <stop offset="1" stop-color="#c8d8fa" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="paint3_linear_344_2214" x1="384.784" y1="118.92" x2="389.359"
                        y2="152.011" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#7F270F" />
                        <stop offset="1" stop-color="#7F270F" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="paint4_linear_344_2214" x1="393" y1="1.49999" x2="279.816"
                        y2="20.445" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#111928" />
                        <stop offset="1" stop-color="#111928" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="paint5_linear_344_2214" x1="421.5" y1="239" x2="448.603"
                        y2="298.071" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#c8d8fa" />
                        <stop offset="1" stop-color="#c8d8fa" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="paint6_linear_344_2214" x1="376.5" y1="281.5" x2="369.288"
                        y2="243.828" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#c8d8fa" />
                        <stop offset="1" stop-color="#c8d8fa" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="paint7_linear_344_2214" x1="397.847" y1="170.172" x2="396.12"
                        y2="156.768" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#c8d8fa" />
                        <stop offset="1" stop-color="#c8d8fa" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="paint8_linear_344_2214" x1="556" y1="458.5" x2="303.5"
                        y2="257.5" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#d6e2fb" />
                        <stop offset="1" stop-color="#d6e2fb" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="paint9_linear_344_2214" x1="329.5" y1="10" x2="387.5"
                        y2="208" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#2563eb" />
                        <stop offset="1" stop-color="#2563eb" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="paint10_linear_344_2214" x1="458" y1="383" x2="387.5"
                        y2="234.5" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#7F270F" />
                        <stop offset="1" stop-color="#7F270F" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="paint11_linear_344_2214" x1="324.824" y1="257.763" x2="266.641"
                        y2="189.301" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#7F270F" />
                        <stop offset="1" stop-color="#7F270F" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="paint12_linear_344_2214" x1="143.501" y1="-117.5" x2="225.755"
                        y2="243.308" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#2563eb" />
                        <stop offset="1" stop-color="#2563eb" stop-opacity="0" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </section>

    <?php
    // data ulasan
    $dataUlasanUsaha = [
        [
            'name' => 'You',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pellentesque felis at
                                                                                                            fringilla sagittis. Donec semper tempus ipsum, sed dictum tortor suscipit id. Vivamus luctus nunc eu semper
                                                                                                            placerat. Pellentesque sed massa efficitur, aliquet sem sed, venenatis erat. Nulla vitae fermentum
                                                                                                            mauris, sit amet volutpat risus. Sed nec eros id quam convallis ultricies. Vivamus in diam sed est
                                                                                                            malesuada tincidunt ut eleifend odio.',
            'time' => '11.00, 21 Oktober 2025',
            'token' => 'true',
        ],
        [
            'name' => 'Adam Smith',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pellentesque felis at
                                                                                                            fringilla sagittis. Donec semper tempus ipsum, sed dictum tortor suscipit id. Vivamus luctus nunc eu semper
                                                                                                            placerat. Pellentesque sed massa efficitur, aliquet sem sed, venenatis erat. Nulla vitae fermentum
                                                                                                            mauris, sit amet volutpat risus. Sed nec eros id quam convallis ultricies. Vivamus in diam sed est
                                                                                                            malesuada tincidunt ut eleifend odio.',
            'time' => '11.00, 21 Oktober 2025',
        ],
        [
            'name' => 'Adam Smith',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pellentesque felis at
                                                                                                            fringilla sagittis. Donec semper tempus ipsum, sed dictum tortor suscipit id. Vivamus luctus nunc eu semper
                                                                                                            placerat. Pellentesque sed massa efficitur, aliquet sem sed, venenatis erat. Nulla vitae fermentum
                                                                                                            mauris, sit amet volutpat risus. Sed nec eros id quam convallis ultricies. Vivamus in diam sed est
                                                                                                            malesuada tincidunt ut eleifend odio.',
            'time' => '11.00, 21 Oktober 2025',
        ],
        [
            'name' => 'Adam Smith',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pellentesque felis at
                                                                                                            fringilla sagittis. Donec semper tempus ipsum, sed dictum tortor suscipit id. Vivamus luctus nunc eu semper
                                                                                                            placerat. Pellentesque sed massa efficitur, aliquet sem sed, venenatis erat. Nulla vitae fermentum
                                                                                                            mauris, sit amet volutpat risus. Sed nec eros id quam convallis ultricies. Vivamus in diam sed est
                                                                                                            malesuada tincidunt ut eleifend odio.',
            'time' => '11.00, 21 Oktober 2025',
        ],
        [
            'name' => 'Adam Smith',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pellentesque felis at
                                                                                                            fringilla sagittis. Donec semper tempus ipsum, sed dictum tortor suscipit id. Vivamus luctus nunc eu semper
                                                                                                            placerat. Pellentesque sed massa efficitur, aliquet sem sed, venenatis erat. Nulla vitae fermentum
                                                                                                            mauris, sit amet volutpat risus. Sed nec eros id quam convallis ultricies. Vivamus in diam sed est
                                                                                                            malesuada tincidunt ut eleifend odio.',
            'time' => '11.00, 21 Oktober 2025',
        ],
        [
            'name' => 'Adam Smith',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pellentesque felis at
                                                                                                            fringilla sagittis. Donec semper tempus ipsum, sed dictum tortor suscipit id. Vivamus luctus nunc eu semper
                                                                                                            placerat. Pellentesque sed massa efficitur, aliquet sem sed, venenatis erat. Nulla vitae fermentum
                                                                                                            mauris, sit amet volutpat risus. Sed nec eros id quam convallis ultricies. Vivamus in diam sed est
                                                                                                            malesuada tincidunt ut eleifend odio.',
            'time' => '11.00, 21 Oktober 2025',
        ],
        [
            'name' => 'Adam Smith',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pellentesque felis at
                                                                                                            fringilla sagittis. Donec semper tempus ipsum, sed dictum tortor suscipit id. Vivamus luctus nunc eu semper
                                                                                                            placerat. Pellentesque sed massa efficitur, aliquet sem sed, venenatis erat. Nulla vitae fermentum
                                                                                                            mauris, sit amet volutpat risus. Sed nec eros id quam convallis ultricies. Vivamus in diam sed est
                                                                                                            malesuada tincidunt ut eleifend odio.',
            'time' => '11.00, 21 Oktober 2025',
        ],
        [
            'name' => 'Adam Smith',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pellentesque felis at
                                                                                                            fringilla sagittis. Donec semper tempus ipsum, sed dictum tortor suscipit id. Vivamus luctus nunc eu semper
                                                                                                            placerat. Pellentesque sed massa efficitur, aliquet sem sed, venenatis erat. Nulla vitae fermentum
                                                                                                            mauris, sit amet volutpat risus. Sed nec eros id quam convallis ultricies. Vivamus in diam sed est
                                                                                                            malesuada tincidunt ut eleifend odio.',
            'time' => '11.00, 21 Oktober 2025',
        ],
        [
            'name' => 'Adam Smith',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pellentesque felis at
                                                                                                            fringilla sagittis. Donec semper tempus ipsum, sed dictum tortor suscipit id. Vivamus luctus nunc eu semper
                                                                                                            placerat. Pellentesque sed massa efficitur, aliquet sem sed, venenatis erat. Nulla vitae fermentum
                                                                                                            mauris, sit amet volutpat risus. Sed nec eros id quam convallis ultricies. Vivamus in diam sed est
                                                                                                            malesuada tincidunt ut eleifend odio.',
            'time' => '11.00, 21 Oktober 2025',
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

    {{-- ULASAN USAHA --}}
    <section class="container-xxl d-flex flex-column text-black py-5 px-4">

        <h2 class="fw-bold mb-5">Ulasan Usaha</h2>

        <div class="d-flex flex-column gap-5">

            <?php foreach ($dataUlasanUsaha as $item): ?>

            <div class="boxSectorUp d-flex flex-column gap-3">
                <div class="d-flex flex-row justify-content-between">
                    <h4 class="fw-bold text-primary-emphasis mb-0"><?= $item['name'] ?></h4>
                    <p class="fw-semibold text-secondary mb-0"><?= $item['time'] ?></p>
                </div>

                <div class="shadow-sm border-1 border-black rounded-2 p-4 zoom-card mb-0">
                    <p class="mb-0" style="cursor: default;"><?= $item['description'] ?></p>
                </div>

                <?php if (isset($item['token']) && $item['token']): ?>
                <div class="d-flex  justify-content-end gap-2">
                    {{-- <a class="btn btn-sm btn-primary rounded-pill px-4">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                        </svg>
                        Edit Ulasan
                    </a> --}}
                    <a class="btn btn-sm btn-outline-danger rounded-pill px-4">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                        </svg>

                        Hapus Ulasan
                    </a>
                </div>
                <?php endif; ?>
            </div>
            <?php endforeach;?>
        </div>
    </section>

    @include('landingPage.layouts.footer')
</body>


</html>
