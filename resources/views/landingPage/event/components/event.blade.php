<section class="container-xxl gap-4 d-flex flex-column-reverse flex-lg-row">
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

    {{-- div content --}}
    <div class="w-auto">
        {{-- event hari ini --}}
        <div class="w-100 h-auto text-black mb-4">
            <h2 class="fw-bold mb-3">Hari Ini</h2>

            <?php foreach ($data as $item): ?>
            <div class="card rounded-4 overflow-hidden d-flex flex-row zoom-card-3">
                <div class="w-25 h-25 d-flex justify-content-center overflow-hidden">
                    <img src="{{ asset('assets/img/logoekraf.png') }}" alt="" style="width: 251px; height: 251px;">
                </div>

                <div class="w-75 p-3 d-flex flex-column justify-content-between">
                    <div class="w-100">
                        <h5 class="m-0 fw-bold"><?= potong_judul($item['title']) ?></h5>
                        <p class="m-0 d-none d-md-flex"><?= potong_kata($item['description']) ?></p>
                    </div>

                    <div class="d-flex flex-column ">
                        <p class="m-0 fw-semibold text"><?= $item['sumber'] ?></p>
                        <div class="d-flex flex-row w-100 justify-content-between">
                            <p class="m-0"><?= $item['tanggal'] ?></p>
                            <a href="{{route(name: 'detailEvent')}}">Selengkapnya > </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        {{-- event besok --}}
        <div class="w-100 h-auto text-black">
            <h2 class="fw-bold mb-3">Besok</h2>

            <?php foreach ($data as $item): ?>
            <div class="card rounded-4 overflow-hidden d-flex flex-row zoom-card-3">
                <div class="w-25 h-25 d-flex justify-content-center overflow-hidden">
                    <img src="{{ asset('assets/img/logoekraf.png') }}" alt="" style="width: 251px; height: 251px;">
                </div>

                <div class="w-75 p-3 d-flex flex-column justify-content-between">
                    <div class="w-100">
                        <h5 class="m-0 fw-bold"><?= potong_judul($item['title']) ?></h5>
                        <p class="m-0 d-none d-md-flex"><?= potong_kata($item['description']) ?></p>
                    </div>

                    <div class="d-flex flex-column ">
                        <p class="m-0 fw-semibold text"><?= $item['sumber'] ?></p>
                        <div class="d-flex flex-row w-100 justify-content-between">
                            <p class="m-0"><?= $item['tanggal'] ?></p>
                            <a href="{{route(name: 'detailEvent')}}">Selengkapnya > </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    {{-- content event populer --}}
    <div class="w-100 ">
        <h2 class="fw-bold mb-3">Populer</h2>

        <?php foreach ($data as $item): ?>
        <div class="card w-100 rounded-4 overflow-hidden d-flex flex-column zoom-card-3">
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
                        <a href="{{route(name: 'detailEvent')}}">Selengkapnya > </a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
