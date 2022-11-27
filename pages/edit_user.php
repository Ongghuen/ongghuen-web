<body>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</body>


<?php
require('./koneksi.php');
error_reporting(1);
$id = $_GET['id'];
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$foto = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp, '../foto/user/' . $foto);


if (isset($_POST['submit'])) {
    if (isset($_POST['submit'])) {
        if ($foto == "") {
            $sql = mysqli_query($koneksi, "UPDATE `tb_user` SET nama='$nama',nohp='$nohp',email='$email',username='$username',password='$password' WHERE id='$id'");
            // header('location:users.view.php');
            echo "<script>
            Swal.fire({title: 'Data Berhasil Diubah',text: '',icon: 'success',confirmButtonText: 'OK'
            }).then((result) => {if (result.value)
                {window.location = 'users.view.php';}
            })</script>";
        } else {
            $sql = mysqli_query($koneksi, "UPDATE `tb_user` SET nama='$nama', foto='$foto', nohp='$nohp',email='$email',username='$username',password='$password' WHERE id='$id'");
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

if (isset($_POST['close'])) {
    header("location: users.view.php");
}
