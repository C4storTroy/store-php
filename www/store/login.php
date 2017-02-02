<?php
include ('connection.php');
include ('user-db.php');
include('user-logic.php');

$user = searchUser($conn, $_POST['email'], $_POST['password']);
if($user == null){
  header("Location: index.php?login=0");
} else {
  doLogin($user["email"]);
  header("Location: index.php?login=1");
}
die();
