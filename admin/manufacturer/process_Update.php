<?php 
	if(empty($_POST['id']))
	{
		header('location:index.php?error=Phải nhập id');
		exit;
	}
	$id =$_POST['id'];
	if(empty($_POST['name'])||empty($_POST['id_category']))
	{
		header("location:formUpdate.php?id=$id&error=Phải nhập đầy đủ thông tin");
		exit;
	}
	$name = addslashes($_POST['name']);
	$id_category = $_POST['id_category'];
	require '../connect.php';
	$sql = "update manufacturer set
	id_category ='$id_category',  name= '$name' where id ='$id'";
	mysqli_query($connect,$sql);
	$erorr= mysqli_error($connect);
	echo($erorr);
	mysqli_close($connect);
	if(empty($erorr))
	{
		header('location:index.php?success=Sửa thành công');
		exit;
	}
	else{
		header("location:formUpdate.php?id=$id&error=Lỗi truy vấn");
	}
	

 ?>