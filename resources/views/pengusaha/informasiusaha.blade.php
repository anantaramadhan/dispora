<!DOCTYPE html>
<html lang="id">

@include('pengusaha.layouts.head')
@include('pengusaha.layouts.scripts')

<body>

    @include('pengusaha.layouts.header')
    @include('pengusaha.layouts.sidebar')
    @include('components.alert')

    <main id="main" class="main" style="margin-bottom: 35px;">
        <div class="pagetitle">
            <h1>Informasi Usaha</h1>
        </div>

        <section class="section profile">
            <div class="row">

                <!-- Semua Info Pengaju & Detail Usaha Dalam Satu Card -->
                <div class="col-xl-12">
                    <div class="card">
                        <form action="{{ route('entrepreneur-business-put') }}" method="POST"
                            enctype="multipart/form-data" id="editEventForm">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <!-- Info Pengaju -->
                                <div class="d-flex flex-column align-items-center mb-4">

                                    {{-- Input file disembunyikan --}}
                                    <input type="file" name="profile" class="form-control d-none" id="fotoEvent"
                                        accept="image/*">

                                    {{-- Gambar diklik untuk trigger input file --}}
                                    <label for="fotoEvent" style="cursor: pointer;">
                                        @if (!empty($business['profile']))
                                            <img src="{{ config('services.backend_api') . '/storage/' . $business['profile'] }}"
                                                alt="Profile" class="rounded-circle mb-2 border"
                                                style="width: 100px; height: 100px; margin-top: 20px; object-fit: cover; display: block;">
                                        @else
                                            <img src="{{ asset('assets/img/logoekraf.png') }}" alt="Profile"
                                                class="rounded-circle mb-2 border"
                                                style="width: 100px; height: 100px; margin-top: 20px; object-fit: cover; display: block;">
                                        @endif
                                    </label>

                                    <i>*klik gambar untuk ubah</i>
                                    <h2 class=""><b>{{ $business['business_name'] }}</b></h2>
                                    <h6 class="text-muted">{{ $business['owner_name'] }}</h6>

                                    {{-- Preview image jika ingin ditampilkan setelah pilih --}}
                                    <div id="preview"></div>
                                </div>
                                <!-- Info Detail Usaha -->
                                <h5 class="card-title mb-3">Detail Usaha</h5>
                                {{-- , ['id' => $business['id']]) --}}

                                <div class="">
                                    <div class="row mb-3">
                                        <div class="col-lg-4 fw-bold">Nama Usaha</div>
                                        <div class="col-lg-8">
                                            <input type="text" name="business_name" class="form-control"
                                                id="business_name" placeholder="Nama usaha"
                                                value="{{ $business['business_name'] }}" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-4 fw-bold">Pengelola</div>
                                        <div class="col-lg-8">
                                            <input type="text" name="owner_name" class="form-control" id="owner_name"
                                                placeholder="Nama usaha" value="{{ $business['owner_name'] }}" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        {{-- <input type="hidden" name="sector_id" value="{{ $sector['id'] }}"> --}}
                                        <input type="hidden" name="sector_id" value="4">

                                        <div class="col-lg-4 fw-bold">Sektor</div>
                                        <div class="col-lg-8">
                                            <input type="text" name="sector_id" class="form-control" id="sector_id"
                                                placeholder="Nama usaha" value="{{ $sector['name'] }}" readonly>
                                        </div>
                                        {{-- <div class="col-lg-8">{{ $sector['name'] }}</div> --}}
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-4 fw-bold">Lokasi Usaha</div>
                                        <div class="col-12 mt-3">

                                            <div id="map" style="height: 400px;" class=""></div>
                                            <label for="map" class="form-label"><i>*pilih lokasi di
                                                    peta</i></label>

                                            <input type="text" id="koordinat" name="coordinate"
                                                class="form-control mb-3"
                                                placeholder="Klik di peta untuk mendapatkan koordinat"
                                                value="{{ $business['latitude'] }} {{ $business['longitude'] }}"
                                                required readonly>
                                            <input type="hidden" id="latitude" name="latitude"
                                                value="{{ $business['latitude'] }}" required>
                                            <input type="hidden" id="longitude" name="longitude"
                                                value="{{ $business['longitude'] }}" required>

                                            <input type="text" id="location-name" name="location"
                                                class="form-control mb-3" value="{{ $business['location'] }}"
                                                placeholder="Nama lokasi otomatis dari peta">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="col-lg-4 fw-bold">Deskripsi</div>
                                        <textarea name="description" class="form-control" id="deskripsiEvent" rows="4"
                                            placeholder="Masukkan deskripsi event" required>{{ $business['description'] }}</textarea>
                                    </div>
                                </div>
                                <div class="ms-auto">
                                    <a href="{{ route('entrepreneur-event') }}" class="btn btn-danger me-2"><i
                                            class="bi bi-x-circle"></i> Batal</a>

                                    <button type="submit" class="btn btn-success">
                                        <i class="bi bi-check-lg"></i> Simpan
                                    </button>
                                </div>
                            </div>

                            {{-- </form> --}}
                        </form>
                    </div>


                    {{-- sosmed --}}
                    <div class="card">
                        <div class="card-body pt-3">
                            <h5 class="card-title mb-3" id="sosial_media">Sosial Media</h5>
                            {{-- Sosial Media --}}
                            <div id="entrepreneur-socials" class="">

                                @foreach ($sosiamedias as $sosmed)
                                    <div class="row mb-3 align-items-center">
                                        <div class="col-lg-4 fw-bold">{{ $sosmed['type'] }}</div>
                                        <div class="col-lg-6">
                                            <a href="{{ $sosmed['uri'] }}" target="_blank">:
                                                {{ $sosmed['caption'] }}</a>
                                        </div>
                                        <div class="col-lg-2 text-end">
                                            <form action="{{ route('entrepreneur-sosmed-destroy', $sosmed['id']) }}"
                                                method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach

                                <!-- Form Tambah Sosial Media -->
                                <form action="{{ route('entrepreneur-sosmed-store') }}" method="POST"
                                    class="mt-4">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-lg-4 fw-bold">Tipe Sosial Media</div>
                                        <div class="col-lg-8">
                                            <select name="type" class="form-select" required>
                                                <option value="" disabled selected>Pilih Sosial Media</option>
                                                <option value="Instagram">Instagram</option>
                                                <option value="TikTok">TikTok</option>
                                                <option value="WhatsApp">WhatsApp</option>
                                                <option value="Telephone">No. Telp</option>
                                                <option value="Twitter">Twitter</option>
                                                <option value="Facebook">Facebook</option>
                                                <option value="YouTube">YouTube</option>
                                                <option value="LinkedIn">LinkedIn</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-lg-4 fw-bold">URI</div>
                                        <div class="col-lg-8">
                                            <input type="url" name="uri" class="form-control"
                                                placeholder="https://example.com/akun" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-lg-4 fw-bold">Username / Caption</div>
                                        <div class="col-lg-8">
                                            <input type="text" name="caption" class="form-control"
                                                placeholder="@username atau nomor" required>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="bi bi-plus-circle"></i> Tambah Sosial Media
                                        </button>
                                    </div>
                                </form>


                                {{-- <div class="row mb-3">
                                    <div class="col-lg-4 fw-bold">Instagram</div>
                                    <div class="col-lg-8">: (62) 852-1234-5678</div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-4 fw-bold">Tik Tok</div>
                                    <div class="col-lg-8">: (62) 852-1234-5678</div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-4 fw-bold">No. Telp</div>
                                    <div class="col-lg-8">: (62) 852-1234-5678</div>
                                </div> --}}
                            </div>

                            <!-- Foto Usaha -->
                            <h5 class="card-title mt-4">Foto Usaha</h5>
                            <style>
                                .scrollable-row {
                                    overflow-x: auto;
                                    white-space: nowrap;
                                    padding: 10px 0;
                                }

                                .image-wrapper {
                                    position: relative;
                                    display: inline-block;
                                    margin-right: 10px;
                                }

                                .image-wrapper img {
                                    width: 150px;
                                    height: auto;
                                    border-radius: 8px;
                                    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
                                    cursor: pointer;
                                }

                                .delete-btn {
                                    position: absolute;
                                    top: 4px;
                                    right: 4px;
                                    background: rgba(0, 0, 0, 0.6);
                                    color: white;
                                    border: none;
                                    border-radius: 50%;
                                    width: 20px;
                                    height: 20px;
                                    text-align: center;
                                    font-size: 12px;
                                    cursor: pointer;
                                    line-height: 18px;
                                }

                                .delete-btn:hover {
                                    background: red;
                                }

                                #preview-gallery img {
                                    max-width: 500px;
                                    height: auto;
                                    margin-top: 20px;
                                    border-radius: 10px;
                                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
                                }
                            </style>

                            <div class="scrollable-row">
                                @foreach ($galerys as $galery)
                                    <div class="image-wrapper">
                                        <!-- di Blade -->
                                        <form method="POST"
                                            action="{{ route('entrepreneur-galery-destroy', $galery['id']) }}"
                                            onsubmit="return confirm('Hapus gambar ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="delete-btn">&times;</button>
                                        </form>

                                        <img src="{{ config('services.backend_api') . '/storage/' . $galery['photo'] }}"
                                            alt="Foto" onclick="previewImage(this.src)">
                                    </div>
                                @endforeach
                            </div>

                            <div id="preview-gallery"></div>

                            <form action="{{ route('entrepreneur-galery-store') }}" method="POST"
                                enctype="multipart/form-data" id="editEventForm">
                                @csrf
                                <input type="file" name="photo" class="form-control mt-3 mb-3"
                                    id="gallery-upload" accept="image/*" required>
                                <div class="w-fit flex row justify-items-end ">
                                    <button type="submit" class="btn btn-success">
                                        <i class="bi bi-folder-plus"></i> Tambah Gallery
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </section>


    </main>
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

    {{-- preview gallery --}}
    <script>
        function previewImage(src) {
            const previewDiv = document.getElementById('preview-gallery');
            previewDiv.innerHTML = `<img src="${src}" alt="Preview">`;
        }

        document.getElementById('gallery-upload').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage(e.target.result);
                };
                reader.readAsDataURL(file);
            }
        });
    </script>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-o9q+8Vi6j3C3bZf2BWSwW5Okv4VCzyIBPiG+JJTUGsQ=" crossorigin=""></script>
</body>

</html>
