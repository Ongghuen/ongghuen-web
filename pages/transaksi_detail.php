<?php
require("./koneksi.php");
if (isset($_POST['submit'])) {
    header("location: transaksi.view.php");
} else {
    header("location: transaksi.view.php");
}
