<?php
require_once('user-db.php');
require_once('user-logic.php');

$user = searchUser($conn, $_POST['email'], $_POST['password']);
if($user == null){
  $_SESSION["danger"] = "User or password is invalid";
  header("Location: index.php");
} else {
  $_SESSION["success"] = "Login success";
  doLogin($user["email"]);
  header("Location: index.php");
}
die();
?>
