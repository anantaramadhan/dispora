<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ekraf.IN / Lupa Kata Sandi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('admin.layouts.scripts')
  @include('admin.layouts.head')

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
                    <h5 class="card-title text-center pb-0 fs-4">Lupa Kata Sandi</h5>
                    <p class="text-center small">Masukkan email Anda untuk menerima instruksi pengaturan ulang kata sandi, lalu masukkan kode konfirmasi yang dikirim ke email Anda.</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate>

                    <!-- Input Email -->
                    <div class="col-12" id="emailDiv">
                      <label for="yourEmail" class="form-label">Alamat Email</label>
                      <div class="input-group has-validation">
                        <input type="email" name="email" class="form-control" id="yourEmail" required>
                        <div class="invalid-feedback">Harap masukkan alamat email yang valid.</div>
                      </div>
                    </div>

                    <!-- Tombol Kirim untuk Mengirim Kode Konfirmasi -->
                    <div class="col-12" id="sendCodeDiv">
                      <button class="btn btn-primary w-100" type="submit" id="sendCodeButton">Kirim Kode Konfirmasi</button>
                    </div>

                    <!-- Input Kode Konfirmasi -->
                    <div class="col-12" id="confirmationCodeDiv" style="display: none;">
                      <label for="confirmationCode" class="form-label">Kode Konfirmasi</label>
                      <input type="text" name="confirmationCode" class="form-control" id="confirmationCode" required>
                      <div class="invalid-feedback">Harap masukkan kode konfirmasi yang valid.</div>
                    </div>

                    <!-- Tombol Verifikasi Kode -->
                    <div class="col-12" id="verifyCodeDiv" style="display: none;">
                      <button class="btn btn-primary w-100" type="submit">Verifikasi Kode</button>
                    </div>

                    <!-- Tombol Kirim Ulang Kode -->
                    <div class="col-12" id="resendCodeDiv" style="display: none;">
                      <button class="btn btn-secondary w-100" type="button" id="resendCodeButton">Kirim Ulang Kode</button>
                    </div>

                    <!-- Tautan kembali ke halaman login -->
                    <div class="col-12">
                      <p class="small mb-0">Sudah ingat kata sandi? <a href="{{ route('login') }}">Kembali ke Masuk</a></p>
                    </div>

                  </form>

                </div>
              </div>

              <div class="credits">
                Dirancang oleh <a href="https://bootstrapmade.com/">Ekraf.IN Teams</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script>
    // Mengubah tampilan form setelah mengirimkan email
    document.getElementById('sendCodeButton').addEventListener('click', function(event) {
      event.preventDefault(); // Mencegah form submit langsung

      // Sembunyikan email input dan tombol kirim kode
      document.getElementById('emailDiv').style.display = 'none';
      document.getElementById('sendCodeDiv').style.display = 'none';

      // Tampilkan input kode konfirmasi dan tombol verifikasi kode
      document.getElementById('confirmationCodeDiv').style.display = 'block';
      document.getElementById('verifyCodeDiv').style.display = 'block';

      // Tampilkan tombol kirim ulang kode
      document.getElementById('resendCodeDiv').style.display = 'block';
    });

    // Fungsi untuk kirim ulang kode konfirmasi
    document.getElementById('resendCodeButton').addEventListener('click', function(event) {
      event.preventDefault(); // Mencegah form submit langsung

      // Simulasi pengiriman ulang kode (Di backend, Anda perlu menambahkan logika untuk mengirim kode konfirmasi ulang)
      alert('Kode konfirmasi telah dikirim ulang ke email Anda!');
    });
  </script>

</body>

</html>
