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
   <h1 align="center">Edit Products</h1>
  <tr>
  <?php	
		$id = $_GET['id'];
		$sql="SELECT * FROM danyal_products where id='$id'";
		$result=$conn->query($sql);
		
		
			
		if ($result->num_rows > 0) 
		{
			$row = mysqli_fetch_array($result);
		} 
	
	?>
	
    <td height="463" align="center" valign="middle">
	<form name="myform" action="edit-process.php" method="post"  enctype="multipart/form-data">
	<input type="hidden" name="p_nimg" value="<?=$row["product_img"]?>" />
	<input type="hidden" name="id" value="<?=$row["id"]?>" />
	<table width="80%" border="0">
 
  </tr>
   <tr>
    <td height="34" colspan="2"><strong>Edit Product Record</strong></td>
  </tr>

  <tr>
    <td>Product Name</td>
    <td><input type="text" name="p_name" value="<?=$row["product_name"]?>" /></td>
  </tr>
   
   <tr>
    <td valign="top">Product Description</td>
    <td valign="top"><textarea cols="80" rows="15" name="p_description"><?=$row["product_description"]?></textarea></td>
  </tr>
 
  
   <tr>
   	 <td valign="top">Product Img</td>
    <td valign="top"><input type="file" value="" name="p_nimg"  /></td>
   </tr>
   
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Done Editing" /></td>
  </tr>
  <tr>
  <td valign="top">&nbsp;Existing Image:</td>
  <td align="left" valign="top"> <img width='270' height='auto' src="../media/uploads/<?=$row["product_img"]?>"   /></td>
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
















