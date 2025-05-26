<!DOCTYPE html>
<html lang="id">

@include('pengusaha.layouts.head')
@include('pengusaha.layouts.scripts')

<body>

    @include('pengusaha.layouts.header')
    @include('pengusaha.layouts.sidebar')

    <main id="main" class="main" style="margin-bottom: 35px;">
        <div class="pagetitle">
            <h1>Edit Event</h1>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form Edit Event</h5>

                            <!-- Form untuk edit event -->
                            <form action="{{ route('entrepreneur-event-put', ['id' => $event['id']]) }}" method="POST"
                                enctype="multipart/form-data" id="editEventForm">
                                @csrf
                                @method('PUT') <!-- Menggunakan method PUT untuk update -->

                                <div class="row">
                                    <!-- Nama Event -->
                                    <div class="col-12">

                                        <label for="namaEvent" class="form-label"><b>Nama Event</b></label>
                                        <input type="text" name="event_name" class="form-control" id="namaEvent"
                                            placeholder="Masukkan nama event" value="{{ $event['title'] }}" required>
                                    </div>

                                    <!-- Tanggal Event -->
                                    <div class="col-12 mt-3">
                                        <label for="tanggalEvent" class="form-label"><b>Tanggal Event</b></label>
                                        <input type="date" name="event_date" class="form-control" id="tanggalEvent"
                                            value="{{ $event['event_date'] }}" required>
                                    </div>

                                    <!-- Lokasi Event -->
                                    <div class="col-12 mt-3">
                                        <label for="lokasiEvent" class="form-label"><b>Lokasi lama</b></label>
                                        <input type="text" name="location_name" class="form-control" id="lokasiEvent"
                                            placeholder="Masukkan lokasi event" value="{{ $event['location'] }}"
                                            required readonly>
                                    </div>

                                    <!-- Peta Lokasi Event -->
                                    <div class="col-12 mt-3">

                                        <div id="map" style="height: 400px;" class=""></div>
                                        <label for="map" class="form-label"><i>*pilih lokasi di peta</i></label>

                                        <input type="text" id="koordinat" name="coordinate"
                                            class="form-control mb-3 rounded-pill px-4 py-2"
                                            placeholder="Klik di peta untuk mendapatkan koordinat"
                                            value="{{ $event['latitude'] }} {{ $event['longitude'] }}" required
                                            readonly>
                                        <input type="hidden" id="latitude" name="latitude"
                                            value="{{ $event['latitude'] }}" required>
                                        <input type="hidden" id="longitude" name="longitude"
                                            value="{{ $event['longitude'] }}" required>

                                        <input type="text" id="location-name" name="location_name"
                                            class="form-control mb-3 rounded-pill px-4 py-2"
                                            value="{{ $event['location'] }}"
                                            placeholder="Nama lokasi otomatis dari peta">
                                    </div>

                                    <!-- Deskripsi Event -->
                                    <div class="col-12 mt-3">
                                        <label for="deskripsiEvent" class="form-label"><b>Deskripsi Event</b></label>
                                        <textarea name="description_event" class="form-control " id="deskripsiEvent" rows="4"
                                            placeholder="Masukkan deskripsi event" required>{{ $event['description'] }}</textarea>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <label for="fotoEvent" class="form-label"><b>Foto Event</b></label>

                                        <div id="preview" class="mt-2 mb-4">
                                            @if (!empty($event['thumbnail']))
                                                <img src="{{ config('services.backend_api') . '/storage/' . $event['thumbnail'] }}"
                                                    alt="Foto Event Sebelumnya" class="rounded border mt-1"
                                                    style="max-width: 320px;">
                                            @endif
                                        </div>

                                        <input type="file" name="foto_event" class="form-control" id="fotoEvent"
                                            accept="image/*">
                                        <i>*Upload foto baru jika ingin mengganti</i>
                                    </div>

                                    <!-- Tombol Aksi -->
                                    <div class="d-flex justify-content-between">
                                        <!-- Tombol Batal dan Simpan -->
                                        <div class="ms-auto">
                                            <a href="{{ route('entrepreneur-event') }}" class="btn btn-danger me-2"><i
                                                    class="bi bi-x-circle"></i> Batal</a>

                                            <button type="submit" class="btn btn-success">
                                                <i class="bi bi-check-lg"></i> Simpan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- Modal Berhasil Simpan -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Berhasil Simpan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Event Anda telah berhasil disimpan.
                </div>
                <div class="modal-footer">
                    <a href="{{ route('entrepreneur-event') }}" class="btn btn-success">Kembali ke Daftar Event</a>
                    <a href="{{ route('entrepreneur-event-put', ['id' => $event['id']]) }}">Edit</a>

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Gagal Simpan -->
    <div class="modal fade" id="failureModal" tabindex="-1" aria-labelledby="failureModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="failureModalLabel">Gagal Simpan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Terjadi kesalahan saat menyimpan event Anda. Silakan coba lagi.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Google Maps API -->
    {{-- <script>
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
    </script> --}}

    <script>
        const fileInput = document.getElementById('fotoEvent');
        const preview = document.getElementById('preview');
        const MAX_FILE_SIZE = 5 * 1024 * 1024; // 5MB

        fileInput.addEventListener('change', () => {
            preview.innerHTML = ''; // Hapus preview lama

            const file = fileInput.files[0];
            if (!file) return;

            // Validasi tipe gambar
            if (!['image/jpeg', 'image/png', 'image/webp'].includes(file.type)) {
                alert('Hanya file gambar (.jpg, .png, .webp) yang diperbolehkan!');
                fileInput.value = '';
                return;
            }

            // Validasi ukuran gambar
            if (file.size > MAX_FILE_SIZE) {
                alert('Ukuran gambar terlalu besar! Maksimal 5MB.');
                fileInput.value = '';
                return;
            }

            // Tampilkan gambar baru
            const url = URL.createObjectURL(file);
            const thumb = document.createElement('img');
            thumb.src = url;
            thumb.classList.add('rounded', 'border', 'mt-1');
            thumb.style.maxWidth = '320px';
            preview.appendChild(thumb);
        });
    </script>

    {{-- 
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
    </script> --}}
    <script>
        // Ambil nilai awal dari input hidden
        const initialLat = parseFloat(document.getElementById('latitude').value);
        const initialLng = parseFloat(document.getElementById('longitude').value);

        // Inisialisasi peta dan fokus ke lokasi awal
        var map = L.map('map').setView([initialLat, initialLng], 16);

        // Tambahkan tile dari OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        var marker;

        // Jika data koordinat awal tersedia, tampilkan marker
        if (!isNaN(initialLat) && !isNaN(initialLng)) {
            marker = L.marker([initialLat, initialLng]).addTo(map);
        }

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

            // Tambahkan marker baru
            marker = L.marker([lat, lng]).addTo(map);

            // Reverse geocoding menggunakan Nominatim
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
