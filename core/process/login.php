<?php
  require '../helpers/functions.php';
  require '../core.php';
  session_start();

  if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $login = App::get('db')->login($username, $password);
    if($login){
      $cekPw = password_verify($password, $login[0]["password"]);
      if($cekPw == false){
        $_SESSION['isLogged'] = true;

        $row = App::get('db')->selectRow("username", $username);
        if(isset($_POST['remember'])) {
          setcookie('id', $row[0]['id'], time()+60);
          setcookie('key', hash('sha256', $row[0]['username']), time()+60);
        }

        redirectView("home");
        exit;
      }
    }

    redirectViewError('login');
  }