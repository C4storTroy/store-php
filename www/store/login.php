<?php
include ('connection.php');
include ('user-db.php');

$user = searchUser($conn, $_POST['email'], $_POST['password']);
if($user == null){
  header("Location: index.php?login=0");
} else {
  setcookie("user_logged", $user['email'], tume() + 60);
  header("Location: index.php?login=1");
}
die();
