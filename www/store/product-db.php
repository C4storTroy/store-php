<?php
function addProduct($conn, $name, $price, $description, $category_id, $used){
  $query = "insert into products (name, price, description, category_id, used)
  values ('{$name}', {$price}, '{$description}', $category_id, {$used});";
  return mysqli_query($conn, $query);
}

function listProducts($conn){
  //$products = [];
  $products = array();
  $result = mysqli_query($conn, "select p.*,c.name as category_name from
  products as p join category as c on c.id=p.category_id");
  while($product = mysqli_fetch_assoc($result)){
    array_push($products, $product);
  }
  return $products;
}

function removeProduct($conn, $id){
  $query = "delete from products where id = {$id}";
  return mysqli_query($conn, $query);
}

function searchProduct($conn, $id){
  $query = "select * from products where id = {$id}";
  $result = mysqli_query($conn, $query);
  return mysqli_fetch_assoc($result);
}

function alterProduct($conn, $id, $name, $price, $description, $category_id, $used){
  $query = "update products set name = '{$name}', price = {$price} ,
  description = '{$description}', category_id = {$category_id} , used = {$used}
  where id = '{$id}'";
  return mysqli_query($conn, $query);
}
