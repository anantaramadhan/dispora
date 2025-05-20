<section class="container-xxl mb-4 d-flex flex-column">
    <?php
    
    //data card atas
    $data = [
        [
            'gambar' => 'assets/svg/arsitektur.svg',
            'title' => 'Java Tech Exhibition',
            'waktu' => '08.00-selesai',
            'tanggal' => '1 Mei 2025',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
        ],
        [
            'gambar' => 'assets/svg/arsitektur.svg',
            'title' => 'Java Tech Exhibition',
            'waktu' => '08.00-selesai',
            'tanggal' => '1 Mei 2025',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
        ],
        [
            'gambar' => 'assets/svg/arsitektur.svg',
            'title' => 'Java Tech Exhibition',
            'waktu' => '08.00-selesai',
            'tanggal' => '1 Mei 2025',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
        ],
        [
            'gambar' => 'assets/svg/arsitektur.svg',
            'title' => 'Java Tech Exhibition',
            'waktu' => '08.00-selesai',
            'tanggal' => '1 Mei 2025',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
        ],
        [
            'gambar' => 'assets/svg/arsitektur.svg',
            'title' => 'Java Tech Exhibition',
            'waktu' => '08.00-selesai',
            'tanggal' => '1 Mei 2025',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
        ],
        [
            'gambar' => 'assets/svg/arsitektur.svg',
            'title' => 'Java Tech Exhibition',
            'waktu' => '08.00-selesai',
            'tanggal' => '1 Mei 2025',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
        ],
        [
            'gambar' => 'assets/svg/arsitektur.svg',
            'title' => 'Java Tech Exhibition',
            'waktu' => '08.00-selesai',
            'tanggal' => '1 Mei 2025',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
        ],
        [
            'gambar' => 'assets/svg/arsitektur.svg',
            'title' => 'Java Tech Exhibition',
            'waktu' => '08.00-selesai',
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
    {{-- <h2 class="fw-bold mb-0">Event Hari Ini</h2> --}}

    <div class="overflows d-flex flex-row gap-4 py-4 px-2">
        <?php foreach ($data as $item):?>
        <div class="shadow rounded-4 zoom-card boxSectorUp">
            <div class="overflow-hidden rounded-2" style="width: 400px;">
                <img src="{{ asset('assets/img/logoekraf.png') }}" alt="" class="w-100">
            </div>

            <div class="p-4">
                <a class="text-black text-decoration-none" href="{{ route('detailEvent') }}">
                    <h3 class="fw-bold"><?= potong_judul($item['title']) ?></h3>
                </a>

                <p><?= potong_kata($item['description']) ?></p>
                <div class="w-100 d-flex justify-content-between align-items-end">
                    <div class="d-flex flex-column">
                        <p class="m-0 fw-semibold"><?= $item['tanggal'] ?></p>
                        <p class="m-0 fw-semibold"><?= $item['waktu'] ?></p>
                    </div>
                    <a class="text-black text-decoration-none" href="">Selengkapnya ></a>
                </div>
            </div>
        </div>
        <?php endforeach;?>

    </div>

</section>

