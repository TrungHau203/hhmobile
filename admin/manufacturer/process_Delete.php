<?php 

	if(empty($_POST['id']))
	{
		header('location:index.php?error=Phải nhập id');
		exit;
	}
	$id =$_POST['id'];
	if(empty($_POST['name'])||empty($_POST['id_catogory']))
	{
		header("location:formUpdate.php?id=$id&error=Phải nhập đầy đủ thông tin");
		exit;
	}
	require '../connect.php';
	$sql = "delete from manufacturer where id = '$id' ";
	mysqli_query($connect,$sql);
	$erorr= mysqli_error($connect);
	echo($erorr);
	mysqli_close($connect);
	if(empty($erorr))
	{
		header('location:index.php?success=Xóa thành công');
		exit;
	}
		

 ?>