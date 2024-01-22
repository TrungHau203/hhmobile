<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		require '../menu.php';
		require '../connect.php';
		$sql="select * from category";
		$category_result = mysqli_query($connect,$sql);
		$sql="select * from manufacturer";
		$manufacturer_result = mysqli_query($connect,$sql);

	 ?>	
	 <form method="post" action="processInsert.php" enctype="multipart/form-data">
	 	Tên
	 	<input type="text" name="name" id="">
	 	<br>
	 	Loại
	 	<select name="id_category">
	 		<?php foreach ($category_result as $each): ?>
	 			<option value="<?php echo $each['id'] ?>">
	 				<?php echo $each['name']; ?>
	 			</option>
	 		<?php endforeach ?>
	 	</select>
	 	<br>

	 	Nhà sản xuất
	 	<select name="id_manufacturer">
	 		<?php foreach ($manufacturer_result as $each): ?>
	 			<option value="<?php echo $each['id'] ?>">
	 				<?php echo $each['name']; ?>
	 			</option>
	 		<?php endforeach ?>
	 	</select>
	 	<br>
	 	<br>
	 	Ảnh
	 	<input type="text" name="image">
	 	<br>
	 	Giá Hiện tại
	 	<input type="text" name="price">
	 	<br>
	 	Giá Cũ
	 	<input type="text" name="old_price">
	 	<br>
	 	Số lượng
	 	<input type="text" name="quantity">
	 	<br>
	 	Mô tả
	 	<textarea name="description"></textarea>
	 	<br>
	 	Cấu hình
	 	<textarea name="config"></textarea>
	 	<br>
	 	<button>Thêm</button>

	 </form>
</body>
</html>