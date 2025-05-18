<div class="w-100 mt-4">
    <h2 class="fw-bold text-black mb-0">Produk Populer</h2>

    <?php
    // data card bawah
    $dataUsahaPopuler = [
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

    <div class="overflows d-flex flex-row gap-4 py-4 px-2">
        {{-- CARD USAHA --}}
        <?php foreach ($dataUsahaPopuler as $item): ?>
        <div class="shadow rounded-4 zoom-card boxSector">
            <div class="overflow-hidden rounded-2" style="width: 324px;">
                <img src="{{ asset($item['gambar']) }}" alt="" class="w-100">
            </div>

            <div class="p-3 text-black">
                {{-- TITLE --}}
                <a href="{{route('detailProduct')}}" class="text-black">
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
