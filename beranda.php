<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="white">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="white">
            <a href="index.html" class="logo">
              <span class="navbar-brand" style="font-size: 20px; font-weight: bold;">OrlandoNetwork</span>
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>

          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper ">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
            <li class="nav-item">
                <a href="../beranda.php" class="nav-link">
                <i class="fas fa-home"></i>
                  <p>Beranda</p>
                </a>
              </li>
              <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                
              </li>
              <li class="nav-item">
                <a href="components/transaksi.php" class="nav-link">
                <i class="fas fa-exchange-alt"></i>
                  <p>Transaksi</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="tables/petugas.php" class="nav-link">
                <i class="fas fa-user-shield"></i>
                  <p>Petugas</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="tables/produk.php" class="nav-link">
                <i class="fas fa-box"></i>
                  <p>Produk</p>
                </a>
              </li>

              <li class="nav-item">
                  <a href="logout.php" class="nav-link">
                  <i class="fas fa-sign-out-alt"></i>
                  <p>Logout</p>
                  </a>
              </li>
              <li class="nav-item">
                
                <div class="collapse" id="submenu">
                  <ul class="nav nav-collapse">
                    <li>
                      <a data-bs-toggle="collapse" href="#subnav1">
                        <span class="sub-item">Level 1</span>
                        <span class="caret"></span>
                      </a>
                      <div class="collapse" id="subnav1">
                        <ul class="nav nav-collapse subnav">
                          <li>
                            <a href="#">
                              <span class="sub-item">Level 2</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="sub-item">Level 2</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a data-bs-toggle="collapse" href="#subnav2">
                        <span class="sub-item">Level 1</span>
                        <span class="caret"></span>
                      </a>
                      <div class="collapse" id="subnav2">
                        <ul class="nav nav-collapse subnav">
                          <li>
                            <a href="#">
                              <span class="sub-item">Level 2</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a href="#">
                        <span class="sub-item">Level 1</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="white">
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          <nav
            class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
          >
            <div class="container-fluid">
              <nav
                class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
              >
                
              </nav>

              <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                
                <li class="nav-item topbar-icon dropdown hidden-caret">
                 
                      
                <li class="nav-item topbar-icon dropdown hidden-caret">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="notifDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                  <i class="fa fa-bell"></i>
                  
                  </a>
                  <ul
                    class="dropdown-menu notif-box animated fadeIn"
                    aria-labelledby="notifDropdown"
                  >
                    <li>
                      <div class="dropdown-title">
                       pesan anda hari ini
                      </div>
                    </li>
                    <li>
  <div class="notif-scroll scrollbar-outer">
    <div class="notif-center">
      <a href="#">
      </a>
      
      <?php
  // Sertakan koneksi database
  include "koneksi.php";

  // Pastikan koneksi berhasil
  if (!isset($koneksi) || !$koneksi) {
      die("Koneksi database gagal!");
  }

  // Query untuk produk yang stoknya habis (0)
  $query_danger = mysqli_query($koneksi, "SELECT namaproduk FROM produk WHERE stok = 0");

  if (!$query_danger) {
      die("Query gagal: " . mysqli_error($koneksi));
  }

  // Hitung jumlah produk yang habis
  $jumlah_danger = mysqli_num_rows($query_danger);
?>

<a href="tables/produk.php">
    <div class="notif-icon notif-danger" style="<?= $jumlah_danger > 0 ? 'background-color: rgba(255, 0, 0, 0.5);' : '' ?>">
        <i class="fa fa-box"></i>
    </div>
    <div class="notif-content" style="<?= $jumlah_danger > 0 ? 'background-color: rgba(255, 0, 0, 0.1);' : '' ?>">
        <span class="block">
            <?php if ($jumlah_danger > 0) : ?>
                ⚠ <strong>Stok Habis!</strong> 
                <?php while ($data = mysqli_fetch_assoc($query_danger)) : ?>
                    <br> <?= htmlspecialchars($data['namaproduk']); ?>
                <?php endwhile; ?>
            <?php else : ?>
                Semua produk tersedia.
            <?php endif; ?>
        </span>
        <span class="time"><?= date("H:i") ?> WIB</span>
    </div>
</a>

<!-- Menambahkan JavaScript untuk menampilkan notifikasi ketika stok habis -->
<?php if ($jumlah_danger > 0) : ?>
    <script>
        // Tampilkan notifikasi jika stok habis
        alert("⚠ Stok habis untuk beberapa produk! Cek produk yang perlu di-update!");
    </script>
<?php endif; ?>
</div>
  </div>
</li>
<li>
  <a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i></a>
</li>
                    <li>
                      
                    </li>
                    
                  </ul>
                </li>
                

                <li class="nav-item topbar-user dropdown hidden-caret">
                  
                  <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                      <li>
                        <div class="user-box">
                          <div class="avatar-lg">
                           
                          
                        </div>
                      </li>
                      
                    </div>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>

        <div class="container">
          <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div>
              <h3 class="fw-bold mb-3">Selamat Datang di Dashboard OrlandoNetwork</h3>
              <h6 class="op-7 mb-2">Pantau penjualan dan kelola toko dengan lebih praktis!</h6>

              </div>
              
            </div>
            <div class="row">
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round h-100">
            <div class="card-body d-flex align-items-center">
                <div class="col-icon">
                    <div class="icon-big text-center icon-primary bubble-shadow-small">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                <div class="col col-stats ms-3 ms-sm-0">
                    <div class="numbers">
                        <p class="card-category">Petugas</p>
                        <?php
                        // Koneksi ke database
                        $koneksi = mysqli_connect("localhost", "root", "", "db_kasir1");

                        // Periksa koneksi
                        if (!$koneksi) {
                            die("Koneksi gagal: " . mysqli_connect_error());
                        }

                        // Ambil jumlah pelanggan dari tabel 'user'
                        $query_pelanggan = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM user");
                        if (!$query_pelanggan) {
                            die("Query user gagal: " . mysqli_error($koneksi));
                        }
                        $data_pelanggan = mysqli_fetch_assoc($query_pelanggan);
                        $pelangganid = $data_pelanggan['total'] ?? 0;
                        ?>
                        <h4 class="card-title"><?php echo $pelangganid; ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round h-100">
            <div class="card-body d-flex align-items-center">
                <div class="col-icon">
                    <div class="icon-big text-center icon-success bubble-shadow-small">
                        <i class="fas fa-luggage-cart"></i>
                    </div>
                </div>
                <div class="col col-stats ms-3 ms-sm-0">
                    <div class="numbers">
                        <p class="card-category">Produk</p>
                        <?php
                        // Menghitung jumlah nama produk yang unik dari tabel 'produk'
                        $query_nama_produk = mysqli_query($koneksi, "SELECT COUNT(DISTINCT namaproduk) AS total FROM produk");
                        if (!$query_nama_produk) {
                            die("Query nama produk gagal: " . mysqli_error($koneksi));
                        }
                        $data_nama_produk = mysqli_fetch_assoc($query_nama_produk);
                        $total_nama_produk = $data_nama_produk['total'] ?? 0;
                        ?>
                        <h4 class="card-title"><?php echo $total_nama_produk; ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-3">
    <div class="card card-stats card-round h-100">
        <div class="card-body d-flex align-items-center">
            <div class="col-icon">
                <div class="icon-big text-center icon-primary bubble-shadow-small">
                    <i class="fas fa-money-bill-wave"></i>
                </div>
            </div>
            <div class="col col-stats ms-3 ms-sm-0">
                <div class="numbers">
                    <p class="card-category">Pendapatan</p>
                    <?php
                    // Koneksi ke database
                    $koneksi = mysqli_connect("localhost", "root", "", "db_kasir1");

                    // Periksa koneksi
                    if (!$koneksi) {
                        die("Koneksi gagal: " . mysqli_connect_error());
                    }

                    // Menghitung total pendapatan dari tabel 'detailpenjualan'
                    $query_total_pendapatan = mysqli_query($koneksi, "SELECT SUM(subtotal) AS total FROM detailpenjualan");
                    if (!$query_total_pendapatan) {
                        die("Query total pendapatan gagal: " . mysqli_error($koneksi));
                    }

                    $data_total_pendapatan = mysqli_fetch_assoc($query_total_pendapatan);
                    $total_pendapatan = $data_total_pendapatan['total'] ?? 0;
                    ?>

                    <!-- Menampilkan hasil total pendapatan -->
                    <h4 class="card-title">Rp <?php echo number_format($total_pendapatan, 0, ',', '.'); ?></h4>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round h-100">
            <div class="card-body d-flex align-items-center">
                <div class="col-icon">
                    <div class="icon-big text-center icon-secondary bubble-shadow-small">
                        <i class="far fa-check-circle"></i>
                    </div>
                </div>
                <div class="col col-stats ms-3 ms-sm-0">
                    <div class="numbers">
                        <p class="card-category">Transaksi</p>
                        <?php
                        // Mengambil total jumlah produk yang terjual
                        $query_total_produk_terjual = mysqli_query($koneksi, "SELECT SUM(dp.jumlahproduk) AS total FROM detailpenjualan dp");
                        if (!$query_total_produk_terjual) {
                            die("Query total produk terjual gagal: " . mysqli_error($koneksi));
                        }
                        $data_total_produk_terjual = mysqli_fetch_assoc($query_total_produk_terjual);
                        $totalProdukTerjual = $data_total_produk_terjual['total'] ?? 0;
                        ?>
                        <h4 class="card-title"><?php echo $totalProdukTerjual; ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="assets/js/setting-demo.js"></script>
    <script src="assets/js/demo.js"></script>
    <script>
      $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
      });

      $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
      });

      $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
      });
    </script>
  </body>
</html>
