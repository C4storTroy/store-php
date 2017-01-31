<?php
include('connection.php');
include('product-db.php');

$id = $_POST['id'];
removeProduct($conn, $id);
header('Location: list-products.php?removed=true');
die();
?>
<?php include ('footer.php');?>
