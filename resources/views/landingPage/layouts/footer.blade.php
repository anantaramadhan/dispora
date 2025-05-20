<style>
    .footer-logo {
        width: 45px;
        height: auto;
    }

    footer {
        background-color: #001C32;
    }
</style>

<section class="container text-center py-5">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">

        {{-- brand Web --}}
        <div class="col mb-5 mb-lg-5">
            <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-2">
                <img src="{{ asset('assets/img/logoEkrafTerbaru.png') }}" alt="" class="footer-logo">
                <p class="fw-bold fs-2 mb-0 ps-2">Ekraf<span class="fw-medium">Kuy</span></p>
            </div>
        </div>

        {{-- Contant | Media Sosial --}}
        <div class="col d-flex flex-column align-items-start mb-5 mb-lg-5">
            <p class="fs-2 fw-bold ">Media Sosial</p>

            {{-- telepon --}}
            <div class="d-flex align-items-center gap-2">
                <svg class="w-[30px] h-[30px] text-gray-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z" />
                </svg>


                <a class="text-decoration-none text-black fs-4 fw-semibold" href="https://wa.me/6289635650887" target="_blank"
                    class="text-black ms-2 fs-5 fw-semibold p-2">089635650887</a>
            </div>

            {{-- Instagram --}}
            <div class="d-flex align-items-center gap-2">
                <svg class="w-[30px] h-[30px] text-gray-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd"
                        d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                        clip-rule="evenodd" />
                </svg>


                <a class="text-decoration-none text-black fs-4 fw-semibold" href="https://www.instagram.com/nganjuk.creativehub/" target="_blank"
                    class="text-black ms-2 fs-5 fw-semibold p-2">nganjuk.creativehub</a>
            </div>

            {{-- Tiktok --}}
            <div class="d-flex align-items-center gap-2">
                <svg class="w-[30px] h-[30px] text-gray-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                        clip-rule="evenodd" />
                </svg>

                <a class="text-decoration-none text-black fs-4 fw-semibold" href="https://www.facebook.com/profile.php?id=100083112380116" target="_blank"
                    class="text-black ms-2 fs-5 fw-semibold p-2">Nganjuk Creative Hub</a>
            </div>

        </div>

        {{-- Support and Develop --}}
        <div class="col d-flex flex-column align-items-start">

            {{-- support by --}}
            <p class="fs-2 fw-bold ">Support By</p>

            <div class="d-flex flex-column mb-5">
                {{-- conatiner support politeknik negeri jember --}}
                <div class="d-flex flex-row w-100 align-items-center mb-4">
                    <img src="{{ asset('assets/img/logoPolije.png') }}" alt=""
                        style="width: 73px; height: 39px;">
                    <div class="d-flex flex-column align-items-start ms-4">
                        <p class="m-0 fw-bold">Politeknik Negeri Jember</p>
                        <p class="m-0 ">Kampus 3 Nganjuk</p>
                    </div>
                </div>

                {{-- container support Disporabudpar --}}
                <div class="d-flex flex-row w-100 align-items-center">
                    <img src="{{ asset('assets/img/LogoKabupatenNganjuk.png') }}" alt=""
                        style="width: 31px; height: 43px;">
                    <div class="d-flex flex-column align-items-start ms-4">
                        <p class="m-0 fw-bold">Disporabudpar</p>
                        <p class="m-0 ">Kab. Nganjuk</p>
                    </div>
                </div>
            </div>

            {{-- develop by --}}
            <p class="fs-2 fw-bold ">Develop By</p>
            <p class="m-0 fw-semi fs-3">A++ Team</p>
        </div>

    </div>
</section>

<footer class="d-flex flex-column justify-content-center py-3">
    <div class="container-xxl px-5 ">

        {{-- copyright developer --}}
        <div class="d-flex justify-content-end align-items-center">
            <p class="text-white mb-0">©Copyright <span class="fw-bold ps-1"> A++ Taam</span></p>
        </div>
    </div>
</footer>

<!-- Vendor JS Files -->
{{-- <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/quill/quill.js') }}"></script>
<script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script> --}}

<!-- Template Main JS File -->
{{-- <script src="{{ asset('assets/js/main.js') }}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


{{-- animation gsap --}}
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/EaselPlugin.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/TextPlugin.min.js"></script>

<script src="{{ asset('assets/js/animate.js') }}"></script>
<script src="{{asset('assets/js/sector.js')}}" ></script>
