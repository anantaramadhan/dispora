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
            <h1>Eventmu</h1>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body pt-4">
                            <!-- Kolom Pencarian Terpisah -->
                            <div class="d-flex justify-content-between mb-3">
                                <input type="text" id="searchInput" class="form-control w-50"
                                    placeholder="Cari Event..." onkeyup="searchTable()">

                                <!-- Button Filter dan Button Ajukan -->
                                <div class="d-flex">
                                    <button class="btn btn-sm btn-outline-secondary me-2" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="bi bi-funnel"></i> Filter
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Filter 1</a>
                                        <a class="dropdown-item" href="#">Filter 2</a>
                                    </div>

                                    <!-- Button Ajukan Event dengan Warna Hijau yang Mengarah ke Halaman Tambah Event -->
                                    <a href="{{ route('entrepreneur-event-form') }}" class="btn btn-sm btn-success">
                                        <i class="bi bi-plus-circle"></i> Ajukan Event
                                    </a>
                                </div>
                            </div>

                            <!-- Tabel Data Event -->
                            <table class="table table-hover" id="eventTable">
                                <thead>
                                    <tr>
                                        <th>No</th> <!-- Kolom Nomor -->
                                        <th>Event</th> <!-- Gabungkan Foto dan Deskripsi -->
                                        <th>Tanggal Event</th>
                                        <th>Status Event</th> <!-- Kolom Status Event -->
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($events as $event)
                                        <tr>

                                            <td>{{ $loop->iteration }}</td> <!-- Nomor -->
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    {{-- {{ asset('assets/img/logoekraf.png') }} --}}
                                                    <img src="{{ config('services.backend_api') . '/storage/' . $event['thumbnail'] }}"
                                                        alt="{{ config('services.backend_api') . '/storage/' . $event['thumbnail'] }}"
                                                        class="img-fluid" width="60" class="me-2">
                                                    <div class="ms-2">
                                                        <strong>{{ Str::limit($event['title'], 20, '...') }}</strong>
                                                        <p class="mb-0">
                                                            {{ Str::limit($event['description'], 40, '...') }}</p>
                                                    </div>
                                                </div>
                                            </td> <!-- Gabungkan Foto dan Deskripsi dengan jarak antara keduanya -->
                                            <td>{{ $event['event_date'] }}</td>
                                            <td>
                                                @if ($event['is_approved'] == 1)
                                                    <span class="badge bg-success">Aktif</span>
                                                @elseif ($event['is_approved'] == 2)
                                                    <span class="badge bg-warning text-dark">Menunggu</span>
                                                @elseif ($event['is_approved'] == 0)
                                                    <span class="badge bg-danger">Batal</span>
                                                @else
                                                    <span class="badge bg-secondary">Tidak diketahui</span>
                                                @endif
                                            </td> <!-- Status Event -->
                                            <td>
                                                @if ($event['is_approved'] == 1)
                                                    <a href="{{ route('entrepreneur-event-show', ['id' => $event['id']]) }}"
                                                        class="btn btn-sm btn-primary">Detail</a>
                                                @elseif ($event['is_approved'] == 2)
                                                    <a href="{{ route('entrepreneur-event-show', ['id' => $event['id']]) }}"
                                                        class="btn btn-sm bg-warning">Edit Pengajuan</a>
                                                @elseif ($event['is_approved'] == 0)
                                                    <a href="{{ route('entrepreneur-event-show', ['id' => $event['id']]) }}"
                                                        class="btn btn-sm btn-danger">Ajukan Ulang</a>
                                                @else
                                                    <span class="badge btn-secondary">Tidak diketahui</span>
                                                @endif

                                                <form
                                                    action="{{ route('entrepreneur-event-destroy', parameters: ['id' => $event['id']]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                                </form>


                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- <pre>{{ print_r($pagination, true) }}</pre> --}}
                            @if (isset($pagination['last_page']) && $pagination['last_page'] > 1)
                                <nav>
                                    <ul class="pagination justify-content-center">
                                        {{-- Tombol sebelumnya --}}
                                        <li class="page-item {{ $pagination['current_page'] == 1 ? 'disabled' : '' }}">
                                            <a class="page-link" href="?page={{ $pagination['current_page'] - 1 }}"
                                                aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>

                                        {{-- Link halaman --}}
                                        @for ($i = 1; $i <= $pagination['last_page']; $i++)
                                            <li
                                                class="page-item {{ $pagination['current_page'] == $i ? 'active' : '' }}">
                                                <a class="page-link"
                                                    href="?page={{ $i }}">{{ $i }}</a>
                                            </li>
                                        @endfor

                                        {{-- Tombol selanjutnya --}}
                                        <li
                                            class="page-item {{ $pagination['current_page'] == $pagination['last_page'] ? 'disabled' : '' }}">
                                            <a class="page-link" href="?page={{ $pagination['current_page'] + 1 }}"
                                                aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- JavaScript untuk Pencarian -->
    <script>
        function searchTable() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toLowerCase();
            table = document.getElementById("eventTable");
            tr = table.getElementsByTagName("tr");

            for (i = 1; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td");
                var matchFound = false;

                // Loop through each cell in the row
                for (var j = 0; j < td.length; j++) {
                    if (td[j]) {
                        txtValue = td[j].textContent || td[j].innerText;
                        if (txtValue.toLowerCase().indexOf(filter) > -1) {
                            matchFound = true;
                            break;
                        }
                    }
                }

                // Show the row if any match is found, else hide it
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
