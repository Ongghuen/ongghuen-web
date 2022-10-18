<?php

require '../core/core.php';

header('Content-Type: application/json');

$params = [
  "nama" => $_POST['nama'],
  "harga" => $_POST['harga']
];

$lists = App::get('db')->insert("test", $params);

// pesan balik ke api
// ngecek kalo returnnya itu isinya "success" kalo engga, ya diketawain
if (str_contains($lists, "success")) {
  $msg = "Data berhasil masuk cuy";
} else {
  $msg = "hahay lmao bgt ngab gagal";
}

echo json_encode($msg);
