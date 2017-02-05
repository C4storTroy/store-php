<?php require_once('user-logic.php');
doLogout();
$_SESSION["success"] = "Logout success";
header("Location: index.php");
die();
?>
