<?php
include('header.php');
include('connection.php');
include('product-db.php');

 $id = $_POST['id'];
 $name = $_POST['name'];
 $price = $_POST['price'];
 $description = $_POST['description'];
 $category_id = $_POST['category_id'];

 if(array_key_exists("used", $_POST)){
   $used = "true";
 } else {
   $used = "false";
 }

 if (alterProduct($conn, $id, $name, $price, $description, $category_id, $used)) {
?>
   <p class="text-success">Product <?= $name; ?> price: <?= $price; ?>  was changed!</p>
<?php
 } else {
   $msg = mysqli_error($conn);
?>
   <p class="text-danger">Product <?= $name; ?>  was not changed: <?= $msg ?></p>
<?php
 }
?>
<?php include 'footer.php'; ?>
