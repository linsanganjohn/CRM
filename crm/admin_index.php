<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="desig.css">

    <style>
      .demo-long {
        margin-top: 100px;
        margin-bottom: 200px;
      }
    </style>
  </head>

  <body>

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
       
        </div>   
        <div class="navbar-collapse collapse">
	
          <ul class="nav navbar-nav">
<li>		  <a class="navbar-brand" href="#"><img src="demo/gt.png" alt="Logo" width= "200px" height= "30px"></a></li>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
			 <li><a href="product1.php">Products</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Client <b class="caret"></b></a>
              <ul class="dropdown-menu">
			          <li class="dropdown-header">Client</li>
                <li><a href="leads_form.php">LEADS</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Client</li>
                <li><a href="#">PROSPECT</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="register.php">Add User</a></li>
            <li><a href="login.php?logout='1'" style="color: red;">Log Out</a></li>
          </ul>
        </div>
      </div>
    </div>


   

   

   

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <script src="../src/jquery.bootstrap-autohidingnavbar.js"></script>

    <script>
      $("div.navbar-fixed-top").autoHidingNavbar();
    </script>