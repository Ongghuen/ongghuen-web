<?php

function checkSession()
{
  return $_SESSION['isLogged'];
}

function checkSessionAndView()
{
  if (checkSession()) {
    view('home');
  } else {
    view('login');
  }
}

function checkSessionAndRedirect()
{
  if (checkSession() == false) {
    redirect('index');
  } 
}
