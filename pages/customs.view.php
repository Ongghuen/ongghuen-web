<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php
require("./koneksi.php");
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/images/logo2.png" />
  <link rel="icon" type="image/png" href="../assets/images/logo2.png" />
  <title>Customs - Dashboard Suki</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
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
        <li class="nav-item">
          <a class="nav-link" href="./orders.view.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-cart text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Oders</span>
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
          <a class="nav-link active" href="./customs.view.php">
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
              Dashboard
            </li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
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

            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <span class="d-sm-inline d-none">Halo, Ragnar Lothbrok</span>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-chevron-circle-down cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="dropdown-item d-flex align-items-center">
                  <a href="javascript:;" class="nav-link text-black px-2">
                    <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                  </a>
                  Setting
                </li>
                <li class="dropdown-item d-flex align-items-center">
                  <a href="./profile.view.php" class="nav-link text-black">
                    <i class="fa fa-user fixed-plugin-button-nav cursor-pointer"></i>
                  </a>
                  Profile
                </li>
                <li class="dropdown-item d-flex align-items-center">
                  <a href="../core/process/logout.php" class="nav-link text-black">
                    <i class="fa fa-sign-out cursor-pointer"></i>
                  </a>
                  Logout
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <h6>Custom table</h6>
                <button class="btn btn-success btn-sm ms-auto " data-modal-target="#modal-add">
                  Add Custom
                </button>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        No
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Nama
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        No Hp
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                        Email
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                        Username
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                        Password
                      </th> -->
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        No
                      </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Image
                      </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Name
                      </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Bahan
                      </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Deskripsi
                      </th>
                      <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Password
                      </th> -->
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Actions
                      </th>
                      <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Username
                      </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Password
                      </th> -->
                      <th></th>
                    </tr>
                  </thead>
                  <?php
                  $query  = "SELECT tb_custom.nama, tb_bahan.bahan, tb_custom.deskripsi FROM tb_custom JOIN tb_bahan WHERE tb_bahan.id = tb_custom.bahan";
                  $result = mysqli_query($koneksi, $query);
                  $no     = 1;
                  // if ($sesLvl == 1) {
                  //   $dis = "";
                  // } else {
                  //   $dis = "disabled";
                  // }
                  while ($row = mysqli_fetch_array($result)) {
                    $customName   = $row['nama'];
                    $customtBahan  = $row['bahan'];
                    $customDeskripsi  = $row['deskripsi'];
                  ?>
                    <tbody>

                      <tr>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold"><?php echo $no; ?></span>
                        </td>
                        <td class="align-middle text-center">
                          <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user1" />
                        </td>
                        <!-- <td class="align-middle text-center">
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user1" />
                            </div>

                          </div>

                        </td> -->
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold"><?php echo $customName; ?></span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold"><?php echo $customtBahan; ?></span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold"><?php echo $customDeskripsi; ?></span>
                        </td>
                        <td class="align-middle text-center">
                          <button class="btn btn-dark btn-sm ms-auto" value="<?php echo $row['id']; ?>" onclick="<?php echo $row['id']; ?>" data-modal-target="#modal">Edit</button>
                          <button class="btn btn-danger btn-sm ms-auto" data-modal-target="#modal-delete">Delete</button>
                        </td>

                      </tr>
                      <!-- <tr>
                        <td></td>
                        <td></td>
                        <td>></td>
                        <td>
                          <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-circle  <?php echo $dis; ?>" onClick="confirmModal('edit.php?&id=<?php echo $row['id']; ?>');"><i class="fas fa-pen"></i>
                        <td>
                          <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-circle <?php echo $dis; ?>" onClick="confirmModal('hapus.php?&id=<?php echo $row['id']; ?>');" data-toggle="modal" data-target="#hapusModal"><i class="fas fa-trash"></i>
                        </td>
                      </tr> -->
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

      <!-- Pop up Delete -->

      <div class="modal-delete" id="modal-delete">
        <div class="modal-header-delete">
          <h2 class="delete">Warning</h2>
          <button data-close-delete class="close-btn-delete">&times;</button>

          <div class="modal-body-delete">
            <div class="row">

              <p class="delete">
                Yakin dek mau ngehapus data orang? dosah loh dek
              </p>

            </div>
            <div class="align-middle text-center">
              <button class="btn btn-success btn-sm ms-auto">Hapus</button>
              <button class="btn btn-danger btn-sm ms-auto" data-close-delete>Close</button>
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
          transition: all 0.3s ease-in-out;
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
          transform: translateY(-100);
          transition: all 0.3s ease-in-out;
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
          padding-bottom: 15px;
          font-weight: 200;
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

        .modal-delete.active-delete .modal-header-delete {
          transform: translateY(0px);
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



      <!-- Pop up Add -->

      <div class="modal-add" id="modal-add">
        <div class="modal-header-add">
          <h2 class="add">Add Form</h2>
          <button data-close-add class="close-btn-add">&times;</button>

          <div class="modal-body-add">
            <form class="hahahha" id="form" action="users.view.php" method="post">

              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Name</label>
                <input class="form-control" type="text" value="" placeholder="Enter Name" name="txt_nama" id="txt_nama" required />

              </div>


              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Bahan</label>
                <input class="form-control" type="text" value="" placeholder="Enter Bahan" name="txt_nohp" id="txt_nohp" required />

              </div>


              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Deskripsi</label>
                <input class="form-control" type="email" value="" placeholder="Enter Deskripsi" name="txt_mail" id="txt_mail" required />

              </div>


              <!-- <div class="form-group">
                <label for="example-text-input" class="form-control-label">Kategori</label>
                <input class="form-control" type="text" value="" placeholder="Enter Kategori" name="txt_user" id="txt_user" required />

              </div> -->

              <!-- <div class="form-group">
                <label for="example-text-input" class="form-control-label">Password</label>
                <input class="form-control" type="password" value="" placeholder="Enter Password" name="txt_pw" id="txt_pw" required />

              </div> -->

              <div class="align-middle text-center">
                <button class="btn btn-success btn-sm ms-auto" type="submit" value="submit" name="add-user">Add</button>
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
          transition: all 0.3s ease-in-out;
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
          transform: translateY(-100);
          transition: all 0.3s ease-in-out;
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
          padding-bottom: 15px;
          font-weight: 200;
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

        .modal-add.active-add .modal-header-add {
          transform: translateY(0px);
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


      <!-- Pop up Edit -->

      <div class="modal-anjay" id="modal">
        <div class="modal-header-anjay">
          <h2 class="anjay">Edit Form</h2>
          <button data-close-button class="close-btn">&times;</button>

          <div class="modal-body-add">
            <form class="hahahha" id="form" action="users.view.php" method="post">

              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Name</label>
                <input class="form-control" type="text" value="" placeholder="Enter Name" name="txt_nama" id="txt_nama" required />

              </div>


              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Bahan</label>
                <input class="form-control" type="text" value="" placeholder="Enter Bahan" name="txt_nohp" id="txt_nohp" required />

              </div>


              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Deskripsi</label>
                <input class="form-control" type="email" value="" placeholder="Enter Deskripsi" name="txt_mail" id="txt_mail" required />

              </div>


              <!-- <div class="form-group">
                <label for="example-text-input" class="form-control-label">Kategori</label>
                <input class="form-control" type="text" value="" placeholder="Enter Kategori" name="txt_user" id="txt_user" required />

              </div> -->

              <!-- <div class="form-group">
                <label for="example-text-input" class="form-control-label">Password</label>
                <input class="form-control" type="password" value="" placeholder="Enter Password" name="txt_pw" id="txt_pw" required />

              </div> -->
              <div class="align-middle text-center">
                <button class="btn btn-success btn-sm ms-auto" type="submit" value="submit" name="add-user">Add</button>
                <button class="btn btn-danger btn-sm ms-auto" data-close-button>Close</button>
              </div>


          </div>
        </div>
      </div>
      <style>
        .modal-anjay {
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
          transition: all 0.3s ease-in-out;
        }

        .modal-body {
          padding: 10px;
          bottom: 10px;
        }

        .modal-header-anjay {
          background: white;
          width: 560px;
          max-width: 90%;
          padding: 20px;
          border-radius: 4x;
          position: relative;
          transform: translateY(-100);
          transition: all 0.3s ease-in-out;
        }

        .btn-open {
          background: black;
          padding: 10px 40px;
          color: white;
          border-radius: 5px;
          font-size: 15px;
          cursor: pointer;
        }

        p.anjay {
          line-height: 1.6;
          margin-bottom: 20px;
        }

        h2.anjay {
          text-align: center;
          padding-bottom: 15px;
          font-weight: 200;
        }

        .modal-header-anjay button.close-btn {
          position: absolute;
          right: 10px;
          top: 10px;
          font-size: 32px;
          background: none;
          outline: none;
          border: none;
          cursor: pointer;
        }

        .modal-header-anjay button.close-btn:hover {
          color: #6b46c1;
        }

        .active-anjay {
          opacity: 1;
          pointer-events: auto;
        }

        .modal-anjay.active-anjay .modal-header-anjay {
          transform: translateY(0px);
        }
      </style>
      <script>
        const openModalButtons = document.querySelectorAll("[data-modal-target]");
        const closeModalButtons = document.querySelectorAll(
          "[data-close-button]"
        );

        openModalButtons.forEach((button) => {
          button.addEventListener("click", () => {
            const modal = document.querySelector(button.dataset.modalTarget);
            openModal(modal);
          });
        });

        closeModalButtons.forEach((button) => {
          button.addEventListener("click", () => {
            const modal = button.closest(".modal-anjay");
            closeModal(modal);
          });
        });

        function openModal(modal) {
          if (modal == null) return;
          modal.classList.add("active-anjay");
        }

        function closeModal(modal) {
          if (modal == null) return;
          modal.classList.remove("active-anjay");
        }
      </script>
      <!-- end Pop up Edit -->




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
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>