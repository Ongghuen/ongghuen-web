<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  <title>PHP</title>
</head>

<?php

require 'core/helpers/functions.php';
require 'core/core.php';

session_start();
$isLogged = $_SESSION['isLogged'];

if ($isLogged) {
  view('home');
} else {
  view('login');
}

?>

</html>