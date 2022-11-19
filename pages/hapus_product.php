<?php
require("./koneksi.php");
if (isset($_GET['id'])) {
    $sql_hapus = "delete from tb_product where id='" . $_GET['id'] . "'";
    $query_hapus = mysqli_query($koneksi, $sql_hapus);


    if ($query_hapus) {
        header("location: products.view.php");
    } else {
        header("location: products.view.php");
    }
} elseif (isset($_POST['submit'])) {
    header("location: products.view.php");
} else {
    header("location:products.view.php");
}
