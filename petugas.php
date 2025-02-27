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
                          <a href="#">
                            <div class="notif-img">
                              
                            </div>
                            <div class="notif-content">
                             
                            </div>
                          </a>
                          <a href="#">
                            <div class="notif-img">
                              
                            </div>
                            <div class="notif-content">
                              
                            </div>
                          </a>
                          <a href="#">
                            <div class="notif-img">
                              
                            </div>
                            
               
                          <a href="#">
                            
                            <div class="notif-content">
                              
                            </div>
                          </a>
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
                          <div class="avatar-lg">
                           
                          </div>
                          <div class="u-text">
                            
                          </div>
                        </div>
                      </li>
                      <li>
                        
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
        <div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">DATA PETUGAS</h3>
            <ul class="breadcrumbs mb-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahPetugas">
                    Tambah Data
                </button>
            </ul>
        </div>

        <!-- Modal Tambah Petugas -->
        <div class="modal fade" id="modalTambahPetugas" tabindex="-1" aria-labelledby="modalTambahPetugasLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalTambahPetugasLabel">Tambah Petugas</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="prosestambahpetugas.php" method="POST">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama lengkap">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email Anda">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password">
                            </div>
                            <div class="mb-3">
                                <label for="nomertelepon" class="form-label">No Telepon</label>
                                <input type="number" name="nomertelepon" class="form-control" id="nomertelepon" placeholder="Masukkan no telepon">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea name="alamat" class="form-control" id="alamat" rows="3" placeholder="Masukkan alamat lengkap"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="level" class="form-label">Level</label>
                                <select class="form-control" id="level" name="level">
                                    <option value="Admin">Admin</option>
                                    <option value="Petugas">Petugas</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>

    
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Data Petugas</div>
            <input type="text" id="searchInput" class="form-control mt-2" placeholder="Cari petugas...">
          </div>
          <div class="card-body">
            <table class="table table-head-bg-primary mt-4" id="petugasTable">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">No Telepon</th>
                  <th scope="col">Email</th>
                  <th scope="col">Level</th>
                  <th scope="col">Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include "../koneksi.php";
                $no=1;
                $query=mysqli_query($koneksi,"SELECT * FROM user ORDER BY pelangganid DESC");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['namauser']; ?></td>
                  <td><?php echo $data['alamat']; ?></td>
                  <td><?php echo $data['nomertelepon']; ?></td>
                  <td><?php echo $data['email']; ?></td>
                  <td><?php echo $data['level']; ?></td>
                  <td>
                    <div class="btn-group" role="group">
                      <a href="../tables/editpetugas.php?id=<?php echo $data['pelangganid']; ?>" class="btn btn-warning btn-sm">
                        <i class="fas fa-pencil-alt"></i>
                      </a>
                      <a href="proseshapuspetugas.php?id=<?php echo $data['pelangganid']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data petugas?')">
                        <i class="fas fa-trash-alt"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
document.getElementById("searchInput").addEventListener("keyup", function() {
  let filter = this.value.toLowerCase();
  let rows = document.querySelectorAll("#petugasTable tbody tr");
  rows.forEach(row => {
    let text = row.innerText.toLowerCase();
    row.style.display = text.includes(filter) ? "" : "none";
  });
});
</script>

                 
                </div>
              </div>
            </div>
          </div>
        </div>


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
