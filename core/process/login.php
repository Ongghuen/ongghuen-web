<?php

  require '../helpers/functions.php';
  session_start();
  $_SESSION['isLogged'] = true;

  redirect("index");