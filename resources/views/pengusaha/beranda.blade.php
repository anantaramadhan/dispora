<!DOCTYPE html>
<html lang="id">

@include('pengusaha.layouts.head')
@include('pengusaha.layouts.scripts')

<body>

  @include('pengusaha.layouts.header')
  @include('pengusaha.layouts.sidebar')

  <main id="main" class="main" style="margin-buttom: 35px;">
    <div class="pagetitle">
      <h1>Beranda</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <!-- START: Venue Cards in One Row -->
          <div class="row">
            <!-- Jumlah Event -->
            <div class="col-xxl-3 col-md-6 col-sm-12 mb-3">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Event</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-calendar-event"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span>
                      <span class="text-muted small pt-2 ps-1">increase</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Jumlah Produk -->
            <div class="col-xxl-3 col-md-6 col-sm-12 mb-3">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Produk</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-box"></i>
                    </div>
                    <div class="ps-3">
                      <h6>234</h6>
                      <span class="text-success small pt-1 fw-bold">8%</span>
                      <span class="text-muted small pt-2 ps-1">increase</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Info Produk -->
            <div class="col-xxl-3 col-md-6 col-sm-12 mb-3">
              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Info Produk</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-clipboard"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span>
                      <span class="text-muted small pt-2 ps-1">decrease</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END: Venue Cards -->

          <!-- Data Produk -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Daftar Produk</h5>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Foto Produk</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><img src="path_to_image/product_a.jpg" alt="Produk A" style="width: 50px; height: 50px; object-fit: cover;"></td>
                        <td>Produk A</td>
                        <td>Deskripsi singkat untuk Produk A, yang mencakup fitur dan manfaatnya.</td>
                        <td>Rp 500,000</td>
                      </tr>

                      <tr>
                        <td><img src="path_to_image/product_b.jpg" alt="Produk B" style="width: 50px; height: 50px; object-fit: cover;"></td>
                        <td>Produk B</td>
                        <td>Deskripsi singkat untuk Produk B, yang mencakup fitur dan manfaatnya.</td>
                        <td>Rp 150,000</td>
                      </tr>

                      <tr>
                        <td><img src="path_to_image/product_c.jpg" alt="Produk C" style="width: 50px; height: 50px; object-fit: cover;"></td>
                        <td>Produk C</td>
                        <td>Deskripsi singkat untuk Produk C, yang mencakup fitur dan manfaatnya.</td>
                        <td>Rp 30,000</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div><!-- End Row -->

           <!-- Card Event -->
            <div class="col-lg-4">
              <div class="card info-card event-card">
                <div class="card-body">
                  <h5 class="card-title">Eventmu</h5>
                  <!-- Event 1 -->
                  <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('assets/img/logoekraf.png') }}" alt="Event 1" class="img-fluid" style="height: 100px; width: 100px; object-fit: cover; border-radius: 10px;">
                    <div class="ms-3">
                      <h6>Event Judul 1</h6>
                      <p class="text-muted small">Event ini akan membahas tentang inovasi produk dan pengembangan bisnis dalam industri digital.</p>
                    </div>
                  </div>

                  <!-- Event 2 -->
                  <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('assets/img/logoekraf.png') }}" alt="Event 2" class="img-fluid" style="height: 100px; width: 100px; object-fit: cover; border-radius: 10px;">
                    <div class="ms-3">
                      <h6>Event Judul 2</h6>
                      <p class="text-muted small">Workshop untuk pemilik bisnis yang ingin memperdalam strategi pemasaran digital di media sosial.</p>
                    </div>
                  </div>

                  <!-- Event 3 -->
                  <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('assets/img/logoekraf.png') }}" alt="Event 3" class="img-fluid" style="height: 100px; width: 100px; object-fit: cover; border-radius: 10px;">
                    <div class="ms-3">
                      <h6>Event Judul 3</h6>
                      <p class="text-muted small">Diskusi panel tentang tren pasar dan bagaimana memanfaatkan teknologi untuk pertumbuhan bisnis.</p>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div><!-- End Row -->

        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->

</body>
</html>
