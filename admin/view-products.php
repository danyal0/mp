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
<h1 align="center">View Products</h1>

    <td height="463" align="center" valign="top">
			<table> 
			<tr> 
			<td height="33" colspan="2" style="font-weight:bold"  ><?php
											if($_GET)
											{
												if($_GET['status']=='updated') echo "<span style='color:green'>Record Successfully Updated!</span>";
												elseif($_GET['status']=='deleted') echo "<span style='color:green'>Record Successfully Deleted!</span>"; 
												else "<span style='color:red'>Sorry There is some issue, Try Again</span>"; 
											}?></td>
			</tr>
			</table>
			
			<table width="100%" border="0">
			
			  <tr>
				<td style="border-bottom:1px solid" width="10%"><strong>Id</strong></td>
				<td style="border-bottom:1px solid" width="10%"><strong>Product Img</strong></td>
				  <td style="border-bottom:1px solid" width="10%"><strong>Product Name</strong></td>
				<td style="border-bottom:1px solid" width="40%"><strong>Page Content</strong></td>
				<td style="border-bottom:1px solid" width="10%"><strong>Operations</strong></td>
			  </tr>
			  

	<?php
	
		$sql="SELECT * FROM danyal_products order by id";
		$result = $conn->query($sql);
				
		
	
		if ($result->num_rows > 0) 
		{
			/*while($row = mysqli_fetch_array($result))*/
				while($row = $result->fetch_assoc())
			{
			?>
			<tr style="border-bottom:1px solid">
			<td style="border-bottom:1px solid"><?php echo $row["id"];?></td>
			<td style="border-bottom:1px solid"><img src="../media/uploads/<?=$row["product_img"]?>" height="50" width="50"  /></td>
			<td style="border-bottom:1px solid"><?php echo $row["product_name"];?></td>
			<td style="border-bottom:1px solid"><?php echo $row["product_description"];?></td>
			
			<td style="border-bottom:1px solid">
			<a href="edit-products.php?id=<?php echo $row["id"];?>">Edit Product</a> | 
			<a href="delete-products.php?id=<?php echo $row["id"];?>">Delete Product</a></td>
		  </tr>
			<?php
			}
		} 
	?>
	
			
			</table>
	</td>
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






