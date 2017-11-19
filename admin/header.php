<?php session_start(); 
//echo $_SESSION['username'];


if($_SESSION['username']=="")
{
session_destroy();
header("location:index.php");
}
?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Master Paints - Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>

	
	<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img class="logo-img" src="../media/Uploads/mp-logo.png" alt="Master Paints"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">Home
                
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="add-products.php">Add Products</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="view-products.php">View Products</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="logout.php">&nbsp;</a>
            </li>
			  <li class="nav-item">
				  <font color="white">Welcome <?=$_SESSION['username']?> | </font><a href="logout.php">Logout</a>
				  </li>
          </ul>
        </div>
      </div>
    </nav>
	
	
	 
	 
	 
	 
	 

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>