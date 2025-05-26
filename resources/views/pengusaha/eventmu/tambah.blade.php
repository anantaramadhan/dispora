<!DOCTYPE html>
<html lang="id">

@include('pengusaha.layouts.head')
@include('pengusaha.layouts.scripts')
<style>
    #map {
        width: 100%;
        height: 300px;
        /* Atur sesuai kebutuhan */
        margin-bottom: 10px;
    }
</style>

<body>

    @include('pengusaha.layouts.header')
    @include('pengusaha.layouts.sidebar')
    @include('components.alert')

    <main id="main" class="main" style="margin-bottom: 35px;">
        <div class="pagetitle">
            <h1>Pengajuan Event</h1>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form Pengajuan Event</h5>

                            <!-- Form untuk menambah event -->
                            <form class="container" method="POST" action="{{ route('entrepreneur-event-post') }}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <!-- Nama Event -->
                                    <div class="col-12">
                                        <label for="namaEvent" class="form-label">Nama Event</label>
                                        <input type="text" name="event_name" class="form-control" id="namaEvent"
                                            placeholder="Masukkan nama event" required>
                                    </div>

                                    <!-- Tanggal Event -->
                                    <div class="col-12 mt-3">
                                        <label for="tanggalEvent" class="form-label">Tanggal Event</label>
                                        <input type="date" name="event_date" class="form-control" id="tanggalEvent"
                                            required>
                                    </div>

                                    <!-- Lokasi Event -->
                                    <div class="col-12 mt-3">

                                        <label for="lokasiEvent" class="form-label">Lokasi Event</label>
                                        {{-- menampilkan map --}}
                                        <div id="map" style="height: 300px;"></div>

                                        <input type="text" id="koordinat" name="coordinate"
                                            class="form-control mb-3 rounded-pill px-4 py-2"
                                            placeholder="Klik di peta untuk mendapatkan koordinat" required readonly>
                                        <input type="hidden" id="latitude" name="latitude" required>
                                        <input type="hidden" id="longitude" name="longitude" required>

                                        <input type="text" id="location-name" name="location_name"
                                            class="form-control mb-3 rounded-pill px-4 py-2"
                                            placeholder="Nama lokasi otomatis dari peta">
                                        {{-- @extends('layouts.app') --}}



                                    </div>

                                    <!-- Deskripsi Event -->
                                    <div class="col-12 mt-3">
                                        <label for="deskripsiEvent" class="form-label">Deskripsi Event</label>
                                        <textarea name="description_event" class="form-control" id="deskripsiEvent" rows="4"
                                            placeholder="Masukkan deskripsi event" required></textarea>
                                    </div>

                                    <!-- Foto Event -->
                                    <div class="col-12 mt-3">
                                        <label for="fotoEvent" class="form-label">Foto Event</label>
                                        <div id="preview" class="mt-2 mb-3"></div>
                                        <input type="file" name="foto_event" class="form-control" id="fotoEvent"
                                            accept="image/*" required>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-primary w-100">Ajukan Event</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- Modal Berhasil -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Berhasil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Pengajuan event Anda telah berhasil.
                </div>
                <div class="modal-footer">
                    <a href="{{ route('entrepreneur-event-post') }}" class="btn btn-success">Kembali ke Daftar
                        Event</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Gagal -->
    <div class="modal fade" id="failureModal" tabindex="-1" aria-labelledby="failureModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="failureModalLabel">Gagal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Pengajuan event Anda gagal. Silakan coba lagi.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    {{-- upload foto --}}

    <script>
        const fileInput = document.getElementById('fotoEvent');
        const preview = document.getElementById('preview');
        const MAX_FILE_SIZE = 5 * 1024 * 1024;

        fileInput.addEventListener('change', () => {
            preview.innerHTML = '';

            const file = fileInput.files[0];
            if (!file) return;

            if (!['image/jpeg', 'image/png', 'image/webp'].includes(file.type)) {
                alert('Hanya file gambar (.jpg, .png, .webp) yang diperbolehkan!');
                fileInput.value = '';
                return;
            }

            if (file.size > MAX_FILE_SIZE) {
                alert('Ukuran gambar terlalu besar! Maksimal 5MB.');
                fileInput.value = '';
                return;
            }

            const url = URL.createObjectURL(file);
            const thumb = document.createElement('img');
            thumb.src = url;
            thumb.classList.add('rounded', 'border', 'mt-1');
            thumb.style.maxWidth = '320px';
            preview.appendChild(thumb);
        });
    </script>
    <script>
        // Inisialisasi peta
        var map = L.map('map').setView([-7.602405870106842, 111.90100841069291], 16);

        // Tambahkan tile gratis dari OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        var marker;

        // Saat peta diklik
        map.on('click', function(e) {
            var lat = e.latlng.lat;
            var lng = e.latlng.lng;

            // Update form
            document.getElementById('latitude').value = lat;
            document.getElementById('longitude').value = lng;
            document.getElementById('koordinat').value = lat + ', ' + lng;

            // Hapus marker sebelumnya jika ada
            if (marker) {
                map.removeLayer(marker);
            }

            // Tambahkan marker ke lokasi yang diklik
            marker = L.marker([lat, lng]).addTo(map);

            // Reverse geocoding menggunakan Nominatim (gratis)
            fetch(`https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${lng}&format=json`)
                .then(response => response.json())
                .then(data => {
                    const locationName = data.display_name || 'Tidak ditemukan';
                    document.getElementById('location-name').value = locationName;
                })
                .catch(error => {
                    console.error('Error fetching location name:', error);
                    document.getElementById('location-name').value = 'Gagal memuat nama lokasi';
                });
        });
    </script>


    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-o9q+8Vi6j3C3bZf2BWSwW5Okv4VCzyIBPiG+JJTUGsQ=" crossorigin=""></script>

</body>

</html>
