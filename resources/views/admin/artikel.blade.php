<!DOCTYPE html>
 <html lang="en">
@include('admin.layouts.head')
@include('admin.layouts.scripts')
 <body>
  @include('admin.layouts.header')
  @include('admin.layouts.sidebar')
   <main id="main" class="main">
    <!-- Notifikasi Sukses/Gagal -->
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
    <!-- Header: Judul + Search -->
     <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap">
      <div class="pagetitle">
        <h1>Artikel</h1>
       </div>
      <div class="flex-grow-1 d-flex justify-content-center">
        <form class="d-flex w-50" method="GET" action="{{ route('artikel') }}">
          <div class="input-group w-100">
            <input type="text" class="form-control" name="query" placeholder="Search artikel..." aria-label="Search">
            <button class="btn btn-primary" type="submit">
              <i class="bi bi-search"></i>
            </button>
          </div>
        </form>
      </div>
       <div style="width: 100px;"></div>
    </div>
    <!-- Filter dan Tombol Tambah -->
    <div class="d-flex justify-content-end mb-4 w-100">
      <div class="dropdown me-2">
        <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-funnel"></i> Filter
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Filter 1</a></li>
          <li><a class="dropdown-item" href="#">Filter 2</a></li>
        </ul>
       </div>
      <a href="{{ route('artikel.tambah') }}" class="btn btn-success btn-sm">
        <i class="bi bi-plus-lg"></i> Tambah
      </a>
    </div>
    <!-- Debug Data -->
    {{-- <pre>{{ print_r($articles, true) }}</pre> --}}
    <!-- Artikel Cards -->
    <div class="row">
      @forelse ($articles as $article)
        <div class="col-md-3 mb-4">
          <div class="card">
            @if (!empty($article['thumbnail_url']))
              <img src="{{ $article['thumbnail_url'] }}" class="card-img-top" alt="Thumbnail" style="max-height: 200px; object-fit: cover;">
            @else
              <img src="{{ asset('assets/img/logoekraf.png') }}" class="card-img-top" alt="Default Thumbnail" style="max-height: 200px; object-fit: cover;">
            @endif
            <div class="card-body">
              <h5 class="card-title" style="font-size: 1.1rem;">{{ $article['title'] }}</h5>
              <p class="card-text" style="font-size: 0.9rem;">{{ $article['short_description'] }}</p>
              <div class="d-flex justify-content-start gap-2">
                <a href="{{ route('artikel.edit', $article['id']) }}" class="btn btn-primary btn-sm">
                  <i class="bi bi-pencil-square"></i> Edit
                </a>
                <form action="{{ route('artikel.destroy', $article['id']) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm">
                    <i class="bi bi-trash"></i> Hapus
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      @empty
        <p>Tidak ada artikel tersedia.</p>
      @endforelse
    </div>
   </main>
</body>
 </html>