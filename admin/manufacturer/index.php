<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	Đây là khu vực quản lí Hãng sản xuất 
	<a href="formInsert.php">
		Thêm
	</a>
	<?php 
		require '../menu.php';
	 ?>
	 <?php 
	 	require '../connect.php';
	 	require '../connect.php';
		$sql="select manufacturer.*, category.name as catogory_name from manufacturer inner join category on manufacturer.id_category = category.id WHERE category.id in (select id from category where 1 )";
		$result = mysqli_query($connect,$sql);
		$erorr= mysqli_error($connect);
		echo($erorr);
	  ?>

	  <table border="1" color="#000" width="100%">
	  	<tr>
	  		<th>Mã</th>
	  		<th>Tên</th>
	  		<th>Thể Loại</th>
	  		<th>Sửa</th>
	  		<th>Xóa</th>
	  	</tr>
	  	<?php foreach ($result as $each): ?>
	  		<tr>
	  			<td><?php echo $each['id'] ?></td>
	  			<td><?php echo $each['name'] ?></td>
	  			<td><?php echo $each['catogory_name'] ?></td>
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