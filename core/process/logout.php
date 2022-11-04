<?php

  require '../helpers/functions.php';
  session_start();
  $_SESSION[""];
  session_unset();
  session_destroy();

  if(isset($_COOKIE['id']) && ($_COOKIE['key'])):
    setcookie('id', $row[0]['id'], time()-70000, '/');
    setcookie('key', hash('sha256', $row[0]['username']), time()-70000, '/');
  endif;

  redirectView("index");