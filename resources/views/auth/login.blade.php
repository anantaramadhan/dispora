<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Ekraf.IN / Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('admin.layouts.scripts')
  @include('admin.layouts.head')
</head>

<body>
  <main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Masuk ke Akun Anda</h5>
                    <p class="text-center small">Masukkan nama pengguna & kata sandi Anda untuk masuk</p>
                  </div>
                  <form class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Nama Pengguna</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Harap masukkan nama pengguna Anda.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Kata Sandi</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Harap masukkan kata sandi Anda!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Ingat saya</label>
                      </div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Masuk</button>
                    </div>

                    <div class="col-12">
                      <p class="small mb-0">Lupa kata sandi? <a href="{{ route('lupasandi') }}">Klik di sini</a> untuk mengatur ulang kata sandi.</p>
                    </div>
                  </form>
                </div>
              </div>

              <div class="credits">
                <!-- Semua tautan di footer harus tetap utuh. -->
                <!-- Anda bisa menghapus tautan hanya jika Anda membeli versi pro. -->
                <!-- Informasi lisensi: https://bootstrapmade.com/license/ -->
                <!-- Beli versi pro dengan formulir kontak PHP/AJAX yang berfungsi: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Dirancang oleh <a href="https://bootstrapmade.com/">Ekraf.IN Teams</a>
              </div>

            </div>
          </div>
        </div>
      </section>
    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</body>

</html>
