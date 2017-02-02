<?php
function userIsLogged(){
  return isset($_COOKIE["user_logged"]);
}
function verifyUser(){
  if(!userIsLogged()){
    echo "you have no access";
    //header("Location: index.php?securityFail=true");
    die();
  }
}
function userLogged(){
  return $_COOKIE["user_logged"];
}
function doLogin($email){
  setcookie("user_logged", $email, time() + 60);
}
