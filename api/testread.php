<?php

require '../core/core.php';

header('Content-Type: application/json');

$lists = App::get('db')->selectAll("test");

echo json_encode($lists);
