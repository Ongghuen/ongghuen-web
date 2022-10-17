<?php

require 'database/connection.php';
require 'database/querybuilder.php';
require 'app.php';

$config = [
  'username' => 'root',
  'password' => '',
  'connection' => 'mysql:host=127.0.0.1;dbname=sukimebel',
  'options' => [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
];

App::bind('db', new QueryBuilder(Connection::make($config)));