<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	Đây là khu vực quản lí Loại sản phẩm 
	<?php 
		require '../menu.php';
	 	require '../connect.php';
	 	$sql = "select * from category";
	 	$result = mysqli_query($connect,$sql);
	 	
	  ?>
	<a href="formInsert.php">
		Thêm
	</a>
	  <table border="1" color="#000" width="100%">
	  	<tr>
	  		<th>Mã</th>
	  		<th>Tên</th>
	  		<th>Thêm</th>
	  		<th>Xóa</th>
	  	</tr>
	  	<?php foreach ($result as $each): ?>

	  		<tr>
	  			<td><?php echo $each['id'] ?></td>
	  			<td><?php echo $each['name'] ?></td>
	  			<td>
	  				<a href="formUpdate.php?id=<?php echo $each['id'] ?>">Sửa</a>
	  			</td>
	  			<td>
	  				<a href="formDelete.php?id=<?php echo $each['id'] ?>">Xóa</a>
	  			</td>
	  		</tr>
	  	<?php endforeach ?>
	  </table>

</body>
</html>