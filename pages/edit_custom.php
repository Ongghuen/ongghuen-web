<body>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</body>


<?php
require('./koneksi.php');
error_reporting(1);
$id = $_GET['id'];
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$bahan = $_POST['bahan'];
$detail = $_POST['detail'];

$foto = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp, '../foto/custom/' . $foto);


if (isset($_POST['submit'])) {
    if (isset($_POST['submit'])) {
        if ($foto == "") {
            $sql = mysqli_query($koneksi, "UPDATE `tb_custom` SET nama='$nama', kategori='$kategori',bahan='$bahan',detail='$detail' WHERE id='$id'");
            // header('location:customs.view.php');
            echo "<script>
            Swal.fire({title: 'Data Berhasil Diubah',text: '',icon: 'success',confirmButtonText: 'OK'
            }).then((result) => {if (result.value)
                {window.location = 'customs.view.php';}
            })</script>";
        } else {
            $sql = mysqli_query($koneksi, "UPDATE `tb_custom` SET nama='$nama', foto='$foto', kategori='$kategori',bahan='$bahan',detail='$detail' WHERE id='$id'");
            // header('location:customs.view.php');
            echo "<script>
            Swal.fire({title: 'Data Berhasil Diubah',text: '',icon: 'success',confirmButtonText: 'OK'
            }).then((result) => {if (result.value)
                {window.location = 'customs.view.php';}
            })</script>";
        }
    } else {
        echo "<script>
        Swal.fire({title: 'Data Gagal Disimpan',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {if (result.value)
            {window.location = 'customs.view.php';}
        })</script>";
    }
}

if (isset($_POST['close'])) {
    header("location: customs.view.php");
}
