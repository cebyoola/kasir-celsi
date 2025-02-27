<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <!-- Fonts and icons -->
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
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
          urls: ["../assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/plugins.min.css" />
    <link rel="stylesheet" href="../assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../assets/css/demo.css" />
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
                <a href="../berandapetugas.php" class="nav-link">
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
                <a href="../components/transaksipetugas.php" class="nav-link">
                <i class="fas fa-exchange-alt"></i>
                  <p>Transaksi</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="../tables/produkpetugas.php" class="nav-link">
                <i class="fas fa-box"></i>
                  <p>Produk</p>
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
            <div class="logo-header" data-background-color="dark">
              <a href="../index.html" class="logo">
                <img
                  src="../assets/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
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
          <!-- Navbar Header -->
          <nav
            class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
          >
            <div class="container-fluid">
              <nav
                class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
              >
                <div class="input-group">
                  <div class="input-group-prepend">
                    
                  </div>
                 
              </nav>

              <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li
                  class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none"
                >
                  <a
                    class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown"
                    href="#"
                    role="button"
                    aria-expanded="false"
                    aria-haspopup="true"
                  >
                    
                  </a>
                  
                </li>
                <li class="nav-item topbar-icon dropdown hidden-caret">
                  
                  </a>
                  <ul
                    class="dropdown-menu messages-notif-box animated fadeIn"
                    aria-labelledby="messageDropdown"
                  >
                    <li>
                      <div>
                     
                      </div>
                    </li>

                    <li>
                      <div class="message-notif-scroll scrollbar-outer">
                        <div class="notif-center">
                          
                        </div>
                      </div>
                    </li>
                    <li>
                      
                    </li>
                  </ul>
                </li>
                <li class="nav-item topbar-icon dropdown hidden-caret">
                  <a
                    class="nav-link"
                    data-bs-toggle="dropdown"
                    href="#"
                    aria-expanded="false"
                  >
                  
                  </a>
                  <div class="dropdown-menu quick-actions animated fadeIn">
                    
                    <div class="quick-actions-scroll scrollbar-outer">
                      <div class="quick-actions-items">
                        <div class="row m-0">
        
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="nav-item topbar-user dropdown hidden-caret">
                  <a
                    class="dropdown-toggle profile-pic"
                    data-bs-toggle="dropdown"
                    href="#"
                    aria-expanded="false"
                  >
                    <div class="avatar-sm">
                      
                    </div>
                    
                  </a>
                  <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                      <li>
                        <div class="user-box">
                          
                          <div class="u-text">
                          
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                        
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
    <div class="row">
      <div class="col-md-8 mx-auto">
        <div class="card shadow-sm p-4 mb-5 bg-white rounded">
        <?php
// Mengambil ID transaksi dari URL
$id = $_GET['id'];
?>

<div class="card-body">
    <h4 class="card-title text-center">Tambah Transaksi</h4>
    <p class="card-text text-center">Tambahkan transaksi untuk produk yang dibeli.</p>
    <form action="" method="POST" id="loginForm">
        <div class="form-group">
            <!-- Menyembunyikan input ID transaksi -->
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        </div>
        
        <div class="form-group mb-3">
            <label for="produkid" class="form-label">Nama Produk</label>
            <select name="produkid" class="form-select" aria-label="Pilih Produk">
                <option value="" disabled selected>Pilih Produk</option>
                <?php
                // Menghubungkan ke database dan mengambil data produk
                include "../koneksi.php";
                $query = mysqli_query($koneksi, "SELECT * FROM produk");  // Mengambil semua produk
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <option value="<?php echo $data['produkid']; ?>">
                        <?php echo $data['namaproduk']; ?> (Stok: <?php echo $data['stok']; ?>)
                    </option>
                <?php
                }
                ?>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" name="jumlah" class="form-control" required>
        </div>

        <div class="text-end">
            <button type="submit" name="simpan" class="btn btn-success btn-lg">Kirim</button>
        </div>
    </form>

    <?php
    // Mengecek apakah tombol "simpan" diklik
    if (isset($_POST['simpan'])) {
        $produkid = $_POST['produkid'];  // Mendapatkan ID produk yang dipilih
        $penjualan = $_POST['id'];       // Mendapatkan ID transaksi
        $jumlah = $_POST['jumlah'];      // Mendapatkan jumlah produk yang dibeli
        
        // Mengambil harga dan stok produk berdasarkan produkid
        $query = mysqli_query($koneksi, "SELECT harga, stok FROM produk WHERE produkid='$produkid'"); 
        $data = mysqli_fetch_array($query);
        $harga = $data['harga'];   // Menyimpan harga produk
        $subtotal = $jumlah * $harga;  // Menghitung total harga produk yang dibeli
        $jumlahawal = $data['stok'];  // Menyimpan stok awal produk
        $sisa = $jumlahawal - $jumlah;  // Menghitung stok yang tersisa setelah penjualan

        // Menyimpan detail penjualan ke tabel detailpenjualan
        $sql = mysqli_query($koneksi, "INSERT INTO detailpenjualan (penjualanid, produkid, jumlahproduk, subtotal) 
            VALUES ('$penjualan', '$produkid', '$jumlah', '$subtotal')");

        // Jika berhasil memasukkan data, update stok produk
        if ($sql) {
            mysqli_query($koneksi, "UPDATE produk SET stok='$sisa' WHERE produkid='$produkid'");
        }
    }
    ?>
    
    <!-- Tabel untuk menampilkan transaksi yang sudah dilakukan -->
    <table class="table table-striped table-bordered mt-4">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $penjualanid = $_GET['id'];  // Mendapatkan ID transaksi
            
            // Mengambil data detail transaksi dari tabel detailpenjualan
            $query2 = mysqli_query(
                $koneksi,
                "SELECT *, p.namaproduk, d.jumlahproduk
                FROM detailpenjualan d
                JOIN produk p ON d.produkid= p.produkid
                WHERE d.penjualanid='$penjualanid'
                GROUP BY p.namaproduk, d.jumlahproduk"
            );
            while ($row = mysqli_fetch_array($query2)) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['namaproduk']; ?></td>
                    <td><?php echo $row['jumlahproduk']; ?></td>
                    <td><?php echo number_format($row['subtotal'], 0, ',', '.'); ?></td>
                </tr>
            <?php
            }
            
            // Menghitung total harga transaksi
            $sql2 = mysqli_query(
                $koneksi, 
                "SELECT SUM(subtotal) AS total FROM detailpenjualan
                WHERE penjualanid='$penjualanid'"
            );
            $dt = mysqli_fetch_array($sql2);
            if ($sql2) {
                $total = $dt['total'];  // Menyimpan total harga
                mysqli_query($koneksi, "UPDATE penjualan SET totalharga='$total' WHERE penjualanid='$penjualanid'"); // Mengupdate total harga di tabel penjualan
            }
            ?>
            <tr>
                <td colspan="3" class="text-center font-weight-bold">Total Bayar</td>
                <td class="text-right font-weight-bold"><?php echo number_format($dt['total'], 0, ',', '.'); ?></td>
            </tr>

            <tr>
                <td colspan="3" class="text-center font-weight-bold">Bayar</td>
                <td class="text-right font-weight-bold"><input type="text" id="uangDibayar" class="form-control" oninput="hitung()"></td>
            </tr>

            <tr>
                <td colspan="3" class="text-center font-weight-bold">Kembali</td>
                <td class="text-right font-weight-bold"><span id="kembalian">0.00</span></td>
            </tr>
        </tbody>
    </table>

    <div class="text-center mt-4">
        <!-- Tautan untuk mencetak transaksi -->
        <a class="btn btn-success btn-lg" target="blank" href="cetak.php?id=<?php echo $penjualan ?>" id="cetaklink">Cetak</a>
        <!-- Tautan untuk kembali ke halaman transaksi -->
        <a class="btn btn-success btn-lg" href="transaksi.php?id=<?php echo $penjualan ?>">Kembali</a>
    </div>
</div>

<script>
  function hitung() {
    var total = <?php echo $dt['total']; ?>;
    var bayar = document.getElementById('uangDibayar').value;
    var kembali = bayar - total;
    
    // Menampilkan kembalian di halaman
    document.getElementById('kembalian').innerText = kembali.toFixed(2);
    
    // Jika uang cukup, ubah link cetak
    if (kembali >= 0) {
      // Menyusun URL untuk link cetak dengan menyertakan kembalian
      const url = `cetak.php?id=<?php echo $penjualan; ?>&uangDibayar=${encodeURIComponent(bayar)}&kembalian=${encodeURIComponent(kembali.toFixed(2))}`;
      document.getElementById('cetaklink').href = url; // Mengubah href link cetak
    } else {
      // Jika uang tidak cukup, link cetak tidak bisa digunakan
      document.getElementById('cetaklink').href = '../components/tambahdetail.php'; // Atau ganti dengan URL lain sesuai kebutuhan
    }
  }
</script>


    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- Kaiadmin JS -->
    <script src="../assets/js/kaiadmin.min.js"></script>
    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="../assets/js/setting-demo2.js"></script>
    <script>
      $("#displayNotif").on("click", function () {
        var placementFrom = $("#notify_placement_from option:selected").val();
        var placementAlign = $("#notify_placement_align option:selected").val();
        var state = $("#notify_state option:selected").val();
        var style = $("#notify_style option:selected").val();
        var content = {};

        content.message =
          'Turning standard Bootstrap alerts into "notify" like notifications';
        content.title = "Bootstrap notify";
        if (style == "withicon") {
          content.icon = "fa fa-bell";
        } else {
          content.icon = "none";
        }
        content.url = "index.html";
        content.target = "_blank";

        $.notify(content, {
          type: state,
          placement: {
            from: placementFrom,
            align: placementAlign,
          },
          time: 1000,
        });
      });
    </script>
  </body>
</html>
