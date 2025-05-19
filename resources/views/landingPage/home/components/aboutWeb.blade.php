<section id="aboutWeb"
    class="scroll-section container-xxl mt-5 d-flex flex-column flex-lg-row align-items-center overflow-hidden px-5 px-lg-0 py-5 gap-4">

    {{-- div kiri --}}
    <div class="d-flex w-100">
        <img src="{{ asset('assets/img/logoEkrafTerbaru.png') }}" alt="" class="w-75">
    </div>

    {{-- div kanan --}}
    <div class="d-flex flex-column w-100">
        <h1 class="fw-bold fs-2 text-black">Ekraf<span class="fw-medium">Kuy</span></h1>

        <p>EkrafKuy merupakan Platform Digital Ekonomi Kreatif Kabupaten
            Nganjuk yang dimana didalamnya terdapat Daftar Ekonomi Kreatif berdasarkan Sub Sektor dan dibagi
            berdasarkan wilayah kecamatan yang ada di Kabupaten Nganjuk. Selain Daftar usah di Nganjuk.Ekraf juga
            terdapat Informasi mengenai Event-event Ekonomi Kreatif yang akan berlangsung dan ada juga
            Artikel-artikel tentang Ekonomi Kreatfi yang akan menambah wawasan kita mengenai Ekonmi Kreatif. Untuk
            itu daftarkan usaha Ekonomi Kreatifmu sekarang.</p>

        <div class="d-flex flex-column flex-md-row gap-4 w-100 justify-content-between">
            <a href="{{route('bussinesRegistration')}}" class="btn btn-primary rounded-5 w-100 py-2">daftarkan Usaha Kreatifmu</a>
            <button class="btn btn-primary rounded-5 w-100 py-2">Unduh Mobile Nganjuk <span>.Ekraf</span></button>
        </div>
    </div>
</section>
