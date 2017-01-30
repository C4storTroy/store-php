<?php include 'header.php'; ?>
<?php include 'connection.php'; ?>
<?php

 function addProduct($conn, $name, $price){
   $query = "insert into products (name, price) values ('{$name}', {$price});";
   return mysqli_query($conn, $query);
 }
 $name = $_GET['name'];
 $price = $_GET['price'];

 if (addProduct($conn, $name, $price)) {
 ?>
   <p class="text-success">Adding Product <?= $name; ?> price: <?= $price; ?>  was success!</p>
 <?php
 } else {
   $msg = mysqli_error($conn);
 ?>
   <p class="text-danger">Product <?= $name; ?>  was not added: <?= $msg ?></p>
 <?php
 }
?>

<?php include 'footer.php'; ?>
