<?php
require("../req/connection.php"); 

$id		= $_POST['id']; 
$p_img	= $_POST['p_img']; 


$p_name		= $_POST['p_name']; 
$p_description	= $_POST['p_description']; 

$p_nimg		= $_FILES['p_nimg']["name"]; 
	
	if($p_nimg!="" && $p_name!="" && $p_description!="")
	{
		move_uploaded_file($_FILES['p_nimg']['tmp_name'], '../media/uploads/'.$p_nimg); 
	
	

$sql = "UPDATE danyal_products SET product_name='$p_name', 
							 
									 product_description='$p_description',
									
									 product_img='$p_nimg'
									 WHERE id='$id' ";
		$result = $conn->query($sql);
		header("Location: view-pages.php?status=updated");
	}
//mysql_select_db('test_db');


 
else
{
  die('Could not enter data');
}
 
	
 

mysqli_close($conn);
?>