<!DOCTYPE html>
<html lang="en">

@include('pengusaha.layouts.head')
@include('pengusaha.layouts.scripts')

<body>

    @include('pengusaha.layouts.header')
    @include('pengusaha.layouts.sidebar')
    @include('components.alert')

    <main id="main" class="main" style="margin-bottom: 35px;">
        <div class="pagetitle">
            <h1>Produk</h1>
            <style>
                /* CSS untuk menggeser tombol "Tampilkan Selengkapnya" ke kiri */
                .card-body .btn-link {
                    /* Geser tombol sedikit ke kiri */
                    margin-top: -30px;
                }
            </style>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body pt-4">
                            <!-- Kolom Pencarian Produk -->
                            <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap">
                                <form action="{{ route('entrepreneur-product') }}" method="GET"
                                    class="d-flex mb-2 mb-md-0" style="flex-grow: 1; max-width: 600px;">
                                    <input type="text" name="search" id="searchInput" class="form-control me-2"
                                        placeholder="Cari Produk..." value="{{ request('search') }}">
                                    <button type="submit" class="btn btn-primary me-2">Cari</button>

                                    @if (request('search'))
                                        <a href="{{ route('entrepreneur-product') }}" class="btn btn-outline-secondary"
                                            title="Reset">
                                            &times;
                                        </a>
                                    @endif
                                </form>

                                <a href="{{ route('entrepreneur-product-form') }}"
                                    class="btn btn-sm btn-success ms-3 mt-0 mt-md-0 align-self-center">
                                    <i class="bi bi-plus-circle"></i> Tambah Produk
                                </a>
                            </div>




                            <!-- Wrapper Scroll -->
                            <div class="overflow-auto" style="white-space: nowrap;">
                                <div class="d-flex flex-row" style="gap: 1rem; padding-bottom: 1rem;">
                                    @if ($products == null)
                                    @else
                                        @foreach ($products as $product)
                                            <div class="card" style="min-width: 250px; max-width: 250px;">
                                                <img src="{{ config('services.backend_api') . '/storage/' . $product['photo'] }}"
                                                    class="card-img-top" alt="foto produk"
                                                    style="width: 100%; height: 250px; object-fit: cover;">
                                                <div class="card-body">
                                                    <h5 class="card-title"
                                                        style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                        {{ $product['name'] }}
                                                    </h5>
                                                    <p class="card-text" id="deskripsiProduk1"
                                                        style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                                                        {{ $product['detail'] }}
                                                    </p>
                                                    {{-- <button class="btn btn-link p-0" id="btnShowMore1"
                                                        onclick="toggleDescription(1)">Detail</button> --}}
                                                </div>
                                                <div class="card-footer text-muted">
                                                    <span class="price"><b>Rp</b> {{ $product['price'] }}</span>
                                                    <div class="d-flex justify-content-end mt-2">
                                                        <a href="{{ route('entrepreneur-product-show', $product['id']) }}"
                                                            class="btn btn-sm btn-warning me-2">Edit</a>
                                                        <form
                                                            action="{{ route('entrepreneur-product-destroy', $product['id']) }}"
                                                            method="POST" class="d-inline"
                                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-sm btn-danger me-2">Hapus</button>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                    <!-- Tambahkan produk lain dengan struktur yang sama -->

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- JavaScript untuk Pencarian dan Toggle Deskripsi -->
    <script>
        // Fungsi untuk mencari produk berdasarkan input
        function searchTable() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toLowerCase();
            table = document.getElementById("eventTable");
            tr = table.getElementsByTagName("tr");

            for (i = 1; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td");
                var matchFound = false;

                // Loop melalui setiap sel di baris
                for (var j = 0; j < td.length; j++) {
                    if (td[j]) {
                        txtValue = td[j].textContent || td[j].innerText;
                        if (txtValue.toLowerCase().indexOf(filter) > -1) {
                            matchFound = true;
                            break;
                        }
                    }
                }

                // Menampilkan baris jika ada kecocokan, jika tidak sembunyikan
                if (matchFound) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    </script>

</body>

</html>
