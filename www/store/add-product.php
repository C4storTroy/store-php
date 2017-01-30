<?php include 'header.php'; ?>

<?php
 $name = $_GET['name'];
 $price = $_GET['price'];

 $conn = mysqli_connect('database', 'root', 'store', 'store');

 $query = "insert into products (name, price) values ('{$name}', {$price});";

echo $query;
 if (mysqli_query($conn, $query)) { ?>
   <p class="alert alert-success">Adding Product <?= $name; ?> price: <?= $price; ?>  was success!</p>
 <?php } else { ?>
   <p class="alert alert-danger">Product <?= $name; ?>  was not added!</p>
 <?php
 }

?>

<?php include 'footer.php'; ?>
