<?php 
	$id =$_GET['id'];
	require '../connect.php';
	$sql = "delete from products where id='$id'";
	mysqli_query($connect,$sql);
	$error = mysqli_error($connect);
	mysqli_close($connect);