<?php
require("../req/connection.php"); 


$p_name		= $_POST['p_name']; 
$p_description	= $_POST['p_description']; 

$p_img		= $_FILES['p_img']["name"]; 
//$picture		= $_FILES['picture']["type"]; 
//$picture		= $_FILES['picture']["size"]; 

	$newName=$p_name."-".$p_img;
	
	if($newName!="" && $p_description!=""){
	move_uploaded_file($_FILES['p_img']['tmp_name'], '../media/uploads/'.$newName); 
		
		
 $sql = "INSERT INTO danyal_products SET product_name='$p_name', 
									 product_description='$p_description', 
									
									 
									 product_img='$newName' ";

//mysql_select_db('test_db');

 $result = $conn->query($sql);
	header("Location: add-products.php?status=yes");}
 
else
{
  die('Could not enter data');
}
 
	
 

mysqli_close($conn);
?>