<!DOCTYPE html>
<html lang="en">


@include('components.head2')

<style>
    body {
        padding-top: 73px;
        background-color: white;
    }
</style>


<body>

    @include('landingPage.layouts.header')

    {{-- section content detail event --}}
    <section class="container-xxl d-flex flex-column flex-lg-row gap-4 py-5 px-4 text-black">
        <img src="{{ asset('assets/img/logoekraf.png') }}" alt="" class="w-25 h-25 d-none d-lg-flex">
        <img src="{{ asset('assets/img/logoekraf.png') }}" alt="" class="w-100 d-flex d-lg-none">

        <div class="w-100">
            <h2 class="mb-4 fw-bold">Animasi Jumbo tembus 1 juta penayangan per 17 April 2025</h2>


            <div class="mb-4 d-flex flex-column">
                <h4 class="m-0 fw-semibold">Deskripsi Artikel:</h4>
                <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et
                    purus molestie,
                    tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum
                    eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus
                    molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac
                    interdum erat</p>
            </div>

            <div class="mb-4 d-flex flex-column">
                <h4 class="m-0 fw-semibold">Dibuat:</h4>
                <p class="m-0">Nganjuk Creative Hub</p>
            </div>

        </div>
    </section>

    <?php

    //data card atas
    $data = [
        [
            'gambar' => 'assets/svg/arsitektur.svg',
            'title' => 'Animasi Jumbo tembus 1 juta penayangan per 17 April 2025',
            'sumber' => 'Detik.com',
            'tanggal' => '1 Mei 2025',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
        ],
        [
            'gambar' => 'assets/svg/arsitektur.svg',
            'title' => 'Animasi Jumbo tembus 1 juta penayangan per 17 April 2025',
            'sumber' => 'Detik.com',
            'tanggal' => '1 Mei 2025',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
        ],
        [
            'gambar' => 'assets/svg/arsitektur.svg',
            'title' => 'Animasi Jumbo tembus 1 juta penayangan per 17 April 2025',
            'sumber' => 'Detik.com',
            'tanggal' => '1 Mei 2025',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
        ],
        [
            'gambar' => 'assets/svg/arsitektur.svg',
            'title' => 'Animasi Jumbo tembus 1 juta penayangan per 17 April 2025',
            'sumber' => 'Detik.com',
            'tanggal' => '1 Mei 2025',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
        ],
        [
            'gambar' => 'assets/svg/arsitektur.svg',
            'title' => 'Animasi Jumbo tembus 1 juta penayangan per 17 April 2025',
            'sumber' => 'Detik.com',
            'tanggal' => '1 Mei 2025',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
        ],
        [
            'gambar' => 'assets/svg/arsitektur.svg',
            'title' => 'Animasi Jumbo tembus 1 juta penayangan per 17 April 2025',
            'sumber' => 'Detik.com',
            'tanggal' => '1 Mei 2025',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
        ],
        [
            'gambar' => 'assets/svg/arsitektur.svg',
            'title' => 'Animasi Jumbo tembus 1 juta penayangan per 17 April 2025',
            'sumber' => 'Detik.com',
            'tanggal' => '1 Mei 2025',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
        ],
    ];

    // fungsi sort kata
    function potong_kata($teks, $jumlahKata = 30)
    {
        $kataArray = explode(' ', $teks); // Pecah teks jadi array kata
        if (count($kataArray) > $jumlahKata) {
            $kataPotong = array_slice($kataArray, 0, $jumlahKata);
            return implode(' ', $kataPotong) . '...';
        } else {
            return $teks;
        }
    }

    function potong_judul($teks, $jumlahKata = 10)
    {
        $kataArray = explode(' ', $teks); // Pecah teks jadi array kata
        if (count($kataArray) > $jumlahKata) {
            $kataPotong = array_slice($kataArray, 0, $jumlahKata);
            return implode(' ', $kataPotong) . '...';
        } else {
            return $teks;
        }
    }
    ?>

    {{-- event lain --}}
    <section class="container-xxl text-black">
        <h2 class="fw-bold">Artikel Lainnya</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 ">
            <?php foreach ($data as $item): ?>
            <div class="col">
                <div class=" card rounded-4 overflow-hidden d-flex flex-column zoom-card-3">
                    <img src="{{ asset('assets/img/logoekraf.png') }}" alt="" class="w-100">

                    <div class="w-auto p-3 d-flex flex-column justify-content-between">
                        <div class="w-auto mb-4">
                            <h5 class="m-0 fw-bold"><?= potong_judul($item['title']) ?></h5>
                            <p class="m-0"><?= potong_kata($item['description']) ?></p>
                        </div>

                        <div class="w-auto d-flex flex-column ">
                            <p class="m-0 fw-semibold text"><?= $item['sumber'] ?></p>
                            <div class="d-flex flex-row w-100 justify-content-between">
                                <p class="m-0"><?= $item['tanggal'] ?></p>
                                <a class="text-black text-decoration-none" href="{{ route(name: 'detailEvent') }}">Selengkapnya > </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    @include('landingPage.layouts.footer')
</body>

</html>
