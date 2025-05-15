<section class="d-flex flex-column align-items-center py-5">
    <h1 class="mb-5">Creative Center</h1>

    <div class="container-fluid">

        <?php

            //data card atas
            $data = [
                [
                    'gambar' => 'assets/svg/arsitektur.svg',
                    'title' => 'Pengembangan Game',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
                ],
                [
                    'gambar' => 'assets/svg/aplikasi.svg',
                    'title' => 'Pengembangan Game',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
                ],
                [
                    'gambar' => 'assets/svg/desainInterior.svg',
                    'title' => 'Pengembangan Game',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
                ],
                [
                    'gambar' => 'assets/svg/desainProduk.svg',
                    'title' => 'Pengembangan Game',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
                ],
                [
                    'gambar' => 'assets/svg/dkv.svg',
                    'title' => 'Pengembangan Game',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
                ],
                [
                    'gambar' => 'assets/svg/fashion.svg',
                    'title' => 'Pengembangan Game',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
                ],

                [
                    'gambar' => 'assets/svg/filmAnimasiDanVidio.svg',
                    'title' => 'Pengembangan Game',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
                ],
                [
                    'gambar' => 'assets/svg/fotografi.svg',
                    'title' => 'Pengembangan Game',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
                ],
                [
                    'gambar' => 'assets/svg/gameDev.svg',
                    'title' => 'Pengembangan Game',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
                ],
            ];

            // data card bawah
            $data2 = [
                [
                    'gambar' => 'assets/svg/kriya.svg',
                    'title' => 'Pengembangan Game',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
                ],
                [
                    'gambar' => 'assets/svg/kuliner.svg',
                    'title' => 'Pengembangan Game',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
                ],
                [
                    'gambar' => 'assets/svg/musik.svg',
                    'title' => 'Pengembangan Game',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
                ],
                [
                    'gambar' => 'assets/svg/penerbitan.svg',
                    'title' => 'Pengembangan Game',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
                ],
                [
                    'gambar' => 'assets/svg/periklanan.svg',
                    'title' => 'Pengembangan Game',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
                ],
                [
                    'gambar' => 'assets/svg/seniPertunjukan.svg',
                    'title' => 'Pengembangan Game',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
                ],

                [
                    'gambar' => 'assets/svg/seniRupa.svg',
                    'title' => 'Pengembangan Game',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
                ],
                [
                    'gambar' => 'assets/svg/TVDanRadio.svg',
                    'title' => 'Pengembangan Game',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
                ],
            ];

            // fungsi sort kata
            function potong_kata($teks, $jumlahKata = 20)
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

        {{-- container scroll --}}
        <div class="d-flex flex-column w-100 py-4 gap-4 element-container">

            {{-- card atas --}}
            <div class="overflows pb-4 gap-4 d-flex flex-row element px-4 ">

                <?php foreach ($data as $item): ?>
                <div class="py-4 px-4 rounded-4 shadow w-auto contentSector zoom-card boxSector">
                    <div class="d-flex flex-column flex-sm-row align-items-center gap-4 ">
                        <img src="{{ asset($item['gambar']) }}" alt="" class="svgSector">

                        <div class="content">
                            <h3 class="fw-semibold"><?= $item['title'] ?></h3>
                            <p class=""><?= potong_kata($item['description']) ?></p>

                            <div class="w-100 d-flex justify-content-end">
                                <a href="">Sekengkapnya ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>

            {{-- card bawah --}}
            <div class="overflows pb-4 gap-4 d-flex flex-row element px-4 ">

                <?php foreach ($data2 as $item2): ?>
                <div class="py-4 px-4 rounded-4 shadow w-auto contentSector zoom-card">
                    <div class="d-flex flex-column flex-sm-row align-items-center gap-4 ">
                        <img src="{{ asset($item2['gambar']) }}" alt="" class="svgSector">

                        <div class="content">
                            <h3 class="fw-semibold"><?= $item2['title'] ?></h3>
                            <p class=""><?= potong_kata($item2['description']) ?></p>

                            <div class="w-100 d-flex justify-content-end">
                                <a href="">Sekengkapnya ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>

    </div>

    <div class="progress w-25" style="height: 8px" role="progressbar"
        aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
        <div id="scroll-progress" class="progress-bar" style="width: 0%; background-color: #011E34;"></div>
    </div>


</section>
