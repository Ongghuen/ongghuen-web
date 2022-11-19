<?php
require('./koneksi.php');
$id = $_GET['id'];
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_POST['submit'])) {
    $sql = mysqli_query($koneksi, "UPDATE `tb_user` SET nama='$nama',nohp='$nohp',email='$email',username='$username',password='$password' WHERE id='$id'");
    if ($sql) {
        header('location:users.view.php');
    }
} elseif (isset($_POST['close'])) {
    header("location: users.view.php");
}
