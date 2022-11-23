<?php
require('./koneksi.php');
error_reporting(1);
$id = $_GET['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$qty = $_POST['qty'];
$kategori = $_POST['kategori'];
$foto = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp, '../foto/product/' . $foto);


if (isset($_POST['submit'])) {
    if (isset($_POST['submit'])) {
        if ($foto == "") {
            $sql = mysqli_query($koneksi, "UPDATE `tb_product` SET nama='$nama',harga='$harga',qty='$qty',kategori='$kategori' WHERE id='$id'");
            header('location:products.view.php');
        } else {
            $sql = mysqli_query($koneksi, "UPDATE `tb_product` SET foto='$foto', nama='$nama',harga='$harga',qty='$qty',kategori='$kategori' WHERE id='$id'");
            header('location:products.view.php');
        }
    }
}

if (isset($_POST['close'])) {
    header("location: products.view.php");
}
