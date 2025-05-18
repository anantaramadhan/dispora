<!DOCTYPE html>
<html lang="id">

@include('pengusaha.layouts.head')
@include('pengusaha.layouts.scripts')

<body>

    @include('pengusaha.layouts.header')
    @include('pengusaha.layouts.sidebar')

    <main id="main" class="main" style="margin-buttom: 35px;">

        <div class="pagetitle">
            <h1>Informasi Usaha</h1>
        </div>

        <section class="section profile">
            <div class="row">

                <!-- Semua Info Pengaju & Detail Usaha Dalam Satu Card -->
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">

                            <!-- Info Pengaju -->
                            <div class="d-flex flex-column align-items-center mb-4">
                                <img src="{{ asset('assets/img/logoekraf.png') }}" alt="Profile"
                                    class="rounded-circle mb-2" style="width: 100px; height: 100px; margin-top: 20px;">
                                <h2>Hermawan</h2>
                                <h6 class="text-muted">Pemilik Usaha</h6>
                            </div>

                            <!-- Info Detail Usaha -->
                            <h5 class="card-title mb-3">Detail Usaha</h5>
                            <div class="">
                                <div class="">
                                    <div class="row mb-3">
                                        <div class="col-lg-4 fw-bold">Nama Usaha</div>
                                        <div class="col-lg-8">Hus Creative</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-4 fw-bold">Pengelola</div>
                                        <div class="col-lg-8">Hermawan</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-4 fw-bold">No. Telp</div>
                                        <div class="col-lg-8">(62) 852-1234-5678</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-4 fw-bold">Sektor</div>
                                        <div class="col-lg-8">Kreatif dan Seni</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-4 fw-bold">Alamat</div>
                                        <div class="col-lg-8">Jl. Raya Nganjuk No. 12, Kab. Nganjuk</div>
                                    </div>
                                </div>

                                {{-- sosial media --}}
                                <div id="entrepreneur-" class="">
                                    {{-- daftar sosial media --}}
                                    <div class="row mb-3">
                                        <div class="col-lg-4 fw-bold">Sosial Media</div>
                                        <div class="col-lg-8">Instagram: @huscreative</div>
                                    </div>
                                    <form action="">
                                        <div class="row mb-3">
                                            <div class="col-lg-4 fw-bold">Sosial Media</div>
                                            <div class="col-lg-8">Instagram: @huscreative</div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <!-- Foto Usaha -->
                            <h5 class="card-title mt-4">Foto Usaha</h5>
                            <div class="row g-2">
                                <div class="col-4">
                                    <img src="{{ asset('assets/img/logoekraf.png') }}"
                                        class="img-fluid rounded shadow-sm" alt="Foto 1">
                                </div>
                                <div class="col-4">
                                    <img src="{{ asset('assets/img/logoekraf.png') }}"
                                        class="img-fluid rounded shadow-sm" alt="Foto 2">
                                </div>
                                <div class="col-4 mt-2">
                                    <img src="{{ asset('assets/img/logoekraf.png') }}"
                                        class="img-fluid rounded shadow-sm" alt="Foto 3">
                                </div>
                            </div>

                            <!-- Lokasi Usaha (Map) -->
                            <h5 class="card-title mt-4">Lokasi Usaha</h5>
                            <iframe src="https://maps.google.com/maps?q=nganjuk&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                style="width:100%; height:300px; border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>

                            <!-- Tombol Edit (Menjadi panjang) -->
                            <div class="text-end mt-4">
                                <a href="{{ route('entrepreneur-business-show') }}"
                                    class="btn btn-primary w-100">Edit</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>

</body>

</html>
