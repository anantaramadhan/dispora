<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">



        <!-- Menu Beranda -->
        <li class="nav-item">
            <a class="nav-link @if (Request::is('entrepreneur')) active @else collapsed @endif"
                href="{{ route('entrepreneur') }}">
                <i class="bi bi-house-door"></i>
                <span>Beranda</span>
            </a>
        </li><!-- End Beranda Nav -->


        <!-- Menu Eventmu -->
        <li class="nav-item">
            <a class="nav-link {{ Request::is('entrepreneur/event*') ? 'active' : 'collapsed' }}"
                href="{{ route('entrepreneur-event') }}">
                <i class="bi bi-calendar-event"></i>
                <span>Eventmu</span>
            </a>
        </li><!-- End Eventmu Nav -->

        <li class="nav-item">
            <a class="nav-link {{ Request::is('entrepreneur/business*') ? 'active' : 'collapsed' }}"
                href="{{ route('entrepreneur-business') }}">
                <i class="bi bi-shop"></i>
                <span>Informasi usaha</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('entrepreneur/product*') ? 'active' : 'collapsed' }}"
                href="{{ route('entrepreneur-product') }}">
                <i class="bi bi-bag"></i>
                <span>Produk Usahamu</span>
            </a>
        </li><!-- End Produk Usaha Nav -->

        <!-- Menu Profil -->
        <li class="nav-item">
            <a class="nav-link {{ Request::is('entrepreneur/profile*') ? 'active' : 'collapsed' }}"
                href="{{ route('entrepreneur-profile') }}">
                <i class="bi bi-person-circle"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profil Nav -->

    </ul>

    @include('pengusaha.layouts.scripts')

</aside><!-- End Sidebar -->
