@include('pengusaha.layouts.scripts')

<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">


        <!-- Menu Pengaduan -->
        <!-- End Keluar Nav -->

        <!-- Menu Beranda for Entrepreneur -->
        <li class="nav-item">
            <a class="nav-link @if (Request::is('entrepreneur')) active @else collapsed @endif"
                href="{{ route('entrepreneur') }}">
                <i class="bi bi-house-door"></i>
                <span>Beranda</span>
            </a>
        </li><!-- End Beranda Nav -->

        <!-- Menu Eventmu for Entrepreneur -->
        <li class="nav-item">
            <a class="nav-link {{ Request::is('entrepreneur/event*') ? 'active' : 'collapsed' }}"
                href="{{ route('entrepreneur-event') }}">
                <i class="bi bi-calendar-event"></i>
                <span>Eventmu</span>
            </a>
        </li><!-- End Eventmu Nav -->

        <!-- Menu Business Information for Entrepreneur -->
        <li class="nav-item">
            <a class="nav-link {{ Request::is('entrepreneur/business*') ? 'active' : 'collapsed' }}"
                href="{{ route('entrepreneur-business') }}">
                <i class="bi bi-shop"></i>
                <span>Informasi usaha</span>
            </a>
        </li><!-- End Business Info Nav -->

        <!-- Menu Products for Entrepreneur -->
        <li class="nav-item">
            <a class="nav-link {{ Request::is('entrepreneur/product*') ? 'active' : 'collapsed' }}"
                href="{{ route('entrepreneur-product') }}">
                <i class="bi bi-bag"></i>
                <span>Produk Usahamu</span>
            </a>
        </li><!-- End Produk Usaha Nav -->

        <!-- Menu Profil for Entrepreneur -->
        <li class="nav-item">
            <a class="nav-link {{ Request::is('entrepreneur/profile*') ? 'active' : 'collapsed' }}"
                href="{{ route('entrepreneur-profile') }}">
                <i class="bi bi-person-circle"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profil Nav -->

        <li class="nav-item">
            <a class="nav-link {{ Request::is('entrepreneur/complaint*') ? 'active' : 'collapsed' }}"
                href="{{ route('entrepreneur-complaint') }}">
                <i class="bi bi-file-earmark-text"></i> <!-- Changed to report/document icon -->
                <span>Pengaduan</span>
            </a>
        </li><!-- End Pengaduan Nav -->

        <!-- Menu Keluar -->
        <li class="nav-item">
            <a class="nav-link {{ Request::is('entrepreneur/logout*') ? 'active' : 'collapsed' }}"
                href="{{ route('logout-google') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right"></i>
                <span>Keluar</span>
            </a>
            <!-- Form Logout -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>

    </ul>

    @include('pengusaha.layouts.scripts')

</aside><!-- End Sidebar -->
