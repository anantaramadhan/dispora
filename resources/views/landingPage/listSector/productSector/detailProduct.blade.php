<!DOCTYPE html>
<html lang="en">

@include('components.head')

<style>
    body {
        padding-top: 73px;
        background-color: white
    }

    .fade-section {
        display: none;
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .fade-section.show {
        display: block;
        opacity: 1;
    }
</style>

<body>

    @include('landingPage.layouts.header')

    {{-- SECTION DETAIL PRODUK --}}
    <section class="container-xxl">

        {{-- CONTENT KIRI --}}
        <div>
            {{-- IMAGE UTAMA --}}
            <div>
                <img src="" alt="">
            </div>

            {{-- DAFTAR IMAGE --}}
            <div>
                <div>
                    <img src="" alt="">
                </div>
                <div>
                    <img src="" alt="">
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </div>
        </div>

        {{-- CONTENT KANAN --}}
        <div>
            {{-- JUDUL --}}
            <p>Nama Produk</p>
            {{-- HARGA --}}
            <h2>RP. 75.000,00</h2>
            {{-- DESKRIPSI --}}
            <div>
                <p>Deskripsi Produk:</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pellentesque felis at fringilla
                    sagittis. Donec semper tempus ipsum, sed dictum tortor suscipit id. Vivamus luctus nunc eu semper
                    placerat. Pellentesque sed massa efficitur, aliquet sem sed, venenatis erat. Nulla vitae fermentum
                    mauris, sit amet volutpat risus. Sed nec eros id quam convallis ultricies. Vivamus in diam sed est
                    malesuada tincidunt ut eleifend odio.</p>
            </div>

            {{-- PROFIL USAHA --}}
            <div>
                <div>
                    {{-- LOGO USAHA --}}
                    <div><img src="{{asset('assets/img/logoekraf.png')}}" alt=""></div>
                    {{-- NAMA USAHA --}}
                    <p>NAMA USAHA</p>
                    {{-- ULASAN USAHA --}}
                    <p>120 Ulasan</p>
                </div>
                {{-- TOMBOL LIHAT USAHA --}}
                <button>Lihat Usaha</button>
            </div>

            {{-- KONTAK DAN LOKASI --}}
            <div>
                {{-- KONTAK --}}
                <div>
                    <p>Kontak dan Media Sosial</p>
                    <div>
                        svg
                        <p>089635650887</p>
                    </div>
                    <div>
                        svg
                        <p>namaUsaha</p>
                    </div>
                    <div>
                        svg
                        <p>namaUsaha</p>
                    </div>
                    <div>
                        svg
                        <p>namaUsaha</p>
                    </div>
                </div>

                {{-- LOKASI --}}
                <div>
                    <p>Lokasi Usaha</p>
                    <div>
                        svg
                        <p>Jl. Dermojoso no.123 Ds. Loughtown Kec. GrandLane Kab. East Blue</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('landingPage.layouts.footer')
</body>


</html>
