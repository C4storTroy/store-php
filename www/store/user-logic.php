<?php
session_start();
function userIsLogged(){
  return isset($_SESSION["user_logged"]);
}
function verifyUser(){
  if(!userIsLogged()){
//    echo "you have no access";
    $_SESSION["danger"] = "You have no access to this function";
    header("Location: index.php");
    die();
  }
}
function userLogged(){
  return $_SESSION["user_logged"];
}
function doLogin($email){
  //setcookie("user_logged", $email, time() + 60);
  $_SESSION["user_logged"] = $email;
}

function doLogout(){
  session_destroy();
  session_start();
}
