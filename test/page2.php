<?php
//SESSION METHOD



SESSION_START();
echo "<b>SESSION METHOD:</b><br>";
echo "SNAME: ".$_SESSION['sname']."<br><br><br>";
//GET METHOD BY LINK
if($_GET){
$lid=$_GET['lid'];
$lname=$_GET['lname'];
$lemail=$_GET['lemail'];
$lage=$_GET['lage'];
$lgender=$_GET['lgender'];

echo "<b>GET METHOD:<b><br>";

echo $lid."<br>";

echo $lname."<br>";

echo $lemail."<br>";

echo $lage."<br>";

echo $lgender."<br>";}


if($_POST){
	$pid=$_POST['pid'];
	$pname=$_POST['pname'];
	$pemail=$_POST['pemail'];
	$p_age=$_POST['p_age'];
	$pgender=$_POST['pgender'];
	echo "<b>POST METHOD:</b><br>";
	echo "ID: ".$pid."<br>";

echo "NAME: ".$pname."<br>";

echo "EMAIL: ".$pemail."<br>";

echo "AGE: ".$p_age."<br>";

echo "GENDER: ".$pgender."<br><br><br>";

	
	$my_array = array(
	'pid' => $pid,
	'pname' => $pname, 
	'pemail' => $pemail, 
	'p_age' => $p_age, 	
	'pgender' => $pgender);
	echo "<b>ASSOCIATIVE ARRAY METHOD: </b><br>";
foreach($my_array as $key => $info){
	echo "Key=" . $key . ", Value=" . $info . "<br>";
}


}






?>