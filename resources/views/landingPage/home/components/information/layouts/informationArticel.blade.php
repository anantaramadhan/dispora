<div class="container-xxl d-flex flex-column justify-content-center gap-4 mb-5 mt-4 px-4">

    @foreach (array_slice($Articles, 0, 3) as $article)
        <div
            class="w-100 h-100 shadow-sm rounded-4 overflow-hidden d-flex flex-row justify-content-between zoom-card-3 ">
            <div class="w-25 h-25 d-flex justify-content-center overflow-hidden">
                <img src="{{ $article['thumbnail_url'] }}" alt="" style="width: 321px; height: 321px;">
            </div>

            <div class="w-75 p-3 d-flex flex-column justify-content-between">
                <div class="w-100">
                    <h5 class="m-0 fw-bold">{{ Str::limit($article['title'], 50, '...') }}</h5>
                    <p class="m-0 d-md-flex">{{ Str::limit($article['short_description'], 400, '...') }}</p>
                </div>

                <div class="d-flex flex-column ">
                    {{-- <p class="m-0 fw-semibold text">Sumber</p> --}}
                    <div class="d-flex flex-row w-100 justify-content-between">
                        <a class="text-black text-decoration-none"
                            href="{{ route('landingpage-detailArticel', ['id' => $article['id']]) }}">Selengkapnya
                            >
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- <div class="w-100 h-100 shadow-sm rounded-4 overflow-hidden d-flex flex-row justify-content-between zoom-card-3 ">
        <div class="w-25 h-25 d-flex justify-content-center overflow-hidden">
            <img src="{{ asset('assets/img/logoekraf.png') }}" alt="" style="width: 321px; height: 321px;">
        </div>

        <div class="w-75 p-3 d-flex flex-column justify-content-between">
            <div class="w-100">
                <h5 class="m-0 fw-bold">Judul</h5>
                <p class="m-0 d-none d-md-flex">Deskripsi</p>
            </div>

            <div class="d-flex flex-column ">
                <p class="m-0 fw-semibold text">Sumber</p>
                <div class="d-flex flex-row w-100 justify-content-between">
                    <p class="m-0">Tanggal</p>
                    <a class="text-black text-decoration-none"
                        href="{{ route('landingpage-detailArticel') }}">Selengkapnya > </a>
                </div>
            </div>
        </div>
    </div>

    <div class="w-100 h-100 shadow-sm rounded-4 overflow-hidden d-flex flex-row justify-content-between zoom-card-3 ">
        <div class="w-25 h-25 d-flex justify-content-center overflow-hidden">
            <img src="{{ asset('assets/img/logoekraf.png') }}" alt="" style="width: 321px; height: 321px;">
        </div>

        <div class="w-75 p-3 d-flex flex-column justify-content-between">
            <div class="w-100">
                <h5 class="m-0 fw-bold">Judul</h5>
                <p class="m-0 d-none d-md-flex">Deskripsi</p>
            </div>

            <div class="d-flex flex-column ">
                <p class="m-0 fw-semibold text">Sumber</p>
                <div class="d-flex flex-row w-100 justify-content-between">
                    <p class="m-0">Tanggal</p>
                    <a class="text-black text-decoration-none"
                        href="{{ route('landingpage-detailArticel') }}">Selengkapnya > </a>
                </div>
            </div>
        </div>
    </div>

    <div class="w-100 h-100 shadow-sm rounded-4 overflow-hidden d-flex flex-row justify-content-between zoom-card-3 ">
        <div class="w-25 h-25 d-flex justify-content-center overflow-hidden">
            <img src="{{ asset('assets/img/logoekraf.png') }}" alt="" style="width: 321px; height: 321px;">
        </div>

        <div class="w-75 p-3 d-flex flex-column justify-content-between">
            <div class="w-100">
                <h5 class="m-0 fw-bold">Judul</h5>
                <p class="m-0 d-none d-md-flex">Deskripsi</p>
            </div>

            <div class="d-flex flex-column ">
                <p class="m-0 fw-semibold text">Sumber</p>
                <div class="d-flex flex-row w-100 justify-content-between">
                    <p class="m-0">Tanggal</p>
                    <a class="text-black text-decoration-none"
                        href="{{ route('landingpage-detailArticel') }}">Selengkapnya > </a>
                </div>
            </div>
        </div>
    </div> --}}
</div>
