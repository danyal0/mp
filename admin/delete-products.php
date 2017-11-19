<?php
require("../req/connection.php"); 

$id			= $_GET['id']; 

$viewsql="SELECT product_img FROM danyal_products where id='$id'";
$viewresult=mysqli_query($viewsql);
$viewrow = mysqli_fetch_array($viewresult);

$p_img= $viewrow["p_img"];

		
$sql = "DELETE from danyal_products WHERE id='$id' ";
 
$result = $conn->query( $sql);
 
if($result)
{
  	unlink('../media/uploads/'.$p_img);
	echo "yes";
	header("Location: view-products.php?status=deleted");
}
else
{
die('Could not enter data');
}
 
	
 

mysqli_close($conn);
?>