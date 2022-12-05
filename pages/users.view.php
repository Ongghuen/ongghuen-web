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
  <title>Users - Dashboard Suki</title>
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
      <a class="navbar-brand m-0" href="./dashboard.view.php">
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
          <a class="nav-link" href="./transaksi.view.php">
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
          <a class="nav-link active" href="./users.view.php">
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
              Users
            </li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Users</h6>
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
      <form class="ahahah" action="" method="post">
        <div class="card-body">
          <div class="row gx-4">


            <!-- <div class="dropdown col-auto">



              <button class="btn btn-sm bg-gradient-dark dropdown-toggle mb-1 px-3" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                Sort
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <button class="dropdown-item" name="urutnama" type="submit">Name</button>
              </ul>

            </div> -->


            <div class="dropdown col-auto">

              <button class="btn btn-sm bg-gradient-dark dropdown-toggle mb-1 px-4" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                Sort By
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <button class="dropdown-item" name="urutinasc" type="submit">Nama Asc (A-Z)</button>
                <button class="dropdown-item" name="urutindesc" type="submit">Nama Desc (Z-A)</button>


              </ul>

            </div>
      </form>


      <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
        <div class="nav-wrapper position-relative end-0">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <form class="input-group" action="" method="post">
              <div class="input-group">
                <input type="text" class="form-control ms-4" name="data" id="search_text" placeholder="Type here..." aria-label="Type here..." aria-describedby="button-addon2">
                <button class="btn bg-gradient-dark mb-0" type="submit" name="caridata" id="button-addon2">
                  <i class="fas fa-search" aria-hidden="true"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
    </div>




    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <h6>Users table</h6>
                <button class="btn btn-success btn-sm ms-auto " data-modal-target="#modal-add<?= $row['id'] ?>">
                  Add User
                </button>
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
                          Avatar
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                          Name
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                          No Hp
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                          Email
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                          Username
                        </th>
                        <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                          Password
                        </th> -->
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                          Actions
                        </th>
                      </tr>
                    </thead>
                    <?php
                    error_reporting(1);
                    if (isset($_POST['caridata'])) {
                      $caringab = ("SELECT id, foto, nama, nohp, email, alamat , username, password  FROM tb_user WHERE level = '1' and nama LIKE '" . $_POST['data'] . "%'");
                      $result   = mysqli_query($koneksi, $caringab);
                    } elseif (isset($_POST['urutnama'])) {
                      $urutnama = ("SELECT id, foto, nama, nohp, email, alamat , username, password  FROM tb_user WHERE level = '1' order by nama asc ");
                      $result   = mysqli_query($koneksi, $urutnama);
                    } elseif (isset($_POST['urutinasc'])) {
                      $urutasc = ("SELECT id, foto, nama, nohp, email, alamat, username, password  FROM tb_user WHERE level = '1' order by nama asc ");
                      $result   = mysqli_query($koneksi, $urutasc);
                    } elseif (isset($_POST['urutindesc'])) {
                      $urutdesc = ("SELECT id, foto, nama, nohp, email, alamat, username, password  FROM tb_user WHERE level = '1' order by nama desc ");
                      $result   = mysqli_query($koneksi, $urutdesc);
                    } else {
                      $tampilngab = ("SELECT id, foto, nama, nohp, email, alamat,  username, password  FROM tb_user WHERE level = '1'");
                      $result   = mysqli_query($koneksi, $tampilngab);
                    }
                    $no = 1;

                    while ($row = mysqli_fetch_array($result)) {
                      $userUserId   = $row['id'];
                      $userFoto  = $row['foto'];
                      $userName   = $row['nama'];
                      $userPhone  = $row['nohp'];
                      $userEmail  = $row['email'];
                      $userAlamat = $row['alamat'];
                      $userUserName  = $row['username'];
                      $userPassword  = $row['password'];
                    ?>
                      <tbody>

                        <tr>
                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold"><?php echo $no; ?></span>
                          </td>
                          <td class="align-middle text-center">
                            <img src="../foto/user/<?php echo $userFoto; ?>" class="avatar avatar-sm me-2" alt="user1" />
                          </td>
                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold"><?php echo $userName; ?></span>
                          </td>
                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold"><?php echo $userPhone; ?></span>
                          </td>
                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold"><?php echo $userEmail; ?></span>
                          </td>
                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold"><?php echo $userUserName; ?></span>
                          </td>
                          <!-- <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold"><?php echo $userPassword; ?></span>
                          </td> -->
                          <td class="align-middle text-center">
                            <button class="btn btn-dark btn-sm px-3 py-1 me-1 mt-3" data-modal-target="#modal-edit<?= $row['id'] ?>">Edit</button>
                            <button class="btn btn-danger btn-sm px-3 py-1 me-1 mt-3" data-modal-target="#modal-delete<?= $row['id'] ?>">Delete</button>

                          </td>

                        </tr>


                        <!-- Pop up Edit -->

                        <div class="modal-edit" id="modal-edit<?= $row['id'] ?>">
                          <div class="modal-header-edit">
                            <h2 class="edit">Edit Form</h2>
                            <!-- <button data-close-button-edit type="submit" class="close-btn-edit">&times;</button> -->
                            <div class="modal-body-edit">
                              <form action="users.view.php?id=<?= $row['id'] ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Name</label>
                                  <input class="form-control" name="nama" type="text" value="<?= $row['nama'] ?>" maxlength="30" placeholder="Enter Name" required />
                                </div>


                                <div class="form-group">
                                  <label class="custom-file-label" for="customFileLang">Upload Avatar</label>
                                  <input type="file" class="form-control" name="foto">

                                </div>

                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">No Hp</label>
                                  <input class="form-control" name="nohp" type="text" value="<?= $row['nohp'] ?>" oninput="this.value = this.value.replace(/[^\d]+/, '').replace(/(\..*?)\..*/g, '$1');" maxlength="12" placeholder="Enter No Hp" required />
                                </div>


                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Email</label>
                                  <input class="form-control" name="email" type="email" value="<?= $row['email'] ?>" maxlength="30" placeholder="Enter Email" required />
                                </div>

                                <div class="form-group">
                                  <label for="exampleFormControlTextarea1">Alamat</label>
                                  <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" maxlength="500" rows="2"><?= $userAlamat ?></textarea>
                                </div>


                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Username</label>
                                  <input class="form-control" name="username" type="text" value="<?= $row['username'] ?>" maxlength="30" placeholder="Enter Username" required />
                                </div>

                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Password</label>
                                  <input class="form-control" name="password" type="password" value="<?= $row['password'] ?>" maxlength="30" placeholder="Enter Password" required />
                                </div>


                                <div class="align-middle text-center">
                                  <button class="btn btn-success btn-sm ms-auto" name="edit-user">Edit</button>
                                  <a href="users.view.php" class="btn btn-danger btn-sm ms-auto">Close</a>
                                  <!-- <button class="btn btn-danger btn-sm ms-auto" data-close-button-edit>Close</button> -->
                                  <!-- <a class="btn btn-danger btn-sm ms-auto" type="submit" data-close-button-edit>Close</a> -->
                                </div>
                              </form>

                            </div>
                          </div>
                        </div>

                        <style>
                          .modal-edit {
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

                          .modal-body-edit {
                            padding: 10px;
                            bottom: 10px;
                          }

                          .modal-header-edit {
                            background: white;
                            width: 560px;
                            max-width: 90%;
                            padding: 20px;
                            border-radius: 4x;
                            position: relative;

                          }

                          .btn-open-edit {
                            background: black;
                            padding: 10px 40px;
                            color: white;
                            border-radius: 5px;
                            font-size: 15px;
                            cursor: pointer;
                          }

                          p.edit {
                            line-height: 1.6;
                            margin-bottom: 20px;
                          }

                          h2.edit {
                            text-align: center;

                          }

                          .modal-header-edit button.close-btn-edit {
                            position: absolute;
                            right: 10px;
                            top: 10px;
                            font-size: 32px;
                            background: none;
                            outline: none;
                            border: none;
                            cursor: pointer;
                          }

                          .modal-header-edit button.close-btn-edit:hover {
                            color: #6b46c1;
                          }

                          .active-edit {
                            opacity: 1;
                            pointer-events: auto;
                          }
                        </style>
                        <script>
                          const openModalButtons = document.querySelectorAll("[data-modal-target]");
                          const closeModalButtons = document.querySelectorAll(
                            "[data-close-button-edit]"
                          );

                          openModalButtons.forEach((button) => {
                            button.addEventListener("click", () => {
                              const modal = document.querySelector(button.dataset.modalTarget);
                              openModal(modal);
                            });
                          });

                          closeModalButtons.forEach((button) => {
                            button.addEventListener("click", () => {
                              const modal = button.closest(".modal-edit");
                              closeModal(modal);
                            });
                          });

                          function openModal(modal) {
                            if (modal == null) return;
                            modal.classList.add("active-edit");
                          }

                          function closeModal(modal) {
                            if (modal == null) return;
                            modal.classList.remove("active-edit");
                          }
                        </script>
                        <!-- end Pop up Edit -->

                        <!-- Pop up Delete -->

                        <div class="modal-delete" id="modal-delete<?= $row['id'] ?>">
                          <div class="modal-header-delete">
                            <h2 class="delete">Warning</h2>
                            <!-- <button data-close-delete class="close-btn-delete">&times;</button> -->

                            <div class="modal-body-delete">
                              <div class="row">

                                <p class="delete">
                                  Yakin dek mau ngehapus data <?php echo $row['nama'] ?> ?
                                </p>

                              </div>
                              <div></div>
                              <div></div>
                              <form class="yayyay" action="users.view.php?id=<?= $row['id'] ?>" method="post">
                                <div class="align-middle text-center">
                                  <button class="btn btn-success btn-sm ms-auto" type="submit" name="delete">Delete</button>
                                  <!-- <a class="btn btn-success btn-sm ms-auto" href="users.view.php?id=<?= $row['id'] ?>">Delete</a> -->
                                  <a href="users.view.php" class="btn btn-danger btn-sm ms-auto">Close</a>
                                  <!-- <button class="btn btn-success btn-sm ms-auto" name="submit" data-close-delete>Close</button> -->
                                  <!-- <button class="btn btn-danger btn-sm ms-auto" href="hapus_user.php?id=<?php echo $row['id']; ?>" data-close-delete>Close</button> -->
                              </form>
                            </div>


                          </div>
                        </div>
                </div>



                <style>
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

                    z-index: 10000;

                  }

                  .modal-body-delete {
                    padding: 10px;
                    bottom: 10px;
                  }

                  .modal-header-delete {
                    background: white;
                    width: 560px;
                    max-width: 90%;
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
                    } ?>
              </tbody>
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
            <form action="users.view.php" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Name</label>
                <input class="form-control" id="nama" type="text" value="" placeholder="Enter Name" maxlength="30" name="txt_nama" id="txt_nama" required />

              </div>

              <div class="form-group">
                <label class="custom-file-label" for="customFileLang">Upload Avatar</label>
                <input type="file" class="form-control" id="foto" name="fotoadd" id="foto" required>

              </div>


              <div class="form-group">
                <label for="example-text-input" class="form-control-label">No Hp</label>
                <input class="form-control" id="nohp" type="text" value="" placeholder="Enter No Hp" oninput="this.value = this.value.replace(/[^\d]+/, '').replace(/(\..*?)\..*/g, '$1');" maxlength="12" name="txt_nohp" id="txt_nohp" required />

              </div>


              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Email</label>
                <input class="form-control" id="email" type="email" value="" placeholder="Enter Email" maxlength="30" name="txt_mail" id="txt_mail" required />

              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="txt_alamat" placeholder="Enter Address" maxlength="500" rows="2"></textarea>
              </div>


              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Username</label>
                <input class="form-control" id="username" type="text" value="" placeholder="Enter Username" maxlength="30" name="txt_user" id="txt_user" required />

              </div>

              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Password</label>
                <input class="form-control" id="password" type="password" value="" placeholder="Enter Password" maxlength="30" name="txt_pw" id="txt_pw" required />

              </div>

              <div class="align-middle text-center">
                <button class="btn btn-success btn-sm ms-auto" id="add-user" name="add-user">Add</button>
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
    </div>

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
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>


</body>

</html>


<?php

require('./koneksi.php');
session_start();
error_reporting(0);
if (isset($_POST['add-user'])) {
  $userNama = $_POST['txt_nama'];
  $userNoHp = $_POST['txt_nohp'];
  $userMail = $_POST['txt_mail'];
  $userAlamat = $_POST['txt_alamat'];
  $userUser = $_POST['txt_user'];
  $userPw = $_POST['txt_pw'];

  $fotoadd = $_FILES['fotoadd']['name'];
  $file_tmp = $_FILES['fotoadd']['tmp_name'];
  move_uploaded_file($file_tmp, '../foto/user/' . $foto);

  $query    = "INSERT INTO tb_user SET nama = '$userNama', foto = '$fotoadd', nohp = '$userNoHp', email = '$userMail', alamat = '$userAlamat', username = '$userUser', password = '$userPw', level = '1'";
  $result   = mysqli_query($koneksi, $query);


  if ($result) {
    echo "<script>
		Swal.fire({title: 'Data Berhasil Disimpan',text: '',icon: 'success',confirmButtonText: 'OK'
		}).then((result) => {if (result.value)
			{window.location = '';}
		})</script>";
  } else {

    echo "<script>
			Swal.fire({title: 'Data Gagal Disimpan',text: '',icon: 'error',confirmButtonText: 'OK'
			}).then((result) => {if (result.value)
				{window.location = '';}
			})</script>";
  }
}


require('./koneksi.php');
error_reporting(0);
$id = $_GET['id'];
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = $_POST['password'];
$foto = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp, '../foto/user/' . $foto);


if (isset($_POST['edit-user'])) {
  if (isset($_POST['edit-user'])) {
    if ($foto == "") {
      $sql = mysqli_query($koneksi, "UPDATE `tb_user` SET nama='$nama',nohp='$nohp',email='$email', alamat='$alamat', username='$username',password='$password' WHERE id='$id'");
      // header('location:users.view.php');
      echo "<script>
            Swal.fire({title: 'Data Berhasil Diubah',text: '',icon: 'success',confirmButtonText: 'OK'
            }).then((result) => {if (result.value)
                {window.location = 'users.view.php';}
            })</script>";
    } else {
      $sql = mysqli_query($koneksi, "UPDATE `tb_user` SET nama='$nama', foto='$foto', nohp='$nohp',email='$email', alamat='$alamat', username='$username',password='$password' WHERE id='$id'");
      // header('location:users.view.php');
      echo "<script>
            Swal.fire({title: 'Data Berhasil Diubah',text: '',icon: 'success',confirmButtonText: 'OK'
            }).then((result) => {if (result.value)
                {window.location = 'users.view.php';}
            })</script>";
    }
  } else {
    echo "<script>
            Swal.fire({title: 'Data Gagal Disimpan',text: '',icon: 'error',confirmButtonText: 'OK'
            }).then((result) => {if (result.value)
                {window.location = 'users.view.php';}
            })</script>";
  }
}

include "koneksi.php";
error_reporting(0);


if (isset($_POST['delete'])) {

  if (isset($_POST['delete'])) {
    $querydel = "DELETE FROM tb_user WHERE id = '$_GET[id]' ";
    $result = mysqli_query($koneksi, $querydel);

    echo "<script>
    Swal.fire({title: 'Data Berhasil Dihapus',text: '',icon: 'success',confirmButtonText: 'OK'
    }).then((result) => {if (result.value)
        {window.location = 'users.view.php';}
    })</script>";
  } else {
    echo "<script>
    Swal.fire({title: 'Data Gagal Dihapus',text: '',icon: 'error',confirmButtonText: 'OK'
    }).then((result) => {if (result.value)
        {window.location = 'users.view.php';}
    })</script>";
  }
} else {
}


?>