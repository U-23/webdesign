<?php	
	require_once('config.php');
	
	$con = mysqli_connect(HOST,USERNAME,PASSWORD);
	mysqli_select_db($con,'info');
	mysqli_query($con,'set names utf8');
?>