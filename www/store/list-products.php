<?php
require_once("header.php");
require_once('product-db.php');
require_once("user-logic.php");
verifyUser();
?>
<table class="table table-striped table-bordered">
<?php
    $products = listProducts($conn);
    foreach ($products as $product) :
?>
      <tr>
        <td><?=$product['name']?></td>
        <td><?=$product['price']?></td>
        <td><?= substr($product['description'], 0, 20)?></td>
        <td><?=$product['category_name']?></td>
        <td><a href="product-alter-form.php?id=<?=$product['id']?>"
          class="btn btn-primary">change</a></td>
        <td>
          <form action="remove-product.php" method="post">
            <input type="hidden" name="id" value="<?=$product['id']?>">
            <button class="btn btn-danger">remove</a>
          </form>
        </td>
      </tr>
<?php
    endforeach
?>
</table>
<?php include ("footer.php");?>
