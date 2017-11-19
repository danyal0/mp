<?php

SESSION_START();


$_SESSION['sname'] = "JOHN";
?>
<!DOCTYPE html>
<html lang="en">

  <head>
  <link href="inc/style.css" rel="stylesheet" type="text/css">
  </head>
  <body><script type="text/javascript" src="inc/action.js"></script>

			
			<a href="page2.php?lid=1&lname=ali&lemail=ali@example.com&lage=22&lgender=male">Go to next Page</a>
			<form action="page2.php" value="submit" method="post">
			ID: <input type="text" name="pid" ><br>
			NAME: <input type="text" name="pname" ><br>
			EMAIL: <input type="text" name="pemail" ><br>
			AGE: <input type="text" name="p_age" ><br>
			GENDER: <input type="text" name="pgender" ><br>
			<input type="submit"></input>
	  		<p id="demo" onClick="myFunction()">Click me.</p>
	 		
	  
			</form>
  
  <input type="submit" onClick="itmyFunction()"></input>
  
  
  
  </body>