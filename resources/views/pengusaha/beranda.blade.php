<!DOCTYPE html>
<html lang="id">

@include('pengusaha.layouts.head')
@include('pengusaha.layouts.scripts')

<body>

    @include('pengusaha.layouts.header')
    @include('pengusaha.layouts.sidebar')

    <main id="main" class="main" style="margin-buttom: 35px;">
        <div class="pagetitle">
            <h1>Beranda</h1>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-12">
                    <!-- START: Venue Cards in One Row -->
                    <div class="row">
                        <!-- Jumlah Event -->
                        <div class="col-xxl-3 col-md-6 col-sm-12 mb-3">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Jumlah Event</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-calendar-event"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $total_event }}</h6>
                                            {{-- <span class="text-success small pt-1 fw-bold">12%</span>
                                            <span class="text-muted small pt-2 ps-1">increase</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Jumlah Produk -->
                        <div class="col-xxl-3 col-md-6 col-sm-12 mb-3">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">Jumlah Produk</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-box"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $total_product }}</h6>
                                            {{-- <span class="text-success small pt-1 fw-bold">8%</span>
                                            <span class="text-muted small pt-2 ps-1">increase</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Info Produk -->
                        <div class="col-xxl-3 col-md-6 col-sm-12 mb-3">
                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <h5 class="card-title">Ulasan</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-clipboard"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $total_comment }}</h6>
                                            {{-- <span class="text-danger small pt-1 fw-bold">12%</span>
                                            <span class="text-muted small pt-2 ps-1">decrease</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-md-6 col-sm-12 mb-3">
                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <h5 class="card-title">Komplain</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cone-striped"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $total_complaint }}</h6>
                                            {{-- <span class="text-danger small pt-1 fw-bold">12%</span>
                                            <span class="text-muted small pt-2 ps-1">decrease</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Venue Cards -->

                    <div class="row">
                        <!-- Daftar Ulasan Toko -->
                        <div class="col-lg-6 mb-4">
                            <div class="card recent-reviews overflow-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Ulasan Toko</h5>
                                    <ul class="list-group list-group-flush">
                                        {{-- @foreach ($reviews as $review) --}}
                                        <li class="list-group-item d-flex align-items-start">
                                            <div class="me-3">
                                                <div class="avatar bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                                                    style="width: 40px; height: 40px;">
                                                    Lorem, ipsum.
                                                </div>
                                                {{-- {{ strtoupper(substr($review['username'], 0, 1)) }} --}}
                                            </div>
                                            <div>
                                                <h6 class="mb-1 fw-bold">Lorem, ipsum </h6>
                                                </h6>
                                                <p class="mb-0 text-muted">Lorem ipsum dolor sit amet consectetur
                                                    adipisicing elit. Consequuntur eaque earum itaque perferendis.
                                                    Exercitationem iste placeat pariatur enim! Tenetur, aliquid.</p>
                                                {{-- <h6 class="mb-1 fw-bold">{{ $review['username'] }}</h6>
                                                    <p class="mb-0 text-muted">{{ $review['content'] }}</p> --}}
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-start">
                                            <div class="me-3">
                                                <div class="avatar bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                                                    style="width: 40px; height: 40px;">
                                                    Lorem, ipsum.
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="mb-1 fw-bold">Lorem, ipsum </h6>
                                                </h6>
                                                <p class="mb-0 text-muted">Lorem ipsum dolor sit amet consectetur
                                                    adipisicing elit. Consequuntur eaque earum itaque perferendis.
                                                    Exercitationem iste placeat pariatur enim! Tenetur, aliquid.</p>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-start">
                                            <div class="me-3">
                                                <div class="avatar bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                                                    style="width: 40px; height: 40px;">
                                                    Lorem, ipsum.
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="mb-1 fw-bold">Lorem, ipsum </h6>
                                                </h6>
                                                <p class="mb-0 text-muted">Lorem ipsum dolor sit amet consectetur
                                                    adipisicing elit. Consequuntur eaque earum itaque perferendis.
                                                    Exercitationem iste placeat pariatur enim! Tenetur, aliquid.</p>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-start">
                                            <div class="me-3">
                                                <div class="avatar bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                                                    style="width: 40px; height: 40px;">
                                                    Lorem, ipsum.
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="mb-1 fw-bold">Lorem, ipsum </h6>
                                                </h6>
                                                <p class="mb-0 text-muted">
                                                    {{ Str::limit(
                                                        'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis odit, similique est tempore beatae aspernatur quasi deserunt dicta officiis quaerat? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis odit, similique est tempore beatae aspernatur quasi deserunt dicta officiis quaerat?',
                                                        200,
                                                        '...',
                                                    ) }}
                                                </p>
                                            </div>
                                        </li>
                                        {{-- @endforeach --}}
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Daftar Complaint Pelanggan -->
                        <div class="col-lg-6 mb-4">
                            <div class="card recent-complaints overflow-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Komplain Pelanggan</h5>
                                    <div class="list-group">
                                        {{-- @foreach ($complaints as $complaint) --}}
                                        <div
                                            class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="d-flex w-100 justify-content-start align-items-center mb-2">
                                                {{-- {{ $complaint['photo'] }} --}}
                                                <img src="" alt="Bukti Komplain" class="img-thumbnail me-3"
                                                    style="width: 80px; height: 80px; object-fit: cover;">
                                                <div>
                                                    <h6 class="mb-1 fw-bold">Lorem, ipsum dolor.</h6>
                                                    <small class="text-muted">20220,2002</small>
                                                    {{-- <h6 class="mb-1 fw-bold">{{ $complaint['subject'] }}</h6>
                                                        <small class="text-muted">{{ $complaint['date'] }}</small> --}}
                                                </div>
                                            </div>
                                            <p class="mb-1">
                                                {{ Str::limit(
                                                    'Lorem ipsum dolor sit amet consectetur adipisicing elit.Repellat, qui? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati deleniti ipsa, porro excepturi eius ab pariatur sequi voluptate. Facere, qui! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel est perferendis ad delectus architecto voluptatum tempora incidunt libero ullam ducimus iure rerum porro pariatur optio, veniam fuga deserunt consequuntur consequatur?',
                                                    200,
                                                    '...',
                                                ) }}

                                            </p>
                                            {{-- <p class="mb-1">{{ $complaint['content'] }}</p> --}}
                                        </div>
                                        <div
                                            class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="d-flex w-100 justify-content-start align-items-center mb-2">
                                                {{-- {{ $complaint['photo'] }} --}}
                                                <img src="" alt="Bukti Komplain" class="img-thumbnail me-3"
                                                    style="width: 80px; height: 80px; object-fit: cover;">
                                                <div>
                                                    <h6 class="mb-1 fw-bold">Lorem, ipsum dolor.</h6>
                                                    <small class="text-muted">20220,2002</small>
                                                    {{-- <h6 class="mb-1 fw-bold">{{ $complaint['subject'] }}</h6>
                                                        <small class="text-muted">{{ $complaint['date'] }}</small> --}}
                                                </div>
                                            </div>
                                            <p class="mb-1">
                                                {{ Str::limit(
                                                    'Lorem ipsum dolor sit amet consectetur adipisicing elit.Repellat, qui? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati deleniti ipsa, porro excepturi eius ab pariatur sequi voluptate. Facere, qui! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel est perferendis ad delectus architecto voluptatum tempora incidunt libero ullam ducimus iure rerum porro pariatur optio, veniam fuga deserunt consequuntur consequatur?',
                                                    200,
                                                    '...',
                                                ) }}

                                            </p>
                                            {{-- <p class="mb-1">{{ $complaint['content'] }}</p> --}}
                                        </div>
                                        <div
                                            class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="d-flex w-100 justify-content-start align-items-center mb-2">
                                                {{-- {{ $complaint['photo'] }} --}}
                                                <img src="" alt="Bukti Komplain" class="img-thumbnail me-3"
                                                    style="width: 80px; height: 80px; object-fit: cover;">
                                                <div>
                                                    <h6 class="mb-1 fw-bold">Lorem, ipsum dolor.</h6>
                                                    <small class="text-muted">20220,2002</small>
                                                    {{-- <h6 class="mb-1 fw-bold">{{ $complaint['subject'] }}</h6>
                                                        <small class="text-muted">{{ $complaint['date'] }}</small> --}}
                                                </div>
                                            </div>
                                            <p class="mb-1">
                                                {{ Str::limit(
                                                    'Lorem ipsum dolor sit amet consectetur adipisicing elit.Repellat, qui? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati deleniti ipsa, porro excepturi eius ab pariatur sequi voluptate. Facere, qui! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel est perferendis ad delectus architecto voluptatum tempora incidunt libero ullam ducimus iure rerum porro pariatur optio, veniam fuga deserunt consequuntur consequatur?',
                                                    200,
                                                    '...',
                                                ) }}

                                            </p>
                                            {{-- <p class="mb-1">{{ $complaint['content'] }}</p> --}}
                                        </div>
                                        {{-- @endforeach --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Data Produk -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card recent-sales overflow-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Daftar Produk</h5>
                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Foto Produk</th>
                                                <th scope="col">Nama Produk</th>
                                                <th scope="col">Deskripsi</th>
                                                <th scope="col">Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($product as $produk)
                                                <tr>
                                                    <td><img src="path_to_image/product_a.jpg"
                                                            alt="{{ $produk['photo'] }}"
                                                            style="width: 50px; height: 50px; object-fit: cover;"></td>
                                                    <td><a href="">
                                                            <b>
                                                                {{ Str::limit($produk['name'], 20, '...') }}
                                                            </b></a></td>
                                                    <td>{{ Str::limit($produk['detail'], 100, '...') }}</td>
                                                    <td>Rp {{ number_format($produk['price'], 0, ',', '.') }}</td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Row -->

                    <!-- Card Event -->
                    <div class="row">
                        <style>
                            .text-truncate-custom {
                                font-size: 0.875rem;
                                /* Lebih kecil dari h6 default */
                                word-break: break-word;
                                /* Memutus kata panjang agar pindah ke baris berikutnya */
                                overflow-wrap: break-word;
                                line-height: 1.2;
                                margin: 0;
                            }
                        </style>
                        @foreach ($events as $event)
                            <div class="col-12 col-md-6 col-lg-4 mb-4">
                                <div class="card info-card event-card h-100">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mt-4">
                                            <img src="{{ $event['thumbnail'] }}" alt="" class="svgSector"
                                                class="img-fluid"
                                                style="width: 100px; height: 100px; object-fit: cover; border-radius: 10px;">
                                            <div class="ms-3">
                                                <h6 class="text-truncate-custom">
                                                    {{ Str::limit($event['title'], 20, '...') }}</h6>
                                                <p class="text-muted small">{{ $event['event_date'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-4">

                        <div class="card info-card event-card">
                            <div class="card-body">
                                <h5 class="card-title">Eventmu</h5>
                                <!-- Event 1 -->

                                <!-- Event 2 -->
                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('assets/img/logoekraf.png') }}" alt="Event 2"
                                        class="img-fluid"
                                        style="height: 100px; width: 100px; object-fit: cover; border-radius: 10px;">
                                    <div class="ms-3">
                                        <h6>Event Judul 2</h6>
                                        <p class="text-muted small">Workshop untuk pemilik bisnis yang ingin
                                            memperdalam
                                            strategi pemasaran digital di media sosial.</p>
                                    </div>
                                </div>

                                <!-- Event 3 -->
                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('assets/img/logoekraf.png') }}" alt="Event 3"
                                        class="img-fluid"
                                        style="height: 100px; width: 100px; object-fit: cover; border-radius: 10px;">
                                    <div class="ms-3">
                                        <h6>Event Judul 3</h6>
                                        <p class="text-muted small">Diskusi panel tentang tren pasar dan bagaimana
                                            memanfaatkan teknologi untuk pertumbuhan bisnis.</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div><!-- End Row -->

            </div>
            </div>
            </div>
        </section>

    </main><!-- End #main -->

</body>

</html>
