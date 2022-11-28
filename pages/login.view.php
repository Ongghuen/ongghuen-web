<?php
include "koneksi.php";
session_start();
if (isset($_SESSION["ses_username"]) != '') {
  header("location: dashboard.view.php");
  header("location: customs.view.php");
  header("location: orders.view.php");
  header("location: products.view.php");
  header("location: profile.view.php");
  header("location: report.view.php");
  header("location: transaksi.view.php");
  header("location: users.view.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/style.css">
  <script src="https://cdn.tailwindcss.com" defer></script>
  <title>Suki Store</title>
</head>

<body>
  <section class="shadow-2xl">
    <div class="leftBox">
      <img class="logo" src="../assets/img/logo.png">
    </div>
    <div class="rightBox">
      <div class="formBox">
        <h2>Login</h2>
        <form action="" method="post">
          <div class="inputBox">
            <span>Username</span>
            <input type="text" name="username" required>
          </div>
          <div class="inputBox">
            <span>Password</span>
            <input type="password" name="password" required>
          </div>
          <!-- <div class="remember">
            <label for="remember">
              <input type="checkbox" name="remember" id="remember"> Remember me
            </label>
          </div> -->
          <div class="inputBox">
            <input type="submit" name="login" value="Sign In">
          </div>
        </form>
      </div>
    </div>
  </section>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</body>

</html>

<?php
if (isset($_POST['login'])) {
  //anti inject sql
  $username = mysqli_real_escape_string($koneksi, $_POST['username']);
  $password = mysqli_real_escape_string($koneksi, $_POST['password']);

  //query login
  $sql_login = "SELECT * FROM tb_user WHERE username='$username' AND password='$password'";
  $query_login = mysqli_query($koneksi, $sql_login);
  $data_login = mysqli_fetch_array($query_login, MYSQLI_BOTH);
  $jumlah_login = mysqli_num_rows($query_login);


  if ($jumlah_login == 1) {

    $_SESSION["ses_id"] = $data_login["id"];
    $_SESSION["ses_nama"] = $data_login["nama"];
    $_SESSION["ses_foto"] = $data_login["foto"];
    $_SESSION["ses_nohp"] = $data_login["nohp"];
    $_SESSION["ses_email"] = $data_login["email"];
    $_SESSION["ses_username"] = $data_login["username"];
    $_SESSION["ses_password"] = $data_login["password"];


    echo "<script>
		Swal.fire({title: 'Login Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
		}).then((result) => {if (result.value)
			{window.location = 'dashboard.view.php';}
		})</script>";
  } else {

    echo "<script>
			Swal.fire({title: 'Login Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
			}).then((result) => {if (result.value)
				{window.location = 'login.view.php';}
			})</script>";
  }
}
