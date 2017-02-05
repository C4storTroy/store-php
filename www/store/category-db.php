<?php
require_once("connection.php");
function listCategory($conn){
  $categories = array();
  $query = "select * from category";
  $result = mysqli_query($conn, $query);
  while($category = mysqli_fetch_assoc($result)){
    array_push($categories, $category);
  }
  return $categories;
}
