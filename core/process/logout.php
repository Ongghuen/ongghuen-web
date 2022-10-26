<?php

  require '../helpers/functions.php';
  session_start();
  session_unset();
  session_destroy();

  redirectView("index");