<?php

// kayak print() atau console.log() atau apalah itu
function dd($var)
{
  echo '<pre>';
  die(var_dump($var));
  echo '</pre>';
}

// require page pake fungsi (in a cool way)
function view($name, $val = [])
{
  extract($val);
  return require "pages/{$name}.view.php";
}

// redirect ke mana nihh
function redirect($path)
{
  header("Location: /web/{$path}.php");
}
// redirect ke view
function redirectView($path)
{
  header("Location: /web/{$path}.view.php");
}
