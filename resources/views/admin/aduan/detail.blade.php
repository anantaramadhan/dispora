<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.head')
@include('admin.layouts.scripts')

<body>

  @include('admin.layouts.header')
  @include('admin.layouts.sidebar')

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Detail Pengaduan</h1>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
         
          <div class="detail-body">
            <div class="detail-item">
              <span class="label">Subjek</span>
              <span class="value">Terjadi Error pada halaman Beranda</span>
            </div>
            <div class="detail-item">
              <span class="label">Tanggal</span>
              <span class="value">12 Mei 2025</span>
            </div>
            <div class="detail-item">
              <span class="label">Deskripsi</span>
              <span class="value">Ketika saya telah menambahkan jumlah produk mak tampilan jumlah produk pada halaman beranda tidak mau menambah</span>
            </div>
            <div class="detail-item foto-bukti-container">
              <span class="label foto-bukti-label">Foto Bukti</span>
              <img src="{{ asset('assets/img/logoekraf.png') }}" alt="Foto Bukti" class="img-fluid bukti-foto">
            </div>
            
            <!-- Tombol Hapus dan Detail dimasukkan di dalam card-body -->
            <div class="action-buttons">
              <button class="btn btn-danger">Hapus</button>
              <a href="{{ route('usaha.info', ['id' => 1]) }}" class="btn btn-primary">Detail Usaha</a>
            </div>
          
          </div>
        </div>
      </div>
    </section>
  </main>

  <style>
    .detail-body {
      padding: 15px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      position: relative; /* Menambahkan relative positioning untuk penempatan tombol */
    }
    .detail-item {
      margin-bottom: 15px;
    }
    .detail-item .label {
      font-weight: bold;
      color: #555;
    }
    .detail-item .value {
      display: block;
      margin-top: 5px;
      color: #333;
    }
    .foto-bukti-container {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }
    .foto-bukti-label {
      font-weight: bold;
      color: #555;
      margin-bottom: 5px;
    }
    .bukti-foto {
      width: 35%; /* Mengubah ukuran foto menjadi lebih kecil */
      height: auto;
      border-radius: 8px;
    }
    .action-buttons {
      display: flex;
      justify-content: flex-start;
      gap: 15px;
      margin-top: 20px;
      position: absolute; /* Membuat tombol berada di bawah dan kanan */
      bottom: 20px; /* Memberikan jarak 20px dari bawah */
      right: 20px; /* Memberikan jarak 20px dari kanan */
    }
    .action-buttons button, .action-buttons a {
      padding: 10px 20px;
      font-size: 14px;
      border-radius: 5px;
      text-align: center;
    }
  </style>

</body>

</html>
