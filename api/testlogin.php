<?php

require '../core/core.php';

header('Content-Type: application/json');

$params = [
  "nama" => $_POST['username'],
  "password" => $_POST['password']
];

$lists = App::get('db')->login($params['nama'], $params['password']);

// pesan balik ke api
if (empty($lists)) {
  $msg = "kamu sapa namanya? dimana rumahnya?";
} else {
  $msg = "sip deh masuk";
}

echo json_encode([
  "result" => $lists,
  "msg" => $msg
]);
