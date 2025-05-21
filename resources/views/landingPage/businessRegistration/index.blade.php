<!DOCTYPE html>
<html lang="en">


@include('components.head2')

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<style>
    body {
        /* padding-top: 73px; */
        background-color: white;
    }

    #map {
        height: 300px;
        width: 100%;
    }

    .cardSection {
        display: none;
    }

    .cardSection.active {
        display: flex;
    }
</style>

<!-- Flatpickr CSS -->
<link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">


<body class="overflow-x-hidden min-vh-100"
    style="background-image: url('https://images.unsplash.com/photo-1663942535328-4adb74bb0380?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover;">


    <section class="container-xxl px-0 px-md-5 h-100 d-flex flex-column align-items-center">
        <div class="min-vw-100 p-4 d-flex justify-content-end">
            <div class="d-flex flex-row gap-2 align-items-center">
                <img src="{{ asset('assets/img/logoEkrafWhite.png') }}" alt="" style="width: 40px;">
                <p class="fw-bold text-white mb-0 fs-3">Ekraf<span class="fw-medium">Kuy</h2>
            </div>
        </div>

        <form class="container" method="POST" action="{{ route('submit.business') }}" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div id="card1"
                        class="text-white p-4 flex-column rounded-4 gap-5 glass-card cardSection active align-items-md-start">
                        <div class="d-flex flex-column gap-2 align-items-center">
                            <h2 class="fw-semibold">Daftarkan Usahanmu</h2>
                            <p class="text-center">Masukkan data dengan benar dan jika masih bingung terhadap sektor apa
                                usaha
                                anda, anda bisa
                                menyakan langsung ke <a class="fw-semibold text-white text-decoration-underline"
                                    href="">Admin Ekonomi Kreatif</a></p>
                        </div>

                        <div class="d-flex flex-column gap-3 w-100">
                            <div class="d-flex flex-column gap-2 w-100">
                                <p class="fw-semibold mb-0">Nama Usaha</p>
                                <input id="business-name" name="business-name"
                                    class="form-control rounded-pill border-0 py-2 px-4"
                                    placeholder="masukkan nama usaha disini..." type="text" required>
                            </div>

                            <div class="d-flex flex-column gap-2 w-100">
                                <p class="fw-semibold mb-0">Nama Pemilik</p>
                                <input id="owner-name" name="owner-name"
                                    class="form-control rounded-pill border-0 py-2 px-4"
                                    placeholder="masukkan nama usaha disini..." type="text" required>
                            </div>

                            <div class="d-flex flex-column gap-2 w-100">
                                <p class="fw-semibold mb-0">Deskripsi Usaha</p>
                                <textarea id="business-description" name="business-description"
                                    class="form-control rounded-4 border-0 py-2 px-4 overflow-hidden" style="height: 120px;"
                                    placeholder="masukkan nama usaha disini..." row="4" type="text" required></textarea>
                            </div>

                            <div class="d-flex flex-column gap-2 w-100">
                                <p class="fw-semibold mb-0">Kategori Sektor Ekonomi Kreatif</p>
                                {{-- <input id="business-sector-category" class="form-control rounded-pill py-2 px-4"
                                    list="daftarKota" id="pilihKota" placeholder="Ketik untuk memilih sektor...">
                                <datalist id="daftarKota">
                                    <?php foreach ($data as $item):?>
                                    <option value="<?= $item['title'] ?>">
                                        <?php endforeach; ?>
                                </datalist> --}}
                                <select id="business-sector-category" name="sector_id"
                                    class="form-control rounded-pill py-2 px-4" required>
                                    <option value="">Pilih sektor...</option>
                                </select>


                            </div>
                        </div>

                        <div class="d-flex flex-column gap-4 w-100">
                            <a onclick="tampilkanCard(2)" class="btn btn-primary rounded-pill px-4 py-2">Lanjut</a>
                            <a href="{{ route('landingpage-home') }}"
                                class="w-100 d-flex flex-row justify-content-center text-white">Batal Daftar
                                Usaha</a>
                        </div>
                    </div>

                    {{-- CARD LOKASI --}}
                    <div id="card2" class=" text-white p-4 flex-column rounded-4 gap-5 glass-card cardSection">
                        <div class="d-flex flex-column gap-2 align-items-center">
                            <h2 class="fw-semibold">Daftarkan Usahanmu</h2>
                            <p class="text-center">Klik pada peta untuk menentukan titik koordinat lokasi usaha anda</p>
                        </div>

                        <div class="d-flex flex-column gap-3">

                            <div class="d-flex flex-column gap-2 w-100">
                                <p class="fw-semibold mb-0">Lokasi usaha</p>
                                {{-- <input type="text" id="business-koordinat"
                                    class="form-control mb-3 rounded-pill px-4 py-2"
                                    placeholder="Klik di peta untuk mendapatkan koordinat" readonly> --}}

                                <div id="map" class="rounded-4"></div>
                                <input type="text" id="business-koordinat" name="coordinate"
                                    class="form-control mb-3 rounded-pill px-4 py-2"
                                    placeholder="Klik di peta untuk mendapatkan koordinat" required readonly>
                                <input type="hidden" id="latitude" name="business-latitude" required>
                                <input type="hidden" id="longitude" name="business-longitude" required>

                                <input type="text" id="business-location-name" name="business-location_name"
                                    class="form-control mb-3 rounded-pill px-4 py-2"
                                    placeholder="Nama lokasi otomatis dari peta" readonly>
                            </div>


                        </div>

                        <div class="d-flex flex-column gap-4 w-100">
                            <a onclick="tampilkanCard(3)" class="btn btn-primary rounded-pill px-4 py-2">Lanjut</a>
                            <a onclick="tampilkanCard(1)"
                                class="btn btn-outline-light rounded-pill px-4 py-2">Kembali</a>
                            <a href="{{ route('landingpage-home') }}"
                                class="w-100 d-flex flex-row justify-content-center text-white">Batal
                                Daftar
                                Usaha</a>
                        </div>
                    </div>


                    {{-- CARD DATA TAMBAHAN --}}
                    <div id="card3" class=" text-white p-4 flex-column rounded-4 gap-5 glass-card cardSection">
                        <div class="d-flex flex-column gap-2 align-items-center">
                            <h2 class="fw-semibold">Daftarkan Usahanmu</h2>
                            <p class="text-center">Tambahkan Foto Usaha anda dalam bentuk Foto Produk, tempat, alat
                                usaha,
                                atau surat usaha</p>
                        </div>

                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex flex-column w-100">
                                <p class="fw-semibold mb-0">Foto Bukti Usaha</p>

                                <div id="preview" class="w-100 h-100 d-flex justify-content-center mb-4"></div>

                                <div class="input-group rounded-pill border border-dark overflow-hidden">
                                    <!-- text‐box palsu tempat menampilkan nama file -->
                                    <input type="text" class="form-control border-0 ps-3" placeholder="nama file"
                                        readonly>

                                    <!-- tombol/ikon unggah -->
                                    <label class="input-group-text border-0 pe-3 py-2" style="cursor:pointer;">
                                        {{-- <i class="bi bi-upload text-primary fs-5"></i> --}}
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="blue" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M18 9V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h4M9 3v4a1 1 0 0 1-1 1H4m11 6v4m-2-2h4m3 0a5 5 0 1 1-10 0 5 5 0 0 1 10 0Z" />
                                        </svg>

                                        <input type="file" id="business-proof" name="business-proof" required
                                            class="d-none">
                                    </label>
                                </div>
                            </div>


                        </div>

                        <div class="d-flex flex-column gap-4 w-100">
                            <button type="submit" class="btn btn-primary rounded-pill px-4 py-2">Ajukan
                                Usaha</button>

                            <a onclick="tampilkanCard(2)"
                                class="btn btn-outline-light rounded-pill px-4 py-2">Kembali</a>
                            <a href="{{ route('landingpage-home') }}"
                                class="w-100 d-flex flex-row justify-content-center text-white">Batal
                                Daftar
                                Usaha</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const submitButton = document.getElementById('submit-btn');

            submitButton.addEventListener('click', function(e) {
                e.preventDefault();

                if (!validateCard1() || !validateCard2() || !validateCard3()) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Data Belum Lengkap',
                        text: 'Harap lengkapi semua kolom sebelum mengajukan usaha.',
                        confirmButtonText: 'OK'
                    });
                    return;
                }

                // Jika semua valid, kirim form
                form.submit();
            });

            function validateCard1() {
                const businessName = document.getElementById('business-name').value.trim();
                const ownerName = document.getElementById('owner-name').value.trim();
                const description = document.getElementById('business-description').value.trim();
                const sector = document.getElementById('business-sector-category').value;
                return businessName && ownerName && description && sector;
            }

            function validateCard2() {
                const coordinate = document.getElementById('business-koordinat').value.trim();
                const latitude = document.getElementById('latitude').value.trim();
                const longitude = document.getElementById('longitude').value.trim();
                const locationName = document.getElementById('business-location-name').value.trim();
                return coordinate && latitude && longitude && locationName;
            }

            function validateCard3() {
                const proof = document.getElementById('business-proof').files.length > 0;
                return proof;
            }
        });
    </script>


    <script>
        function tampilkanCard(nomor) {
            // Sembunyikan semua card
            const cards = document.querySelectorAll('.cardSection');
            cards.forEach(card => card.classList.remove('active'));

            // Tampilkan card sesuai nomor
            document.getElementById(`card${nomor}`).classList.add('active');
        }

        // Inisialisasi peta
        var map = L.map('map').setView([-7.6079, 111.9031], 12); // Titik awal: Nganjuk

        // Tambahkan layer peta dari OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Marker yang bisa digerakkan (optional)
        var marker;

        // Event klik pada peta
        // map.on('click', function(e) {
        //     const lat = e.latlng.lat.toFixed(6);
        //     const lng = e.latlng.lng.toFixed(6);

        //     // Tampilkan di input readonly
        //     document.getElementById('business-koordinat').value = `${lat}, ${lng}`;

        //     if (marker) {
        //         marker.setLatLng(e.latlng);
        //     } else {
        //         marker = L.marker(e.latlng).addTo(map);
        //     }

        //     // Simpan nilai ke input hidden
        //     document.getElementById('business-latitude').value = lat;
        //     document.getElementById('business-longitude').value = lng;

        //     // Tampilkan atau pindahkan marker
        //     if (marker) {
        //         marker.setLatLng(e.latlng);
        //     } else {
        //         marker = L.marker(e.latlng).addTo(map);
        //     }

        //     fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}`)
        //         .then(response => response.json())
        //         .then(data => {
        //             const displayName = data.display_name || 'Lokasi tidak diketahui';
        //             document.getElementById('business-location-name').value = displayName;
        //         })
        //         .catch(error => {
        //             console.error('Gagal mengambil nama lokasi:', error);
        //             document.getElementById('business-location-name').value = 'Gagal mengambil nama lokasi';
        //         });
        // });

        map.on('click', function(e) {
            var lat = e.latlng.lat.toFixed(6);
            var lng = e.latlng.lng.toFixed(6);

            // Set input koordinat
            document.getElementById('business-koordinat').value = lat + ', ' + lng;

            document.getElementById('latitude').value = lat;
            document.getElementById('longitude').value = lng;

            // Tambahkan atau perbarui marker
            if (marker) {
                marker.setLatLng(e.latlng);
            } else {
                marker = L.marker(e.latlng).addTo(map);
            }

            // Ambil nama lokasi dari koordinat (reverse geocoding)
            fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}`)
                .then(response => response.json())
                .then(data => {
                    const displayName = data.display_name || 'Lokasi tidak diketahui';
                    document.getElementById('business-location-name').value = displayName;
                })
                .catch(error => {
                    console.error('Gagal mengambil nama lokasi:', error);
                    document.getElementById('business-location-name').value = 'Gagal mengambil nama lokasi';
                });
        });




        // js untuk foto
        // const fileInput = document.getElementById('foto');
        // const textBox = fileInput.closest('.input-group').querySelector('input[type="text"]');
        // const preview = document.getElementById('preview');
        // const MAX_SIZE = 1280; // batas piksel

        // fileInput.addEventListener('change', () => {
        //     // reset tampilan
        //     preview.innerHTML = '';
        //     textBox.value = '';

        //     const file = fileInput.files[0];
        //     if (!file) return;

        //     // pastikan file gambar
        //     if (!file.type.startsWith('image/')) {
        //         alert('File bukan gambar!');
        //         fileInput.value = '';
        //         return;
        //     }

        //     // baca sebagai URL
        //     const url = URL.createObjectURL(file);
        //     const imgTemp = new Image();

        //     imgTemp.onload = () => {
        //         // cek dimensi
        //         if (imgTemp.width > MAX_SIZE || imgTemp.height > MAX_SIZE) {
        //             alert(`Gambar terlalu besar! Batas ${MAX_SIZE}px x ${MAX_SIZE}px.`);
        //             URL.revokeObjectURL(url);
        //             fileInput.value = '';
        //             return;
        //         }

        //         // valid → tampilkan nama & preview
        //         textBox.value = file.name;

        //         const thumb = document.createElement('img');
        //         thumb.src = url;
        //         thumb.classList.add('rounded', 'border', 'mt-1');
        //         thumb.style.maxWidth = '320px';
        //         // thumb.style.maxHeight = '120px';
        //         thumb.style.height = 'auto';
        //         thumb.style.objectFit = 'contain';
        //         preview.appendChild(thumb);
        //     };

        //     imgTemp.onerror = () => {
        //         alert('Tidak dapat membaca gambar.');
        //         URL.revokeObjectURL(url);
        //         fileInput.value = '';
        //     };

        //     imgTemp.src = url;
        // });
        const fileInput = document.getElementById('business-proof');
        const textBox = fileInput.closest('.input-group').querySelector('input[type="text"]');
        const preview = document.getElementById('preview');
        const MAX_FILE_SIZE = 5 * 1024 * 1024; // 1 MB dalam byte

        fileInput.addEventListener('change', () => {
            preview.innerHTML = '';
            textBox.value = '';

            const file = fileInput.files[0];
            if (!file) return;

            // ✅ Validasi MIME type
            if (!['image/jpeg', 'image/png', 'image/webp'].includes(file.type)) {
                alert('Hanya file gambar (.jpg, .png, .webp) yang diperbolehkan!');
                fileInput.value = '';
                return;
            }

            // ✅ Validasi ukuran file
            if (file.size > MAX_FILE_SIZE) {
                alert('Ukuran gambar terlalu besar! Maksimal 5MB.');
                fileInput.value = '';
                return;
            }

            // ✅ Tampilkan preview
            const url = URL.createObjectURL(file);
            textBox.value = file.name;

            const thumb = document.createElement('img');
            thumb.src = url;
            thumb.classList.add('rounded', 'border', 'mt-1');
            thumb.style.maxWidth = '320px';
            thumb.style.height = 'auto';
            thumb.style.objectFit = 'contain';
            preview.appendChild(thumb);
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('https://api-ekrafnganjuk.pbltifnganjuk.com/api/sectors')
                .then(response => response.json())
                .then(data => {
                    const select = document.getElementById('business-sector-category');

                    data.sectors.forEach(sector => {
                        const option = document.createElement('option');
                        option.value = sector.id; // value yang dikirim ke backend
                        option.textContent = sector.name; // teks yang ditampilkan ke user
                        select.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error('Gagal memuat data sektor:', error);
                });
        });
    </script>

    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const submitBtn = document.querySelector('#card3 a.btn-primary');

            submitBtn.addEventListener('click', function(e) {
                e.preventDefault();

                const formData = new FormData();
                formData.append('business_name', document.querySelector('#business-name').value);
                formData.append('owner_name', document.querySelector('#owner-name').value);
                formData.append('description', document.querySelector('#business-description').value);
                formData.append('sector_id', document.querySelector('#business-sector-category').value);
                formData.append('location', document.querySelector('#business-location-name').value);
                formData.append('latitude', document.querySelector('#latitude').value);
                formData.append('longitude', document.querySelector('#longitude').value);
                formData.append('proof', document.querySelector('#business-proof').files[0]);

                const BACKEND_URL = "{{ config('app.backend_url') }}";

                fetch('${BACKEND_URL}/api/visitor/business-submission', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Accept': 'application/json',
                        },
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.message) {
                            alert(data.message);
                            window.location.href = '{{ route('landingpage-home') }}';
                        } else {
                            console.log(data);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
        });
    </script> --}}


</body>

</html>
