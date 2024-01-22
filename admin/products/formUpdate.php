<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		$id = $_GET['id'];
		require '../menu.php';
		require '../connect.php';
		$sql="select * from products where id ='$id'";
		$result = mysqli_query($connect,$sql);
		$each = mysqli_fetch_array($result);
		$sql="select * from manufacturer";
		$manufacturer_result = mysqli_query($connect,$sql);
		
		
	 ?>	
	 <form method="post" action="processUpdate.php" enctype="multipart/form-data">
	 	<input type="hidden" name="id" value="<?php echo $each['id']?>">
	 	Tên
	 	<input type="text" name="name" value="<?php echo $each['name']?>">
	 	<br>
	 	Ảnh cũ
	 	<img width="200"  src="<?php echo $each['image']?>" alt="ảnh">
	 	<input type="hidden" name="old_image" value="<?php echo $each['image']?>">
	 	<br>
	 	Ảnh cần sửa(nếu muốn đổi)
	 	<input type="text" name="new_image">
	 	<br>
	 	Giá hiện tại
	 	<input type="text" name="price" value="<?php echo $each['price']?>">
	 	<br>
	 	Giá cũ
	 	<input type="text" name="old_price" value="<?php echo $each['old_price']?>">
	 	<br>
	 	Mô tả
	 	<textarea name="description"><?php echo $each['description']?></textarea>
	 	<br>
	 	Nhà sản xuất
	 	<select name="id_manufacturer">
	 		<?php foreach ($manufacturer_result as $manufacturer): ?>
	 			<option value="<?php echo $manufacturer['id'] ?>" 
	 				<?php if($each['id_manufacturer'] == $manufacturer['id']) { ?>
	 					selected
	 				<?php } ?>
	 				>
	 				<?php echo $manufacturer['name']; ?>
	 			</option>
	 		<?php endforeach ?>
	 	</select>
	 	<br>
	 	Cấu hình
	 	<textarea name="config"><?php echo $each['config']?></textarea>
	 	<br>
	 	Giá hiện tại(số)
	 	<input type="text" name="current_price" value="<?php echo $each['current_price']?>">
	 	<br>
	 	<button>Sửa</button>

	 </form>
</body>
</html>