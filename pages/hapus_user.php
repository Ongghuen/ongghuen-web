<?php
require("./koneksi.php");
if (isset($_GET['id'])) {
    $sql_hapus = "delete from tb_user where id='" . $_GET['id'] . "'";
    $query_hapus = mysqli_query($koneksi, $sql_hapus);


    if ($query_hapus) {
        header("location: users.view.php");
    } else {
        header("location: users.view.php");
    }
} elseif (isset($_POST['submit'])) {
    header("location: users.view.php");
} else {
    header("location: users.view.php");
}
