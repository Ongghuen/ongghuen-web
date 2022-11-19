<?php
require('./koneksi.php');
$id = $_GET['id'];
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$bahan = $_POST['bahan'];
$detail = $_POST['detail'];


if (isset($_POST['submit'])) {
    $sql = mysqli_query($koneksi, "UPDATE `tb_custom` SET nama='$nama', kategori='$kategori',bahan='$bahan',detail='$detail' WHERE id='$id'");
    if ($sql) {
        header('location:customs.view.php');
    }
} elseif (isset($_POST['close'])) {
    header("location: customs.view.php");
}
