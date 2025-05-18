<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<section id="totalEkraf" class="container-xxl d-flex flex-column py-5">
    <div class="d-flex w-100 flex-column flex-md-row justify-content-between align-items-start align-items-md-center">
        <h1 class="w-100 fs-2 text-black d-flex flex-column">Jumlah Pelaku Ekonomi Kreatif <span>per Sektor</span> </h1>
        <div class="d-flex flex-row w-100 gap-4 justify-content-end">
            {{-- <button class="btn btn-primary rounded-5 px-4">Pilih Tahun</button> --}}
            {{-- <button class="btn btn-primary rounded-5 px-4">Pilih Kecamatan</button> --}}
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
            label: 'Jumlah Pelaku Usaha',
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
                40,
                17,
                30,
                21,
                50,
                25,
                8,
                30
            ],

            borderWidth: 2,
            borderColor: '#265780',
            backgroundColor: '#265780',
        }]
    }



    new Chart(ctx, {
        type: 'line',
        data: data,
        // options: {
        //     scales: {
        //         y: {
        //             beginAtZero: true
        //         }
        //     }
        // }

        options: {
            plugins: {
                filler: {
                    propagate: false,
                },
                // title: {
                //     display: true,
                //     text: (ctx) => 'Graph: ' +
                //     ctx.chart.data.datasets[0].fill
                // }
            },
            interaction: {
                intersect: false,
            },
            scales: {
                x: {
                    ticks: {
                        color: 'black'
                    }
                },
                y: {
                    ticks: {
                        color: 'black'
                    }
                }
            }
        },
    });
</script>
