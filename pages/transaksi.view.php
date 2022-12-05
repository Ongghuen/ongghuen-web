<?php
include "koneksi.php";

session_start();
error_reporting(0);
if (isset($_SESSION["ses_username"]) == "") {
  header("location: login.view.php");
} else {
  $data_id = $_SESSION["ses_id"];
  $data_nama = $_SESSION["ses_nama"];
  $data_foto = $_SESSION["ses_foto"];
  $data_nohp = $_SESSION["ses_nohp"];
  $data_email = $_SESSION["ses_email"];
  $data_username = $_SESSION["ses_username"];
  $data_password = $_SESSION["ses_password"];
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
  <title>Products - Suki Dashboard</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->

  <link id="pagestyle" href="../assets/css/argon-dashboard.css" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="position-absolute w-100 min-height-300 top-0" style="
        background-image: url('../assets/img/nv-bg.jpg');
        background-position-y: 50%;
      ">
    <span class="mask bg-primary opacity-6"></span>
  </div>
  <div class="min-height-300 position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="/pages/dashboard.html">
        <img src="../assets/images/icon.png" class="navbar-brand-img h-100" alt="main_logo" />
        <span class="ms-1 font-weight-bold">Suki Dashboard</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0" />
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="./dashboard.view.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-warning text-sm opacity-10"></i>
              <!-- <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i> -->
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="./orders.view.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-cart text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Oders</span>
          </a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link active" href="./transaksi.view.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tag text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Transaksi</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./products.view.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-bag-17 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Products</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./customs.view.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Customs</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./users.view.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-circle-08 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Users</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./report.view.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-chart-bar-32 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Report</span>
          </a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="./pages/tables.html">
              <div
                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i
                  class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"
                ></i>
              </div>
              <span class="nav-link-text ms-1">Tables</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/billing.html">
              <div
                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i
                  class="ni ni-credit-card text-success text-sm opacity-10"
                ></i>
              </div>
              <span class="nav-link-text ms-1">Billing</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/virtual-reality.html">
              <div
                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i class="ni ni-app text-info text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Virtual Reality</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/rtl.html">
              <div
                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">RTL</span>
            </a>
          </li> -->
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">
            Account pages
          </h6>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./profile.view.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="./pages/sign-in.html">
              <div
                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i
                  class="ni ni-single-copy-04 text-warning text-sm opacity-10"
                ></i>
              </div>
              <span class="nav-link-text ms-1">Sign In</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/sign-up.html">
              <div
                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
              >
                <i class="ni ni-collection text-info text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Sign Up</span>
            </a>
          </li> -->
      </ul>
    </div>
    <!-- <div class="sidenav-footer mx-3">
        <div class="card card-plain shadow-none" id="sidenavCard">
          <img
            class="w-50 mx-auto"
            src="./assets/img/illustrations/icon-documentation.svg"
            alt="sidebar_illustration"
          />
          <div class="card-body text-center p-3 w-100 pt-0">
            <div class="docs-info">
              <h6 class="mb-0">Need help?</h6>
              <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
            </div>
          </div>
        </div>
        <a
          href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard"
          target="_blank"
          class="btn btn-dark btn-sm w-100 mb-3"
          >Documentation</a
        >
        <a
          class="btn btn-primary btn-sm mb-0 w-100"
          href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=sidebarfree"
          type="button"
          >Upgrade to pro</a
        >
      </div> -->
  </aside>
  <main class="main-content position-relative border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm">
              <a class="opacity-5 text-white" href="javascript:;">Pages</a>
            </li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">
              Transaksi
            </li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Transaksi</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <!-- <div class="ms-md-auto pe-md-3 d-flex align-items-center"> -->
          <!-- <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here..." />
            </div> -->
          <!-- </div> -->
          <ul class="ms-md-auto pe-md-3 d-flex align-items-center navbar-nav justify-content-end">
            <!-- <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li> -->
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>


            <?php
            error_reporting(0);


            $tampilprofil = ("SELECT id, foto, nama, nohp, email, username, password  FROM tb_user WHERE id = '$data_id'");
            $result   = mysqli_query($koneksi, $tampilprofil);

            while ($row = mysqli_fetch_array($result)) {

              $profilName   = $row['nama'];

            ?>

              <li class="nav-item px-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                  <span class="d-sm-inline d-none">Halo, <?php echo $profilName ?></span>
                </a>
              </li>

            <?php

            }
            ?>

            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="#" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-chevron-circle-down cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="dropdown-item d-flex align-items-center">
                  <a href="#" class="nav-link text-black px-2">
                    <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i> Setting
                  </a>

                </li>
                <li class="dropdown-item d-flex align-items-center">
                  <a href="./profile.view.php" class="nav-link text-black">
                    <i class="fa fa-user fixed-plugin-button-nav cursor-pointer"></i> Profile
                  </a>

                </li>
                <li class="dropdown-item d-flex align-items-center">
                  <a href="./logout.php" class="nav-link text-black">
                    <i class="fa fa-sign-out cursor-pointer"></i> Logout
                  </a>

                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <div class="card shadow-lg mx-4 mt-3">
      <div class="card-body">
        <div class="row gx-4">

          <div class="dropdown col-auto">
            <form class="" action="" method="post">
              <button class="btn btn-sm bg-gradient-dark dropdown-toggle mb-1 px-3" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                Sort By
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <button class="dropdown-item" name="namaasc" type="submit"> Nama Asc (A-Z)</button>
                <button class="dropdown-item" name="namadesc" type="submit"> Nama Desc (Z-A)</button>
                <button class="dropdown-item" name="totalasc" type="submit">Total Desc (A-Z)</button>
                <button class="dropdown-item" name="totaldesc" type="submit">Total Asc (Z-A)</button>
              </ul>
            </form>

          </div>

          <div class="dropdown col-auto">
            <form class="" action="" method="post">
              <button class="btn btn-sm bg-gradient-dark dropdown-toggle mb-1 px-3" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                Status
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <button class="dropdown-item" name="pending" type="submit">Pending</button>
                <button class="dropdown-item" name="delivery" type="submit">Delivery</button>
                <button class="dropdown-item" name="done" type="submit">Done</button>
                <button class="dropdown-item" name="cancel" type="submit">Cancel</button>
              </ul>
            </form>

          </div>


          <form class="row gx-4" action="" method="post">
            <div class="dropdown col-auto">

              <div class="form-group">
                <input class="form-control btn btn-sm bg-gradient-white mb-1 px-3" value="<?php if (isset($_POST['from_date'])) {
                                                                                            echo $_POST['from_date'];
                                                                                          }  ?>" type="date" name="from_date" />

              </div>

            </div>
            <div class="dropdown col-auto">

              <button class="btn btn-sm bg-gradient-white mb-1 px-3" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                To Date
              </button>

            </div>

            <div class="dropdown col-auto">

              <div class="form-group">
                <input class="form-control btn btn-sm bg-gradient-white mb-1 px-3" value="<?php if (isset($_POST['to_date'])) {
                                                                                            echo $_POST['to_date'];
                                                                                          }  ?>" type="date" name="to_date" />

              </div>

            </div>


            <div class="dropdown col-auto">

              <button class="btn btn-sm bg-gradient-dark mb-1 px-3" type="submit" aria-expanded="false">
                Filter
              </button>


            </div>

            <div class="dropdown col-auto">

              <a href="export_transaksi.php" target=”_blank” class="btn btn-sm bg-gradient-dark mb-1 px-3" aria-expanded="false"> Export</a>

            </div>




            <div class="col-lg-4 col-md-6 me-sm-10 mx-auto mt-0">
              <div class="nav-wrapper position-relative end-0">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                  <!-- <form class="input-group" action="" method="post"> -->
                  <div class="input-group">
                    <input type="text" class="form-control ms-4" name="data" placeholder="Type here..." aria-label="Type here..." aria-describedby="button-addon2">
                    <button class="btn bg-gradient-dark  mb-0" name="caridata" type="submit" id="button-addon2">
                      <i class="fas fa-search" aria-hidden="true"></i>
                    </button>
                  </div>
                  <!-- </form> -->
                </div>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>




    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <h6>Transactions table</h6>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        No
                      </th>

                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Status
                      </th>

                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Nama
                      </th>

                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Alamat
                      </th>

                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Total
                      </th>

                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Tanggal
                      </th>
                      <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Tanggal Selesai
                      </th> -->
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Actions
                      </th>
                    </tr>
                  </thead>

                  <?php
                  $data = $_POST['data'];
                  if (isset($_POST['caridata'])) {
                    $caringab = ("SELECT tb_transaksi.id, format(SUM(tb_product.harga*tb_detail_transaksi.qty),0) AS total, tb_user.nama,tb_user.alamat,tb_transaksi.status, tb_transaksi.tanggal FROM tb_transaksi INNER JOIN tb_user ON tb_user.id=tb_transaksi.user_id INNER JOIN tb_detail_transaksi ON tb_detail_transaksi.id_transaksi=tb_transaksi.id INNER JOIN tb_product ON tb_product.id=tb_detail_transaksi.id_product WHERE tb_user.nama LIKE '" . $data . "%' GROUP BY tb_transaksi.id");
                    $result   = mysqli_query($koneksi, $caringab);
                  } elseif (isset($_POST['namaasc'])) {
                    $namaasc = ("SELECT  tb_transaksi.id,  format(SUM(tb_product.harga*tb_detail_transaksi.qty),0) AS total, tb_user.nama, tb_user.alamat, tb_transaksi.status, tb_transaksi.tanggal FROM tb_transaksi INNER JOIN tb_user ON tb_user.id=tb_transaksi.user_id INNER JOIN tb_detail_transaksi ON tb_detail_transaksi.id_transaksi=tb_transaksi.id INNER JOIN tb_product ON tb_product.id=tb_detail_transaksi.id_product GROUP BY tb_transaksi.id ORDER BY tb_user.nama asc");
                    $result   = mysqli_query($koneksi, $namaasc);
                  } elseif (isset($_POST['namadesc'])) {
                    $namadesc = ("SELECT  tb_transaksi.id,  format(SUM(tb_product.harga*tb_detail_transaksi.qty),0) AS total, tb_user.nama, tb_user.alamat, tb_transaksi.status, tb_transaksi.tanggal FROM tb_transaksi INNER JOIN tb_user ON tb_user.id=tb_transaksi.user_id INNER JOIN tb_detail_transaksi ON tb_detail_transaksi.id_transaksi=tb_transaksi.id INNER JOIN tb_product ON tb_product.id=tb_detail_transaksi.id_product GROUP BY tb_transaksi.id ORDER BY tb_user.nama desc");
                    $result   = mysqli_query($koneksi, $namadesc);
                  } elseif (isset($_POST['totalasc'])) {
                    $totalasc = ("SELECT  tb_transaksi.id,  format(SUM(tb_product.harga*tb_detail_transaksi.qty),0) AS total, tb_user.nama, tb_user.alamat, tb_transaksi.status,tb_transaksi.tanggal FROM tb_transaksi INNER JOIN tb_user ON tb_user.id=tb_transaksi.user_id INNER JOIN tb_detail_transaksi ON tb_detail_transaksi.id_transaksi=tb_transaksi.id INNER JOIN tb_product ON tb_product.id=tb_detail_transaksi.id_product GROUP BY tb_transaksi.id ORDER BY total desc");
                    $result   = mysqli_query($koneksi, $totalasc);
                  } elseif (isset($_POST['totaldesc'])) {
                    $totaldesc = ("SELECT  tb_transaksi.id,  format(SUM(tb_product.harga*tb_detail_transaksi.qty),0) AS total, tb_user.nama, tb_user.alamat,tb_transaksi.status, tb_transaksi.tanggal FROM tb_transaksi INNER JOIN tb_user ON tb_user.id=tb_transaksi.user_id INNER JOIN tb_detail_transaksi ON tb_detail_transaksi.id_transaksi=tb_transaksi.id INNER JOIN tb_product ON tb_product.id=tb_detail_transaksi.id_product GROUP BY tb_transaksi.id ORDER BY total asc");
                    $result   = mysqli_query($koneksi, $totaldesc);
                  } elseif (isset($_POST['from_date']) && isset($_POST['to_date'])) {

                    $from_date = $_POST['from_date'];
                    $to_date = $_POST['to_date'];

                    $filter_dek = ("SELECT tb_transaksi.id, format(SUM(tb_product.harga*tb_detail_transaksi.qty),0) AS total, tb_user.nama, tb_user.alamat,tb_transaksi.status, tb_transaksi.tanggal FROM tb_transaksi INNER JOIN tb_user ON tb_user.id=tb_transaksi.user_id INNER JOIN tb_detail_transaksi ON tb_detail_transaksi.id_transaksi=tb_transaksi.id INNER JOIN tb_product ON tb_product.id=tb_detail_transaksi.id_product WHERE tb_transaksi.tanggal BETWEEN '$from_date' AND '$to_date' GROUP BY tb_transaksi.id ORDER BY tb_transaksi.tanggal asc");
                    $result   = mysqli_query($koneksi, $filter_dek);
                  } elseif (isset($_POST['pending'])) {
                    $pending = ("SELECT  tb_transaksi.id,  format(SUM(tb_product.harga*tb_detail_transaksi.qty),0) AS total, tb_user.nama, tb_user.alamat, tb_transaksi.status, tb_transaksi.tanggal FROM tb_transaksi INNER JOIN tb_user ON tb_user.id=tb_transaksi.user_id INNER JOIN tb_detail_transaksi ON tb_detail_transaksi.id_transaksi=tb_transaksi.id INNER JOIN tb_product ON tb_product.id=tb_detail_transaksi.id_product WHERE tb_transaksi.status = 'pending' GROUP BY tb_transaksi.id");
                    $result   = mysqli_query($koneksi, $pending);
                  } elseif (isset($_POST['delivery'])) {
                    $delivery = ("SELECT  tb_transaksi.id,  format(SUM(tb_product.harga*tb_detail_transaksi.qty),0) AS total, tb_user.nama, tb_user.alamat, tb_transaksi.status, tb_transaksi.tanggal FROM tb_transaksi INNER JOIN tb_user ON tb_user.id=tb_transaksi.user_id INNER JOIN tb_detail_transaksi ON tb_detail_transaksi.id_transaksi=tb_transaksi.id INNER JOIN tb_product ON tb_product.id=tb_detail_transaksi.id_product WHERE tb_transaksi.status = 'delivery' GROUP BY tb_transaksi.id");
                    $result   = mysqli_query($koneksi, $delivery);
                  } elseif (isset($_POST['done'])) {
                    $done = ("SELECT  tb_transaksi.id,  format(SUM(tb_product.harga*tb_detail_transaksi.qty),0) AS total, tb_user.nama, tb_user.alamat, tb_transaksi.status, tb_transaksi.tanggal FROM tb_transaksi INNER JOIN tb_user ON tb_user.id=tb_transaksi.user_id INNER JOIN tb_detail_transaksi ON tb_detail_transaksi.id_transaksi=tb_transaksi.id INNER JOIN tb_product ON tb_product.id=tb_detail_transaksi.id_product WHERE tb_transaksi.status = 'done' GROUP BY tb_transaksi.id");
                    $result   = mysqli_query($koneksi, $done);
                  } elseif (isset($_POST['cancel'])) {
                    $cancel = ("SELECT  tb_transaksi.id,  format(SUM(tb_product.harga*tb_detail_transaksi.qty),0) AS total, tb_user.nama, tb_user.alamat, tb_transaksi.status, tb_transaksi.tanggal FROM tb_transaksi INNER JOIN tb_user ON tb_user.id=tb_transaksi.user_id INNER JOIN tb_detail_transaksi ON tb_detail_transaksi.id_transaksi=tb_transaksi.id INNER JOIN tb_product ON tb_product.id=tb_detail_transaksi.id_product WHERE tb_transaksi.status = 'cancel' GROUP BY tb_transaksi.id");
                    $result   = mysqli_query($koneksi, $cancel);
                  } else {
                    $query  = ("SELECT  tb_transaksi.id,  format(SUM(tb_product.harga*tb_detail_transaksi.qty),0) AS total, tb_user.nama, tb_user.alamat, tb_transaksi.status, tb_transaksi.tanggal FROM tb_transaksi INNER JOIN tb_user ON tb_user.id=tb_transaksi.user_id INNER JOIN tb_detail_transaksi ON tb_detail_transaksi.id_transaksi=tb_transaksi.id INNER JOIN tb_product ON tb_product.id=tb_detail_transaksi.id_product GROUP BY tb_transaksi.id");
                    $result = mysqli_query($koneksi, $query);
                  }


                  $no     = 1;
                  while ($row = mysqli_fetch_array($result)) {
                    $transaksiId = $row['id'];
                    $transaksiStatus = $row['status'];
                    $transaksiNama = $row['nama'];
                    $transaksiAlamat = $row['alamat'];
                    $transaksiTotal = $row['total'];
                    $transaksiTanggal   = $row['tanggal'];

                  ?>
                    <tbody>

                      <tr>

                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold"><?php echo $no; ?></span>
                        </td>


                        <td class="align-middle text-center text-sm">

                          <?php

                          if ($transaksiStatus == "pending") {
                            echo "
                          <span class='badge badge-sm bg-gradient-warning px-3'>Pending</span>
                          ";
                          } elseif ($transaksiStatus == "delivery") {
                            echo "
                          <span class='badge badge-sm bg-gradient-info px-4'>Delivery</span>
                          ";
                          } elseif ($transaksiStatus == "done") {
                            echo "
                          <span class='badge badge-sm bg-gradient-success px-4'>Done</span>
                            ";
                          } elseif ($transaksiStatus == "cancel") {
                            echo "
                            <span class='badge badge-sm bg-gradient-danger'>Cancel</span>
                              ";
                          }

                          ?>

                        </td>

                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold"><?php echo $transaksiNama; ?></span>
                        </td>

                        <!-- 
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold"><?php echo $transaksiAlamat; ?></span>
                        </td> -->
                        <td class="align-middle text-center">
                          <button class="btn btn-secondary btn-sm px-3 py-1 me-1 mt-3" data-modal-target="#modal-detail<?= $row['id'] ?>">Cek Detail</button>
                          <!-- <span class="text-secondary text-xs font-weight-bold" ><?php echo $customDetail; ?></span> -->
                        </td>




                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">Rp. <?php echo $transaksiTotal; ?></span>
                        </td>


                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold"><?php echo $transaksiTanggal; ?></span>
                        </td>

                        <!-- <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold"><?php echo $transaksiTanggal; ?></span>
                        </td> -->


                        <td class="align-middle text-center">



                          <button class="btn btn-secondary btn-sm px-3 py-1 me-1 mt-3" data-modal-target="#modal-delete<?php echo $row['id']; ?>">Detail</button>
                          <!-- <button class="btn btn-dark btn-sm px-3 py-1 me-1 mt-3" data-modal-target="#modal-delete<?php echo $row['id']; ?>">Edit</button> -->
                        </td>


                      <tr></tr>
                      </tr>
                    </tbody>


                    <!-- Pop up Detail -->

                    <div class="modal-detail" id="modal-detail<?= $row['id'] ?>">
                      <div class="modal-header-detail">
                        <h2 class="detail">Detail Form</h2>
                        <div class="modal-body-detail">
                          <form class="anjasmara" action="transaksi_detail.php?id=<?= $row['id'] ?>" method="post">
                            <div class="form-group">
                              <label for="exampleFormControlTextarea1">Detail</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" maxlength="500" rows="5"><?= $transaksiAlamat ?></textarea>
                            </div>
                            <div class="align-middle text-center">
                              <a href="transaksi.view.php" class="btn btn-danger btn-sm ms-auto">Close</a>

                              <!-- <button class="btn btn-danger btn-sm ms-auto" type="submit" name="close" data-close-button-detail>Close</button> -->
                              <!-- <a class="btn btn-danger btn-sm ms-auto" type="submit" data-close-button-edit>Close</a> -->
                            </div>
                          </form>

                        </div>
                      </div>
                    </div>

                    <style>
                      .modal-detail {
                        position: fixed;
                        left: 0;
                        top: 0;
                        background: rgb(0, 0, 0, 0.6);
                        height: 100%;
                        width: 100%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        opacity: 0;
                        pointer-events: none;

                        z-index: 10000;
                      }

                      .modal-body-detail {
                        padding: 10px;
                        bottom: 10px;
                      }

                      .modal-header-detail {
                        background: white;
                        width: 560px;
                        max-width: 90%;
                        padding: 20px;
                        border-radius: 4x;
                        position: relative;

                      }

                      .btn-open-detail {
                        background: black;
                        padding: 10px 40px;
                        color: white;
                        border-radius: 5px;
                        font-size: 15px;
                        cursor: pointer;
                      }

                      p.detail {
                        line-height: 1.6;
                        margin-bottom: 20px;
                      }

                      h2.detail {
                        text-align: center;

                      }

                      .modal-header-detail button.close-btn-detail {
                        position: absolute;
                        right: 10px;
                        top: 10px;
                        font-size: 32px;
                        background: none;
                        outline: none;
                        border: none;
                        cursor: pointer;
                      }

                      .modal-header-detail button.close-btn-detail:hover {
                        color: #6b46c1;
                      }

                      .active-detail {
                        opacity: 1;
                        pointer-events: auto;
                      }
                    </style>
                    <script>
                      const openModalButtons = document.querySelectorAll("[data-modal-target]");
                      const closeModalButtons = document.querySelectorAll(
                        "[data-close-button-detail]"
                      );

                      openModalButtons.forEach((button) => {
                        button.addEventListener("click", () => {
                          const modal = document.querySelector(button.dataset.modalTarget);
                          openModal(modal);
                        });
                      });

                      closeModalButtons.forEach((button) => {
                        button.addEventListener("click", () => {
                          const modal = button.closest(".modal-detail");
                          closeModal(modal);
                        });
                      });

                      function openModal(modal) {
                        if (modal == null) return;
                        modal.classList.add("active-detail");
                      }

                      function closeModal(modal) {
                        if (modal == null) return;
                        modal.classList.remove("active-detail");
                      }
                    </script>
                    <!-- end Pop up Detail -->


                    <!-- Popup Delete -->

                    <div class="modal-delete" id="modal-delete<?php echo $row['id']; ?>">
                      <form class="yayyay" action="transaksi_detail.php" method="post">
                        <div class="modal-header-delete">
                          <h2 class="delete">Detail</h2>
                          <div class="modal-body-delete">
                            <div></div>
                            <div class="row">
                              <div class="col-md-1">
                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">No</label>

                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Produk</label>

                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Harga</label>

                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Qty</label>

                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Jumlah</label>

                                </div>
                              </div>
                            </div>
                            <?php

                            $queryreport  = "SELECT tb_user.nama as namareport, tb_product.nama AS produk, format(tb_product.harga, 0) AS harga , tb_detail_transaksi.qty, format(tb_product.harga * tb_detail_transaksi.qty,0) AS totalreport, tb_transaksi.tanggal as tanggalreport FROM tb_detail_transaksi INNER JOIN tb_user ON tb_user.id=tb_detail_transaksi.id_user INNER JOIN tb_product ON tb_product.id=tb_detail_transaksi.id_product INNER JOIN tb_transaksi ON tb_transaksi.id=tb_detail_transaksi.id_transaksi where tb_transaksi.id = '" . $row['id'] . "'";
                            $resultanjay = mysqli_query($koneksi, $queryreport);
                            $nomer = 1;


                            while ($data = mysqli_fetch_array($resultanjay)) {

                              $reportNama = $data['namareport'];
                              $reportProduct = $data['produk'];
                              $reportHarga = $data['harga'];
                              $reportQty   = $data['qty'];
                              $reportTotal  = $data['totalreport'];
                              $reportTanggal  = $data['tanggalreport'];

                            ?>
                              <div class="row">
                                <div class="col-md-1">
                                  <div class="form-group">
                                    <span class="text-secondary text-xs font-weight-bold">&ensp; <?php echo $nomer; ?></span>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">

                                    <span class="text-secondary text-xs font-weight-bold"><?php echo $reportProduct; ?></span>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <span class="text-secondary text-xs font-weight-bold">Rp. <?php echo $reportHarga; ?></span>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <span class="text-secondary text-xs font-weight-bold">&ensp;&ensp;<?php echo $reportQty; ?></span>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">

                                    <span class="text-secondary text-xs font-weight-bold">Rp. <?php echo $reportTotal; ?></span>
                                  </div>
                                </div>
                              </div>

                            <?php
                              $nomer++;
                            }


                            ?>

                            <div class="align-middle text-center">
                              <a href="transaksi.view.php" class="btn btn-danger btn-sm ms-auto">Close</a>
                              <!-- <button class="btn btn-danger btn-sm ms-auto" name="submit" data-close-delete>Close</button> -->
                              <!-- <button class="btn btn-danger btn-sm ms-auto" href="hapus_user.php?id=<?php echo $row['id']; ?>" data-close-delete>Close</button> -->
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>

                    <style>
                      p.detailya {
                        font-weight: 100;
                      }

                      .modal-delete {
                        position: fixed;
                        left: 0;
                        top: 0;
                        background: rgb(0, 0, 0, 0.6);
                        height: 100%;
                        width: 100%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        opacity: 0;
                        pointer-events: none;
                        /* transition: all 0.3s ease-in-out; */
                        z-index: 10000;
                      }

                      .modal-body-delete {
                        padding: 10px;
                        bottom: 10px;
                      }

                      .modal-header-delete {
                        background: white;
                        width: 950px;
                        max-width: 100%;
                        padding: 20px;
                        border-radius: 4x;
                        position: relative;

                      }

                      .btn-open {
                        background: black;
                        padding: 10px 40px;
                        color: white;
                        border-radius: 5px;
                        font-size: 15px;
                        cursor: pointer;
                      }

                      p.delete {
                        line-height: 1.6;
                        margin-bottom: 20px;
                        text-align: center;
                      }

                      h2.delete {
                        text-align: center;

                      }

                      .modal-header-delete button.close-btn-delete {
                        position: absolute;
                        right: 10px;
                        top: 10px;
                        font-size: 32px;
                        background: none;
                        outline: none;
                        border: none;
                        cursor: pointer;
                      }

                      .modal-header-delete button.close-btn-delete:hover {
                        color: #6b46c1;
                      }

                      .active-delete {
                        opacity: 1;
                        pointer-events: auto;
                      }
                    </style>
                    <script>
                      const openModalDelete = document.querySelectorAll("[data-modal-target]");
                      const closeModalDelete = document.querySelectorAll(
                        "[data-close-delete]"
                      );

                      openModalDelete.forEach((button) => {
                        button.addEventListener("click", () => {
                          const modal = document.querySelector(button.dataset.modalTarget);
                          openModal(modal);
                        });
                      });

                      closeModalDelete.forEach((button) => {
                        button.addEventListener("click", () => {
                          const modal = button.closest(".modal-delete");
                          closeModal(modal);
                        });
                      });

                      function openModal(modal) {
                        if (modal == null) return;
                        modal.classList.add("active-delete");
                      }

                      function closeModal(modal) {
                        if (modal == null) return;
                        modal.classList.remove("active-delete");
                      }
                    </script>
                    <!-- end Pop up Delete -->

                  <?php
                    $no++;
                  }


                  ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>





      <!-- Pop up Add -->

      <div class="modal-add" id="modal-add">
        <div class="modal-header-add">
          <h2 class="add">Add Form</h2>
          <!-- <button data-close-add class="close-btn-add">&times;</button> -->

          <div class="modal-body-add">
            <form class="hahahhaaaa" id="form" action="" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Name</label>
                <input class="form-control" type="text" placeholder="Enter Name" name="txt_nama" maxlength="30" required />

              </div>

              <div class="form-group">
                <label class="custom-file-label" for="customFileLang">Upload Photo</label>
                <input type="file" class="form-control" name="foto" required>

              </div>


              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Harga</label>
                <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^\d]+/, '').replace(/(\..*?)\..*/g, '$1');" maxlength="8" placeholder="Enter Harga" name="txt_harga" required />

              </div>


              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Qty</label>
                <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^\d]+/, '').replace(/(\..*?)\..*/g, '$1');" maxlength="4" placeholder="Enter Qty" name="txt_qty" required />
              </div>


              <div class="form-group">
                <label for="exampleFormControlSelect1">Kategori</label>


                <select class="form-control" name="txt_kategori" required>
                  <?php
                  require("./koneksi.php");
                  // echo "<option value=$row[id]> Pilih Kategori $row[nama]</option>";
                  $query = mysqli_query($koneksi, "select * from tb_kategori") or die(mysqli_error($koneksi));
                  while ($row = mysqli_fetch_array($query)) {
                    echo "<option value=$row[id]> $row[nama]</option>";
                  }
                  ?>


                </select>


              </div>
              <div class="align-middle text-center">
                <button class="btn btn-success btn-sm ms-auto" type="submit" name="add-product">Add</button>
                <button class="btn btn-danger btn-sm ms-auto" data-close-add>Close</button>
              </div>


            </form>
          </div>
        </div>
      </div>
      <style>
        .modal-add {
          position: fixed;
          left: 0;
          top: 0;
          background: rgb(0, 0, 0, 0.6);
          height: 100%;
          width: 100%;
          display: flex;
          align-items: center;
          justify-content: center;
          opacity: 0;
          pointer-events: none;

          z-index: 10000;
        }

        .modal-body-add {
          padding: 10px;
          bottom: 10px;
        }

        .modal-header-add {
          background: white;
          width: 560px;
          max-width: 90%;
          padding: 20px;
          border-radius: 4px;
          position: relative;

        }

        .btn-open {
          background: black;
          padding: 10px 40px;
          color: white;
          border-radius: 5px;
          font-size: 15px;
          cursor: pointer;
        }

        p.add {
          line-height: 1.6;
          margin-bottom: 20px;
        }

        h2.add {
          text-align: center;

        }

        .modal-header-add button.close-btn-add {
          position: absolute;
          right: 10px;
          top: 10px;
          font-size: 32px;
          background: none;
          outline: none;
          border: none;
          cursor: pointer;
        }

        .modal-header-add button.close-btn-add:hover {
          color: #6b46c1;
        }

        .active-add {
          opacity: 1;
          pointer-events: auto;
        }
      </style>
      <script>
        const openModalAdd = document.querySelectorAll("[data-modal-target]");
        const closeModalAdd = document.querySelectorAll(
          "[data-close-add]"
        );

        openModalAdd.forEach((button) => {
          button.addEventListener("click", () => {
            const modal = document.querySelector(button.dataset.modalTarget);
            openModal(modal);
          });
        });

        closeModalAdd.forEach((button) => {
          button.addEventListener("click", () => {
            const modal = button.closest(".modal-add");
            closeModal(modal);
          });
        });

        function openModal(modal) {
          if (modal == null) return;
          modal.classList.add("active-add");
        }

        function closeModal(modal) {
          if (modal == null) return;
          modal.classList.remove("active-add");
        }
      </script>
      <!-- end Pop up Add -->




      <footer class="footer pt-3">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                , made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1" />
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">
            White
          </button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">
            Dark
          </button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">
          You can change the sidenav type just on desktop view.
        </p>
        <!-- Navbar Fixed -->
        <div class="d-flex my-3">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)" />
          </div>
        </div>
        <hr class="horizontal dark my-sm-4" />
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)" />
          </div>
        </div>
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i>
            Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf("Win") > -1;
    if (win && document.querySelector("#sidenav-scrollbar")) {
      var options = {
        damping: "0.5",
      };
      Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js"></script>
</body>

</html>