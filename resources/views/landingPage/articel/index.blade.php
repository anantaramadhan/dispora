<!DOCTYPE html>
<html lang="en">
@include('components.head2')
<style>
    body {
        padding-top: 73px;
        background-color: white;
    }
</style>

<!-- Flatpickr CSS -->
<link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">

<body>
    @include('landingPage.layouts.header')

    {{-- section artice --}}
    @include('landingPage.articel.components.searchArticel')

    {{-- section search artice --}}
    @include('landingPage.articel.components.articel')

    {{-- section search result artice --}}
    @include('landingPage.articel.components.articelResult')

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/id.js"></script>

    <script>
        const btnTanggal = document.getElementById('btnTanggal');
        const inputDate = document.getElementById('fakeInputDate');

        // Inisialisasi Flatpickr
        const fp = flatpickr(inputDate, {
            clickOpens: false, // Agar tidak terbuka otomatis saat input fokus
            dateFormat: "d F Y", // Format: 19 Mei 2025
            locale: "id", // Gunakan bahasa Indonesia
            position: "below", // arahkan ke bawah
            positionElement: btnTanggal, // patokan posisinya adalah tombol
            onChange: function(selectedDates, dateStr, instance) {
                btnTanggal.textContent = dateStr;
            }
        });

        // Buka kalender saat tombol diklik
        btnTanggal.addEventListener('click', function() {
            fp.open();
        });
    </script>


    @include('landingPage.layouts.footer')
</body>

</html>
