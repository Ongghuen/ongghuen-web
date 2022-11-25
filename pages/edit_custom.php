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
            header('location:customs.view.php');
        } else {
            $sql = mysqli_query($koneksi, "UPDATE `tb_custom` SET nama='$nama', foto='$foto', kategori='$kategori',bahan='$bahan',detail='$detail' WHERE id='$id'");
            header('location:customs.view.php');
        }
    }
}

if (isset($_POST['close'])) {
    header("location: customs.view.php");
}
