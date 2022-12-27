<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="public/assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="public/assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="public/assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="public/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="public/assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" href="public/assets/vendor/libs/apex-charts/apex-charts.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="public/assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="public/assets/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
      <?php require_once('menu.php') ?>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <?php require_once('header.php') ?>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 py-5 mb-2 text-gray-800">Tables</h1>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                  <?php
                  $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
                  echo "Database " . $mod;
                  ?>
                </h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <?php
                  if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) {
                    $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
                    $act = isset($_GET['act']) ? $_GET['act'] : "admin";
                    switch ($mod) {
                      case 'khuyenmai':
                        switch ($act) {
                          case 'list':
                            require_once('MVC/views/khuyenmai/list.php');
                            break;
                          case 'add':
                            require_once('MVC/views/khuyenmai/add.php');
                            break;
                          case 'detail':
                            require_once('MVC/views/khuyenmai/detail.php');
                            break;
                          case 'edit':
                            require_once('MVC/views/khuyenmai/edit.php');
                            break;
                          default:
                            require_once('MVC/views/khuyenmai/list.php');
                            break;
                        }
                        break;
                      case 'banner':
                        switch ($act) {
                          case 'list':
                            require_once('MVC/views/banner/list.php');
                            break;
                          case 'add':
                            require_once('MVC/views/banner/add.php');
                            break;
                          case 'detail':
                            require_once('MVC/views/banner/detail.php');
                            break;
                          case 'edit':
                            require_once('MVC/views/banner/edit.php');
                            break;
                          default:
                            require_once('MVC/views/banner/list.php');
                            break;
                        }
                        break;
                      case 'nguoidung':
                        switch ($act) {
                          case 'list':
                            require_once('MVC/views/nguoidung/list.php');
                            break;
                          case 'add':
                            require_once('MVC/views/nguoidung/add.php');
                            break;
                          case 'detail':
                            require_once('MVC/views/nguoidung/detail.php');
                            break;
                          case 'edit':
                            require_once('MVC/views/nguoidung/edit.php');
                            break;
                          default:
                            require_once('MVC/views/nguoidung/list.php');
                            break;
                        }
                        break;
                      case 'sanpham':
                        switch ($act) {
                          case 'list':
                            require_once('MVC/views/sanpham/list.php');
                            break;
                          case 'add':
                            require_once('MVC/views/sanpham/add.php');
                            break;
                          case 'edit':
                            require_once('MVC/views/sanpham/edit.php');
                            break;
                          default:
                            require_once('MVC/views/sanpham/list.php');
                            break;
                        }
                        break;
                      case 'loaisanpham':
                        switch ($act) {
                          case 'list':
                            require_once('MVC/views/loaisanpham/list.php');
                            break;
                          case 'add':
                            require_once('MVC/views/loaisanpham/add.php');
                            break;
                          case 'detail':
                            require_once('MVC/views/loaisanpham/detail.php');
                            break;
                          case 'edit':
                            require_once('MVC/views/loaisanpham/edit.php');
                            break;
                          default:
                            require_once('MVC/views/loaisanpham/list.php');
                            break;
                        }
                        break;
                      case 'danhmuc':
                        switch ($act) {
                          case 'list':
                            require_once('MVC/views/danhmuc/list.php');
                            break;
                          case 'add':
                            require_once('MVC/views/danhmuc/add.php');
                            break;
                          case 'detail':
                            require_once('MVC/views/danhmuc/detail.php');
                            break;
                          case 'edit':
                            require_once('MVC/views/danhmuc/edit.php');
                            break;
                          default:
                            require_once('MVC/views/danhmuc/list.php');
                            break;
                        }
                        break;
                      case 'login':
                        switch ($act) {
                          case 'admin':
                            require_once('MVC/Views/login/admin.php');
                            break;
                          default:
                            require_once('MVC/Views/login/admin.php');
                            break;
                        }
                        break;
                      case 'hoadon':
                        switch ($act) {
                          case 'list':
                            require_once('MVC/Views/hoadon/list.php');
                            break;
                          case 'chitiet':
                            require_once('MVC/Views/hoadon/detail.php');
                            break;
                          default:
                            require_once('MVC/Views/hoadon/list.php');
                            break;
                        }
                        break;
                    }
                  } else {
                    if (isset($_SESSION['isLogin_Nhanvien']) && $_SESSION['isLogin_Nhanvien'] == true) {
                      $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
                      $act = isset($_GET['act']) ? $_GET['act'] : "admin";
                      switch ($mod) {
                        case 'hoadon':
                          switch ($act) {
                            case 'list':
                              require_once('MVC/Views/hoadon/list.php');
                              break;
                            case 'chitiet':
                              require_once('MVC/Views/hoadon/detail.php');
                              break;
                            default:
                              require_once('MVC/Views/hoadon/list.php');
                              break;
                          }
                          break;
                        case 'loaisanpham':
                          switch ($act) {
                            case 'list':
                              require_once('MVC/views/loaisanpham/list.php');
                              break;
                            case 'detail':
                              require_once('MVC/views/loaisanpham/detail.php');
                              break;
                            default:
                              require_once('MVC/views/loaisanpham/list.php');
                              break;
                          }
                          break;
                        case 'danhmuc':
                          switch ($act) {
                            case 'list':
                              require_once('MVC/views/danhmuc/list.php');
                              break;
                            case 'detail':
                              require_once('MVC/views/danhmuc/detail.php');
                              break;
                            default:
                              require_once('MVC/views/danhmuc/list.php');
                              break;
                          }
                          break;
                        case 'sanpham':
                          switch ($act) {
                            case 'list':
                              require_once('MVC/views/sanpham/list.php');
                              break;
                            case 'detail':
                              require_once('MVC/views/sanpham/detail.php');
                              break;
                            default:
                              require_once('MVC/views/sanpham/list.php');
                              break;
                          }
                          break;
                        case 'khuyenmai':
                          switch ($act) {
                            case 'list':
                              require_once('MVC/views/khuyenmai/list.php');
                              break;
                            case 'detail':
                              require_once('MVC/views/khuyenmai/detail.php');
                              break;
                            default:
                              require_once('MVC/views/khuyenmai/list.php');
                              break;
                          }
                          break;
                      }
                    }
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- / Content -->

        <!-- Footer -->
        <?php require_once('footer.php') ?>
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
      </div>
      <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
  </div>

  <!-- Overlay -->
  <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="public/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="public/assets/vendor/libs/popper/popper.js"></script>
  <script src="public/assets/vendor/js/bootstrap.js"></script>
  <script src="public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="public/assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="public/assets/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="public/assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="public/assets/js/dashboards-analytics.js"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>