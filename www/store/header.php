<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("helper.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>My Store</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/store.css" rel="stylesheet">
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">My Store</a>
        </div>
        <div>
          <ul class="nav navbar-nav">
            <li><a href="prod-form.php">Add products</a></li>
            <li><a href="list-products.php">Products</a></li>
            <li><a href="contact.php">Contact us </a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="principal">
        <?php showAlert("success"); ?>
        <?php showAlert("danger"); ?>
