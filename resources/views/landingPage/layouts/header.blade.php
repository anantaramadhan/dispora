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

    @php
        $token = session('access_token');
    @endphp
    <div class="container-xxl">

        <div class="py-2 w-100 d-flex flex-row justify-content-between">
            {{-- name website --}}
            <div class="d-flex align-items-center gap-2">
                <img src="{{ asset('assets/img/logoEkrafTerbaru.png') }}" alt="" class="nav-logo">
                <p class="fw-bold fs-5 mb-0 ps-2">Ekraf<span class="fw-medium">Kuy</span></p>
            </div>

            <div class="d-flex flex-row align-items-center ">
                {{-- list --}}
                <ul class="navbar-nav ms-auto d-flex flex-row align-items-center d-none d-lg-flex">
                    <li class="nav-item">
                        <a href="{{ route('landingpage-home') }}" class="nav-link mx-4">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('landingpage-about') }}" class="nav-link mx-4">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('landingpage-graph') }}" class="nav-link mx-4">Info Grafis</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('landingpage-sector') }}" class="nav-link mx-4">Daftar
                            Subsektor</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mx-4" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Informasi
                        </a>
                        <ul class="dropdown-menu position-absolute py-0 top-100" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('landingpage-articel') }}">Artikel</a></li>
                            <li><a class="dropdown-item" href="{{ route('landingpage-event') }}">Event</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        @if ($token)
                            <div class="me-2">
                                {{-- <button id="logout-btn" class="btn btn-danger rounded-5 px-4">
                            Keluar
                        </button> --}}
                                <a href="{{ route('logout-google') }}" class="btn btn-danger rounded-5 px-4">
                                    Keluar
                                </a>
                            </div>
                        @else
                            <div class="me-2">
                                <a href="{{ route('login-google') }}" class="btn btn-primary rounded-5 px-4">
                                    Masuk
                                </a>
                            </div>
                        @endif
                    </li>
                </ul>

                {{-- button masuk dan profil --}}
                {{-- <div class="me-2">
                    <a href="{{ route('login-google') }}" class="btn btn-primary rounded-5 px-4">
                        Masuk
                    </a>
                </div> --}}






                {{-- hamburger button --}}
                <button class="navbar-toggler ms-auto d-flex d-lg-none border-0" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        {{-- dropdown --}}
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav">
                <li class="nav-item w-fit">

                    <a href="{{ route('landingpage-home') }}"
                        class="nav-link {{ Request::is('beranda*') ? 'active' : 'collapsed' }}">Beranda</a>
                </li>
                <li class="nav-item w-fit">
                    <a href="{{ route('landingpage-about') }}"
                        class="nav-link {{ Request::is('tentang*') ? 'active' : 'collapsed' }}">Tentang</a>
                </li>
                <li class="nav-item w-fit">
                    <a href="{{ route('landingpage-graph') }}"
                        class="nav-link {{ Request::is('ingo-grafis*') ? 'active' : 'collapsed' }}">Info
                        Grafis</a>
                </li>
                <li class="nav-item w-fit">
                    <a href="{{ route('landingpage-sector') }}"
                        class="nav-link {{ Request::is('subsektor*') ? 'active' : 'collapsed' }}">Daftar
                        Subsektor</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Informasi
                    </a>
                    <ul class="dropdown-menu shadow-none py-0 mb-3" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('landingpage-articel') }}">Artikel</a></li>
                        <li><a class="dropdown-item" href="{{ route('landingpage-event') }}">Event</a></li>
                    </ul>
                </li>
                <li class="nav-item w-fit d-flex justify-content-center align-items-center">
                    @if ($token)
                        <div class="me-2">
                            {{-- <button id="logout-btn" class="btn btn-danger rounded-5 px-4">
                            Keluar
                        </button> --}}
                            <a href="{{ route('logout-google') }}" class="btn btn-danger rounded-5 px-4">
                                Keluar
                            </a>
                        </div>
                    @else
                        <div class="me-2">
                            <a href="{{ route('login-google') }}" class="btn btn-primary rounded-5 px-4">
                                Masuk
                            </a>
                        </div>
                    @endif
                </li>

            </ul>
        </div>

    </div>

</nav>
