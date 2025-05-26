<!DOCTYPE html>
<html lang="id">

@include('pengusaha.layouts.head')
@include('pengusaha.layouts.scripts')

<body>

    <!-- Header dan Sidebar (Dapat Disesuaikan) -->
    @include('pengusaha.layouts.header')
    @include('pengusaha.layouts.sidebar')

    <main id="main" class="main" style="margin-bottom: 35px;">
        <div class="pagetitle">
            <h1>Edit Produk</h1>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form Edit Produk</h5>

                            <!-- Form untuk mengedit produk -->
                            <form action="{{ route('entrepreneur-product-update', ['id' => $product['id']]) }}"
                                method="POST" enctype="multipart/form-data" id="editEventForm">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <!-- Nama Produk -->
                                    <div class="col-12">
                                        <label for="namaProduk" class="form-label">Nama Produk</label>
                                        <input type="text" name="name" class="form-control" id="namaProduk"
                                            placeholder="Masukkan nama produk" required value="{{ $product['name'] }}">
                                    </div>

                                    <!-- Harga Produk -->
                                    <div class="col-12 mt-3">
                                        <label for="hargaProduk" class="form-label">Harga Produk</label>
                                        <input type="number" name="price" class="form-control" id="hargaProduk"
                                            placeholder="Masukkan harga produk" required
                                            value="{{ $product['price'] }}">
                                    </div>

                                    <!-- Deskripsi Produk -->
                                    <div class="col-12 mt-3">
                                        <label for="deskripsiProduk" class="form-label">Deskripsi Produk</label>
                                        <textarea name="detail" class="form-control" id="deskripsiProduk" rows="4"
                                            placeholder="Masukkan deskripsi produk" required>{{ $product['detail'] }}</textarea>
                                    </div>

                                    <!-- Foto Produk -->
                                    <div class="col-12 mt-3">
                                        <label for="fotoProduk" class="form-label">Foto Produk</label>
                                        <div id="preview" class="mt-2 mb-4">
                                            @if (!empty($product['photo']))
                                                <img src="{{ config('services.backend_api') . '/storage/' . $product['photo'] }}"
                                                    alt="Foto Produkt Sebelumnya" class="rounded border mt-1"
                                                    style="max-width: 320px;">
                                            @endif
                                        </div>

                                        <input type="file" name="photo" class="form-control" id="fotoEvent"
                                            accept="image/*">
                                        {{-- <small class="text-muted">Kosongkan jika tidak ingin mengganti foto
                                            produk</small> --}}
                                        <!-- Menampilkan foto produk yang sudah ada -->
                                        {{-- <div class="mt-2">
                                            <img src="https://via.placeholder.com/100" alt="Foto Produk" width="100">
                                        </div> --}}
                                    </div>

                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
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
                    Produk Anda berhasil disimpan.
                </div>
                <div class="modal-footer">
                    <a href="{{ route('entrepreneur-product') }}" class="btn btn-success">Kembali ke Daftar Produk</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Gagal Simpan -->
    <div class="modal fade" id="failureModal" tabindex="-1" aria-labelledby="failureModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="failureModalLabel">Gagal Simpan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Terjadi kesalahan saat menyimpan produk Anda. Silakan coba lagi.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Script untuk Bootstrap (Untuk Modal dan Interaksi Lainnya) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


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
        // Menangani form submission
        document.getElementById("editProductForm").onsubmit = function(event) {
            event.preventDefault();

            // Simulasikan proses penyimpanan dengan random (gantilah dengan proses sebenarnya)
            let success = Math.random() > 0.5; // Randomly simulate success or failure

            if (success) {
                // Menampilkan modal Berhasil Simpan
                var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                successModal.show();
            } else {
                // Menampilkan modal Gagal Simpan
                var failureModal = new bootstrap.Modal(document.getElementById('failureModal'));
                failureModal.show();
            }
        };
    </script>

</body>

</html>
