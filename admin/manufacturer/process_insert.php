<?php 

	if(empty($_POST['name']))
	{
		header('location:formInsert.php?error=Phải điền đầy đủ thông tin');
	}
	$name = addslashes($_POST['name']);
	$id_category = $_POST['id_category'];
	require '../connect.php';
	$sql = "insert into manufacturer(id_category, name) values('$id_category','$name')";	
	mysqli_query($connect,$sql);
	$loi= mysqli_error($connect);
	mysqli_close($connect);
	header('location:index.php?success=Thêm thành công');

 ?>