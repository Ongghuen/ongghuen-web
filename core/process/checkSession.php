<?php

function checkSession()
{
  return $_SESSION['isLogged'];
}

function checkSessionAndView()
{
  if (!isset($_SESSION["isLogged"])) {
    view('landing');
  }

  // if (checkSession()) {
  //   view('home');
  // } else {
  //   view('landing');
  // }
}

function checkSessionAndRedirect()
{
  if (checkSession() == false) {
    redirect('index');
  }
}
