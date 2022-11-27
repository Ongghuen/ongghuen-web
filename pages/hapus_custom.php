<?php
require("./koneksi.php");
error_reporting(0);
$data = mysqli_query($koneksi, "SELECT foto FROM tb_custom WHERE id = '$_GET[id]' ");
$row = mysqli_fetch_array($data);

if (file_exists('../file/custom' . $row['foto'])) {
    unlink('../file/custom' . $row['foto']);
    $query = "DELETE FROM tb_custom WHERE id = '$_GET[id]' ";
    mysqli_query($koneksi, $query);
    header('location: customs.view.php"');
} else {

}




if (isset($_POST['submit'])) {
    header("location: customs.view.php");
} else {
    header("location: customs.view.php");
}
