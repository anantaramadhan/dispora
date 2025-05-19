<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.head')
@include('admin.layouts.scripts')

<body>

  @include('admin.layouts.header')
  @include('admin.layouts.sidebar')

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Informasi Pengaduan</h1>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body pt-4">
              <!-- Kolom Pencarian Terpisah -->
              <div class="d-flex justify-content-between mb-3">
                <input type="text" id="searchInput" class="form-control w-50" placeholder="Cari aduan..." onkeyup="searchTable()">
                
                <!-- Button Filter dan Tambah di sebelah kanan -->
                <div class="d-flex gap-2">
                  <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-funnel"></i> Filter
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Filter 1</a>
                    <a class="dropdown-item" href="#">Filter 2</a>
                  </div>
                </div>
              </div>

              <!-- Tabel Data aduan -->
              <table class="table table-hover" id="aduanTable">
                <thead>
                  <tr>
                    <th>#</th> <!-- Kolom Nomor -->
                    <th>Subjek</th> <!-- Kolom Subjek -->
                    <th>Nama Pengadu</th> <!-- Kolom Nama Pengadu -->
                    <th>Tanggal aduan</th> <!-- Kolom Tanggal aduan -->
                    <th>Aksi</th> <!-- Kolom Aksi -->
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td> <!-- Nomor -->
                    <td>Keluhan Layanan</td> <!-- Subjek -->
                    <td>Andi</td> <!-- Nama Pengadu -->
                    <td>10 Juni 2025</td> <!-- Tanggal aduan -->
                    <td>
                      <a href="{{ route('admin.aduan.detail', ['id' => 1]) }}" class="btn btn-sm btn-primary">Detail</a>
                      <button class="btn btn-sm btn-danger">Hapus</button>
                    </td> <!-- Aksi -->
                  </tr>
                  <tr>
                    <td>2</td> <!-- Nomor -->
                    <td>Masalah Produk</td> <!-- Subjek -->
                    <td>Rani</td> <!-- Nama Pengadu -->
                    <td>12 Juni 2025</td> <!-- Tanggal aduan -->
                    <td>
                      <a href="{{ route('admin.aduan.detail', ['id' => 2]) }}" class="btn btn-sm btn-primary">Detail</a>
                      <button class="btn btn-sm btn-danger">Hapus</button>
                    </td> <!-- Aksi -->
                  </tr>
                  <tr>
                    <td>3</td> <!-- Nomor -->
                    <td>Proses Pengembalian</td> <!-- Subjek -->
                    <td>Budi</td> <!-- Nama Pengadu -->
                    <td>15 Juni 2025</td> <!-- Tanggal aduan -->
                    <td>
                      <a href="{{ route('admin.aduan.detail', ['id' => 3]) }}" class="btn btn-sm btn-primary">Detail</a>
                      <button class="btn btn-sm btn-danger">Hapus</button>
                    </td> <!-- Aksi -->
                  </tr>
                  <tr>
                    <td>4</td> <!-- Nomor -->
                    <td>Pengembalian Dana</td> <!-- Subjek -->
                    <td>Indra</td> <!-- Nama Pengadu -->
                    <td>18 Juni 2025</td> <!-- Tanggal aduan -->
                    <td>
                      <a href="{{ route('admin.aduan.detail', ['id' => 4]) }}" class="btn btn-sm btn-primary">Detail</a>
                      <button class="btn btn-sm btn-danger">Hapus</button>
                    </td> <!-- Aksi -->
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Modal Detail aduan -->
  <div class="modal fade" id="detailaduanModal" tabindex="-1" aria-labelledby="detailaduanModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="detailaduanModalLabel">Detail aduan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Detail aduan Akan Ditampilkan di Sini -->
          <p><strong>Subjek:</strong> Keluhan Layanan</p>
          <p><strong>Nama Pengadu:</strong> Andi</p>
          <p><strong>Tanggal aduan:</strong> 10 Juni 2025</p>
          <p><strong>Isi aduan:</strong> Saya merasa tidak puas dengan layanan yang diberikan. Proses yang sangat lama dan tidak ada klarifikasi lebih lanjut dari pihak terkait.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript untuk Pencarian -->
  <script>
    function searchTable() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("searchInput");
      filter = input.value.toLowerCase();
      table = document.getElementById("aduanTable");
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
