<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.head')
@include('admin.layouts.scripts')

<body>

  @include('admin.layouts.header')
  @include('admin.layouts.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Beranda</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <!-- START: Venue Cards in One Row -->
          <div class="row">
            <!-- Data Pengguna -->
            <div class="col-xxl-3 col-md-6 col-sm-12 mb-3">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Data Pengguna</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
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

            <!-- Total Usaha -->
            <div class="col-xxl-3 col-md-6 col-sm-12 mb-3">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Total Usaha</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-shop"></i>
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

            <!-- Artikel -->
            <div class="col-xxl-3 col-md-6 col-sm-12 mb-3">
              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Artikel </h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-book"></i>
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

            <!-- Pengajuan Event -->
            <div class="col-xxl-3 col-md-6 col-sm-12 mb-3">
              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Pengajuan Event</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-calendar-check"></i>
                    </div>
                    <div class="ps-3">
                      <h6>27</h6>
                      <span class="text-warning small pt-1 fw-bold">5 Pending</span>
                      <span class="text-muted small pt-2 ps-1">this month</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END: Venue Cards -->

          <!-- Data Usaha + Artikel dalam 1 baris -->
          <div class="row">
            <!-- Data Usaha -->
            <div class="col-lg-8">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Data Usaha <span>| Today</span></h5>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Nama Usaha</th>
                        <th scope="col">Pengelola</th>
                        <th scope="col">Nomor Telepon</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Sosial Media</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Seni Kriya</td>
                        <td>Ananta Ramadhan</td>
                        <td><a href="tel:08449535823" class="text-primary">08449535823</a></td>
                        <td>Jl. Raya No.123, Jakarta</td>
                        <td><a href="https://www.instagram.com/senikriya" target="_blank" class="text-primary">Instagram</a></td>
                      </tr>

                      <tr>
                        <td>Handmade Crafts</td>
                        <td>Rina Suryani</td>
                        <td><a href="tel:08567892345" class="text-primary">08567892345</a></td>
                        <td>Jl. Merdeka No.45, Bandung</td>
                        <td><a href="https://www.instagram.com/handmadecrafts" target="_blank" class="text-primary">Instagram</a></td>
                      </tr>

                      <tr>
                        <td>Digital Art</td>
                        <td>Michael Hartanto</td>
                        <td><a href="tel:08123456789" class="text-primary">08123456789</a></td>
                        <td>Jl. Pahlawan No.67, Surabaya</td>
                        <td><a href="https://www.facebook.com/digitalart" target="_blank" class="text-primary">Facebook</a></td>
                      </tr>

                      <tr>
                        <td>Craft Studio</td>
                        <td>Linda Kurniawan</td>
                        <td><a href="tel:08987654321" class="text-primary">08987654321</a></td>
                        <td>Jl. Sudirman No.10, Bali</td>
                        <td><a href="https://www.instagram.com/craftstudio" target="_blank" class="text-primary">Instagram</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <!-- Artikel -->
            <div class="col-lg-4">
              <div class="card">
                <div class="card-body pb-0">
                  <h5 class="card-title">Artikel <span>| Today</span></h5>
                  <div class="news">
                    <div class="post-item clearfix">
                      <img src="{{ asset('assets/img/news-1.jpg') }}" alt="">
                      <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                      <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                    </div>
                    <div class="post-item clearfix">
                      <img src="{{ asset('assets/img/news-2.jpg') }}" alt="">
                      <h4><a href="#">Quidem autem et impedit</a></h4>
                      <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                    </div>
                    <div class="post-item clearfix">
                      <img src="{{ asset('assets/img/news-3.jpg') }}" alt="">
                      <h4><a href="#">Id quia et ut maxime similique</a></h4>
                      <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                    </div>
                    <div class="post-item clearfix">
                      <img src="{{ asset('assets/img/news-3.jpg') }}" alt="">
                      <h4><a href="#">Id quia et ut maxime similique</a></h4>
                      <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                    </div>
                    <div class="post-item clearfix">
                      <img src="{{ asset('assets/img/news-3.jpg') }}" alt="">
                      <h4><a href="#">Id quia et ut maxime similique</a></h4>
                      <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
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
