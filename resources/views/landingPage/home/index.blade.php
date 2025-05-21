<!DOCTYPE html>
<html lang="en">

@include('components.head2')

<style>
    body {
        padding-top: 73px;
    }

    #splash-screen {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background-color: #ffffff;
        z-index: 9999;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    #main-content {
        opacity: 0;
    }
</style>

<script src="{{ asset('assets/css/custom.css') }}"></script>




<body class="d-flex flex-column bg-white min-vh-screen justify-content-between">



    @include('landingPage.layouts.header')

    @include('components.alert')

    {{-- spalsh screen --}}
    @if ($showFirst)
        <section id="splash-screen">
            <div class="d-flex flex-row gap-4 align-items-center">
                <img class="splash-logo" src="{{ asset('assets/img/logoEkrafTerbaru.png') }}" alt="Logo" width="60">
                <p class="fw-bold mb-0 fs-1 splash-name">Ekraf<span class="fw-medium">Kuy</p>
            </div>
            <p class="py-4 splash-describe">Platfrom Ekonomi Kreatif Kabupaten Nganjuk</p>
        </section>
    @endif

    {{-- section ajakan --}}
    @include('landingPage.home.components.invit')

    {{-- section penjelasan singkat tentang webssite --}}
    @include('landingPage.home.components.aboutWeb')

    {{-- section Nganjuk Creative Hub --}}
    @include('landingPage.home.components.nganjukCreativeHub')

    {{-- section creative center --}}
    @include('landingPage.home.components.creativeCenter')


    {{-- Section Event dan Artikel --}}
    @include('landingPage.home.components.information.infromation')

    @include('landingPage.layouts.footer')

    <script src="{{ asset('assets/js/animate.js') }}"></script>
    <script src="{{ asset('assets/js/informationLandingPage.js') }}"></script>

    <script>
        document.querySelectorAll(".btn-detail").forEach(button => {
            button.addEventListener("click", function(e) {
                e.preventDefault();

                // Ambil data dari tombol
                const title = this.dataset.title;
                const description = this.dataset.description;
                const image = this.dataset.image;

                // Isi ke modal
                document.getElementById("modalTitle").textContent = title;
                document.getElementById("modalDescription").textContent = description;
                document.getElementById("modalImage").src = image;

                // Jika subsektor link ingin dinamis:
                // const subLink = `/subsektor/${encodeURIComponent(title.toLowerCase())}`;
                // document.getElementById("subsektorBtn").href = subLink;

                // Tampilkan modal
                document.getElementById("popupModal").classList.remove("d-none");
            });
        });

        // Tutup modal
        document.getElementById("closeModal").addEventListener("click", function() {
            document.getElementById("popupModal").classList.add("d-none");
        });

        // Tombol silang (×)
        document.querySelector(".close-btn").addEventListener("click", function() {
            document.getElementById("popupModal").classList.add("d-none");
        });
    </script>

</body>

</html>
