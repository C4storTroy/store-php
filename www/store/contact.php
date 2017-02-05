<?php require_once 'header.php'; ?>
<form action="send-contact.php" method="post">
  <table class="table">
    <tr>
      <td>Name:</td>
      <td><input type="text" name="name" class="form-control"></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><input type="email" name="email" class="form-control"></td>
    </tr>
    <tr>
      <td>Message:</td>
      <td><textarea name="message" class="form-control"></textarea></td>
    </tr>
    <tr>
      <td><button class="btn btn-primary">Send</button></td>
    </tr>
  </table>
</form>
<?php require_once 'footer.php'; ?>
