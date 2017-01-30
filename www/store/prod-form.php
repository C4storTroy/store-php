<?php include 'header.php'; ?>
  <h1>Product Form</h1>
  <form action="add-product.php">
  <table class="table">
    <tr>
      <td>Name:</td>
      <td><input class="form-control" type="text" name="name"><br/></td>
    </tr>
    <tr>
      <td>Price:</td>
      <td><input class="form-control" type="number" name="price"><br/></td>
    </tr>
    <td><input class="btn btn-primary" type="submit" name="Add"><br/></td>
    <tr>
    </tr>


  </table>
  </form>
<?php include 'footer.php'; ?>
