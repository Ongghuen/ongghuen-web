<?php

function checkSession()
{
  return $_SESSION['isLogged'];
}

function checkSessionAndView()
{
  if(!isset($_SESSION["isLogged"])){
    view('landing');
    exit;
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
