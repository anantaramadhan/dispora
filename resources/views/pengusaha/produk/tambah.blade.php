<!DOCTYPE html>
<html lang="id">

@include('pengusaha.layouts.head')
@include('pengusaha.layouts.scripts')

<body>

    @include('pengusaha.layouts.header')
    @include('pengusaha.layouts.sidebar')

    <main id="main" class="main" style="margin-bottom: 35px;">
        <div class="pagetitle">
            <h1>Tambah Produk</h1>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form Tambah Produk</h5>

                            <!-- Form untuk menambah event -->
                            <form class="container" method="POST" action="{{ route('entrepreneur-product-store') }}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-12">
                                        <label for="namaProduk" class="form-label"><b>Nama Produk</b></label>
                                        <input type="text" name="name" class="form-control" id="namaProduk"
                                            placeholder="Masukkan nama produk" required>
                                    </div>

                                    <div class="col-12 mt-3">
                                        <label for="hargaProduk" class="form-label"><b>Harga Produk</b></label>
                                        <input type="number" name="price" class="form-control" id="hargaProduk"
                                            placeholder="Masukkan harga produk" required>
                                    </div>

                                    <div class="col-12 mt-3">
                                        <label for="deskripsiProduk" class="form-label"><b>Deskripsi Produk</b></label>
                                        <textarea name="detail" class="form-control" id="deskripsiProduk" rows="4"
                                            placeholder="Masukkan deskripsi produk" required></textarea>
                                    </div>

                                    <div class="col-12 mt-3">
                                        <label for="fotoProduk" class="form-label"><b>Foto Produk</b></label>
                                        <div class="col-12 mt-3">
                                            <div id="preview" class="mt-2"></div>
                                            <input type="file" name="photo" class="form-control" id="fotoEvent"
                                                accept="image/*" required>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-primary w-100">Tambah Produk</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- Modal Berhasil Tambah Produk -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Berhasil Tambah Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Produk Anda telah berhasil ditambahkan.
                </div>
                <div class="modal-footer">
                    <a href="{{ route('entrepreneur-product') }}" class="btn btn-success">Kembali ke Daftar
                        Produk</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Gagal Tambah Produk -->
    <div class="modal fade" id="failureModal" tabindex="-1" aria-labelledby="failureModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="failureModalLabel">Gagal Tambah Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Terjadi kesalahan saat menambahkan produk. Silakan coba lagi.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Script untuk Modal -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

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
        // Menangani form submission
        document.getElementById("addProductForm").onsubmit = function(event) {
            event.preventDefault();

            // Simulasikan proses penyimpanan dengan random (gantilah dengan proses sebenarnya)
            let success = Math.random() > 0.5; // Randomly simulate success or failure

            if (success) {
                // Menampilkan modal Berhasil Tambah Produk
                var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                successModal.show();
            } else {
                // Menampilkan modal Gagal Tambah Produk
                var failureModal = new bootstrap.Modal(document.getElementById('failureModal'));
                failureModal.show();
            }
        };
    </script>

</body>

</html>
