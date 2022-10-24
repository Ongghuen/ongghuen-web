<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  <script src="https://cdn.tailwindcss.com" defer></script>
  <title>Suki Store</title>
</head>

<?php

require 'core/helpers/functions.php';
require 'core/process/checkSession.php';
require 'core/core.php';

checkCookieAndSession();

?>

</html>