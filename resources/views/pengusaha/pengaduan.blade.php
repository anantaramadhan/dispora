<!DOCTYPE html>
<html lang="en">

@include('pengusaha.layouts.head')
@include('pengusaha.layouts.scripts')

<body>

  @include('pengusaha.layouts.header')
  @include('pengusaha.layouts.sidebar')

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Form Pengaduan</h1>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
           
                <div class="mb-3">
                  <label for="subjek" class="form-label">Subjek Pengaduan</label>
                  <input type="text" class="form-control" id="subjek" name="subjek" placeholder="Masukkan subjek pengaduan" required>
                </div>

                <div class="mb-3">
                  <label for="deskripsi" class="form-label">Deskripsi Pengaduan</label>
                  <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" placeholder="Deskripsikan masalah yang Anda alami" required></textarea>
                </div>

                <div class="mb-5">
                  <label for="foto" class="form-label">Upload Foto Bukti</label>
                  <input type="file" class="form-control" id="foto" name="foto" accept="image/*" required>
                </div>

                <div class="d-flex justify-content-end">
                <a class="btn btn-primary w-100">Kirim Pengaduan</a>
              </div>

                
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <style>
    .card {
      padding: 20px;
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-label {
      font-weight: bold;
    }

    .form-control {
      border-radius: 8px;
    }



  </style>

</body>

</html>
