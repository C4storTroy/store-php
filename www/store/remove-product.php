<?php
require_once('product-db.php');
require_once('user-logic.php');
$id = $_POST['id'];
removeProduct($conn, $id);
$_SESSION["success"] = "Product was removed";
header('Location: list-products.php');
die();
?>
<?php include ("footer.php");?>
