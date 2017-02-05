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
