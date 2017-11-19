<?php
require("../req/connection.php"); 
	
		

$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

		// To protect MySQL injection (more detail about MySQL injection)
		/*$encriptedPass=md5($mypassword);*/
		
		$sql="SELECT * FROM danyal_users WHERE username='$myusername' and password='$mypassword'";
		
		$result = $conn->query($sql);

		
		// Mysql_num_row is counting table row
		/*$count=$mysql_num_rows($result);*/
		
		// If result matched $myuseqrname and $mypassword, table row must be 1 row
		if($result->num_rows == 1)
		{
		// Register $myusername, $mypassword and redirect to file "login_success.php"
		session_start();
		
		$_SESSION['username']=$myusername;
		$_SESSION['password']=$mypassword;
		
		header("Location: dashboard.php");
		exit( );
		}
		else 
		{
		echo "Wrong Username or Password";
		}


?>