<?php require_once("header.php");
require_once('category-db.php');
require_once('product-db.php');

$id = $_GET['id'];
$product = searchProduct($conn, $id);
$categories = listCategory($conn);
$used = $product['used'] ? "checked='checked'" : "";
?>
  <h1>Product Alter</h1>
  <form action="alter-product.php" method="post">
    <input type="hidden" name="id" value="<?=$product['id']?>">
  <table class="table">
    <?php include("prod-form-base.php"); ?>
    <tr>
      <td><button class="btn btn-primary" type="submit" name="Add">Alter</td>
    </tr>
  </table>
  </form>
<?php include ("footer.php");?>
