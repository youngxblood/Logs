<?php
$pageTitle = "BootStrap";
$section   = "bootstrap";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title><?php echo $pageTitle; ?></title> <!-- VARIABLE $pageTitle DECLARED AT THE TOP OF EACH PAGE -->

<header><h1>LOGGY: <small>WEEKLY PERSONAL UPDATES</small></h1></header>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">LOGGY</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>


<div class="container">
    <div class="col-lg-12 col-md-6 bg-success">
        <p>
            TEXT HERE
        </p>
        <div class="col-lg-6 col-md-6 bg-primary">
        	<p>This is an inner div</p>
        </div>

    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-1 col-xs-4 bg-warning">
            1
        </div>
        <div class="col-lg-1 col-xs-4 bg-info">
            2
        </div>
        <div class="col-lg-1 col-xs-4 bg-danger">
            3
        </div>
        <div class="col-lg-1 col-xs-4 bg-success">
            4
        </div>
        <div class="col-lg-1 col-xs-4 bg-warning">
            1
        </div>
        <div class="col-lg-1 col-xs-4 bg-info">
            2
        </div>
        <div class="col-lg-1 col-xs-4 bg-danger">
            3
        </div>
        <div class="col-lg-1 col-xs-4 bg-success">
            4
        </div>
        <div class="col-lg-1 col-xs-4 bg-warning">
            1
        </div>
        <div class="col-lg-1 col-xs-4 bg-info">
            2
        </div>
        <div class="col-lg-1 col-xs-4 bg-danger">
            3
        </div>
        <div class="col-lg-1 col-xs-4 bg-success">
            4
        </div>
    </div>
</div>
<?php include "inc/footer.php";?>
