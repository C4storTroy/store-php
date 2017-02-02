<?php include('header.php');
include('user-logic.php');
?>
<?php if(isset($_GET['login']) && $_GET['login']==true) { ?>
<p class="alert-success">Login success</p>
<?php } ?>
<?php if(isset($_GET['login']) && $_GET['login']==false) { ?>
<p class="alert-danger">user or password is invalid</p>
<?php } ?>
<?php if(isset($_GET['securityFail']) && $_GET['securityFail']==true) { ?>
<p class="alert-danger">You have no access</p>
<?php } ?>


<h1>Welcome!</h1>

<?php if(userIsLogged()) {?>
  <p class="text-success">You are logged as <?=userLogged()?> </p>
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
<?php include('footer.php');?>
