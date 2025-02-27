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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    
    <!-- Tambahkan link Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">




    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../assets/css/demo.css" />
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="pink">
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
                <a href="../components/transaksi.php" class="nav-link">
                <i class="fas fa-exchange-alt"></i>
                  <p>Transaksi</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="../tables/petugas.php" class="nav-link">
                <i class="fas fa-user-shield"></i>
                  <p>Petugas</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="../tables/produk.php" class="nav-link">
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
                          <div class="avatar-lg">
                           
                          </div>
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
       
        <?php
include "../koneksi.php";

// Ambil ID dari URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data pengguna berdasarkan ID
    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE pelangganid = '$id'");
    $data = mysqli_fetch_array($query);
} else {
    echo "ID tidak ditemukan!";
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edit Data Pengguna</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* CSS Digabungkan di sini */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .card-header {
            background-color: #007bff;
            color: white;
            padding: 10px;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form-control {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .loginbtn {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
        }

        .loginbtn:hover {
            background-color: #218838;
        }

        .form-select {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .row {
            margin-bottom: 15px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            font-size: 14px;
        }

        /* Responsif untuk tampilan mobile */
        @media (max-width: 768px) {
            .card-header {
                text-align: center;
            }

            .card-title {
                font-size: 16px;
            }

            .form-control,
            .form-select {
                width: 100%;
            }

            .loginbtn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <form action="proseseditpetugas.php" method="POST" id="loginForm">
        <div class="card mb-4">
            <div class="card-header">
                <h4 class="card-title">Edit Data Pengguna</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-lg-12">
                        <input type="hidden" name="id" value="<?php echo $data['pelangganid']; ?>" class="form-control">
                        <label>Nama</label>
                        <input type="text" name="namauser" value="<?php echo $data['namauser']; ?>" class="form-control">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Alamat</label>
                        <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" class="form-control">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>No telepon</label>
                        <input type="text" name="nomertelepon" value="<?php echo $data['nomertelepon']; ?>" class="form-control">
                    </div>

                    <div class="form-group col-lg-12">
                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo $data['email']; ?>" class="form-control">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Password</label>
                        <input type="text" name="password" value="<?php echo $data['password']; ?>" class="form-control">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Level</label>
                        <select name="level" class="form-select">
                            <option value="admin" <?php echo $data['level'] == 'admin' ? 'selected' : ''; ?>>Admin</option>
                            <option value="petugas" <?php echo $data['level'] == 'petugas' ? 'selected' : ''; ?>>Petugas</option>
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success loginbtn">Kirim</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>



      <!-- End Custom template -->
    </div>
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
