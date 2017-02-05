<?php
include('connection.php');
include('product-db.php');
include('user-logic.php');
$id = $_POST['id'];
removeProduct($conn, $id);
$_SESSION["success"] = "Product was removed";
header('Location: list-products.php');
die();
?>
<?php include ("footer.php");?>
