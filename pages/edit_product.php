<?php
require('./koneksi.php');
$id = $_GET['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$qty = $_POST['qty'];
$kategori = $_POST['kategori'];


if (isset($_POST['submit'])) {
    $sql = mysqli_query($koneksi, "UPDATE `tb_product` SET nama='$nama',harga='$harga',qty='$qty',kategori='$kategori' WHERE id='$id'");
    if ($sql) {
        header('location:products.view.php');
    }
} elseif (isset($_POST['close'])) {
    header("location: products.view.php");
}
