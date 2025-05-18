<!DOCTYPE html>
<html lang="en">


@include('components.head')

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

            {{-- tanggal --}}
            <div class="d-flex flex-column mb-4">
                <p class="m-0 fw-semibold">tanggal Event:</p>
                <h5 class="m-0 fw-bold">1 Mei 2025</h5>
            </div>

            {{-- WKtu --}}
            <div class="d-flex flex-column mb-4">
                <p class="m-0 fw-semibold">Waktu Event:</p>
                <h5 class="m-0 fw-bold">08.00-Selesai</h5>
            </div>

            <div class="mb-4 d-flex flex-column">
                <h4 class="m-0 fw-semibold">Deskripsi Event:</h4>
                <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et
                    purus molestie,
                    tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum
                    eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus
                    molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac
                    interdum erat</p>
            </div>

            <div class="mb-4 d-flex flex-column">
                <h4 class="m-0 fw-semibold">Penyelenggara:</h4>
                <p class="m-0">Nganjuk Creative Hub</p>
            </div>

            <div class="mb-4 d-flex flex-column">
                <h4 class="m-0 fw-semibold">Lokasi Event:</h4>
                <p class="m-0">CV4W+434, Kauman, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64411</p>
            </div>
        </div>
    </section>

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

    {{-- event lain --}}
    <section class="container-xxl d-flex flex-column">
        <h2 class="fw-bold">Event Lainnya</h2>

        <div class="overflows d-flex flex-row gap-4 py-4 px-2">
            <?php 
            $counter = 0;
            foreach ($data as $item):
            if ($counter >= 10) break;
            $counter++;
        ?>
            <div class="shadow rounded-4 zoom-card boxSectorUp">
                <div class="overflow-hidden rounded-2" style="width: 400px;">
                    <img src="{{ asset('assets/img/logoekraf.png') }}" alt="" class="w-100">
                </div>

                <div class="p-4">
                    <a class="text-black" href="{{ route('detailEvent') }}">
                        <h3 class="fw-bold"><?= potong_judul($item['title']) ?></h3>
                    </a>

                    <p><?= potong_kata($item['description']) ?></p>
                    <div class="w-100 d-flex justify-content-between align-items-end">
                        <div class="d-flex flex-column">
                            <p class="m-0 fw-semibold"><?= $item['tanggal'] ?></p>
                            <p class="m-0 fw-semibold"><?= $item['waktu'] ?></p>
                        </div>
                        <a href="">Selengkapnya ></a>
                    </div>
                </div>
            </div>
            <?php endforeach;?>

        </div>

    </section>

    @include('landingPage.layouts.footer')
</body>

</html>
