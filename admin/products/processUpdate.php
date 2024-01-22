<?php 

	$id= $_POST['id'];
	$name=  addslashes($_POST['name']);
	$new_image= $_POST['new_image'];
	$id_manufacturer= $_POST['id_manufacturer'];
	// print_r($new_image); //hiển thị thông số của $new_photo
	if(!empty($new_image)){
		$file_name = $new_image;
	}
	else
	{
		$file_name= $_POST['old_image'];
	}
	$price= $_POST['price'];
	$old_price= $_POST['old_price'];
	$description=  addslashes($_POST['description']);
	$config = addslashes($_POST['config']);
	$current_price = $_POST['current_price'];
	require '../connect.php';
	$sql = "update products
	set 
	id_manufacturer= '$id_manufacturer',
	name ='$name',
	image ='$file_name',
	price= '$price',
	old_price= '$old_price',
	description = '$description',
	config = '$config',
	current_price = '$current_price'
	where 
	id = '$id'
	 ";
	echo ($sql);
	mysqli_query($connect,$sql);
	$error = mysqli_error($connect);
	 echo($error);
	mysqli_close($connect);
