<?php 

	$name=  addslashes($_POST['name']);
	$id_category = $_POST['id_category'];
	$id_manufacturer =$_POST['id_manufacturer'];
	$image= $_POST['image'];
	$price=  addslashes($_POST['price']);
	$old_price = $_POST['old_price'];
	$quantity = $_POST['quantity'];
	$description=  addslashes($_POST['description']);
	$config = addslashes($_POST['config']);
	require '../connect.php';
	$sql = "insert into products(id_manufacturer,name,image,price,old_price,quantity,description,config) values('$id_manufacturer','$name','$image','$price','$old_price','$quantity','$description','$config')";
	echo ($sql);
	mysqli_query($connect,$sql);
	$error = mysqli_error($connect);
	 echo($error);
	mysqli_close($connect);
?>
