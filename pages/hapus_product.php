<?php
require("./koneksi.php");
$data = mysqli_query($koneksi, "SELECT foto FROM tb_product WHERE id = '$_GET[id]' ");
$row = mysqli_fetch_array($data);

if (file_exists('../file/product' . $row['foto'])) {
    unlink('../file/product' . $row['foto']);
    $query = "DELETE FROM tb_product WHERE id = '$_GET[id]' ";
    mysqli_query($koneksi, $query);
    header('location:products.view.php"');
} else {

}


if (isset($_POST['submit'])) {
    header("location: products.view.php");
} else {
    header("location:products.view.php");
}
