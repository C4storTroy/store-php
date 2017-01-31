<?php include('header.php');
include('connection.php');
include('category-db.php');
include('product-db.php');

$id = $_GET['id'];
$product = searchProduct($conn, $id);
$categories = listCategory($conn);
$used = $product['used'] ? "checked='checked'" : "";
?>
  <h1>Product Alter</h1>
  <form action="alter-product.php" method="post">
    <input type="hidden" name="id" value="<?=$product['id']?>">
  <table class="table">
    <tr>
      <td>Name:</td>
      <td><input class="form-control" type="text" name="name"
        value="<?=$product['name']?>"></td>
    </tr>
    <tr>
      <td>Price:</td>
      <td><input class="form-control" type="number" name="price"
        value="<?=$product['price']?>"></td>
    </tr>
    <tr>
      <td>Description:</td>
      <td><textarea name="description" class="form-control"
        ><?=$product['description']?></textarea></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="checkbox" name="used" <?=$used?>
        value="true">Used</td>
    </tr>
    <tr>
      <td>Category:</td>
      <td>
        <select name="category_id" class="form-control">
        <?php foreach ($categories as $category) :
          $thisIsCategory = $product['category_id'] == $category['id'];
          $selection = $thisIsCategory ? "selected='selected'" : "";
          ?>
          <option value="<?=$category['id']?>" <?=$selection?>>
          <?=$category['name']?>
        </option>
        <?php endforeach ?>
      </select>
      </td>
    </tr>
    <tr>
      <td><button class="btn btn-primary" type="submit" name="Add">Alter</td>
    </tr>
  </table>
  </form>
<?php include ('footer.php');?>
