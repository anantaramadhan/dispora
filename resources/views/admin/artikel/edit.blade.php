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
</body>
 </html>