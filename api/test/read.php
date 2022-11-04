<?php

require '../../core/core.php';

header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'];

if ($method == "GET") {
  $lists = App::get('db')->selectAll("test");
}

echo json_encode([
  "method" => $method,
  "result" => $lists,
]);
