<?php require("../req/connection.php"); ?>






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
	  <?php include("header.php"); ?>
  <br><br>
  <table width="80%" border="1" align="center">
   <h1 align="center">Add Products</h1>
  <tr>
    <td height="463" align="center" valign="middle">
	<form name="myform" action="add-process.php" method="post" enctype="multipart/form-data" >
	<table width="80%" border="0">
  <tr>
    <td height="33" colspan="2" style="font-weight:bold" ><?php
									if($_GET)
									{
									if($_GET['status']=='yes') echo "<span style='color:green'>Record Entered Successfully!</span>"; 
									else "<span style='color:red'>Sorry There is some issue, Try Again</span>"; 
									}?></td>
  </tr>
   <tr>
    <td height="34" colspan="2"><strong>Add Product Details:</strong></td>
  </tr>
  <tr>
    <td>Product Name</td>
    <td><input type="text" name="p_name" value="" /></td>
  </tr>
   <tr>
    <td valign="top">Product Description</td>
    <td valign="top"><textarea cols="80" rows="15" name="p_description"></textarea></td>
  </tr>
  
    
  </tr> 
  <tr>
   	 <td valign="top">Picture</td>
    <td valign="top"><input type="file" value="" name="p_img"  /></td>
   </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Done Adding" class="btn btn-primary" /><br><br></td>
	  
  </tr>
</table>
</form>
	
	</td>
  </tr>
</table>


	<br>
	
	
	<!-- Footer Content -->
	 
	 <footer>
		<div class="container">
			<div class="row">
	<div class="col-sm-4"><br><br><br><br><br><br><br><br><br><br>
	
			</div>
		</div>
			<hr>
		<div class="container">
					<div class="row">
						<div class="col-sm-4" >
						<!-- Logo -->
						<a href="index.php"><img src="../media/Uploads/mp-logo.png" alt="Master Paints"></a>	</div><br><br><br>
						<!-- //Logo -->
						<div class="col-sm-4" ></div>
                           <div class="col-sm-4"  align="right"><p>© 2017 Powered by <a href="http://danyaljaved.tk" target="_blank">www.danyaljaved.tk</a></p></div>
						
							
	
						
					</div>
					
				</div>
			
		</footer>
	 
	 
	 
	 
	 

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
