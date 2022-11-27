
<?php
include "koneksi.php";
error_reporting(0);
$data = mysqli_query($koneksi, "SELECT foto FROM tb_user WHERE id = '$_GET[id]' ");
$row = mysqli_fetch_array($data);

if (file_exists('../file/user' . $row['foto'])) {
    unlink('../file/user' . $row['foto']);
    $query = "DELETE FROM tb_user WHERE id = '$_GET[id]' ";
    mysqli_query($koneksi, $query);
    header('location:users.view.php');
} else {
}




if (isset($_POST['submit'])) {
    header("location: users.view.php");
} else {
    header("location:users.view.php");
}
