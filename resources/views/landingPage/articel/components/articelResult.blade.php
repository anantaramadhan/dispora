<section class="container-xxl">
    <?php
    $data = [
        [
            'gambar' => 'assets/svg/arsitektur.svg',
            'title' => 'Animasi Jumbo tembus 1 juta penayangan per 17 April 2025',
            'sumber' => 'Detik.com',
            'tanggal' => '1 Mei 2025',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
        ],
    ];
    ?>

    <?php foreach ($data as $item): ?>
    <div class="card rounded-4 overflow-hidden d-flex flex-row zoom-card-3">
        <div class="w-100 h-100 object-fit-fill d-flex overflow-hidden">
            <img src="{{ asset('assets/img/logoekraf.png') }}" alt="" class="object-fit-fill" style="width: 251px; height: 251px;">
        </div>

        <div class="w-auto p-3 d-flex flex-column justify-content-between">
            <div class="w-100">
                <h5 class="m-0 fw-bold"><?= potong_judul($item['title']) ?></h5>
                <p class="m-0 d-none d-md-flex"><?= potong_kata($item['description']) ?></p>
            </div>

            <div class="d-flex flex-column ">
                <p class="m-0 fw-semibold text"><?= $item['sumber'] ?></p>
                <div class="d-flex flex-row w-100 justify-content-between">
                    <p class="m-0"><?= $item['tanggal'] ?></p>
                    <a class="text-black text-decoration-none" href="{{ route('detailArticel') }}">Selengkapnya > </a>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</section>
