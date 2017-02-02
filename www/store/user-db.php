<?php
function searchUser($conn, $email, $password){
  $passwordMd5 = md5($password);
  $query = "select * from users where email='{$email}' and password='{$passwordMd5}'";
  $result = mysqli_query($conn, $query);
  $user = mysqli_fetch_assoc($result);
  return $user;
}
