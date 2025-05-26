<div class="container-fluid d-flex flex-column flex-lg-row justify-content-center gap-4 mb-5 mt-4">

    @foreach (array_slice($Events, 0, 3) as $event)
        {{-- @foreach ($Events->take(3) as $event) --}}
        <div class="card rounded-4 overflow-hidden zoom-card boxSectorUp">
            <img src="{{ config('services.backend_api') . '/storage/' . $event['thumbnail'] }}" alt=""
                class="imageInformasi">
            <div class="p-4">
                <h3 class="fw-bold">{{ Str::limit($event['title']) }}</h3>
                <p>{{ Str::limit($event['description'], 40, '...') }}</p>
                <div class="w-100 d-flex justify-content-between align-items-end">
                    <div class="d-flex flex-column">
                        <p class="m-0 fw-semibold">Waktu</p>
                        <p class="m-0 fw-semibold">{{ $event['event_date'] }}</p>

                    </div>
                    <a class="text-black text-decoration-none" href="">Selengkapnya ></a>
                </div>
            </div>
        </div>
    @endforeach


    <div class="card rounded-4 overflow-hidden zoom-card boxSectorUp">
        <img src="{{ asset('assets/img/logoekraf.png') }}" alt="" class="imageInformasi">
        <div class="p-4">
            <h3 class="fw-bold">Judul</h3>
            <p>Deskripsi</p>
            <div class="w-100 d-flex justify-content-between align-items-end">
                <div class="d-flex flex-column">
                    <p class="m-0 fw-semibold">tanggal</p>
                    <p class="m-0 fw-semibold">Waktu</p>
                </div>
                <a class="text-black text-decoration-none" href="">Selengkapnya ></a>
            </div>
        </div>
    </div>

    <div class="card rounded-4 overflow-hidden zoom-card boxSectorUp">
        <img src="{{ asset('assets/img/logoekraf.png') }}" alt="" class="imageInformasi">
        <div class="p-4">
            <h3 class="fw-bold">Judul</h3>
            <p>Deskripsi</p>
            <div class="w-100 d-flex justify-content-between align-items-end">
                <div class="d-flex flex-column">
                    <p class="m-0 fw-semibold">tanggal</p>
                    <p class="m-0 fw-semibold">Waktu</p>
                </div>
                <a class="text-black text-decoration-none" href="">Selengkapnya ></a>
            </div>
        </div>
    </div>
</div>
