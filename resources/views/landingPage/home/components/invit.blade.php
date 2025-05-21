<section id="invite"
    class="scroll-section container-xxl  d-flex flex-column-reverse flex-lg-row align-items-center overflow-hidden py-3 px-5 px-lg-0">
    <div class="d-flex flex-column mt-5 mt-lg-0 w-100">
        {{-- judul dan deskripsi section 1 --}}
        <h1 class="fw-bold d-flex flex-column" style="color: #011E34;">TEMUKAN <span
                style="color: #407AA2;">KEBUTUHAN</span> KREATIFMU</h1>
        <p>Selamat datang di EkrafKuy, jendela menuju kekayaan kreativitas Kabupaten Nganjuk! Temukan beragam
            produk unik dan inovatif dari para pelaku ekonomi kreatif lokal, mulai dari kerajinan tangan yang
            memukau hingga kuliner lezat yang menggugah selera. Mari dukung karya anak bangsa dan jadilah bagian
            dari geliat ekonomi kreatif Nganjuk. Jelajahi sekarang dan temukan inspirasi baru!</p>

        <a href="{{ route('landingpage-sector') }}"
            class="btn btn-outline-dark border-2 d-flex flex-row rounded-5 px-5 px-md-0 py-2 align-items-center justify-content-center">
            <p class="m-0  fw-semibold">Cari Kebutuhanmu</p>
            <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m9 5 7 7-7 7" />
            </svg>
        </a>
    </div>

    {{-- svg dan informasi total usaha ekraf --}}
    <div class="d-flex flex-column w-100 mt-5">

        {{-- card informasi total usaha ekraf --}}
        <div class="box zoom-card card text-center mb-0 rounded-4 d-none d-lg-flex flex-column" style="width: 300px">
            <div class="card-body h-auto pt-3 w-100">
                <p class="fs-5">Data Usaha Ekonomi Kreatif Kab. Nganjuk</p>
                <h2 class="fw-bold fs-5">2000</h2>
                <a href="{{ route('landingpage-graph') }}" class="btn btn-primary">Lihat Selengkapnya</a>
            </div>
        </div>

        <div class="w-100 h-100 position-relative ">
            <img src="{{ asset('assets/svg/creative1.svg') }}" alt="" class="w-100 h-100">
            <div class="backgorundCircle"></div>
        </div>

    </div>
</section>
