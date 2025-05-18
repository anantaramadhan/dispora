<style>
    .nav-logo {
        width: 28px;
        height: 34px;
    }

    .navbar {
        padding-left: 15px;
        padding-right: 15px;
        /* flex-wrap: nowrap; */
        position: fixed;
        z-index: 10;
        top: 0;
        left: 0;
        width: 100%;
    }
</style>

<nav class="navbar d-flex  flex-column align-items-center justify-content-between bg-white border-bottom">

    <div class="container-xxl">

        <div class="py-2 w-100 d-flex flex-row justify-content-between">
            {{-- name website --}}
            <div class="d-flex align-items-center">
                <img src="{{ asset('assets/img/iconEkraf.svg') }}" alt="" class="nav-logo">
                <p class="fw-bold fs-6 mb-0 ps-2">Nganjuk<span class="fw-semibold">.Ekraf</span></p>
            </div>

            <div class="d-flex flex-row align-items-center ">
                {{-- list --}}
                <ul class="navbar-nav ms-auto d-flex flex-row align-items-center d-none d-lg-flex">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link fw-medium fs-6 text-black mx-4">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('about') }}" class="nav-link fw-medium fs-6 text-black mx-4">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('graph') }}" class="nav-link fw-medium fs-6 text-black mx-4">Info Grafis</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('sector') }}" class="nav-link fw-medium fs-6 text-black mx-4">Daftar
                            Subsektor</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-medium fs-6 text-black mx-4" href="#"
                            id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Informasi
                        </a>
                        <ul class="dropdown-menu position-absolute py-0 top-100" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('articel') }}">Artikel</a></li>
                            <li><a class="dropdown-item" href="{{ route('event') }}">Event</a></li>
                        </ul>
                    </li>
                </ul>

                {{-- button masuk dan profil --}}
                <div class="me-2">
                    <a href="{{ route('login-google') }}" class="btn btn-primary rounded-5 px-4">
                        Masuk
                    </a>
                </div>

                {{-- hamburger button --}}
                <button class="navbar-toggler ms-auto d-flex d-lg-none border-0" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        {{-- dropdown --}}
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto d-flex justify-content-center align-items-start">
                <li class="nav-item">
                    <a href="#home" class="nav-link fw-semibold fs-6 text-black">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="#artikel" class="nav-link fw-semibold fs-6 text-black">Tentang</a>
                </li>
                <li class="nav-item">
                    <a href="#infografis" class="nav-link fw-semibold fs-6 text-black">Info Grafis</a>
                </li>
                <li class="nav-item">
                    <a href="#sektor" class="nav-link fw-semibold fs-6 text-black">Daftar Sektor</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-semibold fs-6 text-black" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Informasi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#artikel">Artikel</a></li>
                        <li><a class="dropdown-item" href="#event">Event</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>

</nav>
