<?php include('user-logic.php');
include("header.php");
?>
<h1>Welcome!</h1>

<?php if(userIsLogged()) {?>
  <p class="text-success">You are logged as <?=userLogged()?> </p>
  <a href="logout.php">Logout</a>
<?php } else { ?>
<h2>Login</h2>
<form action="login.php" method="post">
<table class="table">
  <tr>
    <td>Email:</td>
    <td><input class="form-control" type="email" name="email"></td>
  </tr>
  <tr>
    <td>Password:</td>
    <td><input class="form-control" type="password" name="password"></td>
  </tr>
  <tr>
    <td><button class="btn btn-primary">Login</button></td>
  </tr>
</table>
</form>
<?php } ?>
<?php include("footer.php");?>
