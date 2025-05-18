<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.head')
@include('admin.layouts.scripts')

<body>
  @include('admin.layouts.header')
  @include('admin.layouts.sidebar')

  <main id="main" class="main">
    <!-- Page Title -->
    <div class="pagetitle mb-4">
      <h1>Edit Artikel</h1>
    </div>

    <!-- Form Edit Artikel -->
    <div class="card">
      <div class="card-body">
        @if (session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        @if (isset($article) && $article)
          <form method="POST" action="{{ route('artikel.update', $article['id']) }}" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <!-- Judul Artikel -->
            <div class="mb-3">
              <label for="judul" class="form-label">Judul Artikel</label>
              <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul artikel" value="{{ old('judul', $article['title']) }}" required>
            </div>

            <!-- Deskripsi -->
            <div class="mb-3">
              <label for="deskripsi" class="form-label">Deskripsi</label>
              <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" placeholder="Tulis deskripsi artikel..." required>{{ old('deskripsi', $article['content']) }}</textarea>
            </div>

            <!-- Tanggal Kadaluwarsa -->
            <div class="mb-3">
              <label for="tanggal" class="form-label">Tanggal Kadaluwarsa (Opsional)</label>
              <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal', $article['expires_at']) }}">
            </div>

            <!-- Upload Foto -->
            <div class="mb-3">
              <label for="foto" class="form-label">Upload Foto (Biarkan kosong jika tidak ingin mengganti)</label>
              <input class="form-control" type="file" id="foto" name="foto" accept="image/*">
              @if (!empty($article['thumbnail_url']))
                <img src="{{ $article['thumbnail_url'] }}" alt="Current Thumbnail" style="max-height: 100px; margin-top: 10px;">
              @endif
            </div>

            <!-- Tombol Aksi -->
            <div class="d-flex justify-content-between">
              <a href="{{ route('artikel') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Kembali
              </a>
              <div>
                <button type="reset" class="btn btn-danger me-2">
                  <i class="bi bi-x-circle"></i> Batal
                </button>
                <button type="submit" class="btn btn-success">
                  <i class="bi bi-check-lg"></i> Simpan Artikel
                </button>
              </div>
            </div>
          </form>
        @else
          <p>Artikel tidak ditemukan.</p>
        @endif
      </div>
    </div>
  </main>

  <!-- Modal Berhasil Simpan -->
  <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successModalLabel">Berhasil Simpan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Artikel Anda berhasil disimpan.
        </div>
        <div class="modal-footer">
          <a href="{{ route('artikel') }}" class="btn btn-success">Kembali ke Artikel</a>
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
          Terjadi kesalahan saat menyimpan artikel. Silakan coba lagi.
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
    // Menangani form submission
    document.getElementById("editArticleForm").onsubmit = function (event) {
      event.preventDefault();

      // Simulasikan proses penyimpanan dengan random (gantilah dengan proses sebenarnya)
      let success = Math.random() > 0.5;  // Randomly simulate success or failure

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
