<?php
include('header.php');
include('connection.php');
include('product-db.php');

 $name = $_POST['name'];
 $price = $_POST['price'];
 $description = $_POST['description'];
 $category_id = $_POST['category_id'];

 if(array_key_exists("used", $_POST)){
   $used = "true";
 } else {
   $used = "false";
 }

 if (addProduct($conn, $name, $price, $description, $category_id, $used)) {
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
