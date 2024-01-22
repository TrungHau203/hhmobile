<?php 

	if(empty($_POST['name'])||empty($_POST['address'])||empty($_POST['phone'])||empty($_POST['photo']))
	{
		header('location:formInsert.php?error=Phải điền đầy đủ thông tin');
	}
	$name = addslashes($_POST['name']);
	$address = addslashes($_POST['address']);
	$phone = addslashes($_POST['phone']);
	$photo = addslashes($_POST['photo']);

	require '../connect.php';
	$sql = "insert into category(name) value('$name')";	
	mysqli_query($connect,$sql);
	// $loi= mysqli_error($connect);
	// echo $loi;
	mysqli_close($connect);
	header('location:index.php?success=Thêm thành công');

 ?>