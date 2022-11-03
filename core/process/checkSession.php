<?php

function checkSession()
{
  return $_SESSION['isLogged'];
}

function checkCookieAndSession()
{
  if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $row = App::get('db')->selectRow("id", "$id");
    if ($key === hash('sha256', $row[0]['username'])) {
      $_SESSION['isLogged'] = true;
    }
  }

  if (!isset($_SESSION["isLogged"])) {
    redirectView('index');
  } else {
    redirectView('home');
  }
}

function checkSessionAndRedirect()
{
  if (checkSession() == false) {
    redirect('index');
  }
}
