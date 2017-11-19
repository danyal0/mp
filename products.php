<?php require("req/connection.php");
	
		
		$sql = "select * FROM danyal_products";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Master Paints - Products</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img class="logo-img" src="media/Uploads/mp-logo.png" alt="Master Paints"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
			<li class="nav-item active">
              <a class="nav-link" href="products.php">Products
			  <span class="sr-only">(current)</span>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="advice.php">Color Advice</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="services.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ymp.php">Why Master Paints?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Products</h1>
          <br>
        <hr>
		
		
		<div class="row">
  
	
	
		
	<?php	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
       
		 <?php echo "<div class='col-sm-4'><br><br><img width='270' height='auto' src='media/Uploads/".$row["product_img"]."'></div>"; ?>
  

		
			<?php
			
		echo "<div class='col-sm-8'><br><br><h3 align='left'>".$row["product_name"]."</h3><br>"; 
		
		
	
		echo "<p align='left'><br>".$row["product_description"]."</p><br><br></div>"; 
										  echo "<div class='col-md-12'><hr></div>";
		
    }
} else {
    echo "0 results";
}
		?>
			</div>
		
	
		<br><br><br><br><br>
		
		
		
		</div>
      </div>
	 </div>
	 
	 <!-- Footer Content -->
	 
	 <footer>
		<div class="container">
			<div class="row">
	<div class="col-sm-4"><h5><br>Contact Us</h5><div><div><a href="tel:042-111-333-465">111-333-465</a><br>
	<a href="tel: (042)6307253">Fax: (042)6307253</a><br>
	<a href="mailto:info@masterpaints.com">info@masterpaints.com</a><br>
	<a href="mailto:sales@masterpaints.com">sales@masterpaints.com</a></div></div>
		</div><div class="col-sm-4"><h5><br>Links</h5>
	<li><a href="products.php">Products</a></li>
	<li><a href="advice.php">Color Advice</a></li>
	<li><a href="services.php">Services</a></li>
	<li><a href="about.php">About</a></li>
	<li><a href="ymp.php">Why Master Paints?</a></li>
	<li><a href="contact.php">Contact</a></li>
	</div><div class="col-sm-4"><h5><br>TVC</h5>
	<iframe width="220" height="180" src="https://www.youtube.com/embed/rGCQMTB1V6o" frameborder="0" allowfullscreen=""></iframe>
		</div>
			</div>
		</div>
			<hr>
		<div class="container">
					<div class="row">
						<div class="col-sm-4" >
						<!-- Logo -->
						<a href="index.php"><img src="media/Uploads/mp-logo.png" alt="Master Paints"></a>	</div><br><br><br>
						<!-- //Logo -->
						<div class="col-sm-4" ></div>
                           <div class="col-sm-4"  align="right"><p>© 2017 Powered by <a href="http://danyaljaved.tk" target="_blank">www.danyaljaved.tk</a></p></div>
						
							
	
						
					</div>
					
				</div>
			
		</footer>
	 
	 
	 
	 
	 

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
<?$conn->close();?>