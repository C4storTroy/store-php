<?php require_once("header.php");
require_once('category-db.php');
require_once('user-logic.php');
verifyUser();
$product = array("name"=>"", "description"=>"","price"=>"",
"category_id"=>"2");
$used="";
$categories = listCategory($conn);
?>
  <h1>Product Form</h1>
  <form action="add-product.php" method="post">
  <table class="table">
    <?php include("prod-form-base.php"); ?>
    <tr>
      <td><button class="btn btn-primary" type="submit" name="Add">Add</td>
    </tr>
  </table>
  </form>
<?php include ("footer.php");?>
