<?php	
	//require_once 'loginservice.class.php';
	require_once '../article/connect.php';
	
	$id=$_POST['id'];
	
	$password=$_POST['password'];
	
	if(!(isset($password)&&isset($id)&&(!empty($password))&&(!empty($id)))){
		echo"<script>alert('很抱歉，没有你的录取信息');window.location.href='admission.show.php';</script>";
	}else{
	//print_r($id);
	//print_r($password);
	
	$sql="select * from candidate where id= '$id'";
	$res = mysqli_query($con,$sql);
	
	$row = mysqli_fetch_assoc($res);
	
	/*
	if(!(isset($password)&&isset($id)&&(!empty($password))&&(!empty($id)))){
		echo"<script>alert('很抱歉，没有你的录取信息');window.location.href='admission.show.php';</script>";	
	}
	
	if(empty($password)&& empty($id)){
		echo"<script>alert('很抱歉，没有你的录取信息');window.location.href='admission.show.php';</script>";
	}*/
		
	if($password==$row['password']&& $id==$row['id']){
		header("Location:admission.show.done.php?id=$id");
		exit();
	}else{
	//echo "查询失败";
	echo "<script>alert('很抱歉，没有你的录取信息');window.location.href='admission.show.php';</script>";
	
	}
}	
	
	//$loginservice=new loginservice();
	//$name=$loginservice->check($id,$password);
	
	
	
	/*
	if($name!=""){
	header("Location:main.php?id=$id"); 
	exit();
	}
	*/
?>