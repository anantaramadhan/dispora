<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<section class="container-xxl d-flex flex-column py-5">
    <div class="d-flex w-100 flex-column flex-md-row justify-content-between align-items-start align-items-md-center">
        <h1 class="w-100 fs-2 text-black d-flex flex-column">Jumlah Pelaku Ekonomi Kreatif <span>per Sektor</span> </h1>
        <div class="d-flex flex-row w-100 gap-4 justify-content-end">
            <button class="btn btn-primary rounded-5 px-4">Pilih Tahun</button>
            <button class="btn btn-primary rounded-5 px-4">Pilih Kecamatan</button>
        </div>
    </div>

    <div class="py-4">
        {{-- <img src="{{ asset('assets/img/Group 13.png') }}" alt="" class="w-100 h-100"> --}}
        <canvas id="myChart"></canvas>
    </div>
</section>

<script>
    const ctx = document.getElementById('myChart');

    const labels = [
        'Pengembangan Game',
        'Aplikasi',
        'Desain Komunikasi Visual',
        'Kriya',
        'Seni Pertunjukan',
        'Kuliner',
        'Seni Rupa',
        'Film, Animasi, dan Vidio',
        'TV dan Radio',
        'Desain Interior',
        'Desain Produk',
        'Musik',
        'Arsitektur',
        'Fotografi',
        'Penerbitan',
        'Periklanan',
        'Fashion'
    ]

    const data = {
        labels: labels,
        datasets: [{
            label: '# of Votes',
            data: [
                12,
                19,
                3,
                50,
                2,
                3,
                10,
                60,
                80,
                12,
                17,
                19,
                21,
                23,
                25,
                28,
                30
            ],
            
            borderWidth: 1
        }]
    }

    new Chart(ctx, {
        type: 'line',
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
